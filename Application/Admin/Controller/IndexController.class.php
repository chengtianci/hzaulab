<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\ZpModel;
class IndexController extends Controller {
	// 首页展示的界面
    public function index(){
        $mode = new ZpModel();
        $this -> assign("data", $mode -> selectAll());
        $this->display();
    }

    // 添加一张图片
    public function addImg()
    {
    	$title = $_POST['gallery_title'];
    	if ($_FILES['gallery_file']['name'] == "" || $_POST['gallery_title'] == "") {
    		alertMessage("请填写完整的信息");
    	}
        $mode = new ZpModel();
        if ($mode -> getAllCount()) {

        } else {
            alertMessage("照片不能超过五张");
        }
        // 进行上传文件的操作
        $Realname = $_FILES['gallery_file']['name'];
        $upload = new \Think\Upload();//实例化上传类
        $upload -> maxSize = 3145728;//设置上传文件的大小
        $upload->rootPath  =   './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =   './File/'; // 设置附件上传（子）目录
        $upload->saveName = 'time';
        //上传文件
        $info = $upload -> upload();
        if(!$info){
            //上传错误提示信息
            alertMessage($upload->getError());
        }
        if ($mode -> addOne($title, "", $info['gallery_file']['savepath'].$info['gallery_file']['savename'])) {
            alertMessage("照片添加成功！");
        } else {
            alertMessage("照片添加失败！");
        }
    }

    // 删除一张照片
    public function imgDelete($value='')
    {
        # code...
        $mode = new ZpModel();
        if ($mode -> deleteOne(getValue())) {
            alertMessage("删除成功！");
        } else {
            alertMessage("请检查网络之后重试！");
        }
    }

    // 修改一张照片
    public function modifyOne($value='')
    {
        # code...
    }
}