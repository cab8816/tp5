<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"C:\xampp\htdocs\tp5\public/../application/mobile\view\index\index.htm";i:1579095832;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page" id="pageone" data-dialog="true">
    <div data-role="header">
        <h1>欢迎来到我的主页</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>我现在是一个移动端开发者!!</p>
        <a href="#pagetwo" data-transition="slide" data-direction="reverse">跳转第二个页面</a>
        <a href="#pagetwo" data-role="button">按钮</a>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>

<div data-role="page" id="pagetwo" data-dialog="true">
    <div data-role="header">
        <h1>欢迎来到我的主页</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>我现在是一个移动端开发者!!</p>
        <a href="#pageone" data-transition="slide" data-direction="reverse">跳转第一个页面</a>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>


</body>
</html>