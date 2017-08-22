<?php
	namespace Admin\Model;
	use Think\Model\RelationModel;
	class TzModel extends RelationModel {
		// 查询所有通知
		public function selectAll()
		{
			# code...
			$mode = M("Tz");
			return $mode -> select();
		}

		// 查询一条通知
		public function selectOne($id)
		{
			# code...
			$mode = M("Tz");
			return $mode -> where("id = $id") -> find();
		}

		// 删除一条通知
		public function deleteOne($id)
		{
			# code...
			$mode = M("Tz");
			return $mode -> where("id = $id") -> delete();
		}

		// 增加一条通知
		public function addOne($title, $content)
		{
			# code...
			$mode = M("Tz");
			$mode -> infotime = date("Y-m-d");
			$mode -> infoowner = "Admin";
			$mode -> infoname = $title;
			$mode -> infoct = $content;
			// $mode -> infoowner = $_SESSION['userid'];
			return $mode -> add();
		}

		// 修改一条通知
		public function ModifyOne($id, $title, $content)
		{
			# code...
			$mode = M("Tz");
			$mode -> infoname = $title;
			$mode -> infoct = $content;
			return $mode -> where("id = $id") -> save();
		}
	}
?>