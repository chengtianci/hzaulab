<?php
namespace Admin\Controller;
use Think\Controller;
class TestController extends Controller {
    public function index(){
    	$mode = M("Ww");
    	// var_dump($mode -> find());
    	$this -> assign("ww", $mode -> select());
        $this->display();
    }
}