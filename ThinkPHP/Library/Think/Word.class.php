<?php
namespace Think;
class word {
	//定义要保存数据的开始
	function start() {
	    ob_start(); //开始输出缓冲
	    //设置生成word的格式
	    print '<html xmlns="urn:schemas-microsoft-comfficeffice"
	    xmlns:w="urn:schemas-microsoft-comffice:word"
	    xmlns="http://www.w3.org/TR/REC-html40">';
	    print '<meta charset="UTF-8">';
	}
	//定义要保存数据的结束，同时把数据保存到word中  
	//所要保存的数据必须限定在该类的start()和save()之间
	function save($path) {
		print "</html>";
		$data=ob_get_contents(); //返回内部缓冲的内容 即把输出变成字符串
		ob_end_clean(); //结束输出缓冲，清洁（擦除）输出缓冲区并关闭输出缓冲
		$this->wirtetoword($path,$data);
	}
	//将数据已二进制的形式保存到word中
	function wirtetoword($fn,$data) {
		$fp=fopen($fn,"wb");
		fwrite($fp,$data);
		fclose($fp);
	}
}
?>