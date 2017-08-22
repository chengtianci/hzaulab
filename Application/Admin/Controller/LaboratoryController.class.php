<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\JsModel;
class LaboratoryController extends Controller {
    public function index(){
        $this->display();
    }

    //实验室页面发布
    public function labluanch() {
    	$mode = new JsModel();
    	$this -> assign("data", $mode -> getOneIntro(5));
    	$this -> display();
    }
}