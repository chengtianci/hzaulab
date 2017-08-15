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
    <link rel="stylesheet" type="text/css" href="/hzaulab/Public/back/css/Wimbledon.css">
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
            <div class="x_panel" style="min-width: 865px;">
              <div class="x_title">
                <h2>山南温网室<small>Wimbledon Room</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form>
                  <div class="southWimbledon">
                  <div class="le">
                    <div class="up">
                      <table>
                        <tr><td><input type="checkbox" name=""><br><b>SC1-1</b></td></tr>
                      </table>
                      <table>
                        <tr><td><input type="checkbox" name=""><br><b>SC1-2</b></td></tr>
                      </table>
                    </div>
                    <div class="part1"></div>
                    <div class="down">
                      <table>
                        <tr><td><input type="checkbox" name=""><br><b>SC1-3</b></td></tr>
                      </table>
                      <table>
                        <tr><td><input type="checkbox" name=""><br><b>SC1-4</b></td></tr>
                      </table>
                     </div>
                  </div>                                               
                  <div class="ri">
                    <div class="up">
                      <div class="first">
                        <div>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB1-1</b></td>
                              <td><input type="checkbox" name=""><br><b>SB1-3</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB1-5</b></td>
                              <td><input type="checkbox" name=""><br><b>SB1-7</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB1-2</b></td>
                              <td><input type="checkbox" name=""><br><b>SB1-4</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB1-6</b></td>
                              <td><input type="checkbox" name=""><br><b>SB1-8</b></td>
                            </tr>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                        <div>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB2-1</b></td>
                              <td><input type="checkbox" name=""><br><b>SB2-3</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB2-5</b></td>
                              <td><input type="checkbox" name=""><br><b>SB2-7</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB2-2</b></td>
                              <td><input type="checkbox" name=""><br><b>SB2-4</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB2-6</b></td>
                              <td><input type="checkbox" name=""><br><b>SB2-8</b></td>
                            </tr>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                        <div>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB3-1</b></td>
                              <td><input type="checkbox" name=""><br><b>SB3-3</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB3-5</b></td>
                              <td><input type="checkbox" name=""><br><b>SB3-7</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB3-2</b></td>
                              <td><input type="checkbox" name=""><br><b>SB3-4</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB3-6</b></td>
                              <td><input type="checkbox" name=""><br><b>SB3-8</b></td>
                            </tr>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                      <div class="second">
                        <div>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB4-1</b></td>
                              <td><input type="checkbox" name=""><br><b>SB4-3</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB4-5</b></td>
                              <td><input type="checkbox" name=""><br><b>SB4-7</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB4-2</b></td>
                              <td><input type="checkbox" name=""><br><b>SB4-4</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB4-6</b></td>
                              <td><input type="checkbox" name=""><br><b>SB4-8</b></td>
                            </tr>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                        <div>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB5-1</b></td>
                              <td><input type="checkbox" name=""><br><b>SB5-3</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB5-5</b></td>
                              <td><input type="checkbox" name=""><br><b>SB5-7</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB5-2</b></td>
                              <td><input type="checkbox" name=""><br><b>SB5-4</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB5-6</b></td>
                              <td><input type="checkbox" name=""><br><b>SB5-8</b></td>
                            </tr>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                        <div>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB6-1</b></td>
                              <td><input type="checkbox" name=""><br><b>SB6-3</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB6-5</b></td>
                              <td><input type="checkbox" name=""><br><b>SB6-7</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB6-2</b></td>
                              <td><input type="checkbox" name=""><br><b>SB6-4</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td><input type="checkbox" name=""><br><b>SB6-6</b></td>
                              <td><input type="checkbox" name=""><br><b>SB6-8</b></td>
                            </tr>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                      <div class="third">
                        <div class="col">
                          <div class="up">
                            <table>
                              <tr><td><input type="checkbox" name=""><br><b>SA1-1</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA1-3</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA1-5</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA1-7</b></td></tr>
                            </table>
                          </div>
                          <div class="spart"></div>
                          <div class="down">
                            <table>
                              <tr><td><input type="checkbox" name=""><br><b>SA1-9</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA1-11</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA1-13</b></td></tr>
                            </table>
                          </div>
                        </div>
                        <div class="col">
                          <div class="up">
                            <table>
                              <tr><td><input type="checkbox" name=""><br><b>SA1-2</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA1-4</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA1-6</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA1-8</b></td></tr>
                            </table>
                          </div>
                          <div class="spart"></div>
                          <div class="down">
                            <table>
                              <tr><td><input type="checkbox" name=""><br><b>SA1-10</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA1-12</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA1-14</b></td></tr>
                            </table>
                          </div>
                        </div>
                        <div class="col">
                          <div class="up">
                            <table>
                              <tr><td><input type="checkbox" name=""><br><b>SA2-1</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA2-3</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA2-5</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA2-7</b></td></tr>
                            </table>
                          </div>
                          <div class="spart"></div>
                          <div class="down">
                            <table>
                              <tr><td><input type="checkbox" name=""><br><b>SA2-9</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA2-11</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA2-13</b></td></tr>
                            </table>
                          </div>
                        </div>
                        <div class="col">
                          <div class="up">
                            <table>
                              <tr><td><input type="checkbox" name=""><br><b>SA2-2</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA2-4</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA2-6</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA2-8</b></td></tr>
                            </table>
                          </div>
                          <div class="spart"></div>
                          <div class="down">
                            <table>
                              <tr><td><input type="checkbox" name=""><br><b>SA2-10</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA2-12</b></td></tr>
                              <tr><td><input type="checkbox" name=""><br><b>SA2-14</b></td></tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="down">
                      <table>
                        <tr><td><input type="checkbox" name=""><br><b>SC2-1</b></td></tr>
                      </table>
                      <table>
                        <tr><td><input type="checkbox" name=""><br><b>SC2-2</b></td></tr>
                      </table>
                      <table>
                        <tr><td><input type="checkbox" name=""><br><b>SC2-3</b></td></tr>
                      </table>
                      <table>
                        <tr><td><input type="checkbox" name=""><br><b>SC2-4</b></td></tr>
                      </table>
                      <table>
                        <tr><td><input type="checkbox" name=""><br><b>SC2-5</b></td></tr>
                      </table>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div><br>
                <select class="mutibox">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
                <div class="gallery_add">修改</div>
                </form>
                <br>
              </div>
            </div>
          </div>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>山南温网室申请<small>Wimbledon Room Application</small></h2>
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
                    <th>温网室名称</th>
                    <th >状态</th><!-- 列表显示待审申请、正在使用的申请、有效历史申请， -->
                    <th >操作</th>
                  </tr>
                  </thead>


                  <tbody>

                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Room/equipment_app_show">r_name</a></td>
                      <td>r_time</td>
                      <td>
                        <a href="/hzaulab/index.php/Admin/Room/">同意 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Room/" >拒绝 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>

                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Room/equipment_app_show">r_name</a></td>
                      <td>$vo.r_time</td>
                      <td>
                        <a href="/hzaulab/index.php/Admin/Room/" > 同意<i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Room/" >拒绝 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>

                  <!-- <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k % 2 == 0) { ?>
                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Room/equipment_app_show"><<?php echo ($vo["r_name"]); ?>></a></td>
                      <td><<?php echo ($vo["r_time"]); ?>></td>
                      <td>
                        <a href="/hzaulab/index.php/Admin/Room/notice_luanch" data-toggle="modal" data-target="#myModal" >同意 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Room/" >拒绝 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <?php } else { ?>
                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Room/equipment_app_show"><<?php echo ($vo["r_name"]); ?>></a></td>
                      <td><<?php echo ($vo["r_time"]); ?>></td>
                      <td><a href="/hzaulab/index.php/Admin/Room/notice_luanch" data-toggle="modal" data-target="#myModal" >同意 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Room/" >拒绝 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <?php } endforeach; endif; else: echo "" ;endif; ?> -->
                  </tbody>
                </table>
                <br><br>
                <div data-toggle="modal" data-target="#myModal2" class="gallery_add">导出Excel</div>
              </div>
            </div>
          </div>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel" style="min-width: 800px;">
              <div class="x_title">
                <h2>山北温网室<small>Wimbledon Room</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form>
                  <div class="northWimbledon">
                  <div class="le">
                    <table>
                      <tr>
                        <td><input type="checkbox" name=""><br><b>N1-1</b></td>
                        <td><input type="checkbox" name=""><br><b>N1-2</b></td>
                        <td><input type="checkbox" name=""><br><b>N1-3</b></td>
                        <td><input type="checkbox" name=""><br><b>N1-4</b></td>
                        <td><input type="checkbox" name=""><br><b>N1-5</b></td>
                        <td><input type="checkbox" name=""><br><b>N1-6</b></td>
                      </tr>
                    </table>
                    <table>
                      <tr>
                        <td><input type="checkbox" name=""><br><b>N2-1</b></td>
                        <td><input type="checkbox" name=""><br><b>N2-2</b></td>
                        <td><input type="checkbox" name=""><br><b>N2-3</b></td>
                        <td><input type="checkbox" name=""><br><b>N2-4</b></td>
                        <td><input type="checkbox" name=""><br><b>N2-5</b></td>
                        <td><input type="checkbox" name=""><br><b>N2-6</b></td>
                      </tr>
                    </table>
                    <table>
                      <tr>
                        <td><input type="checkbox" name=""><br><b>N3-1</b></td>
                        <td><input type="checkbox" name=""><br><b>N3-2</b></td>
                        <td><input type="checkbox" name=""><br><b>N3-3</b></td>
                        <td><input type="checkbox" name=""><br><b>N3-4</b></td>
                        <td><input type="checkbox" name=""><br><b>N3-5</b></td>
                        <td><input type="checkbox" name=""><br><b>N3-6</b></td>
                      </tr>
                    </table>
                  </div>
                  <div class="ri">
                    <table>
                      <tr>
                        <td><input type="checkbox" name=""><br><b>N4-1</b></td>
                        <td><input type="checkbox" name=""><br><b>N4-2</b></td>
                        <td><input type="checkbox" name=""><br><b>N4-3</b></td>
                        <td><input type="checkbox" name=""><br><b>N4-4</b></td>
                        <td><input type="checkbox" name=""><br><b>N4-5</b></td>
                        <td><input type="checkbox" name=""><br><b>N4-6</b></td>
                      </tr>
                    </table>
                    <table>
                      <tr>
                        <td><input type="checkbox" name=""><br><b>N5-1</b></td>
                        <td><input type="checkbox" name=""><br><b>N5-2</b></td>
                        <td><input type="checkbox" name=""><br><b>N5-3</b></td>
                        <td><input type="checkbox" name=""><br><b>N5-4</b></td>
                        <td><input type="checkbox" name=""><br><b>N5-5</b></td>
                        <td><input type="checkbox" name=""><br><b>N5-6</b></td>
                      </tr>
                    </table>
                    <table>
                      <tr>
                        <td><input type="checkbox" name=""><br><b>N6-1</b></td>
                        <td><input type="checkbox" name=""><br><b>N6-2</b></td>
                        <td><input type="checkbox" name=""><br><b>N6-3</b></td>
                        <td><input type="checkbox" name=""><br><b>N6-4</b></td>
                        <td><input type="checkbox" name=""><br><b>N6-5</b></td>
                        <td><input type="checkbox" name=""><br><b>N6-6</b></td>
                      </tr>
                    </table>
                  </div>
                <div class="clearfix"></div>
                </div>
                <select class="mutibox">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
                <div class="gallery_add">修改</div>  
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>山北温网室申请<small>Wimbledon Room Application</small></h2>
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
                    <th>温网室名称</th>
                    <th >状态</th><!-- 列表显示待审申请、正在使用的申请、有效历史申请， -->
                    <th >操作</th>
                  </tr>
                  </thead>


                  <tbody>

                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Room/equipment_app_show">r_name</a></td>
                      <td>r_time</td>
                      <td>
                        <a href="/hzaulab/index.php/Admin/Room/">同意 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Room/" >拒绝 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>

                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Room/equipment_app_show">r_name</a></td>
                      <td>$vo.r_time</td>
                      <td>
                        <a href="/hzaulab/index.php/Admin/Room/" > 同意<i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Room/" >拒绝 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>

                  <!-- <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k % 2 == 0) { ?>
                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Room/equipment_app_show"><<?php echo ($vo["r_name"]); ?>></a></td>
                      <td><<?php echo ($vo["r_time"]); ?>></td>
                      <td>
                        <a href="/hzaulab/index.php/Admin/Room/notice_luanch" data-toggle="modal" data-target="#myModal" >同意 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Room/" >拒绝 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <?php } else { ?>
                    <tr>
                      <td><a href="/hzaulab/index.php/Admin/Room/equipment_app_show"><<?php echo ($vo["r_name"]); ?>></a></td>
                      <td><<?php echo ($vo["r_time"]); ?>></td>
                      <td><a href="/hzaulab/index.php/Admin/Room/notice_luanch" data-toggle="modal" data-target="#myModal" >同意 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaulab/index.php/Admin/Room/" >拒绝 <i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <?php } endforeach; endif; else: echo "" ;endif; ?> -->
                  </tbody>
                </table>
                <br><br>
                <div data-toggle="modal" data-target="#myModal2" class="gallery_add">导出Excel</div>
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