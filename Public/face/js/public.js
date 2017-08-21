$(function(){
//****************************  导航效果  ****************************
  // $("#nav ul li ul").hover(function(){
  //   $(this).siblings("a").css({"background":"#FFF","color":" green"});
  // },function(){
  //   $(this).siblings("a").css({"background":"","color":""});
  // });
  $("#nav .navOne_class").hover(function(){
    $(this).children("ul").stop(true,true).slideDown("300");
  },function(){
    $(this).children("ul").stop(true,true).slideUp(200);
  });
//****************************限制多行字数长度****************************
  function Text_long($obj,maxtext){
    if($obj.text().length > maxtext){
      $obj.text($obj.text().substring(0,maxtext));
      $obj.html($obj.html()+'···')
    }
  }
  //中心动态、精品课程
  $(" #course .course_text").each(function(){
    var maxtext = 100;
    Text_long($(this),maxtext);
  });
  $("#latestnews .center_text").each(function(){
    var maxtext = 145;
    Text_long($(this),maxtext);
  });
  //成果展示、美图欣赏
   $("#show .show_text").each(function(){
    var maxtext = 95;
    Text_long($(this),maxtext);
  });
  
//****************************左导航高度自动变化****************************
  var article = $("#main_right .article,#main_right .main_list").height();
  var nav_height = article; 
  //注：#main_nav 与 #main_nav ul已设置最小高度
  $("#main_nav").css("height",nav_height + 120);
  $("#main_nav .ultop").css("height",nav_height + 53);
//****************************左导航多级菜单效果****************************
  $("#main_nav .ultop li ul").hide(); 
  $("#main_nav li.ulhidde ul").slideToggle("slow");  
  $("#main_nav li.ulhidde").click(function(){
      $(this).siblings().find("ul").slideUp("normal"); 
      $(this).children("ul").slideToggle("normal"); 
      return false;
  });


//****************************     登陆、注册    ****************************
  //按钮的透明度
  $(".okbtn").hover(function (){
    $(this).stop().animate({
      opacity: '1'
    }, 600);
  }, function () {
    $(this).stop().animate({
      opacity: '0.6'
    }, 700);
  });

//***********登陆***********
  //弹出登录
  $("#header_right .logBut").on('click', function () {
    $("body").append("<div id='mask'></div>");
    $("#mask").addClass("mask").fadeIn("slow");
    $("#LoginBox").fadeIn("slow");
  });
  //文本框不允许为空---按钮触发
  $("#okbtn").on('click', function () {
    var logName = $("#logName").val();
    var logPwd = $("#logPwd").val();
    if (logName == "" || logName == undefined || logName == null) {
      if (logPwd == "" || logPwd == undefined || logPwd == null) {
        $(".warning").css({ display: 'block' });
      }
      else {
        $("#warn").css({ display: 'block' });
        $("#warn2").css({ display: 'none' });
      }
    }
    else {
      if (logPwd == "" || logPwd == undefined || logPwd == null) {
        $("#warn").css({ display: 'none' });
        $(".warn2").css({ display: 'block' });
      }
      else {
        $(".warning").css({ display: 'none' });
      }
    }
  });
  //文本框不允许为空---单个文本触发
  $("#logName").on('blur', function () {
    var logName = $("#logName").val();
    if (logName == "" || logName == undefined || logName == null) {
      $("#warn").css({ display: 'block' });
    }
    else {
      $("#warn").css({ display: 'none' });
    }
  });
  $("#logName").on('focus', function () {
    $("#warn").css({ display: 'none' });
  });
  //
  $("#logPwd").on('blur', function () {
    var logName = $("#logPwd").val();
    if (logName == "" || logName == undefined || logName == null) {
      $("#warn2").css({ display: 'block' });
    }
    else {
      $("#warn2").css({ display: 'none' });
    }
  });
  $("#logPwd").on('focus', function () {
    $("#warn2").css({ display: 'none' });
  });
  //关闭
  $(".close_btn").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
    $("#LoginBox").fadeOut("fast");
    $("#mask").css({ display: 'none' });
  });
  
//***********注册***********
  //弹出登录
  $(".reg_link").on('click', function () {
    $("body").append("<div id='mask'></div>");
    $("#mask").addClass("mask").fadeIn("slow");
    $("#RegisterBox").fadeIn("slow");
  });
  //关闭
  $(".close_btn").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
    $("#RegisterBox").fadeOut("fast");
    $("#mask").css({ display: 'none' });
  });

})