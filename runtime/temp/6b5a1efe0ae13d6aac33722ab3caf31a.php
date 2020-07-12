<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:90:"/Applications/XAMPP/xamppfiles/htdocs/tp5/public/../application/admin/view/zptree/edit.htm";i:1580705991;s:79:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/admin/view/public/top.htm";i:1579319019;}*/ ?>
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
    <div class="page-sidebar" id="sidebar">
      <!-- Page Sidebar Header-->
      <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
      </div>
      <!-- Sidebar Menu -->
      <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
          <a href="http://127.0.0.1/tp5/public/index/index/index.html" class="menu-dropdown">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text">族谱主页</span>
            <i class="menu-expand"></i>
          </a>
        </li>

        <li>
          <a href="<?php echo url('/admin/index'); ?>" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">返回</span>
            <i class="menu-expand"></i>
          </a>
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
            <a href="<?php echo url('index'); ?>">家谱树</a>
          </li>
          <li class="active">修改家谱成员</li>
        </ul>
      </div>
      <!-- /Page Breadcrumb -->
      
      <!-- Page Body -->
      <div class="page-body">
        
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
              <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改家谱成员</span>
              </div>
              <div class="widget-body">
                <div id="horizontal-form">
                  <form class="form-horizontal" role="form" action="" method="post">
  
                    <input type="hidden" name="id" value="<?php echo $zpadmins['id']; ?>">
                    <div class="form-group">
                      <label for="name"
                             class="col-sm-2 control-label no-padding-right">上辈</label>
                      <div class="col-sm-6">
                        <select name="pid">
                          <option value="0">先祖</option>
                          <?php if(is_array($zpadminres) || $zpadminres instanceof \think\Collection || $zpadminres instanceof \think\Paginator): $i = 0; $__LIST__ = $zpadminres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zpadmin): $mod = ($i % 2 );++$i;?>
                          <option <option <?php if($zpadmins['pid'] == $zpadmin['id']): ?>selected="selected" <?php endif; ?>
                            value="<?php echo $zpadmin['id']; ?>"><?php if($zpadmin['pid'] != 0): ?><?php echo str_repeat('&nbsp;&nbsp',$zpadmin['level']*3); ?>┗<?php echo str_repeat('━',1); endif; ?><?php echo $zpadmin['name']; ?>
                          </option>
                          <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                      </div>
                      <p class="help-block col-sm-4 red">* 必填</p>
                    </div>
                    
                    <div class="form-group">
                      <label for="name"
                             class="col-sm-2 control-label no-padding-right">姓</label>
                      <div class="col-sm-6">
                        <input class="form-control" placeholder="" value="<?php echo $zpadmins['xing']; ?>" name="xing" type="text">
                      </div>
                      <p class="help-block col-sm-4 red">* 必填</p>
                    </div>
                    <div class="form-group">
                      <label for="name"
                             class="col-sm-2 control-label no-padding-right">名</label>
                      <div class="col-sm-6">
                        <input class="form-control" placeholder="" value="<?php echo $zpadmins['ming']; ?>"  name="ming" type="text">
                      </div>
                      <p class="help-block col-sm-4 red">* 必填</p>
                    </div>
                    

                    <div class="form-group">
                      <label for="name"
                             class="col-sm-2 control-label no-padding-right">配偶</label>
                      <div class="col-sm-6">
                        <input class="form-control" placeholder="" value="<?php echo $zpadmins['peiou']; ?>"  name="peiou" type="text">
                      </div>
                      <p class="help-block col-sm-4 red">* 必填</p>
                    </div>


                     <div class="form-group">
                      <label for="name"
                             class="col-sm-2 control-label no-padding-right">排行</label>
                      <div class="col-sm-6">
                        <div class="col-sm-6">
                          <select name="paih">
                            <option value="1" <?php if($zpadmins['paih'] == 1): ?>selected="selected" <?php endif; ?>>老大</option>
                            <option value="2" <?php if($zpadmins['paih'] == 2): ?>selected="selected" <?php endif; ?>>老二</option>
                            <option value="3" <?php if($zpadmins['paih'] == 3): ?>selected="selected" <?php endif; ?>>老三</option>
                            <option value="4" <?php if($zpadmins['paih'] == 4): ?>selected="selected" <?php endif; ?>>老四</option>
                            <option value="5" <?php if($zpadmins['paih'] == 5): ?>selected="selected" <?php endif; ?>>老五</option>
                            <option value="6" <?php if($zpadmins['paih'] == 6): ?>selected="selected" <?php endif; ?>>老六</option>
                            <option value="7" <?php if($zpadmins['paih'] == 7): ?>selected="selected" <?php endif; ?>>老七</option>
                            <option value="8" <?php if($zpadmins['paih'] == 8): ?>selected="selected" <?php endif; ?>>老八</option>
                            <option value="9" <?php if($zpadmins['paih'] == 9): ?>selected="selected" <?php endif; ?>>老九</option>
                            <option value="10" <?php if($zpadmins['paih'] == 10): ?>selected="selected" <?php endif; ?>>老十</option>
                            <option value="11" <?php if($zpadmins['paih'] == 11): ?>selected="selected" <?php endif; ?>>十一</option>
                            <option value="12" <?php if($zpadmins['paih'] == 12): ?>selected="selected" <?php endif; ?>>十二</option>
                            <option value="13" <?php if($zpadmins['paih'] == 13): ?>selected="selected" <?php endif; ?>>十三</option>
                            <option value="14" <?php if($zpadmins['paih'] == 14): ?>selected="selected" <?php endif; ?>>十四</option>
                            <option value="15" <?php if($zpadmins['paih'] == 15): ?>selected="selected" <?php endif; ?>>十五</option>
                            <option value="16" <?php if($zpadmins['paih'] == 16): ?>selected="selected" <?php endif; ?>>十六</option>
                            <option value="17" <?php if($zpadmins['paih'] == 17): ?>selected="selected" <?php endif; ?>>十七</option>
                            <option value="18" <?php if($zpadmins['paih'] == 18): ?>selected="selected" <?php endif; ?>>十八</option>
                      
                          </select>
                        </div>
                      </div>
                      <p class="help-block col-sm-4 red">* 必填</p>
                    </div>
  
                    <div class="form-group">
                      <label for="name"
                             class="col-sm-2 control-label no-padding-right">关系</label>
                      <div class="col-sm-6">
                    
                    <label style="margin-right: 15px">
                      <input  name="guanx" <?php if($zpadmins['guanx'] == 1): ?>checked="checked"<?php endif; ?> value="1" type="radio">
                      <span class="text">儿子</span>
                    </label>
                    <label style="margin-right: 15px">
                      <input  name="guanx" <?php if($zpadmins['guanx'] == 2): ?>checked="checked"<?php endif; ?> value="2" type="radio">
                      <span class="text">女儿</span>
                    </label>
                  
                </div>
                <p class="help-block col-sm-4 red">* 必填</p>
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