<?php
	// 弹出提示信息
	function alertMessage($message) {
	    echo "<script>alert(\"$message\"); window.location.href=document.referrer; </script>";
	    exit();
	}

	// 获取本页面的id
	function getValue() {
	    if (is_numeric($_GET['id']) && is_int($_GET['id']+0)) {
	        return $_GET['id'];
	    } else {
	        return 0;
	    }
	}

	// 获得POST方式的传值，并且判断是否为空
	function getPost($value='') {
		foreach ($_POST as $key => $value) {
			# code...
			if ($value == "") {
				alertMessage("请填写完整的信息");
			}
		}
		return $_POST;
	}

	// // 计算两者之间的时间差
 //    function GetDateDiff($startTime, $endTime, $diffType) {
 //        //将xxxx-xx-xx的时间格式，转换为 xxxx/xx/xx的格式 
 //        $startTime = $startTime.replace(/\-/g, "/");
 //       	$endTime = $endTime.replace(/\-/g, "/");

 //        //将计算间隔类性字符转换为小写
 //        $diffType = $diffType.toLowerCase();
 //        $sTime = new Date($startTime);      //开始时间
 //        $eTime = new Date($endTime);  //结束时间
 //        //作为除数的数字
 //        $divNum = 1;
 //        switch ($diffType) {
 //            case "second":
 //                $divNum = 1000;
 //                break;
 //            case "minute":
 //                $divNum = 1000 * 60;
 //                break;
 //            case "hour":
 //                $divNum = 1000 * 3600;
 //                break;
 //            case "day":
 //                $divNum = 1000 * 3600 * 24;
 //                break;
 //            default:
 //                break;
 //        }
 //        return parseInt(($eTime.getTime() - $sTime.getTime()) / parseInt($divNum));
 //    }