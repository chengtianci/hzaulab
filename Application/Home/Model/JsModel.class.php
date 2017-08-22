<?php
	namespace Home\Model;
	use Think\Model\RelationModel;
	class JsModel extends RelationModel {
		// 查看某一条信息
		public function getOneNotice($value) {
			$mode = M("Js");
			return $mode -> where("id = $value") -> find();
		}
	}