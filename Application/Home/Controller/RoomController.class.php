<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\JsModel;
class RoomController extends Controller {
  
    public function room($value='') {
        $mode = new JsModel();
        $this -> assign("data", $mode -> getOneNotice(4));
        $this -> display();
    }

  
    /**
     * 方法功能：显示页面
     */
    public function room_show1() {
    	$mode = M("Ww");
    	// // var_dump($mode -> find());
    	$this -> assign("ww", $mode -> where("nos = 0") -> select());
    	$this -> display();
    }

    /**
     * 方法功能：显示页面
     */
	public function room_show2() {
	   
		$this -> display();
	}

  

  
}
?>