<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\JsModel;
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

   	function field($value='')
   	{
   		# code...
   		$mode = new JsModel();
    	$this -> assign("data", $mode -> getOneIntro(7));
   		$this -> display();
   	}
}