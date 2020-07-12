<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:94:"/Applications/XAMPP/xamppfiles/htdocs/tp5/public/../application/index/view/zpadmin/zpadmin.htm";i:1581822479;s:79:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/index/view/public/top.htm";i:1581858488;s:80:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/index/view/public/foot.htm";i:1577605768;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>童老师ThinkPHP5交流群：484519446</title>
    <meta name="description" content="童老师ThinkPHP5交流群：484519446"/>
    <meta name="keywords" content="童老师ThinkPHP5交流群：484519446"/>
    
    
    <link rel="stylesheet" type="text/css" media="all" href="/tp5/public/static/index/style/style.css"/>
    <script src="/tp5/public/static/index/style/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="/tp5/public/static/index/style/jquery.js" type="text/javascript"></script>
    <script src="/tp5/public/static/index/style/jquery.error.js" type="text/javascript"></script>
    <script src="/tp5/public/static/index/style/jtemplates.js" type="text/javascript"></script>
    <script src="/tp5/public/static/index/style/jquery.form.js" type="text/javascript"></script>
    <script src="/tp5/public/static/index/style/lazy.js" type="text/javascript"></script>
    
    
    <script type="text/javascript" src="/tp5/public/static/index/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="/tp5/public/static/index/style/voterajax.js"></script>
    <script type="text/javascript" src="/tp5/public/static/index/style/userregister.js"></script>
    
    <link rel="stylesheet" href="/tp5/public/static/index/style/pagenavi-css.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="/tp5/public/static/index/style/votestyles.css" type="text/css"/>
    <link rel="stylesheet" href="/tp5/public/static/index/style/voteitup.css" type="text/css"/>
    
    
    <style type="text/css">
        #wrapper {
            background-color: #ffffff;
        }
        
        .single_entry {
            margin-top: 30px;
        }
    </style>

    <link rel="icon" href="/tp5/public/static/index/img/logo.png">
    <link rel="stylesheet" href="/tp5/public/static/index/css/jquery.orgchart.css">
    <link rel="stylesheet" href="/tp5/public/static/index/css/style.css">


</head>
<body class="single2">

<script type="text/javascript">
  function showMask() {
    $("#mask").css("height", $(document).height());
    $("#mask").css("width", $(document).width());
    $("#mask").show();
  }
</script>
<div id="mask" class="mask" onclick="CloseMask()"></div>

<!-- 头部 -->
<div id="header_wrap">
  <div id="header">
    <div style="float: left; width: 310px;">
      <h1>
        <a href="<?php echo url('/index/index'); ?>" title="全国最大族谱网"></a>
        <div class="" id="logo-sub-class">
        </div>
      </h1>
    </div>
    <div id="navi">
      
      <ul id="jsddm">
        <li><a class="navi_home" href="<?php echo url('/admin/index'); ?>">后台</a></li>
        <li><a class="navi_home" href="<?php echo url('index/zpadmin/index'); ?>">家谱树</a></li>
        <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
        <li><a <?php if($cate['children'] != 0): ?>class="havechild" <?php endif; ?> href="http://127.0.0.1/tp5/public/index.php/index/<?php if($cate['type'] == 1): ?>artlist/artlist<?php elseif($cate['type'] == 2): ?>page/page<?php else: ?>imglist/imglist<?php endif; ?>/cateid/<?php echo $cate['id']; ?>"><?php echo $cate['catename']; ?></a>
          <?php if($cate['children'] != 0): ?>
          <ul>
            <?php foreach ( $cate['children'] as $k2=>$v2):?>
            <li><a href="http://127.0.0.1/tp5/public/index.php/index/<?php if($v2['type'] == 1): ?>artlist/artlist<?php elseif($v2['type'] == 2): ?>page/page<?php else: ?>imglist/imglist<?php endif; ?>/cateid/<?php echo $v2['id']; ?>"><?php echo $v2['catename'];?></a></li>
            <?php endforeach;?>
          </ul>
          <?php endif; ?>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <div style="clear: both;">
      </div>
    </div>
    <div style="float: right; width: 209px;">
      <div class="widget" style="height: 30px; padding-top: 20px;">
        <div style="float: left;">
          <form name="formsearch" action="<?php echo url('search/index'); ?>">
            <input name="keywords" type="text"
                   style="background-color: #000000;padding-left: 10px; font-size: 12px;font-family: 'Microsoft Yahei'; color: #999999;height: 29px; width: 160px; border: solid 1px #666666; line-height: 28px;" id="go"
                   value="在这里搜索..." onfocus="if(this.value=='在这里搜索...'){this.value='';}" onblur="if(this.value==''){this.value='在这里搜索...';}"/>
          </form>
        </div>
        <div style="float: left;">
          <img src="/tp5/public/static/index/images/search-new.png" id="imgSearch" style="cursor: pointer; margin: 0px;
                        padding: 0px;" onclick="subForm()"/></div>
        <div style="clear: both;">
        </div>
      </div>
    </div>
  
  </div>
</div>

</div>
<!-- /头部 -->


<div id="wrapper">
    <div class="single_entry page_entry">
<!--        <?php   echo $zptreeres; ?>-->
        <div id="chart-container"></div>

        <script type="text/javascript" src="/tp5/public/static/index/js/jquery.min.js"></script>
        <script type="text/javascript" src="/tp5/public/static/index/js/jquery.orgchart.js"></script>
        <script type="text/javascript">
            $(function() {
                var datascource=<?php echo $zptreeres; ?>[0];
                var oc = $('#chart-container').orgchart({
                    'data' : datascource,
                    'nodeContent': 'title',
                    'pan': true,
                    'zoom': true,
                    'exportButton': true,
                    // 'exportFileextension': 'pdf',
                    'exportFilename': 'MyOrgChart'
                });

                oc.$chartContainer.on('touchmove', function(event) {
                    event.preventDefault();
                });

            });
        </script>

        <script>
            $(document).ready(function ( ) {


            })
        </script>

        <div class="clear">
        </div>
    </div>

</div>
<!-- 底部 -->
<div id="footer_wrap">
  <div id="footer">
    <div class="footer_navi">
      <ul id="menu-%e5%b0%be%e9%83%a8%e5%af%bc%e8%88%aa" class="menu">
        <li id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156">
          <a href="/aboutus.html">关于我们</a></li>
        <li id="menu-item-157" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-157">
          <a href="/news/">行业资讯</a></li>
        <li id="menu-item-158" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-158">
          <a href="/tougao.html">我要投稿</a></li>
      </ul>
    </div>
    <div class="footer_info">
            <span class="legal">Copyright &#169; 2016-2020 qq群：484519446 版权所有&#160;&#160;&#160;<a href="#">
                琼ICP备******号</a>&#160;&#160;&#160;
    </div>
  </div>
</div>
<!-- /底部 -->
<div style="display: none;" id="scroll">
</div>
<script type="text/javascript" src="/tp5/public/static/index/style/z700bike_global.js"></script>

</body>
</html>
