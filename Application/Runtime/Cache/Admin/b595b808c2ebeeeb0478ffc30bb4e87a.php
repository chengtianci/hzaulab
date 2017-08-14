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
          <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>图片轮播 <small>Picture Gallery</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li class="panel_toolbox_li">
                          <a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                      <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="row">
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%;height: 100%; display: block;" src="/hzaulab/Public/face/images/slider/lrgimg4.jpg" alt="image" />
                                        <div class="mask">
                                            <p>新闻标题 1</p>
                                            <div class="tools tools-bottom">
                                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></a>
                                                <a href="/hzaulab/index.php/Admin/Index/imgDelete/id/<<?php echo ($vo["id"]); ?>>/ty/<<?php echo ($vo["type"]); ?>>"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%;height: 100%; display: block;" src="/hzaulab/Public/face/images/slider/lrgimg5.jpg" alt="image" />
                                        <div class="mask">
                                            <p>新闻标题 2</p>
                                            <div class="tools tools-bottom">
                                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></a>
                                                <a href="/hzaulab/index.php/Admin/Index/imgDelete/id/<<?php echo ($vo["id"]); ?>>/ty/<<?php echo ($vo["type"]); ?>>"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%;height: 100%; display: block;" src="/hzaulab/Public/face/images/slider/lrgimg2.jpg" alt="image" />
                                        <div class="mask">
                                            <p>新闻标题 3</p>
                                            <div class="tools tools-bottom">
                                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></a>
                                                <a href="/hzaulab/index.php/Admin/Index/imgDelete/id/<<?php echo ($vo["id"]); ?>>/ty/<<?php echo ($vo["type"]); ?>>"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%;height: 100%; display: block;" src="/hzaulab/Public/face/images/slider/lrgimg6.jpg" alt="image" />
                                        <div class="mask">
                                            <p>新闻标题 4</p>
                                            <div class="tools tools-bottom">
                                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></a>
                                                <a href="/hzaulab/index.php/Admin/Index/imgDelete/id/<<?php echo ($vo["id"]); ?>>/ty/<<?php echo ($vo["type"]); ?>>"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%;height: 100%; display: block;" src="/hzaulab/Public/face/images/slider/lrgimg6.jpg" alt="image" />
                                        <div class="mask">
                                            <p>新闻标题 5</p>
                                            <div class="tools tools-bottom">
                                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></a>
                                                <a href="/hzaulab/index.php/Admin/Index/imgDelete/id/<<?php echo ($vo["id"]); ?>>/ty/<<?php echo ($vo["type"]); ?>>"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <div style="width:100%;float:left;">
                            <p style="color: red;">最多添加五项！！</p>
                            <div data-toggle="modal" data-target="#myModal2" class="gallery_add">添加</div>
                        </div>
                    </div>
                  </div>
                </div>
          </div>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>通知公告<small>Notice</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th style="width:15%;">Date</th>
                    <th style="width:20%;">operation</th>
                  </tr>
                  </thead>


                  <tbody>

                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Index/">r_name</a></td>
                      <td>r_time</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#myModal3" >修改 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Index/" >删除 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>

                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Index/">r_name</a></td>
                      <td>$vo.r_time</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#myModal3" >修改 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Index/" >删除 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>

                  <!-- <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k % 2 == 0) { ?>
                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Index/fictitious_show1_update/id/<<?php echo ($vo["id"]); ?>>/by/1"><<?php echo ($vo["r_name"]); ?>></a></td>
                      <td><<?php echo ($vo["r_time"]); ?>></td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#myModal3" >修改 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Index/" >删除 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <?php } else { ?>
                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Index/fictitious_show1_update/id/<<?php echo ($vo["id"]); ?>>/by/1"><<?php echo ($vo["r_name"]); ?>></a></td>
                      <td><<?php echo ($vo["r_time"]); ?>></td>
                      <td><a href="#" data-toggle="modal" data-target="#myModal3" >修改 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Index/" >删除 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <?php } endforeach; endif; else: echo "" ;endif; ?> -->
                  </tbody>
                </table>
                <br><br>
                <div data-toggle="modal" data-target="#myModal4" class="gallery_add">添加</div>
              </div>
            </div>
          </div>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>服务指南<small>Service Intro</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th style="width:15%;">Date</th>
                    <th style="width:20%;">operation</th>
                  </tr>
                  </thead>


                  <tbody>

                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Index/">r_name</a></td>
                      <td>r_time</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#myModal5" >修改 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Index/" >删除 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>

                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Index/">r_name</a></td>
                      <td>$vo.r_time</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#myModal5" >修改 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Index/" >删除 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>

                  <!-- <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k % 2 == 0) { ?>
                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Index/fictitious_show1_update/id/<<?php echo ($vo["id"]); ?>>/by/1"><<?php echo ($vo["r_name"]); ?>></a></td>
                      <td><<?php echo ($vo["r_time"]); ?>></td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#myModal5" >修改 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Index/" >删除 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <?php } else { ?>
                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Index/fictitious_show1_update/id/<<?php echo ($vo["id"]); ?>>/by/1"><<?php echo ($vo["r_name"]); ?>></a></td>
                      <td><<?php echo ($vo["r_time"]); ?>></td>
                      <td><a href="#" data-toggle="modal" data-target="#myModal5" >修改 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Index/" >删除 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <?php } endforeach; endif; else: echo "" ;endif; ?> -->
                  </tbody>
                </table>
                <br><br>
                <div data-toggle="modal" data-target="#myModal6" class="gallery_add">添加</div>
              </div>
            </div>
          </div>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>下载专区<small>Download</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th style="width:15%;">Date</th>
                    <th style="width:20%;">operation</th>
                  </tr>
                  </thead>


                  <tbody>

                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Index/">r_name</a></td>
                      <td>r_time</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#myModal7" >修改 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Index/" >删除 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>

                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Index/">r_name</a></td>
                      <td>$vo.r_time</td>
                      <td>
                          <a href="#" data-toggle="modal" data-target="#myModal7" >修改 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Index/" >删除 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>

                  <!-- <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k % 2 == 0) { ?>
                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Index/fictitious_show1_update/id/<<?php echo ($vo["id"]); ?>>/by/1"><<?php echo ($vo["r_name"]); ?>></a></td>
                      <td><<?php echo ($vo["r_time"]); ?>></td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#myModal7" >修改 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Index/" >删除 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <?php } else { ?>
                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Index/fictitious_show1_update/id/<<?php echo ($vo["id"]); ?>>/by/1"><<?php echo ($vo["r_name"]); ?>></a></td>
                      <td><<?php echo ($vo["r_time"]); ?>></td>
                      <td><a href="#" data-toggle="modal" data-target="#myModal7" >修改 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Index/" >删除 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <?php } endforeach; endif; else: echo "" ;endif; ?> -->
                  </tbody>
                </table>
                <br><br>
                <div data-toggle="modal" data-target="#myModal8" class="gallery_add">添加</div>
              </div>
            </div>
          </div>
          <!-- 模态框（Modal）编辑图片 -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                      图片轮播-修改
                    </h4>
                  </div>
                  <div class="modal-body">
                    
                    <form class="form" action="" method="post">
                      <input type="text" class="gallery_title" name="gallery_title" value="<<?php echo ($vo["imgname"]); ?>>" placeholder="Fill in the title, please">
                      
                      <br><input type="file" name="gallery_file">
                    </form>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary">提交</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal -->
            </div>
          <!-- 模态框（Modal）添加 -->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                      图片轮播-添加
                    </h4>
                  </div>
                  <div class="modal-body">
                      <form action="" enctype="multipart/form-data" method="post">
                          <input type="text" name = "ty" value="0" hidden>
                          <input type="text" class="gallery_title" id="gallery_title" name="gallery_title" placeholder="Fill in the title, please">
                          <br><input type="file" name="gallery_file"> <br>
                          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                          <button type="submit" id="saveContent" class="btn btn-primary">添加</button>
                      </form>

                  </div>
                  <div class="modal-footer">
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal -->
            </div> 

            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                      通知公告-修改
                    </h4>
                  </div>
                  <div class="modal-body">
                    
                    <form class="form" action="" method="post">
                      <input type="text" id="idInfor" value="<<?php echo ($data["id"]); ?>>" hidden>
                      <input type="text" class="gallery_title" name="gallery_title" id="gallery_title" placeholder="标题">
                       <div id="editor1"></div>
                     
                      <script type="text/javascript" src="/hzaulab/Public/Js/wangEditor.min.js"></script>
                      <script type="text/javascript">
                          var E = window.wangEditor;
                          var editor = new E( document.getElementById('editor1') );
                          editor.customConfig.menus = [
                                                  'head',  // 标题
                                                  'bold',  // 粗体
                                                  'italic',  // 斜体
                                                  'underline',  // 下划线
                                                  'strikeThrough',  // 删除线
                                                  'foreColor',  // 文字颜色
                                                  'backColor',  // 背景颜色
                                                  'link',  // 插入链接
                                                  'list',  // 列表
                                                  'justify',  // 对齐方式
                                                  'quote',  // 引用
                                                  'emoticon',  // 表情
                                                  'image',  // 插入图片
                                                  'table',  // 表格
                                                  'video',  // 插入视频
                                              ]
                          editor.create();
                      </script>
                    </form>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary">提交</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal -->
            </div>   

            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                      通知公告-添加
                    </h4>
                  </div>
                  <div class="modal-body">
                    
                    <form class="form" action="" method="post">
                      <input type="text" id="idInfor" value="<<?php echo ($data["id"]); ?>>" hidden>
                      <input type="text" class="gallery_title" name="gallery_title" id="gallery_title" placeholder="标题">
                       <div id="editor2"></div>
                     
                      <script type="text/javascript" src="/hzaulab/Public/Js/wangEditor.min.js"></script>
                      <script type="text/javascript">
                          var E = window.wangEditor;
                          var editor = new E( document.getElementById('editor2') );
                          editor.customConfig.menus = [
                                                  'head',  // 标题
                                                  'bold',  // 粗体
                                                  'italic',  // 斜体
                                                  'underline',  // 下划线
                                                  'strikeThrough',  // 删除线
                                                  'foreColor',  // 文字颜色
                                                  'backColor',  // 背景颜色
                                                  'link',  // 插入链接
                                                  'list',  // 列表
                                                  'justify',  // 对齐方式
                                                  'quote',  // 引用
                                                  'emoticon',  // 表情
                                                  'image',  // 插入图片
                                                  'table',  // 表格
                                                  'video',  // 插入视频
                                              ]
                          editor.create();
                      </script>
                    </form>
                  </div>

                  <div class="modal-footer">
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal -->
            </div>  

            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                      服务指南-修改
                    </h4>
                  </div>
                  <div class="modal-body">
                    
                    <form class="form" action="" method="post">
                      <input type="text" id="idInfor" value="<<?php echo ($data["id"]); ?>>" hidden>
                      <input type="text" class="gallery_title" name="gallery_title" id="gallery_title" placeholder="标题">
                       <div id="editor3"></div>
                     
                      <script type="text/javascript" src="/hzaulab/Public/Js/wangEditor.min.js"></script>
                      <script type="text/javascript">
                          var E = window.wangEditor;
                          var editor = new E( document.getElementById('editor3') );
                          editor.customConfig.menus = [
                                                  'head',  // 标题
                                                  'bold',  // 粗体
                                                  'italic',  // 斜体
                                                  'underline',  // 下划线
                                                  'strikeThrough',  // 删除线
                                                  'foreColor',  // 文字颜色
                                                  'backColor',  // 背景颜色
                                                  'link',  // 插入链接
                                                  'list',  // 列表
                                                  'justify',  // 对齐方式
                                                  'quote',  // 引用
                                                  'emoticon',  // 表情
                                                  'image',  // 插入图片
                                                  'table',  // 表格
                                                  'video',  // 插入视频
                                              ]
                          editor.create();
                      </script>
                    </form>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary">提交</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal -->
            </div>   

            <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                      服务指南-添加
                    </h4>
                  </div>
                  <div class="modal-body">
                    
                    <form class="form" action="" method="post">
                      <input type="text" id="idInfor" value="<<?php echo ($data["id"]); ?>>" hidden>
                      <input type="text" class="gallery_title" name="gallery_title" id="gallery_title" placeholder="标题">
                       <div id="editor4"></div>
                     
                      <script type="text/javascript" src="/hzaulab/Public/Js/wangEditor.min.js"></script>
                      <script type="text/javascript">
                          var E = window.wangEditor;
                          var editor = new E( document.getElementById('editor4') );
                          editor.customConfig.menus = [
                                                  'head',  // 标题
                                                  'bold',  // 粗体
                                                  'italic',  // 斜体
                                                  'underline',  // 下划线
                                                  'strikeThrough',  // 删除线
                                                  'foreColor',  // 文字颜色
                                                  'backColor',  // 背景颜色
                                                  'link',  // 插入链接
                                                  'list',  // 列表
                                                  'justify',  // 对齐方式
                                                  'quote',  // 引用
                                                  'emoticon',  // 表情
                                                  'image',  // 插入图片
                                                  'table',  // 表格
                                                  'video',  // 插入视频
                                              ]
                          editor.create();
                      </script>
                    </form>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary">提交</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal -->
            </div>

            <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                      下载专区-修改
                    </h4>
                  </div>
                  <div class="modal-body">
                      <form action="" enctype="multipart/form-data" method="post">
                          <input type="text" name = "ty" value="0" hidden>
                          <input type="text" class="gallery_title" id="gallery_title" name="gallery_title" placeholder="Fill in the title, please">
                          <br><input type="file" name="gallery_file"> <br>
                          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                          <button type="submit" id="saveContent" class="btn btn-primary">修改</button>
                      </form>

                  </div>
                  <div class="modal-footer">
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal -->
            </div>

            <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                      下载专区-添加
                    </h4>
                  </div>
                  <div class="modal-body">
                      <form action="" enctype="multipart/form-data" method="post">
                          <input type="text" name = "ty" value="0" hidden>
                          <input type="text" class="gallery_title" id="gallery_title" name="gallery_title" placeholder="Fill in the title, please">
                          <br><input type="file" name="gallery_file"> <br>
                          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                          <button type="submit" id="saveContent" class="btn btn-primary">添加</button>
                      </form>

                  </div>
                  <div class="modal-footer">
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal -->
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