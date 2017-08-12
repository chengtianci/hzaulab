<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>华中农业大学实验教学中心互动平台</title>
  	<link rel="shortcut icon" href="/hzaulab/back.ico" type="image/x-icon" />

	  <!-- Bootstrap -->
    <link href="/hzaulab/Public/back/include/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- 图标引入 -->
    <link href="/hzaulab/Public/back/include/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="/hzaulab/Public/back/include/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/hzaulab/Public/back/css/custom.min.css" rel="stylesheet">
    <link href="/hzaulab/Public/back/css/public.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="/hzaulab/Public/back/css/Room.css">
</head>
    <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!--************************************************* 左导航 *************************************************-->
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
        <!-- 左导航中部 -->
            <div class="navbar nav_title" style="border: 0;">
  <a href="#" class="site_title"> <i class="fa fa-fire"></i> <span>Teaching Admin</span></a>
</div>

<div class="clearfix"></div>

<!-- menu profile quick info -->
<div class="profile clearfix">
  <div class="profile_pic">
    <img src="/hzaulab/Public/back/images/user.png" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>
    <h2>Mr.Tian</h2>
  </div>
</div>
              <br />

              <!-- 左导航中部 -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>2017/5/16</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-home"></i> 首页管理 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzaulab/index.php/Admin/Index/index">页面管理</a></li>              
        </ul>
      </li>
      <li><a><i class="fa fa-edit"></i> 平台概况 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzaulab/index.php/Admin/Introduction/introduction">平台概况</a></li>
          <li><a href="/hzaulab/index.php/Admin/Introduction/notice">通知公告</a></li>
          <li><a href="/hzaulab/index.php/Admin/Introduction/connect">联系我们</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-desktop"></i> 大田设施<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzaulab/index.php/Admin/Field/field">农田土地</a></li>
          <li><a href="/hzaulab/index.php/Admin/Field/OpenPot">露天盆栽场</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-mortar-board"></i> 培养室<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          	<li><a href="/hzaulab/index.php/Admin/Room/WimbledonRoom">温网室</a></li>
          	<li><a href="/hzaulab/index.php/Admin/Room/LightCultureRoom">光照培养室</a></li>
      	</ul>
      <li><a><i class="fa fa-share-alt-square"></i>实验室 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="/hzaulab/index.php/Admin/Laboratory/publiclab">公共实验室</a></li>
            <li><a href="/hzaulab/index.php/Admin/Laboratory/teachlab">教学实验室</a></li>
            <li><a href="/hzaulab/index.php/Admin/Laboratory/sublab">实验辅助室</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-flask"></i>仪器设备<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzaulab/index.php/Admin/Equipment/equipment">仪器设备</a></li>
          <li><a href="/hzaulab/index.php/Admin/Equipment/consume">试剂耗材</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-user"></i>规章制度<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzaulab/index.php/Admin/Regulation/regulation">规章制度</a></li>
          <li><a href="/hzaulab/index.php/Admin/Regulation/service">服务指南</a></li>
          <li><a href="/hzaulab/index.php/Admin/Regulation/download">下载专区</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

              <!--  左导航底部 -->
             <div class="sidebar-footer hidden-small">
  <a data-toggle="tooltip" data-placement="top" title="待开发">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="待开发">
    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="待开发">
    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Logout" href="/hzaulab/index.php/Admin/Index/index">
    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
  </a>
</div>

          </div>
        </div>

        <!--************************************************* 顶导航 *************************************************-->
        <div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="/hzaulab/Public/back/images/user.png" alt="">Mr.Tian
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a data-toggle="modal" data-target="#MyEdit"> Edit Me</a></li>
            <li>
              <a href="javascript:;">
                <span class="badge bg-red pull-right">待开发</span>
                <span>Settings</span>
              </a>
            </li>

            <li><a href="/hzaulab/index.php/Admin/Index/index"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>

       
      </ul>
    </nav>
  </div>
</div>

<!--  Edit模态框 -->
<div class="modal fade" id="MyEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
          Edit Message
        </h4>
      </div>
      <div class="modal-body">
        
        <form action="" method="post">
          Name：<input type="text"><br>
          Password: <input type="text">
          <br><input type="file" name="gallery_file">
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal -->
</div>
        <!--************************************************* 右内容 *************************************************-->
      <div class="right_col" role="main">

          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel" style="min-width:700px ;">
              <div class="x_title">
                <h2>东附楼B102<small>Light Culture Room</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content" >
                <div class="B102">
                  <div class="left">
                    <table>
                      <tr>
                        <td><b>1-3-1</b></td>
                        <td><b>1-3-2</b></td>
                        <td><b>1-3-3</b></td>
                      </tr>
                      <tr>
                        <td><b>1-2-1</b></td>
                        <td><b>1-2-2</b></td>
                        <td><b>1-2-3</b></td>
                      </tr>
                      <tr>
                        <td><b>1-1-1</b></td>
                        <td><b>1-1-2</b></td>
                        <td><b>1-1-3</b></td>
                      </tr>
                    </table>
                    <div class="door"><div class="doorl">东附楼</div><div class="doorr">B102</div></div>
                  </div>
                  <div class="part1"></div>
                  <div class="right">
                    <div class="upwards">
                      <table>
                        <tr>
                          <td><b>1-1-1</b></td>
                          <td><b>1-2-1</b></td>
                          <td><b>1-3-1</b></td>
                          <td><b>1-4-1</b></td>
                        </tr>
                        <tr>
                          <td><b>1-1-2</b></td>
                          <td><b>1-2-2</b></td>
                          <td><b>1-3-2</b></td>
                          <td><b>1-4-2</b></td>
                        </tr>
                        <tr>
                          <td><b>1-1-3</b></td>
                          <td><b>1-2-3</b></td>
                          <td><b>1-3-3</b></td>
                          <td><b>1-4-3</b></td>
                        </tr>
                      </table>
                      <div class="part2">
                        <div class="le">D1</div>
                        <div class="ri"></div>
                      </div>
                      <table>
                        <tr>
                          <td><b>2-1-1</b></td>
                          <td><b>2-2-1</b></td>
                          <td><b>2-3-1</b></td>
                          <td><b>2-4-1</b></td>
                        </tr>
                        <tr>
                          <td><b>2-1-2</b></td>
                          <td><b>2-2-2</b></td>
                          <td><b>2-3-2</b></td>
                          <td><b>2-4-2</b></td>
                        </tr>
                        <tr>
                          <td><b>2-1-3</b></td>
                          <td><b>2-2-3</b></td>
                          <td><b>2-3-3</b></td>
                          <td><b>2-4-3</b></td>
                        </tr>
                        <tr>
                          <td><b>2-1-4</b></td>
                          <td><b>2-2-4</b></td>
                          <td><b>2-3-4</b></td>
                          <td><b>2-4-4</b></td>
                        </tr>
                        <tr>
                          <td><b>2-1-5</b></td>
                          <td><b>2-2-5</b></td>
                          <td><b>2-3-5</b></td>
                          <td><b>2-4-5</b></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td><b>3-1-1</b></td>
                          <td><b>3-2-1</b></td>
                          <td><b>3-3-1</b></td>
                          <td><b>3-4-1</b></td>
                        </tr>
                        <tr>
                          <td><b>3-1-2</b></td>
                          <td><b>3-2-2</b></td>
                          <td><b>3-3-2</b></td>
                          <td><b>3-4-2</b></td>
                        </tr>
                        <tr>
                          <td><b>3-1-3</b></td>
                          <td><b>3-2-3</b></td>
                          <td><b>3-3-3</b></td>
                          <td><b>3-4-3</b></td>
                        </tr>
                        <tr>
                          <td><b>3-1-4</b></td>
                          <td><b>3-2-4</b></td>
                          <td><b>3-3-4</b></td>
                          <td><b>3-4-4</b></td>
                        </tr>
                        <tr>
                          <td><b>3-1-5</b></td>
                          <td><b>3-2-5</b></td>
                          <td><b>3-3-5</b></td>
                          <td><b>3-4-5</b></td>
                        </tr>
                      </table>
                      <div class="part3">
                        <div class="le">D2</div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="downwards">
                      <table>
                        <tr>
                          <td><b>2-1-1</b></td>
                          <td><b>2-2-1</b></td>
                          <td><b>2-3-1</b></td>
                          <td><b>2-4-1</b></td>
                        </tr>
                        <tr>
                          <td><b>2-1-2</b></td>
                          <td><b>2-2-2</b></td>
                          <td><b>2-3-2</b></td>
                          <td><b>2-4-2</b></td>
                        </tr>
                        <tr>
                          <td><b>2-1-3</b></td>
                          <td><b>2-2-3</b></td>
                          <td><b>2-3-3</b></td>
                          <td><b>2-4-3</b></td>
                        </tr>
                        <tr>
                          <td><b>2-1-4</b></td>
                          <td><b>2-2-4</b></td>
                          <td><b>2-3-4</b></td>
                          <td><b>2-4-4</b></td>
                        </tr>
                        <tr>
                          <td><b>2-1-5</b></td>
                          <td><b>2-2-5</b></td>
                          <td><b>2-3-5</b></td>
                          <td><b>2-4-5</b></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td><b>3-1-1</b></td>
                          <td><b>3-2-1</b></td>
                          <td><b>3-3-1</b></td>
                          <td><b>3-4-1</b></td>
                        </tr>
                        <tr>
                          <td><b>3-1-2</b></td>
                          <td><b>3-2-2</b></td>
                          <td><b>3-3-2</b></td>
                          <td><b>3-4-2</b></td>
                        </tr>
                        <tr>
                          <td><b>3-1-3</b></td>
                          <td><b>3-2-3</b></td>
                          <td><b>3-3-3</b></td>
                          <td><b>3-4-3</b></td>
                        </tr>
                        <tr>
                          <td><b>3-1-4</b></td>
                          <td><b>3-2-4</b></td>
                          <td><b>3-3-4</b></td>
                          <td><b>3-4-4</b></td>
                        </tr>
                        <tr>
                          <td><b>3-1-5</b></td>
                          <td><b>3-2-5</b></td>
                          <td><b>3-3-5</b></td>
                          <td><b>3-4-5</b></td>
                        </tr>
                      </table>
                      <div class="part4"></div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel" style="min-width:800px ;">
              <div class="x_title">
                <h2>东附楼B103<small>Light Culture Room</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="B103">
                  <div class="up">
                    <div class="le">
                    <div class="door">
                        <div class="door1">东附楼</div>
                        <div class="door2">B103</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="left">
                      <table>
                        <tr>
                          <td><b>8-3-1</b></td>
                          <td><b>8-3-2</b></td>
                          <td><b>8-3-3</b></td>
                        </tr>
                        <tr>
                          <td><b>8-2-1</b></td>
                          <td><b>8-2-2</b></td>
                          <td><b>8-2-3</b></td>
                        </tr>
                        <tr>
                          <td><b>8-1-1</b></td>
                          <td><b>8-1-2</b></td>
                          <td><b>8-1-3</b></td>
                        </tr>
                      </table>
                    </div>
                    </div>
                    <div class="right">
                      <table>
                        <tr>
                          <td><b>1-1-1</b></td>
                          <td><b>1-2-1</b></td>
                          <td><b>1-3-1</b></td>
                          <td><b>1-4-1</b></td>
                        </tr>
                        <tr>
                          <td><b>1-1-2</b></td>
                          <td><b>1-2-2</b></td>
                          <td><b>1-3-2</b></td>
                          <td><b>1-4-2</b></td>
                        </tr>
                        <tr>
                          <td><b>1-1-3</b></td>
                          <td><b>1-2-3</b></td>
                          <td><b>1-3-3</b></td>
                          <td><b>1-4-3</b></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td><b>2-1-1</b></td>
                          <td><b>2-2-1</b></td>
                          <td><b>2-3-1</b></td>
                          <td><b>2-4-1</b></td>
                        </tr>
                        <tr>
                          <td><b>2-1-2</b></td>
                          <td><b>2-2-2</b></td>
                          <td><b>2-3-2</b></td>
                          <td><b>2-4-2</b></td>
                        </tr>
                        <tr>
                          <td><b>2-1-3</b></td>
                          <td><b>2-2-3</b></td>
                          <td><b>2-3-3</b></td>
                          <td><b>2-4-3</b></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td><b>3-1-1</b></td>
                          <td><b>3-2-1</b></td>
                          <td><b>3-3-1</b></td>
                          <td><b>3-4-1</b></td>
                        </tr>
                        <tr>
                          <td><b>3-1-2</b></td>
                          <td><b>3-2-2</b></td>
                          <td><b>3-3-2</b></td>
                          <td><b>3-4-2</b></td>
                        </tr>
                        <tr>
                          <td><b>3-1-3</b></td>
                          <td><b>3-2-3</b></td>
                          <td><b>3-3-3</b></td>
                          <td><b>3-4-3</b></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td><b>4-1-1</b></td>
                          <td><b>4-2-1</b></td>
                          <td><b>4-3-1</b></td>
                          <td><b>4-4-1</b></td>
                        </tr>
                        <tr>
                          <td><b>4-1-2</b></td>
                          <td><b>4-2-2</b></td>
                          <td><b>4-3-2</b></td>
                          <td><b>4-4-2</b></td>
                        </tr>
                        <tr>
                          <td><b>4-3-1</b></td>
                          <td><b>4-3-2</b></td>
                          <td><b>4-3-3</b></td>
                          <td><b>4-3-4</b></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td><b>5-1-1</b></td>
                          <td><b>5-2-1</b></td>
                          <td><b>5-3-1</b></td>
                          <td><b>5-4-1</b></td>
                        </tr>
                        <tr>
                          <td><b>5-1-2</b></td>
                          <td><b>5-2-2</b></td>
                          <td><b>5-3-2</b></td>
                          <td><b>5-4-2</b></td>
                        </tr>
                        <tr>
                          <td><b>5-1-3</b></td>
                          <td><b>5-2-3</b></td>
                          <td><b>5-3-3</b></td>
                          <td><b>5-4-3</b></td>
                        </tr>
                      </table>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="down">
                  <div class="part1"></div>
                    <div class="le">
                      <table>
                        <tr>
                          <td><b>7-1-1</b></td>
                          <td><b>7-2-1</b></td>
                          <td><b>7-3-1</b></td>
                        </tr>
                        <tr>
                          <td><b>7-1-2</b></td>
                          <td><b>7-2-2</b></td>
                          <td><b>7-3-2</b></td>
                        </tr>
                        <tr>
                          <td><b>7-1-3</b></td>
                          <td><b>7-2-3</b></td>
                          <td><b>7-3-3</b></td>
                        </tr>
                      </table>
                    </div>
                    <div class="part2"></div>
                    <div class="ri">
                    <table>
                        <tr>
                          <td><b>6-1-1</b></td>
                          <td><b>6-2-1</b></td>
                          <td><b>6-3-1</b></td>
                        </tr>
                        <tr>
                          <td><b>6-1-2</b></td>
                          <td><b>6-2-2</b></td>
                          <td><b>6-3-2</b></td>
                        </tr>
                        <tr>
                          <td><b>6-1-3</b></td>
                          <td><b>6-2-3</b></td>
                          <td><b>6-3-3</b></td>
                        </tr>
                      </table></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="clearfix"></div>

              </div>
            </div>
          </div>
            

      </div>
        <!--************************************************* 底部版权 *************************************************-->
      <footer id="footer">
    <div class="pull-right">
		CopyRight©2017 <a href="/hzaulab/index.php/Home/Index/index.html" target="_blank" title="华中农业大学作物学实验教学中心">华中农业大学作物学实验教学中心</a> <a href="http://www.52feidian.com/" title="华中农业大学 沸点工作室" target="_blank">华中农业大学 沸点工作室</a>
	</div>
	<div class="clearfix"></div>    
</footer>


      </div>
    </div>

    <!--************************************************* publc JS *************************************************-->
     <!-- jQuery -->
<script src="/hzaulab/Public/back/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/hzaulab/Public/back/include/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Custom Theme Scripts -->
<script src="/hzaulab/Public/back/js/custom.min.js"></script>



    <!-- <script src="/hzaulab/Public/back/include/datatables.net/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="/hzaulab/Public/back/include/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->
  </body>
</html>