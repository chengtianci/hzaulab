<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\JsModel;
class EquipmentController extends Controller {
 	public function equipment($value='') {
        $mode = new JsModel();
        $this -> assign("data", $mode -> getOneNotice(4));
        $this -> display();
 	}


	public function equipment_show1() {
		
		$this -> display();
	}
	public function equipment_show2() {
      
		$this -> display();
	}


}
?>