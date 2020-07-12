<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:93:"/Applications/XAMPP/xamppfiles/htdocs/tp5/public/../application/mobile/view/zpadmin/index.htm";i:1579526253;s:80:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/mobile/view/public/top.htm";i:1579525867;s:81:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/mobile/view/public/foot.htm";i:1579525988;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>



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
            }
        };

        var zNodes = <?php echo $zptreeres; ?>;

        $(document).ready(function () {
            $.fn.zTree.init($("#treeDemo"), setting, zNodes);
        });
        //-->
    </SCRIPT>

</head>
<body>

<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>家谱软件 1.0</h1>
<div data-role="navbar">
    <ul>
        <li><a href="#" data-icon="home">主页</a></li>
        <li><a href="#" data-icon="bars">第二页</a></li>
        <li><a href="#" data-icon="camera">搜索</a></li>
        <li><a href="#" data-icon="search">搜索</a></li>
    </ul>
</div>
    </div>

    <div data-role="main" class="ui-content">
<!--        <div class="entry">-->
<!--            <ul id="treeDemo" class="ztree"></ul>-->
<!--        </div>-->
        <h2>我的通讯录</h2>
        <form class="ui-filterable">
            <input id="myFilter" data-type="search">
        </form>
        <ul data-role="listview" data-filter="true" data-input="#myFilter" data-autodividers="true" data-inset="true">
            <li><a href="#">Adele</a></li>
            <li><a href="#">Agnes</a></li>
            <li><a href="#">Albert</a></li>
            <li><a href="#">Billy</a></li>
            <li><a href="#">Bob</a></li>
            <li><a href="#">Calvin</a></li>
            <li><a href="#">Cameron</a></li>
            <li><a href="#">Chloe</a></li>
            <li><a href="#">Christina</a></li>
            <li><a href="#">Diana</a></li>
            <li><a href="#">Gabriel</a></li>
            <li><a href="#">Glen</a></li>

            <li><a href="#">Ralph</a></li>
            <li><a href="#">Valarie</a></li>
        </ul>


    </div>

    <div data-role="footer">
        <h1><span class="legal">Copyright &#169; 2016-2020 qq群：484519446 版权所有&#160;&#160;&#160;<a href="#">
            琼ICP备******号</a>&#160;&#160;&#160;</span></h1>
    </div>
</div>


</body>
</html>