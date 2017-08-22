<?php
	namespace Admin\Model;
	use Think\Model\RelationModel;
	class ZpModel extends RelationModel {
		// 获得照片的总数
		public function getAllCount()
		{
			# code...
			$mode = M("Zp");
			if (($mode -> count()) < 5) {
				return true;
			} else {
				return false;
			}
		}
		// 查询所有照片
		public function selectAll()
		{
			# code...
			$mode = M("Zp");
			return $mode -> select();
		}

		// 删除一张照片
		public function deleteOne($id)
		{
			# code...
			$mode = M("Zp");
			return $mode -> where("id = $id") -> delete();
		}

		// 增加一张照片
		public function addOne($title, $intro, $add)
		{
			# code...
			$mode = M("Zp");
			$mode -> imgname = $title;
			$mode -> imgintro = $intro;
			$mode -> imgadd = $add;
			return $mode -> add();
		}

		// 修改一条通知
		public function ModifyOne($id, $title, $content, $add)
		{
			# code...
			$mode = M("Zp");
			$mode -> imgname = $title;
			$mode -> imgintro = $content;
			$mode -> imgadd = $add;
			return $mode -> where("id = $id") -> save();
		}
	}
?>