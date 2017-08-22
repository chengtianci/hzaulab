<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\JsModel;
use Admin\Model\TzModel;
class IntroductionController extends Controller {
    public function index(){
        $this->display();
    }

    // 平台简介展示页面
    public function introduction() {
    	$mode = new JsModel();
    	$this -> assign("data", $mode -> getOneIntro(1));
    	$this -> display();
    }

    // 联系我们页面
    public function connect() {
    	$mode = new JsModel();
    	$this -> assign("data", $mode -> getOneIntro(2));
    	$this -> display();
    }

    // 对页面发布进行修改
    public function aboutDoUpdate() {
    	$mode = new JsModel();
    	if ($mode -> saveOneIntro($_POST['id'], htmlspecialchars_decode($_POST['content']))) {
            $data = array(
                'code'=>1,
                'where'=>$which,
            );
            echo json_encode($data);
        } else {
            alert("请检查网路后重试");
        }
    }

    // 所有的通知公告
    public function notice()
    {
        # code...
        $mode = new TzModel();
        $this -> assign("data", $mode -> selectAll());
        $this -> display();
    }

    // 一条通知公告
    public function notice_show()
    {
        # code...
        $mode = new TzModel();
        $this -> assign("data", $mode -> selectOne(getValue()));
        $this -> display();
    }

    // 编辑一个通知
    public function notice_edit()
    {
        # code...
        $mode = new TzModel();
        $this -> assign("data", $mode -> selectOne(getValue()));
        $this -> display();
    }

    // 编辑通知的执行方法
    public function doEdit()
    {
        $mode = new TzModel();
        $content = getPost();
        if ($mode -> ModifyOne($content['id'], $content['gallery_title'], $content['content'])) {
            $data = "修改成功";
            echo json_encode($data);
        } else {
            $data = "修改失败";
            echo json_encode($data);
        }
    }

    //删除一一条公告
    public function deleteOne($value='')
    {
        # code...
        $mode = new TzModel();
        if ($mode -> deleteOne(getValue())) {
            alertMessage("删除成功！");
        } else {
            alertMessage("请检查网路后重试！");
        }
    }

    // 添加一条通知的显示页面
    public function add($value='')
    {
        # code...
        $this -> display();
    }

    // 添加一条通知的执行方法
    public function doAddNotice($value='')
    {
        # code...
        $mode = new TzModel();
        $title = $_POST['gallery_title'];
        $content = htmlspecialchars_decode($_POST['content']);
        if ($mode -> addOne($title, $content)) {
            $data = "添加成功";
            echo json_encode($data);
        } else {
            $data = "添加失败";
            echo json_encode($data);
        }
    }
}