<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"/Applications/XAMPP/xamppfiles/htdocs/tp5/public/../application/admin/view/regist/regist.htm";i:1580905125;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head-->
<head>
    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/tp5/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/tp5/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="/tp5/public/static/admin/style/beyond.css" rel="stylesheet">
    <link href="/tp5/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="/tp5/public/static/admin/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>


<div class="register-container animated fadeInDown">
    <form action="" method="post">
        <div class="registerbox bg-white">
            <div class="registerbox-title">欢迎注册</div>

            <div class="registerbox-caption ">请填写您的信息</div>

            <div class="registerbox-textbox">
                <input type="text" class="form-control" name="name" placeholder="请输入用户名">

            </div>

            <div class="registerbox-textbox">
                <input type="password" class="form-control" name="password1" placeholder="请输入密码">
            </div>
            <hr class="wide">

            <div class="registerbox-textbox">
                <input type="text" class="form-control" name="realname" placeholder="真实姓名">
            </div>

            <div class="registerbox-textbox">
                <input type="text" class="form-control" name="mobiphone" placeholder="手机号码">
            </div>
            <div class="registerbox-textbox">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-6 padding-right-10">
                        <input type="text" class="form-control" name="myear" placeholder="年">
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-3 no-padding padding-right-10">
                        <input type="text" class="form-control" name="mmonth" placeholder="月">
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-3 no-padding-left">
                        <input type="text" class="form-control" name="mday" placeholder="日">
                    </div>
                </div>
            </div>
            <div class="registerbox-submit" style="">
                <input class="btn btn-primary btn-block " value="提交" type="submit">
            </div>
            <div class="registerbox-textbox no-padding-bottom">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" class="colored-primary" checked="checked">

                        <span class="text darkgray">I agree to the Company <a class="themeprimary">Terms of Service</a> and Privacy Policy</span>

                    </label>

                </div>

            </div>



        </div>


        <div class="logobox">
            <p class="text-center">已有账号?<a href="<?php echo url('login/index'); ?>" class="themeprimary">登陆</a>,谢岸马ThinkPHP交流群：4845194464
            </p>
        </div>

    </form>

</div>
<!--Basic Scripts-->
<script src="/tp5/public/static/admin/style/jquery.js"></script>
<script src="/tp5/public/static/admin/style/bootstrap.js"></script>
<script src="/tp5/public/static/admin/style/jquery_002.js"></script>
<!--Beyond Scripts-->
<script src="/tp5/public/static/admin/style/beyond.js"></script>


</body><!--Body Ends--></html>