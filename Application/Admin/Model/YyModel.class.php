<?php
	namespace Admin\Model;
	use Think\Model\RelationModel;
	class YyModel extends RelationModel {
		// 查看所有的预约申请情况
		function selectAll($value='')
		{
			# code...
			$mode = M("Yy");
			return $mode -> where("status = 0") -> select();
		}
		// 查看所有的预约申请历史
		public function selectAllHistory($value='')
		{
			# code...
			$mode = M("Yy");
			return $mode -> where("status != 0") -> select();
		}
		// 批准一条申请
		public function doApplication($value='')
		{
			# code...
			$mode = M("Yy");
			$mode -> status = 1;
			return $mode -> where("id = $value") -> save();
		}
		//拒绝一条申请
		public function rejectApplication($id, $result)
		{
			# code...
			$mode = M("Yy");
			$mode -> status = 2;
			$mode -> reson = $result;
			return $mode -> where("id = '$id'") -> save();
		}
		// 查看一条预约申请的信息
		public function getOneApplication($value='')
		{
			# code...
			$mode = M("Yy");
			return $mode -> where("id = $value") -> find();
		}

		// 从设备表格中查看一条设备的信息
		public function getOneEquipment($value='')
		{
			# code...
			$mode = M('Pz');
			return $mode -> where("id ='$value'") -> find();
		}

		// 设置一条哦预约记录
		public function setOneJL($value, $username, $kssj, $jshj)
		{
			# code...
			// $mode = ;
		}
	}