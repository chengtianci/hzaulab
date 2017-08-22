<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\JsModel;
class EquipmentController extends Controller {
    public function index(){
        $this->display();
    }

    // 这是仪器设备的页面发布
    public function equipmentluanch() {
    	$mode = new JsModel();
    	$this -> assign("data", $mode -> getOneIntro(6));
    	$this -> display();
    }
}