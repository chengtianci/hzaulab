<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\JsModel;
use Home\Model\PzModel;
use Home\Model\YyModel;
use Home\Model\LogModel;


class FieldController extends Controller {
  
	public function field() {
		$mode = new JsModel();
        $this -> assign("data", $mode -> getOneNotice(3));
        $this -> display();
	}

  
    /**
     * 方法功能：显示页面
     */
	public function field_show1() {
		$mode = new JsModel();
        $this -> assign("data", $mode -> getOneNotice(7));
        $this -> display();
	}

    /**
     * 方法功能：显示页面
     */
	public function field_show2() {
		$mode = new PzModel();
		$logModel = new LogModel();

		$nowTime = strtotime(date("Y-m-d"));
		$uname = "admin";//假定用户为admin
		$pzinfo = $mode -> getAllPz();//放置pz信息，在c层处理，改变status为0123之类的，就不用js实现了

		//for循环，遍历所有的pz，并先根据状态查询
		// var_dump($pzinfo);
		// var_dump("\n");

		for ($i=0; $i < count($pzinfo); $i++) { 
			if ($pzinfo[$i][status]==0) {//空置开放
				$logs = $logModel -> selectALL($pzinfo[$i][id]);
				for ($k=0; $k < count($logs); $k++) { 
					
					if ($logs[$k][username] == $uname) {
						//比较log记录中的同一人 同一设备的时间来确定状态
						$ks = strtotime($logs[$k][kssj]);
						$js = strtotime($logs[$k][jssj]);
						if ($nowTime >= $ks && $nowTime <= $js) {
							$pzinfo[$i][status] = 2;
						}
					}else {
						//比较log记录中的不同人 同一设备的时间来确定状态
						$ks = strtotime($logs[$k][kssj]);
						$js = strtotime($logs[$k][jssj]);
						if ($nowTime >= $ks && $nowTime <= $js) {
							$pzinfo[$i][status] = 3;
						}
					}
				}			
			}
		}
		$this -> assign("data", $pzinfo);
		$this -> display();
	}

	// 导出相关的word文档

	public function doWord() {
		# code...
		# TODO 这个地方要设计表格的央视
		$word = new \Think\Word();//示例化对象
		$word -> start();//定义要保存数据的开始

		$data = json_decode($_POST['hahaha']);
		// print $_POST['hahaha'];
		print "<table style='width:100%;' border = '1' cellspacing='0' cellpadding='20' >";
		for ($i = 0; $i < count($data); $i=$i+2) {
			print "<tr><td style='width: 25%'>".$data[$i][0]."</td><td style='width: 30%'>".$data[$i][1]."</td>";
			print "<td style='width: 25%'>".$data[$i+1][0]."</td><td style='width: 30%'>".$data[$i+1][1]."</td></tr>";
		}
		// border:solid #black; border-width:0px 1px 1px 0px;
		print "</table>";
		$word -> save('word_c1.doc');//定义要保存数据的结束，同时把数据保存到word中
	}

	// 进行预约的登记，预约表
	public function doApplication() {
		# code...
		// 插入一条记录
		// `id`, `yqid`, `uid`, `ks`, `js`, `status`, `ypwz`, `other`, `ssname`, `sslocation‘
		$info['yqid'] = $_POST['ssbh'];
		$info['ssname'] = $_POST['ssmc'];
		$info['sslocation'] = $_POST['sswz'];
		$info['uid'] = "admin";
		// $info['uid'] = $_SESSION['userid'];
		$info['ks'] = $_POST['kssj'];
		$info['js'] = $_POST['zzsj'];
		$info['status'] = 0; //默认申请处于等待申请的阶段
		$info['ypwz'] = $_POST['ypwz'];
		$info['other'] = $_POST['bz'];
		$info['date'] = date("Y-m-d");
		$mode = new YyModel();
		if ($mode -> insertApplication($info)) {
			alertMessage("已经申请，等待管理员批准");
		} else {
			alertMessage("请检查网络后重试！");
		}
	}
}

?>