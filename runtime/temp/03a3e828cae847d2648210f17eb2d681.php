<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"/Applications/XAMPP/xamppfiles/htdocs/tp5/public/../application/mobile/view/index/index.htm";i:1579326252;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


    <link rel="stylesheet" href="__INDEX__/css/demo.css" type="text/css">
    <link rel="stylesheet" href="__INDEX__/css/zTreeStyle/zTreeStyle.css" type="text/css">
    <script type="text/javascript" src="__INDEX__/js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="__INDEX__/js/jquery.ztree.core.js"></script>
    <!--  <script type="text/javascript" src="../../../js/jquery.ztree.excheck.js"></script>
      <script type="text/javascript" src="../../../js/jquery.ztree.exedit.js"></script>-->
    <SCRIPT type="text/javascript">
        <!--
        var setting = {
            data: {
                simpleData: {
                    enable: true,

                }
            },
            view:{
                showIcon:false,
            }
        };

        var zNodes=<?php echo $zptreeres; ?>;

        $(document).ready(function(){
            $.fn.zTree.init($("#treeDemo"), setting, zNodes);
        });
        //-->
    </SCRIPT>

</head>
<body>

<div data-role="page" id="pageone" data-dialog="true">
    <div data-role="header">
        <h1>欢迎来到我的主页</h1>
    </div>

    <div data-role="main" class="ui-content">

        <div class="entry">
            <ul  id="treeDemo" class="ztree"></ul>
        </div>

    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>



</body>
</html>