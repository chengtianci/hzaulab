<?php
	namespace Admin\Model;
	use Think\Model\RelationModel;
	class JsModel extends RelationModel {
		// 查询某一条信息
		public function getOneIntro($id) {
			$mode = M("Js");
			return $mode -> where("id = $id") -> find();
		}
		// 修改一条信息
		public function saveOneIntro($id, $content) {
			$mode = M("Js");
			$mode -> content = $content;
			return $mode -> where("id = $id") -> save();
		}
	}
?>