<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\JsModel;
use Admin\Model\YyModel;

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
    public function OpenPot($value='')
    {
      # code...
      $mode = new YyModel();
      $this -> assign("data", $mode -> selectAll());
      $this -> assign("checked", $mode -> selectAllHistory());
      $this -> display();
    }
    // 管理员进行批准操作
    public function doAgree($value='')
    {
      # code...
      $mode = new YyModel();
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
          $mode -> setTime($startDateApplication, $endDateApplication, $theEquipment[$i]);
          // 在盆栽预约表中添加一条预约记录
          
        }
      }
      if ($mode -> doApplication($where)) {
        alertMessage("批准成功！");
      } else {
        alertMessage("请检查网络后重试！");
      }
    }
}