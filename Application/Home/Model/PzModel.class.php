<?php
	namespace Home\Model;
	use Think\Model\RelationModel;
	class PzModel extends RelationModel {
		// 获取所有的盆栽信息
		public function getAllPz($value='')
		{
			# code...
			// $show_date 表示当前的时间
			$show_date=date('Y-m-d');
			$modePz = M("Pz");
			$deviceLists = $modePz -> order('id desc') -> select();

			// 查询盆栽设备的预约表
			// 条件为当前时间 $show-date在预约表中的starttime和endtime之间
			$mdoePzLog = M("Log");

			foreach ($deviceLists as $key => $value) {
				# code...
				$deviceId = $value['id'];
				$deviceLists[$key]['yyBy'] = "";
				// 查询预约表中的所有记录
				$allYy = $mdoePzLog -> where("yiid = '$deviceId'") -> select();
				// 将当前时间转化为时间戳格式
				$dangqianshijian = strtotime($allYy);
				for ($i = 0; $i < count($allYy); $i++) {
					//将开始时间转化为时间戳的格式
					$kssj = $allYy[$i]['kssj'];
					$jssj = $allYy[$i]['jssj'];
					if ($dangqianshijian >= $kssj && $dangqianshijian <= $jssj) {
						$deviceLists[$key]['yyBy'] = $allYy[$i]['username'];
					}
				}
			}


			return $deviceLists;
		}
	}