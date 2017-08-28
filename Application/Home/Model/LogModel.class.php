<?php
	namespace Home\Model;
	use Think\Model\RelationModel;

	/**
	* log表的model
	*/
	class LogModel extends RelationModel {

		//查询记录，通过设施设备的id
		public function selectALL($id,$uname) {	
			$mode = M("log");
			return $mode -> where("yqid = '$id'") ->select();
		}		
	}
?>