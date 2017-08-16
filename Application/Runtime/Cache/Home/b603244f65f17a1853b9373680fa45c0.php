<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
 	<!-- <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> -->
 	<title>华中农业大学作物学实验教学中心</title>
 	<link type="text/css" rel="stylesheet" href='http://fonts.googleapis.com/css?family=Ubuntu:300italic,300,700' />
  <link rel="shortcut icon" href="/hzaulab/logo.ico" type="image/x-icon" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/home_public.css" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/show_public.css" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/planform_public.css" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/room_show1_one.css" />
  <script type="text/javascript" src="/hzaulab/Public/public/js/jquery-1.8.3.min.js"></script>

</head>
<body>
<div id="wrapper">
<div id="bdy">
    <!--************************************************************** header **************************************************************-->
  <div id="header"> 
    <div class="container">
  <div id="header_left">
    <!-- <a href="/hzaulab/index.php/home/Index/index.html"><h1>华中农业大学作物学实验教学中心</h1></a>
    <p>     Teaching Center of Crop Science Experiment</p> -->
  </div>
  <div id="header_right">
      <br><br>
      <form action="#" method="post" id="sitesearch">
        <input type="text" value="" placeholder="全文搜索" class="search_input"  />
         <!-- <input type="text" value="" class="search_input" onfocus="this.value=(this.value=='全文搜索&hellip;')? '' : this.value ;" /> -->
        <input type="submit" id="search" value="搜索"alt="搜索" />
      </form>
  </div>
</div>

<!--***************登陆框***************-->
<div id="LoginBox">
    <div class="logreg_title">
        登陆<a href="javascript:void(0)" title="关闭窗口" class="close_btn" >×</a>
    </div>
    <form action="" method="post" name="myForm">
        <p class="suggest"></p>
        <div class="row">    
            <input type="text" placeholder="用户名" id="logName" name="username"/>
            <a href="javascript:void(0)" title="提示" class="warning" id="warn">*</a>
        </div>
        <div class="row">     
            <input type="password" placeholder="密码" id="logPwd" name="password"/>
            <a href="javascript:void(0)" title="提示" class="warning" id="warn2">*</a>
        </div>
        <div class="row">
            <input type="checkbox" />
            下次自动登录
             &nbsp&nbsp|&nbsp&nbsp
            <a class="reg_link" href="#">注册</a>
        </div>
        <div class="row">
           <a href="javascript:login()" class="okbtn">登陆</a>
        </div>
    </form>    
</div>

<script>
// $(function(){
//      //登录AJAX提示判断
//     $.post('', {
//         username:$("#logName").val(),
//         password:$("#logPwd").val(),
//     },function(text){
//         if(text=="pass"){
//             // alert('pass')
//             window.location.href="/hzaulab/index.php/Home/Index/index";
//         }else{
//             $("#suggest").html(text);
//         }
//     });
// })
</script>



<!--***************注册框***************-->
<div id="RegisterBox">
    <div class="logreg_title">
         注册<a href="javascript:void(0)" title="关闭窗口" class="close_btn" >×</a>
    </div>
    <form action="" method="post" name="myForm">
        <p class="suggest"></p>
        <div class="row">    
            <input type="text" placeholder="用户名" id="logName" name="username"/>
        </div>
        <div class="row">     
            <input type="password" placeholder="密码" id="logPwd" name="password"/>
        </div>
        <div class="row">
             <input type="password" placeholder="确认密码" id="Repwd" name="repassword"/>
        </div>
        <div class="row">
            <input type="text" id="regcode" placeholder="验证码" name='code' />
            <img src="" alt="Code" id="regcode" onclick="this.src=this.src+'?'+Math.random()">
        </div>
        <div class="regrow">
           <a href="javascript:login()" class="okbtn">注册</a>
        </div>
    </form>    
</div>

  </div>

  <!--**************************************************************   nav  **************************************************************-->
  <div id="nav">
    <div class="container">
	<div id="navn" >
      	<ul>
	        <li class="navOne_class"><a class="active" href="/hzaulab/index.php/Home/Index/index">首&ensp;页</a></li>
	        <li class="navOne_class"><a href="/hzaulab/index.php/Home/About/about_show1">平台概况</a>
	        	<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaulab/index.php/Home/About/about_show1">平台简介</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/About/about_show2">通知公告</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/About/about_show3">联系我们</a></li>
	            </ul>
	        </li>	
	       <li class="navOne_class"> <a href="/hzaulab/index.php/Home/Field/field">大田设施</a>
	        	<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaulab/index.php/Home/Field/field_show1">农田土地</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/Field/field_show2">露天盆栽场</a></li>
	            </ul>
	        </li>
	        <li class="navOne_class"><a href="/hzaulab/index.php/Home/Room/room">培养室</a>
	       		<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaulab/index.php/Home/Room/room_show1">温网室</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/Room/room_show2">光照培养室</a></li>
	            </ul>
	        </li>

	        <li class="navOne_class"><a href="/hzaulab/index.php/Home/Laboratory/laboratory">实验室</a>
	        	<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaulab/index.php/Home/Laboratory/laboratory_show1">公共实验室</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/Laboratory/laboratory_show2">教学实验室</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/Laboratory/laboratory_show3">实验辅助室</a></li>
	            </ul>
	        </li>
	         <li class="navOne_class"><a href="/hzaulab/index.php/Home/Equipment/equipment">仪器设备</a>
	        	<ul class="nav_right">
	            	<li class="secnav"><a href="/hzaulab/index.php/Home/Equipment/equipment_show1">仪器设备</a></li>
	            </ul>
	        </li>
	        <li class="navOne_class"><a href="/hzaulab/index.php/Home/Fictitious/fictitious_show1">规章制度</a>
        		<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaulab/index.php/Home/Fictitious/fictitious_show1">规章制度</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/Fictitious/fictitious_show2">服务指南</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/Fictitious/fictitious_show3">下载专区</a></li>
	            </ul>
		       
	        </li>
	       
        </ul>
    </div>
</div>

  </div>
  
  <!--**************************************************************main-one**************************************************************-->
  <div id="main">
    <div class="container">
      <div id="blank"></div>
      <div id="main_nav">
        <section>
          <h3>培养室</h3>
          <ul class="ultop">
            <li><a href="/hzaulab/index.php/Home/Room/room_show1" style="border-left: 3px solid orange;">温网室</a></li>
            <li><a href="/hzaulab/index.php/Home/Room/room_show2">光照培养室</a></li>
          </ul>
        </section>
      </div>
      <div id="main_right">
        <nav class="top_nav"><a href="/hzaulab/index.php/home/Index/index.html">首页</a> · <a href="#">培养室</a> · <a href="#">温网室</a> </nav>
        <section class="article">
          <header class="main_title"><h2>温网室</h2></header>
          <div class="planform_box">
            <ul class="small_nav">
              <li><a class="now_on" href="/hzaulab/index.php/Home/Room/room_show1">山南温网室群</a></li>
              <li><a href="/hzaulab/index.php/Home/Room/room_show1_two">山北温室群</a></li>
            </ul>
            <div class="clr"></div>
            <div class="planform">
              <div class="planheader">
                <form action="/lark-master/lark-master/index.php/Home/Reserve/home" method="get">
                <span class="hint">选择日期:</span>
                <input class="tcal tcalInput tcalActive input" name="date" value="2017-08-03" type="date">
                <button class="button" type="submit">查询</button>
                </form>
                <div class="clr" style="clear: both;"></div><br>
                <span class="he">山南温室群</span><br>
                <div class="explain">
                  已预约：<span class="red"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                  占用：<span class="orange"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                  锁定：<span class="grey"></span>  &nbsp;&nbsp;&nbsp;&nbsp;
                  开放：<span class="unlock"></span>  
                </div>
              </div>
              <div class="planbody">
                <form class="planbodyform">
                  <div id="muticonfirm">预约</div>
                  <div class="clr"></div>
                  <div class="box1">
                    <div class=" box1_one _red" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC1-1<br><input type="checkbox" name=""></div>
                    <div class=" box1_one _red" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC1-2<br><input type="checkbox" name=""></div>
                    <div class=" box1_two" ></div>
                    <div class=" box1_three  _grey" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC1-3<br><input type="checkbox" name=""></div>
                    <div class=" box1_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC1-4<br><input type="checkbox" name=""></div>
                  </div>
                  <div class="box2">
                    <div class="box2_left">
                      <div class="left_box">
                        <div class="left_inbox1">
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-1<br><input type="checkbox" name=""></div>
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-3<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-5<br><input type="checkbox" name=""></div>
                          <div class=" box2_five" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-7<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox1">
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-2<br><input type="checkbox" name=""></div>
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-4<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-6<br><input type="checkbox" name=""></div>
                          <div class=" box2_five" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-8<br><input type="checkbox" name=""></div>
                        </div>
                      </div>
                      <div class="left_box">
                        <div class="left_inbox1">
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-1<br><input type="checkbox" name=""></div>
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-3<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-5<br><input type="checkbox" name=""></div>
                          <div class=" box2_five" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-7<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox1">
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-2<br><input type="checkbox" name=""></div>
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-4<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-6<br><input type="checkbox" name=""></div>
                          <div class=" box2_five" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-8<br><input type="checkbox" name=""></div>
                        </div>
                      </div>
                      <div class="left_box">
                        <div class="left_inbox1">
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-1<br><input type="checkbox" name=""></div>
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-3<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-5<br><input type="checkbox" name=""></div>
                          <div class=" box2_five" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-7<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox1">
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-2<br><input type="checkbox" name=""></div>
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-4<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-6<br><input type="checkbox" name=""></div>
                          <div class=" box2_five" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-8<br><input type="checkbox" name=""></div>
                        </div>
                      </div>
                      <div class="left_box">
                        <div class="left_inbox1">
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-1<br><input type="checkbox" name=""></div>
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-3<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-5<br><input type="checkbox" name=""></div>
                          <div class=" box2_five" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-7<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox1">
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-2<br><input type="checkbox" name=""></div>
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-4<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-6<br><input type="checkbox" name=""></div>
                          <div class=" box2_five" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-8<br><input type="checkbox" name=""></div>
                        </div>
                      </div>
                      <div class="left_box">
                        <div class="left_inbox1">
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-1<br><input type="checkbox" name=""></div>
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-3<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-5<br><input type="checkbox" name=""></div>
                          <div class=" box2_five" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-7<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox1">
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-2<br><input type="checkbox" name=""></div>
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-4<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-6<br><input type="checkbox" name=""></div>
                          <div class=" box2_five" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-8<br><input type="checkbox" name=""></div>
                        </div>
                      </div>
                      <div class="left_box">
                        <div class="left_inbox1">
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-1<br><input type="checkbox" name=""></div>
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-3<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-5<br><input type="checkbox" name=""></div>
                          <div class=" box2_five" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-7<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox1">
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-2<br><input type="checkbox" name=""></div>
                          <div class=" box2_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-4<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-6<br><input type="checkbox" name=""></div>
                          <div class=" box2_five" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-8<br><input type="checkbox" name=""></div>
                        </div>
                      </div>
                    </div>
                    <div class="box2_right">
                      <div class=" box2_right_left1">
                        <div class="right_box1">
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-1<br><input type="checkbox" name=""></div>
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-3<br><input type="checkbox" name=""></div>
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-5<br><input type="checkbox" name=""></div>
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-7<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="right_box1">
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-2<br><input type="checkbox" name=""></div>
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-4<br><input type="checkbox" name=""></div>
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-6<br><input type="checkbox" name=""></div>
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-8<br><input type="checkbox" name=""></div>
                        </div>
                      </div>
                      <div class="box2_right_right1">
                        <div class="right_box1">
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-1<br><input type="checkbox" name=""></div>
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-3<br><input type="checkbox" name=""></div>
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-5<br><input type="checkbox" name=""></div>
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-7<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="right_box1">
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-2<br><input type="checkbox" name=""></div>
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-4<br><input type="checkbox" name=""></div>
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-6<br><input type="checkbox" name=""></div>
                          <div class=" box2_three" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-8<br><input type="checkbox" name=""></div>
                        </div>
                      </div>
                      <div class="box2_right_left2">
                        <div class="right_box2">
                          <div class=" box2_four" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-9<br><input type="checkbox" name=""></div>
                          <div class=" box2_four" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-11<br><input type="checkbox" name=""></div>
                          <div class=" box2_four" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-13<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="right_box2">
                          <div class=" box2_four" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-10<br><input type="checkbox" name=""></div>
                          <div class=" box2_four" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-12<br><input type="checkbox" name=""></div>
                          <div class=" box2_four" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-14<br><input type="checkbox" name=""></div>
                        </div>
                      </div>
                      <div class="box2_right_right2">
                        <div class="right_box2">
                          <div class=" box2_four" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-9<br><input type="checkbox" name=""></div>
                          <div class=" box2_four" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-11<br><input type="checkbox" name=""></div>
                          <div class=" box2_four" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-13<br><input type="checkbox" name=""></div>
                        </div>
                        <div class="right_box2">
                          <div class=" box2_four" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-10<br><input type="checkbox" name=""></div>
                          <div class=" box2_four" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-12<br><input type="checkbox" name=""></div>
                          <div class=" box2_four" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-14<br><input type="checkbox" name=""></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box3">
                    <div class=" box3_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC2-1<br><input type="checkbox" name=""></div>
                    <div class=" box3_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC2-2<br><input type="checkbox" name=""></div>
                    <div class=" box3_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC2-3<br><input type="checkbox" name=""></div>
                    <div class=" box3_one" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC2-4<br><input type="checkbox" name=""></div>
                  </div>
                  <div class="clr"></div>
                  <div id="applyform">
                    <div class="up">
                    <img id="close" src="/hzaulab/Public/face/images/close.png">
                      <h3>作物学实验教学中心 <br> 设施设备租赁表</h3> 
                    </div>
                    <div class="down">
                      <div class="row">
                        <div class="le"><span class="hint">使用者姓名：</span><input class="input" type="text" name="name1" value="//自动">    </div>
                        <div class="ri"><span class="hint">联系方式：</span><input class="input" type="text" name="name2" value="//必填"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">导师姓名： </span><input class="input" type="text" name="name1" value="//自动">   </div>
                        <div class="ri"><span class="hint">联系方式： </span><input class="input" type="text" name="name2" value="//自动"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">设施名称： </span><input class="input" type="text" name="name1" value="//自动">   </div>
                        <div class="ri"><span class="hint">设施位置：</span><input class="input" type="text" name="name2" value="//自动"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">设施编号：</span><input class="input" type="text" name="name1" value="//自动">   </div>
                        <div class="ri"><span class="hint">研究项目：</span><input class="input" type="text" name="name1" value="//必填"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">预约时间： </span><input class="input" type="date" name="name1" value="//必填">   </div>
                        <div class="ri"><span class="hint">终止时间：</span><input class="input" type="date" name="name2" value="//必填"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">样品物种：</span><input class="input" type="text" name="name1" value="//必填">   </div>
                        <div class="ri"><span class="hint">备注: </span><input class="input" type="text" name="name2" value="//选"></div>
                      </div><br>
                      <div class="row">
                        <a href=""><button>保存</button></a>
                        <a href=""><button>提交</button></a>
                        <a href=""><button>导出Word</button></a>
                      </div>
                  </div>
                  </div>
                <form>
                </form>
              </div>
              <div class="plat_comment">
                <p>
                  注意：这里写注释！
                </p>
              </div>s
            </div>
          </div>
          <div class="clr"></div>
        </section>
      </div>
    </div>
  </div>

  
  
   <!--************************************************************** footer **************************************************************-->
  <div id="footer">
     <div class="container">
  <div class="footbox">
    <h2>快速导航</h2>
    <ul>
      <li><a href="#">&raquo; 首页</a></li>
      <li><a href="#">&raquo; 网站地图</a></li>
      <li><a href="#">&raquo; 互动平台</a></li>
      <li><a href="#">&raquo; 访问说明</a></li>
    </ul>
  </div>
  <div class="footbox">
    <h2>联系方式</h2>
    <address>
    湖北省武汉市洪山区狮子山街一号<br />
    中国·湖北·武汉<br />
    430070<br />
    Tel: 027-87499963<br />
    </address>
  </div>
  <div class="foot-bottom">
    <p><span>技术支持：<a href="http://www.52feidian.com/">华中农业大学 沸点工作室</a></span>
      CopyRight©2017  华中农业大学作物学实验教学中心 <a href="/hzaulab/index.php/Admin/">管理</a>
    </p>
  </div>
</div>
  </div>
</div>
</div>
  <script type="text/javascript" src="/hzaulab/Public/face/js/public.js"></script>
  <script type="text/javascript" src="/hzaulab/Public/face/js/jquery.flexslider-min.js"></script>
  <script type="text/javascript" src="/hzaulab/Public/face/js/custom.js"></script>
  <script type="text/javascript" src="/hzaulab/Public/face/js/apply.js"></script>
</body>
</html>