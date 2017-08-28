<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\JsModel;
use Admin\Model\YyModel;
use Admin\Model\LogModel;


class FieldController extends Controller {
    public function index(){
        $this->display();
    }
    // 大田设施页面发布方法
   	public function fieldluanch() {
   		$mode = new JsModel();
    	$this -> assign("data", $mode -> getOneIntro(3));
   		$this -> display();
   	}

   	public function field($value='')
   	{
   		# code...
   		$mode = new JsModel();
    	$this -> assign("data", $mode -> getOneIntro(7));
   		$this -> display();
   	}
    public function OpenPot()
    {
      # code...
      $mode = new YyModel();
      $this -> assign("data", $mode -> selectAll());
      $this -> assign("checked", $mode -> selectAllHistory());
      $this -> display();
    }
    // 管理员进行批准操作
    public function doAgree() {
      # code...
      $mode = new YyModel();//预约
      $logmode = new LogModel();//记录
      $where = getValue();
      // 首先从数据库中获取要批准的信息，包括设备编号以及预约的开始时间和结束时间
      $oneApplication = $mode -> getOneApplication($where);
      $startDateApplication = $oneApplication['ks'];
      $endDateApplication = $oneApplication['js'];
      $startShijianchuo = strtotime($startDateApplication);
      $endShiJianchuo = strtotime($endDateApplication);

      $allEquipment = $oneApplication['yqid'];

      // 获取该预约人所选择的仪器设备
      $theEquipment = explode(',', $allEquipment);

      for ($i = 0; $i < count($theEquipment); $i++) {
        $data = $mode -> getOneEquipment($theEquipment[$i]);//数据库中的仪器设备的资料
        // 转化为时间戳，便于比较
        $theEnd = strtotime($data['endtime']);
        $theStart = strtotime($data['starttime']);

        // 判断当前是否已经有人预约
        if (($endShiJianchuo >= $theStart && $endShiJianchuo <= $theEnd) || ($startShijianchuo >= $theStart && $startShijianchuo <= $theEnd)) {
          // 如果有人预约
          alertMessage("与已经批准的时间有冲突，请拒绝！");
        } else {
          // 如果无人预约
          // 在盆栽预约表中添加一条预约记录
          // $mode -> setTime($startDateApplication, $endDateApplication, $theEquipment[$i]);//此方法已经无用，pz表中无时间始终
          //在log记录表中加入单个的设施设备的预约信息

          $logmode -> insertOne("admin",$startDateApplication, $endDateApplication, $theEquipment[$i]);
        }
      }
      if ($mode -> doApplication($where)) {
        alertMessage("批准成功！");
      } else {
        alertMessage("请检查网络后重试！");
      }
    }
    //拒绝操作
    public function doReject() {
     $mode = new YyModel();
      // $mode -> id = getValue();
      if ($_POST['gallery_title'] == "") {
        alertMessage("拒绝理由不能为空");
      }
      if ($mode -> RejectApplication(getValue(), $_POST['gallery_title'])) {
        alertMessage("已经拒绝该申请");
      } else {
        alertMessage("请检查网络后重试！");
      }
    }

    // 导出表格的操作
    public function excelExport() {
      $model = new YyModel();
      $subject = "值班安排表";
      $title = array('预约编号', '设备编号', '预约人', '预约开始时间', '预约结束时间', '是否允许预约', '样品物种', '备注', '设施名称', '设施位置', '预约生成时间', '申请拒绝理由');
      exportExcel($model -> selectAllHistory(),$title,$subject);
    }
}
