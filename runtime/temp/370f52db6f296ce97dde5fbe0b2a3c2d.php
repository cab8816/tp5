<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"C:\xampp\htdocs\tp5\public/../application/admin\view\conf\conf.htm";i:1575686489;s:57:"C:\xampp\htdocs\tp5\application\admin\view\public\top.htm";i:1574082531;s:58:"C:\xampp\htdocs\tp5\application\admin\view\public\left.htm";i:1578099398;}*/ ?>
<!DOCTYPE html>
<html xmlns: xmlns:>
<head>
  <meta charset="utf-8">
  <title>童老师ThinkPHP交流群：484519446</title>
  
  <meta name="description" content="Dashboard">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!--Basic Styles-->
  <link href="/tp5/public/static/admin/style/bootstrap.css" rel="stylesheet">
  <link href="/tp5/public/static/admin/style/font-awesome.css" rel="stylesheet">
  <link href="/tp5/public/static/admin/style/weather-icons.css" rel="stylesheet">
  
  <!--Beyond styles-->
  <link id="beyond-link" href="/tp5/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
  <link href="/tp5/public/static/admin/style/demo.css" rel="stylesheet">
  <link href="/tp5/public/static/admin/style/typicons.css" rel="stylesheet">
  <link href="/tp5/public/static/admin/style/animate.css" rel="stylesheet">

</head>
<body>
<!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/tp5/public/static/admin/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/tp5/public/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('name'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>\think\Request::instance()->session('id'))); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

<!-- /头部 -->

<div class="main-container container-fluid">
  <div class="page-container">
    <!-- Page Sidebar -->
    <div class="page-sidebar" id="sidebar">
  <!-- Page Sidebar Header-->
  <div class="sidebar-header-wrapper">
    <input class="searchinput" type="text">
    <i class="searchicon fa fa-search"></i>
    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
  </div>
  <!-- /Page Sidebar Header -->
  <!-- Sidebar Menu -->
  <ul class="nav sidebar-menu">
    <!--Dashboard-->
    <li>
      <a href="http://www.chuanke.com/s2260700.html" target="_blank" class="menu-dropdown">
        <i class="menu-icon fa fa-user"></i>
        <span class="menu-text">ThinkPHP5视频教程</span>
        <i class="menu-expand"></i>
      </a>
    </li>
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-user"></i>
        <span class="menu-text">管理员</span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理员列表                                    </span>
            <i class="menu-expand"></i>
          </a>
        </li>
        
        <li>
          <a href="<?php echo url('authGroup/lst'); ?>">
                                    <span class="menu-text">
                                        用户组列表                                    </span>
            <i class="menu-expand"></i>
          </a>
        </li>
        
        <li>
          <a href="<?php echo url('authRule/lst'); ?>">
                                    <span class="menu-text">
                                        权限列表                                    </span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
    
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-folder-o"></i>
        <span class="menu-text">栏目管理</span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    </span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
    
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-file-text"></i>
        <span class="menu-text">文章管理</span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
    
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-chain"></i>
        <span class="menu-text">友情链接</span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('link/lst'); ?>">
                                    <span class="menu-text">
                                        链接列表                                    </span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
  
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-chain"></i>
        <span class="menu-text">家谱管理</span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('zpadmin/lst'); ?>">
                                    <span class="menu-text">
                                        家谱列表                                    </span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
    
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-gear"></i>
        <span class="menu-text">系统</span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('conf/conf'); ?>">
                                    <span class="menu-text">
                                        配置项                                   </span>
            <i class="menu-expand"></i>
          </a>
        </li>
        <li>
          <a href="<?php echo url('conf/lst'); ?>">
                                    <span class="menu-text">
                                        配置列表                                   </span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
  
  
  </ul>
  <!-- /Sidebar Menu -->
</div>
    <!-- /Page Sidebar -->
    <!-- Page Content -->
    <div class="page-content">
      <!-- Page Breadcrumb -->
      <div class="page-breadcrumbs">
        <ul class="breadcrumb">
          <li>
            <a href="#">系统</a>
          </li>
          <li class="active">配置管理</li>
        </ul>
      </div>
      <!-- /Page Breadcrumb -->
      
      <!-- Page Body -->
      <div class="page-body">
        <button type="button" tooltip="添加配置" class="btn btn-sm btn-azure btn-addon">网站配置</button>
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
              <div class="widget-body">
                <div class="flip-scroll">
                  <form action="" method="post">
                    <table class="table table-bordered table-hover">
                      <thead class="">
                      <tr>
                        <th class="text-right" width="20%">配置名称</th>
                        <th class="text-left">配置值</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($confres as $k => $v):?>
                      <tr>
                        <td align="right"><?php echo $v['cnname'];?></td>
                        <td align="left">
                          <?php if($v['type']==1) :?>
                          <input name="<?php echo $v['enname']?>" type="text" class="form-control" style="width: 620px" value="<?php echo $v['value']?>">
                          
                          <?php elseif($v['type']==2):?>
                          <textarea name="<?php echo $v['enname']?>" class="form-control" style="width: 620px"><?php echo $v['value']?></textarea>
                          <?php elseif($v['type']==3):
                                                        if($v['value']){
                                                          $arr=explode(',',$v['values']);
                                                        }
                                                        foreach ($arr as $k3 => $v3): ?>
                          <label style="margin-right: 15px">
                            <input <?php if($v['value'] == $v3) {echo 'checked';} ?> name="<?php echo $v['enname']?>" value="<?php echo $v3;?>" type="radio">
                            <span class="text"><?php echo $v3;?></span>
                          </label>
                          <?php endforeach;elseif($v['type']==4):
                                                    if($v['value']){
                                                    $arr=explode(',',$v['values']);
                                                    }
                                                    foreach ($arr as $k4 => $v4): ?>
                          
                          <label style="margin-right: 15px">
                            <input <?php if($v['value'] == $v4) {echo 'checked';} ?>  name="<?php echo $v['enname']?>" type="checkbox" class="colored-success"
                            value="<?php echo $v4;?>" >
                            <span class="text"><?php echo $v4;?></span>
                          </label>
                          <?php endforeach;elseif($v['type']==5):
                                                     
                                                    if($v['value']){
                                                    $arr=explode(',',$v['values']);
                                                    }
                                                     ?>
                          <select name="<?php echo $v['enname']?>">
                            <?php foreach ($arr as $k5 => $v5):?>
                            <option
                            <?php if($v['value'] == $v5) {echo 'selected';} ?> value="<?php echo $v5;?>"><?php echo $v5;?> </option>
                            <?php endforeach;?>
                          </select>
                          
                          <?php endif ; ?>
                        </td>
                      </tr>
                      <?php endforeach;?>
                      </tbody>
                    </table>
                    <div><input class="btn btn-primary btn-sm shiny"
                                style="margin-left: 220px;margin-top: 10px"
                                type="submit"
                                value="提交修改">
                    </div>
                  </form>
                </div>
                <div style="padding-top:10px; width: 230px; ">
                </div>
                <div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
      <!-- /Page Body -->
    </div>
    <!-- /Page Content -->
  </div>
</div>

<!--Basic Scripts-->
<script src="/tp5/public/static/admin/style/jquery_002.js"></script>
<script src="/tp5/public/static/admin/style/bootstrap.js"></script>
<script src="/tp5/public/static/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="/tp5/public/static/admin/style/beyond.js"></script>


</body>
</html>