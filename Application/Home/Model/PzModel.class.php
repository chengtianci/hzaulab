<?php
	namespace Home\Model;
	use Think\Model\RelationModel;
	class PzModel extends RelationModel {
		// 获取所有的盆栽信息
		public function getAllPz($value='')
		{
			# code...
			$mode = M("Pz");
			return $mode -> select();
		}
	}