<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:91:"/Applications/XAMPP/xamppfiles/htdocs/tp5/public/../application/admin/view/zptree/index.htm";i:1580716328;s:79:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/admin/view/public/top.htm";i:1579319019;}*/ ?>
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


    <link rel="stylesheet" href="/tp5/public/static/index/css/demo.css" type="text/css">
    <link rel="stylesheet" href="/tp5/public/static/index/css/zTreeStyle/zTreeStyle.css" type="text/css">
    <script type="text/javascript" src="/tp5/public/static/index/js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="/tp5/public/static/index/js/jquery.ztree.core.js"></script>

    <SCRIPT type="text/javascript">
        <!--
        var setting = {
            data: {
                simpleData: {
                    enable: true,

                }
            },
            view: {
                showIcon: false,
                fontCss: getFontCss
            },
            callback: {
                onRightClick: OnRightClick
            },
        };

        function OnRightClick(event, treeId, treeNode) {

            var mid = zTree.getSelectedNodes()[0].id;
            var mstr = "http://127.0.0.1/tp5/public/admin/zptree/add/id/" + mid + ".htm";
            $("a#add").attr("href", mstr);
            var mstr = "http://127.0.0.1/tp5/public/admin/zptree/edit/id/" + mid + ".htm";
            $("a#edit").attr("href", mstr);
            var mstr = "http://127.0.0.1/tp5/public/admin/zptree/del/id/" + mid + ".htm";
            $("a#del").attr("href", mstr);

            if (!treeNode && event.target.tagName.toLowerCase() != "button" && $(event.target).parents("a").length == 0) {
                zTree.cancelSelectedNode();
                showRMenu("root", event.clientX, event.clientY);
            } else if (treeNode && !treeNode.noR) {
                zTree.selectNode(treeNode);
                showRMenu("node", event.clientX, event.clientY);
            }
        }

        function showRMenu(type, x, y) {
            $("#rMenu ul").show();
            if (type == "root") {
                $("#m_del").hide();
                $("#m_check").hide();
                $("#m_unCheck").hide();
            } else {
                $("#m_del").show();
                $("#m_check").show();
                $("#m_unCheck").show();
            }

            y += document.body.scrollTop;
            x += document.body.scrollLeft;
            rMenu.css({"top": y + "px", "left": x + "px", "visibility": "visible"});

            $("body").bind("mousedown", onBodyMouseDown);
        }

        function hideRMenu() {
            if (rMenu) rMenu.css({"visibility": "hidden"});
            $("body").unbind("mousedown", onBodyMouseDown);
        }

        function onBodyMouseDown(event) {
            if (!(event.target.id == "rMenu" || $(event.target).parents("#rMenu").length > 0)) {
                rMenu.css({"visibility": "hidden"});
            }
        }

        var zNodes = <?php echo $zptreeres; ?>;

        var zTree, rMenu;
        $(document).ready(function () {
            $.fn.zTree.init($("#treeDemo"), setting, zNodes);
            zTree = $.fn.zTree.getZTreeObj("treeDemo")

            var value = <?php echo $mid; ?>;
            var keyType = "";
            keyType = "id";
            value = parseInt(value);
            var node = zTree.getNodeByParam(keyType, value);
           node.highlight=true;
            zTree.updateNode(node);
            zTree.selectNode(node);

            rMenu = $("#rMenu");
        })

        function getFontCss(treeId, treeNode) {
            return (!!treeNode.highlight) ? {color:"#1528a6", "font-weight":"bold"} : {color:"#333", "font-weight":"normal"};
        }
        //-->
    </SCRIPT>

    <style type="text/css">
        div#rMenu {
            position: absolute;
            visibility: hidden;
            top: 0;
            background-color: #555;
            text-align: left;
            padding: 2px;
        }

        div#rMenu ul li {
            margin: 1px 0;
            padding: 0 5px;
            cursor: pointer;
            list-style: none outside none;
            background-color: #DFDFDF;
        }
    </style>
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
                    <li class="active">家谱树</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="flip-scroll">
                                <!-- Page Body -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="entry">
                                            <ul id="treeDemo" class="ztree"></ul>
                                        </div>
                                    </div>
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
<!--<script src="/tp5/public/static/admin/style/jquery_002.js"></script>-->
<!--<script src="/tp5/public/static/admin/style/bootstrap.js"></script>-->
<!--<script src="/tp5/public/static/admin/style/jquery.js"></script>-->
<!--&lt;!&ndash;Beyond Scripts&ndash;&gt;-->
<!--<script src="/tp5/public/static/admin/style/beyond.js"></script>-->


<div id="rMenu">
    <ul>
        <li type="button"><a id="add" href="#">新增</a></li>
        <li><a id="edit" href="#">编辑</a></li>
        <li><a id="del" href="#">删除</a></li>


    </ul>
</div>


</body>
</html>