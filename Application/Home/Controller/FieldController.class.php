<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\JsModel;
use Home\Model\PzModel;
use Home\Model\YyModel;


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
		$this -> assign("data", $mode -> getAllPz());
		$this -> display();
	}

	// 导出相关的word文档
	public function doWord($value='')
	{
		# code...
		# TODO 这个地方要设计表格的央视
		$word = new \Think\Word();//示例化对象
		$word -> start();//定义要保存数据的开始

		$data = json_decode($_POST['hahaha']);
		print "<table>";
		for ($i = 0; $i < count($data); $i++) {
			print "<tr><td>".$data[$i][0]."</td><td>".$data[$i][1]."</td></tr>";
		}
		print "</table>";
		$word -> save('word_c1.doc');//定义要保存数据的结束，同时把数据保存到word中
	}

	// 进行预约的登记，预约表
	public function doApplication($value='')
	{
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