<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:92:"/Applications/XAMPP/xamppfiles/htdocs/tp5/public/../application/index/view/search/search.htm";i:1577610943;s:79:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/index/view/public/top.htm";i:1580907053;s:80:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/index/view/public/foot.htm";i:1577605768;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>童老师ThinkPHP5交流群：484519446</title>
  <meta name="description" content="童老师ThinkPHP5交流群：484519446"/>
  <meta name="keywords" content="童老师ThinkPHP5交流群：484519446"/>
  <link href="/tp5/public/static/index/style/bootstrap.css" rel="stylesheet">
  <script src="/tp5/public/static/index/style/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" media="all" href="/tp5/public/static/index/style/style.css"/>
  <script src="/tp5/public/static/index/style/jquery-1.4.1.min.js" type="text/javascript"></script>
  <script src="/tp5/public/static/index/style/jquery.error.js" type="text/javascript"></script>
  <script src="/tp5/public/static/index/style/jtemplates.js" type="text/javascript"></script>
  <script src="/tp5/public/static/index/style/jquery.form.js" type="text/javascript"></script>
  <script src="/tp5/public/static/index/style/lazy.js" type="text/javascript"></script>
  <script type="text/javascript" src="/tp5/public/static/index/style/wp-sns-share.js"></script>
  <script type="text/javascript" src="/tp5/public/static/index/style/voterajax.js"></script>
  <script type="text/javascript" src="/tp5/public/static/index/style/userregister.js"></script>

  <link rel="stylesheet" href="/tp5/public/static/index/style/votestyles.css" type="text/css"/>
  <link rel="stylesheet" href="/tp5/public/static/index/style/voteitup.css" type="text/css"/>
  <link rel="stylesheet" href="/tp5/public/static/index/style/list.css" type="text/css"/>
 

  
</head>
<body id="list_style_2" class="list_style_2">
<script>
  function subForm() {

    formsearch.submit();
    //form1为form的id
  }
</script>
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
        <a href="#" title="全国最大族谱网">族谱标志</a>
        <div class="" id="logo-sub-class">
        </div>
      </h1>
    </div>

    <div id="navi">
      
      <ul id="jsddm">
        <li><a class="navi_home" href="<?php echo url('/admin/index'); ?>">后台</a></li>
        <li><a class="navi_home" href="<?php echo url('/index/login'); ?>">登陆</a></li>
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
  
  
  <div id="xh_container">
    <div id="xh_content">
  
      <div class="path">搜索"<?php echo $keywords; ?>"的结果:  </div>
      <div class="clear"></div>
      <div class="xh_area_h_3" style="margin-top: 40px;">
        
        <?php if(is_array($artres) || $artres instanceof \think\Collection || $artres instanceof \think\Paginator): $i = 0; $__LIST__ = $artres;if( count($__LIST__)==0 ) : echo "没有找到数据,请重新查找!" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
        <div class="xh_post_h_3 ofh">
          <?php if($article['thumb']): ?>
          <div class="xh">
            <a target="_blank" href="<?php echo url('article/article',array('artid'=>$article['id'])); ?>" title="<?php echo $article['title']; ?>">
              <img src="<?php echo $article['thumb']; ?>" alt="<?php echo $article['title']; ?>" height="240" width="400"></a>
          </div>
          <?php endif; ?>
          <div  <?php if($article['thumb']): ?> class="r ofh"  <?php endif; ?>>
            <h2 class="xh_post_h_3_title ofh" style="height:60px;">
              <a target="_blank" href="<?php echo url('article/article',array('artid'=>$article['id'])); ?>" title="<?php echo $article['title']; ?>"><?php echo $article['title']; ?></a>
            </h2>
            <span class="time"><?php echo date("Y年m月d日",$article['time']); ?></span>
            <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
              <?php echo $article['desc']; ?>
            
            </div>
            <div <?php if($article['thumb']): ?> class="b"  <?php endif; ?>>
              <a href="<?php echo url('article/article',array('artid'=>$article['id'])); ?>" class="xh_readmore" rel="nofollow">read
                more</a> <span title="<?php echo $article['zan']; ?>人赞" class="xh_love"><span class="textcontainer"><span><?php echo $article['zan']; ?></span></span> </span> <span title="<?php echo $article['click']; ?>人浏览" class="xh_views">
                                                   <?php echo $article['click']; ?></span>
            </div>
          </div>
        </div>
        <?php endforeach; endif; else: echo "没有找到数据,请重新查找!" ;endif; ?>
        <div id="pagination">
          <div class="wp-pagenavi">
            <?php echo $artres->render(); ?>
          </div>
        </div>
      </div>
 
    </div>

    <div class="clear">
    </div>
  </div>
  <div class="boxBor"></div>
  
  <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
  <script type="text/javascript">
    $(function () {
      var imgHoverSetTimeOut = null;
      $('.xh_265x265 img').hover(function () {
        var oPosition = $(this).offset();
        var oThis = $(this);
        $(".boxBor").css({
          left: oPosition.left,
          top: oPosition.top,
          width: oThis.width(),
          height: oThis.height()
        });
        $(".boxBor").show();
        var urlText = $(this).parent().attr("href");
        $("#hdBoxbor").val(urlText);
      }, function () {
        imgHoverSetTimeOut = setTimeout(function () {
          $(".boxBor").hide();
        }, 500);
      });
      $(".boxBor").hover(
        function () {
          clearTimeout(imgHoverSetTimeOut);
        }
        , function () {
          $(".boxBor").hide();
        }
      );
    });

    function IBoxBor() {
      window.open($("#hdBoxbor").val());
    }

    function goanewurl() {
      window.open($("#hdUrlFocus").val());
    }
  </script>

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
