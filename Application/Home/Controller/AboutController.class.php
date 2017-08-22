<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\TzModel;
use Home\Model\JsModel;

class AboutController extends Controller {
    /**
     * 方法功能：显示页面
     */
	public function about_show1() {
        $mode = new JsModel();
        $this -> assign("data", $mode -> getOneNotice(1));
		$this -> display();
	}

    /**
     * 方法功能：显示页面
     */
	public function about_show2() {
	    $mode = new TzModel();
        $Page = new \Think\Page($mode -> getCount($id), 10);
        $show = $Page->show();// 分页显示输出
        $pre = $Page -> firstRow;
        $next = $Page -> listRows;
        $this -> assign("data", $mode -> getAllCourse($pre, $next));
        $this -> assign("show", $show);
		$this -> display();
	}

    // 查看一条公告的详细内容
    public function about_show2_article() {    
        $mode = new TzModel();
        $this -> assign("data", $mode -> getOneNotice(getValue()));
        $this -> display();
    }

    /**
     * 方法功能：显示页面
     */
	public function about_show3() {
        $mode = new JsModel();
        $this -> assign("data", $mode -> getOneNotice(2));
        $this -> display();
	}

  
}
?>