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