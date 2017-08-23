<?php
	namespace Home\Model;
	use Think\Model\RelationModel;
	class YyModel extends RelationModel {
		// 插入一条申请
		public function insertApplication($info)
		{
			# code...
			$mode = M("Yy");
			return $mode -> add($info);
		}
	}