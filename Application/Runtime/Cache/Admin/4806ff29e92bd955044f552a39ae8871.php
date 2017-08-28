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
    <link rel="stylesheet" type="text/css" href="/hzaulab/Public/back/css/pot.css">
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
          <li><a href="/hzaulab/index.php/Admin/Field/fieldluanch">页面发布</a></li>
          <li><a href="/hzaulab/index.php/Admin/Field/field">农田土地</a></li>
          <li><a href="/hzaulab/index.php/Admin/Field/OpenPot">露天盆栽场</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-mortar-board"></i> 培养室<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="/hzaulab/index.php/Admin/Room/roomluanch">页面发布</a></li>
          	<li><a href="/hzaulab/index.php/Admin/Room/WimbledonRoom">温网室</a></li>
          	<li><a href="/hzaulab/index.php/Admin/Room/LightCultureRoom">光照培养室</a></li>
      	</ul>
      <li><a><i class="fa fa-share-alt-square"></i>实验室 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="/hzaulab/index.php/Admin/Laboratory/labluanch">页面发布</a></li>
            <li><a href="/hzaulab/index.php/Admin/Laboratory/publiclab">公共实验室</a></li>
            <li><a href="/hzaulab/index.php/Admin/Laboratory/teachlab">教学实验室</a></li>
            <li><a href="/hzaulab/index.php/Admin/Laboratory/sublab">实验辅助室</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-flask"></i>仪器设备<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzaulab/index.php/Admin/Equipment/equipmentluanch">页面发布</a></li>
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
      <li><a><i class="fa fa-user"></i>采购计划<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzaulab/index.php/Admin/Plan/plan">采购计划</a></li>
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
            <div class="x_panel" style="min-width: 740px;">
              <div class="x_title">
                <h2>露天盆栽场<small>Open Field Pot</small></h2>
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
                  <div class="color">
                    占用：<span class="hintred"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                    锁定：<span class="hintgrey"></span>  &nbsp;&nbsp;&nbsp;&nbsp;
                    开放：<span class="hintunlock"></span> 
                  </div>
                  <div class="pot">
                  <div class="row">
                    <div class="ex _red"><input type="checkbox" name=""><b>PZ-1</b></div>
                    <div class="ex _grey"><input type="checkbox" name=""><b>PZ-9</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-17</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-24</b></div>
                  </div>
                  <div class="row">
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-10</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-18</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-24</b></div>
                  </div>
                  <div class="row">
                    <div class="ex"><input type="checkbox" name=""><b>PZ-3</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                  </div>
                  <div class="row">
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                  </div>
                  <div class="row">
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                  </div>
                  <div class="row">
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                  </div>
                  <div class="row">
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                  </div>
                  <div class="row">
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                    <div class="ex"><input type="checkbox" name=""><b>PZ-2</b></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <select class="mutibox">
                  <option>锁定</option>
                  <option>开放</option>
                </select>
                <div class="gallery_add">修改</div>
                </form>

              </div>
            </div>
          </div>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>露天盆栽场申请<small>Openpot Application</small></h2>
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
                    <th style="width: 50px;">序号</th>
                    <th >设施位置</th>
                    <th >设施名称</th>
                    <th >设施编号</th>
                    <th >开始时间</th>
                    <th >结束时间</th>
                    <th >样品物种</th>
                    <th >备注</th>
                    <th >预约人</th>
                    <th >时间</th>
                    <th >状态</th>
                    <th >操作</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($i); ?></td>
                        <td><?php echo ($items["sslocation"]); ?></td>
                        <td><?php echo ($items["ssname"]); ?></td>
                        <td><?php echo ($items["yqid"]); ?></td>
                        <td><?php echo ($items["ks"]); ?></td>
                        <td><?php echo ($items["js"]); ?></td>
                        <td><?php echo ($items["ypwz"]); ?></td>
                        <td><?php echo ($items["other"]); ?></td>
                        <td><?php echo ($items["uid"]); ?></td>
                        <td><?php echo ($items["date"]); ?></td>
                        <?php if ($items['status'] == 0) { ?>
                            <td>等待批准</td>
                        <?php } else if ($items['status'] == 1) { ?>
                            <td>已批准</td>
                        <?php } else { ?>
                          <td>已拒绝</td>
                        <?php } ?>
                        
                        <td>
                          <a href="/hzaulab/index.php/Admin/Field/doAgree/id/<?php echo ($items["id"]); ?>">同意 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <a href="#" data-hidID="<?php echo ($items["id"]); ?>" data-toggle="modal" data-target="#myModal3" onclick="fun(this)" >拒绝 <i class="fa fa-close"></i></a>
                        </td>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>露天盆栽场申请历史<small>Lab Application History</small></h2>
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
                    <th style="width: 50px;">序号</th>
                    <th >设施位置</th>
                    <th >设施名称</th>
                    <th >设施编号</th>
                    <th >开始时间</th>
                    <th >结束时间</th>
                    <th >样品物种</th>
                    <th >备注</th>
                    <th >预约人</th>
                    <th >时间</th>
                    <th >状态</th>
                    <th >备注</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(is_array($checked)): $i = 0; $__LIST__ = $checked;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($i); ?></td>
                        <td><?php echo ($items["sslocation"]); ?></td>
                        <td><?php echo ($items["ssname"]); ?></td>
                        <td><?php echo ($items["yqid"]); ?></td>
                        <td><?php echo ($items["ks"]); ?></td>
                        <td><?php echo ($items["js"]); ?></td>
                        <td><?php echo ($items["ypwz"]); ?></td>
                        <td><?php echo ($items["other"]); ?></td>
                        <td><?php echo ($items["uid"]); ?></td>
                        <td><?php echo ($items["date"]); ?></td>
                        <?php if ($items['status'] == 0) { ?>
                            <td>等待批准</td>
                        <?php } else if ($items['status'] == 1) { ?>
                            <td>已批准</td>
                            <td></td>
                        <?php } else { ?>
                          <td>已拒绝</td>
                          <td><?php echo ($items["reson"]); ?></td>
                        <?php } ?>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table>
                <br><br>
                <div data-toggle="modal" data-target="#myModal2">
                  <form action="/hzaulab/index.php/Admin/Field/excelExport" method="post">
                    <input type="submit" value="导出Excel" class="gallery_add">
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
              </button>
              <h4 class="modal-title" id="myModalLabel">
                设施状态-修改
              </h4>
            </div>
            <div class="modal-body">
              <form class="form" action="" method="post">
                
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
                回拒
              </h4>
            </div>
            <div class="modal-body">
              <form class="form" action="" method="post">
                <!-- <input type="text" name="theId"> -->
                <span class="eqthint">拒绝理由：</span><input type="textarea" class="gallery_textarea" name="gallery_title"><hr>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
              <a id="Reject" href="/hzaulab/index.php/Admin/Field/doReject/id/"><button type="button" class="btn btn-primary">提交</button></a>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal -->
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



    <script type="text/javascript">
      function fun(e) {
        console.log(e);
        var RejectTJ = document.getElementById('Reject');
        RejectTJ.href = RejectTJ.href+e.getAttribute("data-hidID");
        console.log(RejectTJ.href);
      }
    </script>
    <!-- <script src="/hzaulab/Public/back/include/datatables.net/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="/hzaulab/Public/back/include/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->
  </body>
</html>