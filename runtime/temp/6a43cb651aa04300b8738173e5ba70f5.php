<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:88:"/Applications/XAMPP/xamppfiles/htdocs/tp5/public/../application/admin/view/cate/edit.htm";i:1577517326;s:79:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/admin/view/public/top.htm";i:1579319019;s:80:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/admin/view/public/left.htm";i:1579694822;}*/ ?>
<!DOCTYPE html>
<html>
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
  
  <script src="/tp5/public/static/admin/ueditor/ueditor.all.js"></script>
  <script src="/tp5/public/static/admin/ueditor/ueditor.all.min.js"></script>
  <script src="/tp5/public/static/admin/ueditor/lang/zh-cn/zh-cn.js"></script>

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
            <div class="sidebar-collapse" id="sidebar-collapse" >
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
    <div class="page-sidebar" id="sidebar" >
  <!-- Page Sidebar Header-->
  <div class="sidebar-header-wrapper" >
    <input class="searchinput" type="text">
    <i class="searchicon fa fa-search"></i>
    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
  </div>
  <!-- /Page Sidebar Header -->
  <!-- Sidebar Menu -->
  <ul class="nav sidebar-menu" >
    <!--Dashboard-->
    <li>
      <a href="http://127.0.0.1/tp5/public/index/index/index.html"  class="menu-dropdown">
        <i class="menu-icon fa fa-user"></i>
        <span class="menu-text">族谱主页</span>
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
         <li>
          <a href="<?php echo url('zptree/index'); ?>">
                                    <span class="menu-text">
                                        家谱树                                    </span>
            <i class="menu-expand"></i>
          </a>
        </li>

      </ul>
    </li>

    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-chain"></i>
        <span class="menu-text">手机网页</span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('../mobile/zpadmin/index'); ?>">
                                    <span class="menu-text">
                                        手机网页                                    </span>
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
          <li>
            <a href="<?php echo url('lst'); ?>">栏目管理</a>
          </li>
          <li class="active">修改栏目</li>
        </ul>
      </div>
      <!-- /Page Breadcrumb -->
      
      <!-- Page Body -->
      <div class="page-body">
        
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
              <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改栏目</span>
              </div>
              <div class="widget-body">
                <div id="horizontal-form">
                  <form class="form-horizontal" role="form" action="<?php echo url('cate/edit'); ?>"
                        method="post">
                    <input type="hidden" name="id" value="<?php echo $cates['id']; ?>">
                    <div class="form-group">
                      <label for="name"
                             class="col-sm-2 control-label no-padding-right">上级栏目</label>
                      <div class="col-sm-6">
                        <select name="pid">
                          <option value="0">顶级栏目</option>
                          <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                          <option <?php if($cates['pid'] == $cate['id']): ?>selected="selected" <?php endif; ?>
                          
                         
                          value="<?php echo $cate['id']; ?>"><?php if($cate['level'] != 0): ?>+<?php endif; ?>
                         
                         
                         
                          <?php echo str_repeat('-',$cate['level'])?><?php echo $cate['catename']; ?></option>
                          <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                      </div>
                      <p class="help-block col-sm-4 red">* 必填</p>
                    </div>
                    
                    <div class="form-group">
                      <label for="name"
                             class="col-sm-2 control-label no-padding-right">栏目名称</label>
                      <div class="col-sm-6">
                        <input class="form-control" value="<?php echo $cates['catename']; ?>" placeholder=""
                               id="name" name="catename"
                               required="" type="text">
                      </div>
                      <p class="help-block col-sm-4 red">* 必填</p>
                    </div>
                    
                    <div class="form-group">
                      <label for="name"
                             class="col-sm-2 control-label no-padding-right">关键词</label>
                      <div class="col-sm-6">
                        <input class="form-control" placeholder="" value="<?php echo $cates['keyword']; ?>" name="keyword" type="text">
                      </div>
                      <p class="help-block col-sm-4 red">* 必填</p>
                    </div>
                    <div class="form-group">
                      <label for="name"
                             class="col-sm-2 control-label no-padding-right">描述</label>
                      <div class="col-sm-6">
                        <textarea name="desc" class="form-control"> <?php echo $cates['desc']; ?></textarea>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="group_id"
                             class="col-sm-2 control-label no-padding-right">栏目类型</label>
                      <div class="col-sm-6">
                        <div class="radio" style="float:left;margin-right: 10px">
                          <label>
                            <input <?php if($cates['type'] == 1): ?>checked="checked" <?php endif; ?>
                            
                            name="type"
                            value="1"
                            type="radio">
                            <span class="text">文章列表</span>
                          </label>
                        </div>
                        <div class="radio" style="float:left;margin-right: 10px">
                          <label>
                            <input <?php if($cates['type'] == 2): ?>checked="checked" <?php endif; ?>
                            
                            name="type" value="2" type="radio">
                            <span class="text">单页</span>
                          </label>
                        </div>
                        <div class="radio" style="float:left;margin-right: 10px">
                          <label>
                            <input <?php if($cates['type'] == 3): ?>checked="checked" <?php endif; ?>
                            name="type" value="3" type="radio">
                            <span class="text">图片列表</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="name" class="col-sm-2 control-label no-padding-right">内容</label>
                      <div class="col-sm-6">
                        <textarea id="content" name="content"> <?php echo $cates['content']; ?></textarea>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">保存信息</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!--           test     -->
        
        
        <!--                testend-->
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

<script type="text/javascript">
  //实例化编辑器
  UE.getEditor('content', {initialFrameWidth: 794, initialFrameHeight: 400,});
</script>
</body>
</html>