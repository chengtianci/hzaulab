<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\JsModel;
class RoomController extends Controller {
    public function index(){
        $this->display();
    }

    // 培养室的页面发布
    public function roomluanch() {
    	$mode = new JsModel();
    	$this -> assign("data", $mode -> getOneIntro(4));
    	$this -> display();
    }

    public function room_show1() {
    	$mode = M("Ww");
    	// var_dump($mode -> find());
    	$this -> assign("ww", $mode -> select());
    	$this -> display();
    }
}