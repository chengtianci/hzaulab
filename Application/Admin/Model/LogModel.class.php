<?php
	namespace Admin\Model;
	use Think\Model\RelationModel;

	/**
	* log表的model
	*/
	class LogModel extends RelationModel {

		//查询一条记录，通过设施设备的id
		public function selectOne($id) {	
			$mode = M("log");
			return $mode -> where("id = $id") ->find();
		}		

		//insert one log ,record 'id'主键  'username'预约人  'kssj'开始时间   'jssj'结束时间   'yqid'仪器id
		public function insertOne($uname,$ks,$js,$yq) {
			$mode = M("log");
			$mode -> username = $uname;
			$mode -> kssj     = $ks;
			$mode -> jssj     = $js;
			$mode -> yqid     = $yq;
			return $mode ->add(); 
		}

	}
?>