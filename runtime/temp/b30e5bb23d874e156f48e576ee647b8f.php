<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:90:"/Applications/XAMPP/xamppfiles/htdocs/tp5/public/../application/admin/view/article/lst.htm";i:1577603011;s:79:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/admin/view/public/top.htm";i:1579319019;s:80:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/admin/view/public/left.htm";i:1581861476;}*/ ?>
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
        <li>
          <a href="<?php echo url('conf/lst'); ?>">
                                    <span class="menu-text">
                                        数据库备份                                   </span>
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
                    <li class="active">文章管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <button type="button" tooltip="添加文章" class="btn btn-sm btn-azure btn-addon"
                        onClick="javascript:window.location.href =
 '<?php echo url('add'); ?>'"><i class="fa fa-plus"></i> Add
                </button>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <form action="" method="post">
                                        <table class="table table-bordered table-hover">
                                            <thead class="">
                                            <tr>
                                                <th class="text-center" width="10%">ID</th>
                                                <th class="text-center">标题</th>
                                                <th class="text-center">缩略图</th>
                                                <th class="text-center">推荐</th>
                                                <th class="text-center">作者</th>
                                                <th class="text-center">所属栏目</th>
                                                <th class="text-center" width="20%">操作</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(is_array($artres) || $artres instanceof \think\Collection || $artres instanceof \think\Paginator): $i = 0; $__LIST__ = $artres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?></td>
                                                <td align="center"><?php echo $art['id']; ?></td>
                                                <td><?php echo mb_substr($art['title'],0,10,'utf-8'); if(strlen($art['title'])>9){echo '...';}?></td>
                                                
                                                
                                                <td align="center">
                                                   <?php if($art['thumb'] != ''): ?>
                                                    <img src="<?php echo $art['thumb']; ?>" height="30">
                                                    <?php else: ?>
                                                    暂无缩略图
                                                    <?php endif; ?>
                                                </td>
                                                <td align="center" <?php if($art['rec'] == 1): ?> style="color: #9a3323"<?php endif; ?>><?php if($art['rec'] == 1): ?>是<?php else: ?>否<?php endif; ?></td>
                                                <td align="center"><?php echo $art['author']; ?></td>
                                                
                                                <td align="center"><?php echo $art['catename']; ?></td>
                                                <td align="center">
                                                    <a href="<?php echo url('edit',array('id'=>$art['id'])); ?>"
                                                       class="btn btn-primary btn-sm shiny">
                                                        <i class="fa fa-edit"></i> 编辑
                                                    </a>
                                                    <a href="<?php echo url('del',array('id'=>$art['id'])); ?>"
                                                       onClick="warning('确实要删除吗','#')"
                                                       class="btn btn-danger btn-sm shiny">
                                                        <i class="fa fa-trash-o"></i> 删除
                                                    </a>
                                                </td>
                                                
                                            </tr>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </tbody>

                                        </table>


                                    </form>
                                </div>
                                <div style="padding-top:10px; width: 230px; ">
                                    <?php echo $artres->render(); ?>
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