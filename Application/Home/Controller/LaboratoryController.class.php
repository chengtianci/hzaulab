<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\JsModel;
class LaboratoryController extends Controller {
	public function laboratory($value='') {
        $mode = new JsModel();
        $this -> assign("data", $mode -> getOneNotice(5));
        $this -> display();
	}
  
	public function laboratory_show1() {
      
		$this -> display();
	}
	public function laboratory_show2() {
		
		$this -> display();
	}
	public function laboratory_show3() {
		
		$this -> display();
	}
	
}
?>