<?php
	namespace Home\Model;
	use Think\Model\RelationModel;
	class TzModel extends RelationModel {
		// 查询所有的通知
		public function getAllCourse($id, $pre, $next) {
			$mode = M("Tz");
			return $mode->order('id desc')->limit($pre.','.$next)->select(); 
		}
		// 获得所有的通知总数
		public function getCount($value='')
		{
			$mode = M("Tz");
			return $mode -> count();
		}
		// 查询一条通知
		public function getOneNotice($value)
		{		
			# code...
			$mode = M("Tz");
			return $mode -> where("id = $value") -> find();
		}
	}