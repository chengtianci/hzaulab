<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\WjModel;
class RegulationController extends Controller {
    public function index(){
        $this->display();
    }

    // 规章制度的显示界面，类型默认为1
    public function regulation()
    {
    	# code...
    	$mode = new WjModel();
    	$this -> assign("data", $mode -> findAllWj(1));
    	$this -> display();
    }

   	private function getData($type) {
        $theData = M('Resource'); // 实例化User对象
        $count = $theData->where("rsType = $type")->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $theData->where("rsType = $type and rsAble = 1")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display($this->the_t[$type]);
    }

    public function addOneRegulation()
    {
        $model = new WjModel();
        var_dump($_POST);
        var_dump($_FILES);
    }
}