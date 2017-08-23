<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
 	<!-- <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> -->
 	<title>华中农业大学作物学实验教学中心</title>
 	<link type="text/css" rel="stylesheet" href='http://fonts.googleapis.com/css?family=Ubuntu:300italic,300,700' />
  <link rel="shortcut icon" href="/hzaulab/logo.ico" type="image/x-icon" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/home_public.css" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/planform_public.css" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/show_public.css" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/field_show2.css" />
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
<!-- <<<<<<< HEAD -->
      <form action="/hzaulab/index.php/Home/index/glo_search" method="post" id="sitesearch">
        <input type="text" value="" placeholder="全文搜索" class="search_input"  />
         <!-- <input type="text" value="" class="search_input" onfocus="this.value=(this.value=='全文搜索&hellip;')? '' : this.value ;" /> -->
        <input type="submit" id="search" value="搜索" alt="搜索" />
<!-- ======= -->
<!--       <form action="#" method="post" id="sitesearch">
        <input type="text" value="" placeholder="全文搜索" class="search_input"  />
         <input type="text" value="" class="search_input" onfocus="this.value=(this.value=='全文搜索&hellip;')? '' : this.value ;" />
        <input type="submit" id="search" value="搜索"alt="搜索" /> -->
<!-- >>>>>>> 8111f25b271c20c48b9dbcf50d01aca4642f06f7 -->
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
          <h3>大田设施</h3>
          <ul class="ultop">
            <li><a href="/hzaulab/index.php/Home/Field/field_show1" >农田土地</a></li>
            <li><a href="/hzaulab/index.php/Home/Field/field_show2" style="border-left: 3px solid orange;">露天盆栽场</a></li>
          </ul>
        </section>
      </div>
      <div id="main_right">
        <nav class="top_nav"><a href="/hzaulab/index.php/home/Index/index.html">首页</a> · <a href="#">露天盆栽场</a> · <a href="#">农田土地</a> </nav>
        <section class="article">
          <div class="planform_box">
            <header class="main_title"><h2>露天盆栽场</h2></header>
            <div class="planform">
              <div class="planheader">
                <form action="/lark-master/lark-master/index.php/Home/Reserve/home" method="get">
                <span class="hint">选择日期:</span>
                <input class="tcal tcalInput tcalActive input" name="date" value="2017-08-03" type="date">
                <button class="button" type="submit">查询</button>
                </form>
                <div class="clr" style="clear: both;"></div><br>
                <span class="he">露天盆栽场</span><br>
                 <div class="explain">
                  已预约：<span class="red"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                  占用：<span class="orange"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                  锁定：<span class="grey"></span>  &nbsp;&nbsp;&nbsp;&nbsp;
                  开放：<span class="unlock"></span>  
            </div>
              </div>
              <div class="planbody">
                <form>
                  <input type="button" name="" id="muticonfirm" value="预约" onclick="fun()">
                  <div class="box1"><!-- <div  data-toggle="modal" data-target="#myModal" class="gallery_add">ADD</div> -->
                  <div class="inbox"  id="PZ-1" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-1" name="test">PZ-1<span class="date">2017.8.10</span></div>
                  <div class="inbox " id="PZ-2" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-2" name="test">PZ-2<span class="date"></span></div>
                  <div class="inbox" id="PZ-3" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-3" name="test">PZ-3<span class="date">2017.8.10</span></div>
                  <div class="inbox" id="PZ-4" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-4" name="test">PZ-4<span class="date"></span></div>
                  <div class="inbox" id="PZ-5" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-5" name="test">PZ-5<span class="date"></span></div>
                  <div class="inbox" id="PZ-6" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-6" name="test">PZ-6<span class="date"></span></div>
                  <div class="inbox" id="PZ-7" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-7" name="test">PZ-7<span class="date"></span></div>
                  <div class="inbox" id="PZ-8" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-8" name="test">PZ-8<span class="date"></span></div>
                  <div class="inbox" id="PZ-9" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-9" name="test">PZ-9<span class="date"></span></div>
                  <div class="inbox" id="PZ-10" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-10" name="test">PZ-10<span class="date"></span></div>
                  <div class="inbox" id="PZ-11" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-11" name="test">PZ-11<span class="date"></span></div>
                  <div class="inbox" id="PZ-12" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-12" name="test">PZ-12<span class="date"></span></div>
                  <div class="inbox" id="PZ-13" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-13" name="test">PZ-13<span class="date"></span></div>
                  <div class="inbox" id="PZ-14" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-14" name="test">PZ-14<span class="date"></span></div>
                  <div class="inbox" id="PZ-15" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-15" name="test">PZ-15<span class="date"></span></div>
                  <div class="inbox" id="PZ-16" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-16" name="test">PZ-16<span class="date"></span></div>
                  <div class="inbox" id="PZ-17" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-17" name="test">PZ-17<span class="date"></span></div>
                  <div class="inbox" id="PZ-18" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-18" name="test">PZ-18<span class="date"></span></div>
                  <div class="inbox" id="PZ-19" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-19" name="test">PZ-19<span class="date"></span></div>
                  <div class="inbox" id="PZ-20" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-20" name="test">PZ-20<span class="date"></span></div>
                  <div class="inbox" id="PZ-21" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-21" name="test">PZ-21<span class="date"></span></div>
                  <div class="inbox" id="PZ-22" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-22" name="test">PZ-22<span class="date"></span></div>
                  <div class="inbox" id="PZ-23" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-23" name="test">PZ-23<span class="date"></span></div>
                </div>


                <div class="box2">
                  <div class="inbox" id="PZ-24" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-24" name="test">PZ-24<span class="date"></span></div>
                  <div class="inbox" id="PZ-25" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-25" name="test">PZ-25<span class="date"></span></div>
                  <div class="inbox" id="PZ-26" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-26" name="test">PZ-26<span class="date"></span></div>
                  <div class="inbox" id="PZ-27" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-27" name="test">PZ-27<span class="date"></span></div>
                  <div class="inbox" id="PZ-28" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-28" name="test">PZ-28<span class="date"></span></div>
                  <div class="inbox" id="PZ-29" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-29" name="test">PZ-29<span class="date"></span></div>
                  <div class="inbox" id="PZ-30" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-30" name="test">PZ-30<span class="date"></span></div>
                </div>


                <div class="box3">
                  <div class="boxrow">
                       <div class="inbox2" id="PZ-31" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-31" name="test">PZ-31<span class="date"></span></div>
                       <div class="inbox2" id="PZ-32" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-32" name="test">PZ-32<span class="date"></span></div>
                  </div>
                  <div class="boxrow">
                       <div class="inbox2" id="PZ-33" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-33" name="test">PZ-33<span class="date"></span></div>
                       <div class="inbox2" id="PZ-34" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-34" name="test">PZ-34<span class="date"></span></div>
                  </div>
                </div>
                <div class="box4">
                  <div class="boxrow">
                       <div class="inbox2" id="PZ-35" name="openPot" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15"><br><input type="checkbox" value="PZ-35" name="test">PZ-35<span class="date"></span></div>
                  </div>
                </div>
                </form>


                <div id="applyform">
                  <div class="up">
                  <img id="close" src="/hzaulab/Public/face/images/close.png">
                    <h3>作物学实验教学中心 <br> 设施设备租赁表</h3> 
                  </div>
                  <form class="sqbg" id="sqbg" action="/hzaulab/index.php/Home/Field/doApplication" method=post>
                    <div class="down">
                      <div class="row">
                        <div class="le"><span class="hint">使用者姓名：</span><input class="input" id="syz" type="text" name="syz" placeholder="//自动">    </div>
                        <div class="ri"><span class="hint">联系方式：</span><input class="input" id="lxfs1" type="text" name="lxfs1" placeholder="//必填"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">导师姓名： </span><input class="input" id="dsxm" type="text" name="dsxm" placeholder="//自动">   </div>
                        <div class="ri"><span class="hint">联系方式： </span><input class="input" id="lxfs2" type="text" name="lxfs2" placeholder="//自动"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">设施名称： </span><input class="input" id="ssmc" type="text" name="ssmc" placeholder="//自动">   </div>
                        <div class="ri"><span class="hint">设施位置：</span><input class="input" id="sswz" type="text" name="sswz" placeholder="//自动"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">设施编号：</span><input class="input" id="ssbh" type="text" name="ssbh" placeholder="//自动">   </div>
                        <div class="ri"><span class="hint">研究项目：</span><input  class="input" id="yjxm" type="text" name="yjxm" placeholder="//必填"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">预约时间： </span><input class="input" id="kssj" type="date" name="kssj" placeholder="//必填">   </div>
                        <div class="ri"><span class="hint">终止时间：</span><input class="input" id="zzsj" type="date" name="zzsj" placeholder="//必填"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">样品物种：</span><input class="input" id="ypwz" type="text" name="ypwz" placeholder="//必填">   </div>
                        <div class="ri"><span class="hint">备注: </span><input class="input" id="bz" type="text" name="bz" placeholder="//选"></div>
                      </div><br>
                      <div class="row">
                        <a href=""><button type="button" onclick="fun1()">保存</button></a>
                        <a href=""><button type="submit" >提交</button></a>
                        <a href=""><button type="button" onclick="fun2()">导出Word</button></a>
                      </div>
                    </div>
                  </form>
                </div>
              <div class="clearfix"></div>
              <div class="plat_comment">
                <p>
                  注意：这里写注释！
                </p>
              </div>
            </div>
          </div>
        </section>
        <table>
          <tr>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
<button type="button" onclick="fun2()">导出Word</button>
  

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

  <script type="text/javascript">
    var data = <?php echo json_encode($data); ?>;
    // console.log(data);
    for (value in data) {
        var openPot = document.getElementById(data[value]['id']);
        // console.log(value);
        // console.log(openPot.className);
        // console.log(data[value]['id']);
      if (data[value]['status'] == 0) {
        // 当状态为0时候，表示已经被预约，不可进行预约
        openPot.className = openPot.className + ' '+'_red' ;
        openPot.title = "状态：已预约(本人)；时间：8-15";
        // console.log(openPot.title);
      } else if (data[value]['status'] == 1) {
          //当状态为1的时候，表示已经被占用，不可进行预约
          openPot.className = openPot.className + ' '+'_orange' ;
          openPot.title = "状态：占用；时间：8-15";
      } else if (data[value]['status'] == 2) {
          // 当状态为2的时候，表示已经被锁定，不可进行预约
          openPot.className = openPot.className + ' '+'_grey' ;
          openPot.title = "状态：锁定；时间：8-15";
      }
    }

  </script>

  <script type="text/javascript">
    // 进行时间格式的转化
    Date.prototype.Format = function (fmt) {
        var o = {
            "M+": this.getMonth() + 1, //月份 
            "d+": this.getDate(), //日 
            "H+": this.getHours(), //小时 
            "m+": this.getMinutes(), //分 
            "s+": this.getSeconds(), //秒 
            "q+": Math.floor((this.getMonth() + 3) / 3), //季度 
            "S": this.getMilliseconds() //毫秒 
        };
        if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
        for (var k in o)
        if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
        return fmt;
    }

    // 计算两者之间的时间差
    function GetDateDiff(startTime, endTime, diffType) {
        //将xxxx-xx-xx的时间格式，转换为 xxxx/xx/xx的格式 
        startTime = startTime.replace(/\-/g, "/");
        endTime = endTime.replace(/\-/g, "/");

        //将计算间隔类性字符转换为小写
        diffType = diffType.toLowerCase();
        var sTime = new Date(startTime);      //开始时间
        var eTime = new Date(endTime);  //结束时间
        //作为除数的数字
        var divNum = 1;
        switch (diffType) {
            case "second":
                divNum = 1000;
                break;
            case "minute":
                divNum = 1000 * 60;
                break;
            case "hour":
                divNum = 1000 * 3600;
                break;
            case "day":
                divNum = 1000 * 3600 * 24;
                break;
            default:
                break;
        }
        return parseInt((eTime.getTime() - sTime.getTime()) / parseInt(divNum));
    }

// var testDate = new Date();
// var testStr = testDate.format("yyyy-MM-dd hh:mm:ss");

// var result = GetDateDiff("2010-02-26 16:00:00", testStr, "day");
// document.write("两者时间差为：" + result + "天了。");

    //  获取选择的项目
    function fun(){
        obj = document.getElementsByName("test");
        check_val = [];
        for(k in obj){
            if(obj[k].checked)
                check_val.push(obj[k].value);
        }
        document.getElementById('sswz').value = "露天盆栽场";
        document.getElementById('ssmc').value = "露天盆栽";
        document.getElementById('ssbh').value = check_val;
        document.getElementById('syz').value = "theUser";
        document.getElementById('kssj').value = new Date().Format("yyyy-MM-dd");
    }

    // 预约条件的判断
    function fun1() {
      var startTime = document.getElementById('kssj').value;
      var endTime = document.getElementById('zzsj').value;
      var enterStartTime = new Date(startTime);
      var enterEndTime = new Date(endTime);

      if (document.getElementById('ssbh').value == "") {
        alert("请选择要预约的设备");
      }

      if (document.getElementById('ypwz') == "" || document.getElementById('lxfs1') == "" || document.getElementById('yjxm') == "") {
        alert("请填写完整的信息后提交");
      }

      if (startTime == "") {
        alert("请填写预约开始时间");
      } 
      if (endTime == "") {
        alert("请填写预约结束时间");
      }
      if (enterStartTime > enterEndTime) {
        alert("预约规则错误！");
      } else if (GetDateDiff(startTime, endTime, "day") == 0) {
        alert("预约的单位为一天");
      }
    }

    // 生成相关的word文档
    function fun2() {
      console.log(23);
      var content = document.getElementById('sqbg');
      var hint = content.getElementsByClassName('hint');
      var input = content.getElementsByClassName('input');
      var data = new Array() ;
      for (var i = hint.length - 1; i >= 0; i--) {
        var field = new Array();
        field.push(hint[i].innerHTML);
        field.push(input[i].innerHTML);
        data.push(field);
      }
      data = JSON.stringify(data);
      console.log(data);
      $.ajax({  
        type: "POST",  
        url: "/hzaulab/index.php/Home/Field/doWord", //orderModifyStatus  
        data: {
          "hahaha": data,
        }, 
        dataType:"json",  
        async:false,  
        cache:false,  
        success: function(data){  
            // alert("文本生成成功！");
        },  
        error: function(json){  
            alert("订单取消异常，请刷新后重试...");  
        }  
    });
  }
  </script>

</body>
</html>