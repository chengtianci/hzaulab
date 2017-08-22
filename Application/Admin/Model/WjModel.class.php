<?php
	namespace Admin\Model;
	use Think\Model\RelationModel;
	class WjModel extends RelationModel {
		// 查看所有的文件并进行分页
		public function findAllWj($type) {
			$mode = M("Wj");
			return $mode -> where("rsType = $type") -> select(); 
		}
		// 查看某一个文件的信息
		public function findOneWj($value) {	
			$mode = M("Wj");
			return $mode -> where("id = $value") -> find();
		}
		// 删除一个文件
		public function deleteOneWj($value) {
			$mode = M("Wj");
			return $mode -> where("id = $value") -> delete();
		}
	}