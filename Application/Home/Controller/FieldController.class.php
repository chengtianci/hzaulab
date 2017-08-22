<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\JsModel;
use Home\Model\PzModel;

class FieldController extends Controller {
  
	public function field() {
		$mode = new JsModel();
        $this -> assign("data", $mode -> getOneNotice(3));
        $this -> display();
	}

  
    /**
     * 方法功能：显示页面
     */
	public function field_show1() {
		$mode = new JsModel();
        $this -> assign("data", $mode -> getOneNotice(7));
        $this -> display();
	}

    /**
     * 方法功能：显示页面
     */
	public function field_show2() {
		$mode = new PzModel();
		$this -> assign("data", $mode -> getAllPz());
		$this -> display();
	}

	// 导出相关的word文档
	public function doWord($value='')
	{
		# code...
		$word = new \Think\Word();//示例化对象
		$word -> start();//定义要保存数据的开始
		print $_POST;
		$word -> save('word_c.doc');//定义要保存数据的结束，同时把数据保存到word中
	}
}
?>