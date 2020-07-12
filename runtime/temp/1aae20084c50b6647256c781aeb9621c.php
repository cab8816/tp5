<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"C:\xampp\htdocs\tp5\public/../application/index\view\index\index.htm";i:1577708417;s:57:"C:\xampp\htdocs\tp5\application\index\view\public\top.htm";i:1578209778;s:58:"C:\xampp\htdocs\tp5\application\index\view\public\foot.htm";i:1577605768;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8"/>
  <title>童老师ThinkPHP5交流群：484519446</title>
  <meta name="description" content="童老师ThinkPHP5交流群：484519446"/>
  <meta name="keywords" content="童老师ThinkPHP5交流群：484519446"/>
  <link rel="stylesheet" type="text/css" media="all" href="/tp5/public/static/index/style/style.css"/>
  <script type="text/javascript" src="/tp5/public/static/index/style/jquery-1.4.1.min.js"></script>
  <script type="text/javascript" src="/tp5/public/static/index/style/jquery.js"></script>
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
  <script type="text/javascript">
    function IFocuse(th, o) {
      var t = $(th);
      var c = t.attr("class");
      if (o) {
        t.removeClass(c).addClass(c + "-over");
      } else {
        t.removeClass(c).addClass(c.replace("-over", ""));
      }
    }
  </script>
</head>
<body class="xh_body">
<script src="/tp5/public/static/index/style/common.js" type="text/javascript"></script>
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
        <a href="/" title="宽屏大气文章类--41天鹰模板">宽屏大气文章类--41天鹰模板</a>
        <div class="" id="logo-sub-class">
        </div>
      </h1>
    </div>
    <div id="navi">
      
      <ul id="jsddm">
        <li><a class="navi_home" href="<?php echo url('index/index/index'); ?>">首页</a></li>
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
<div id="xh_wrapper">
  <input type="hidden" id="hdUrlFocus"/>
  <div class="xh_h_show">
    <div class="xh_h_show_in">
      <div id="zSlider">
        <div id="picshow">
          <div id="picshow_img">
            <ul>
              <?php if(is_array($recartres) || $recartres instanceof \think\Collection || $recartres instanceof \think\Paginator): $i = 0; $__LIST__ = $recartres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
              <li style="display: list-item;"><a href="<?php echo url('article/article',array('artid'=>$article['id'])); ?>" target="_blank">
                <img src="<?php echo $article['thumb']; ?>" alt="<?php echo $article['title']; ?>"></a></li>
                
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
        </div>
        <div id="select_btn">
          <ul>
            <li class="current"></li>
            <li class=""></li>
            <li class=""></li>
            <li class=""></li>
          </ul>
        </div>
        <div class="focus-bg-title">
          <div id="focus-left" class="arrow-left" onmouseover="IFocuse(this,true)" onmouseout="IFocuse(this,false)"></div>
          <div id="focus-center" class="focus-title">
            <div style="float:left;width:580px;padding-left:10px;font-size:18px;" id="focus-tl-s"></div>
            <div style="float:right;width:200px;"></div>
          </div>
          <div id="focus-right" class="arrow-right"></div>
        </div>
      </div>
      <div id="picshow_right">
        <a href="/life/416.html" target="_blank">
          <img src="/tp5/public/static/index/images/1-140206160415Y6.jpg" alt="COACH再度携手王力宏 踩单车演" width="255px" height="420px"></a>
        
        <div id="picshow_right_cover" onclick="goanewurl()"
             style="cursor:pointer;position:absolute;top:495px;font-size:14px;width:213px;height:45px;line-height:45px;padding-left:42px;color:#ffffff;zoom:1;background-image:url(./images/focus-left-bg.png); background-repeat:no-repeat; background-color:#01A1ED;"></div>
      </div>
    </div>
  </div>
  <div id="xh_container">
    <a name="new"></a>
    <div id="xh_content" style="padding-right:10px;">
      <div class="xh_area_h_3">
        <div class="xh_area_title">
          <a href="javascript:" class="t">New 最近更新</a> <span class="r">
                    
                    <a href='/lookbike/fixed-gear/'>死飞车</a>
                    
                    <a href='/lookbike/vintagebicycle/'>复古骑行</a>
                    
                    <a href='/lookbike/roadbicycle/'>公路车</a>
                    
                    <a href='/lookbike/mountainbike/'>山地车</a>
                    
                    <a href='/lookbike/small/'>折叠/小径车</a>
                    
                    <a href='/lookbike/bmx/'>BMX</a>
                    
                    <a href='/lookbike/otherbike/'>城市车及其他</a>
                     </span>
        </div>
        <br>
  
        <?php if(is_array($newarticleres) || $newarticleres instanceof \think\Collection || $newarticleres instanceof \think\Paginator): $i = 0; $__LIST__ = $newarticleres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newarticleres): $mod = ($i % 2 );++$i;?>
        <div class="xh_post_h_3 ofh">
          <?php if($newarticleres['thumb'] != ''): ?>
          <div class="xh_265x265">
            <a target="_blank" href="<?php echo url('article/article',array('artid'=>$newarticleres['id'])); ?>" title="<?php echo $newarticleres['title']; ?>">
              <img src="<?php echo $newarticleres['thumb']; ?>" alt="<?php echo $newarticleres['title']; ?>" height="240" width="400"></a></div>
           <?php endif; ?>
          <div class=" <?php if($newarticleres['thumb'] != ''): ?>r<?php else: ?>l <?php endif; ?> ofh">
            <h2 class="xh_post_h_3_title ofh">
              <a target="_blank" href="<?php echo url('article/article',array('artid'=>$newarticleres['id'])); ?>" title="<?php echo $newarticleres['title']; ?>"><?php echo $newarticleres['title']; ?></a>
            </h2>
            <span class="time"><?php echo date("Y年m月d日 H:i",$newarticleres['time']); ?></span>
            <div class="xh_post_h_3_entry ofh"> <?php echo $newarticleres['desc']; ?>...
            </div>
            <div class="b">
              <span title="<?php echo $newarticleres['zan']; ?>人赞" class="xh_love"><span class="textcontainer"><span><?php echo $newarticleres['zan']; ?></span></span> <span class="bartext"></span></span> <span title="<?php echo $newarticleres['click']; ?>人浏览" class="xh_views"><?php echo $newarticleres['click']; ?></span>
            </div>
          </div>
          <span class="cat"><a href="<?php echo url('artlist/artlist',array('cateid'=>$newarticleres['cateid'])); ?>" title="查看 <?php echo $newarticleres['catename']; ?> 中的全部文章"
                               rel="category tag"><?php echo $newarticleres['catename']; ?></a></span>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
  
      
     
    </div>
    <div id="xh_sidebar">
      
      <div class="widget">
        
        <div style="background: url('/tp5/public/static/index/images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
        </div>
        <ul id="ulHot">
          <?php if(is_array($sitehotres) || $sitehotres instanceof \think\Collection || $sitehotres instanceof \think\Paginator): $i = 0; $__LIST__ = $sitehotres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
          <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
            <?php if($article['thumb'] != ''): ?>
            <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="<?php echo url('article/article',array('artid'=>$article['id'])); ?>" target="_blank"><img src="<?php echo $article['thumb']; ?>" width="83"
                                                                                                                                                                  title="<?php echo $article['title']; ?>"/></a></div><?php endif; ?>
            <div style="float:<?php if($article['thumb'] != ''): ?>right<?php else: ?>left<?php endif; ?>;width:145px;height:52px; overflow:hidden;"><a href="<?php echo url('article/article',array('artid'=>$article['id'])); ?>" target="_blank" title="<?php echo $article['title']; ?>"><?php echo $article['title']; ?></a></div>
          </li>
         <?php endforeach; endif; else: echo "" ;endif; ?>
        
        </ul>
      </div>
      
      <div class="widget portrait">
        <div>
          <div class="textwidget">
            <a href="/tougao.html"><img src="/tp5/public/static/index/style/img/tg.jpg" alt="投稿"></a><br><br>
          </div>
        </div>
      </div>
      <div class="widget links">
        <h3>
          友情链接</h3>
        <ul>
          <?php if(is_array($linkres) || $linkres instanceof \think\Collection || $linkres instanceof \think\Paginator): $i = 0; $__LIST__ = $linkres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$link): $mod = ($i % 2 );++$i;?>
          <li><a href='<?php if(strpos($link['url'],'http://')!==0){echo 'http://'.$link['url'];}else{echo $link['url'];}?>' target='_blank'><?php echo $link['title']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div class="clear">
        </div>
      </div>
    </div>
    <div class="clear">
    </div>
  </div>
  <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
  <input type="hidden" id="hdBoxbor"/>
  <script type="text/javascript">

    $("#next-page").hover(function () {
      $(this).attr("src", "/tp5/public/static/index/style/images/next02.png");
    }, function () {
      $(this).attr("src", "/tp5/public/static/index/style/images/next01.png");
    });
    $("#last-page").hover(function () {
      $(this).attr("src", "/tp5/public/static/index/style/images/last02.png");
    }, function () {
      $(this).attr("src", "/tp5/public/static/index/style/images/last01.png");
    });

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
<div class="sitemap">
  <h4>
    SITE MAP</h4>
  <div class="l">
    <ul id="menu-sitemap" class="menu">
      <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
      <li class="menu-item menu-item-type-custom menu-item-object-custom">
        <a target="_blank" href="http://127.0.0.1/tp5/public/index.php/index/<?php if($cate['type'] == 1): ?>artlist/artlist<?php elseif($cate['type'] == 2): ?>page/page<?php else: ?>imglist/imglist<?php endif; ?>/cateid/<?php echo $cate['id']; ?>"><?php echo $cate['catename']; ?></a>
        <?php if($cate['children'] != 0): ?>
        <ul class="sub-menu">
          <?php foreach ( $cate['children'] as $k2=>$v2):?>
          <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
            <a target="_blank" href="http://127.0.0.1/tp5/public/index.php/index/<?php if($v2['type'] == 1): ?>artlist/artlist<?php elseif($v2['type'] == 2): ?>page/page<?php else: ?>imglist/imglist<?php endif; ?>/cateid/<?php echo $v2['id']; ?>"><?php echo $v2['catename'];?></a></li>
          <?php endforeach;?>
         
        
        </ul>
        <?php endif; ?>
      </li>
      <?php endforeach; endif; else: echo "" ;endif; ?>
      
    </ul>
  </div>
  
  <div class="r">
    <h5>
      FOLLOW US</h5>
    
    <img src="/tp5/public/static/index/images/weixin.jpg" alt="" title="扫描添加我们的公众微信" class="alignnone size-full wp-image-18966"
         height="140" width="120"></a></div>
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
<html>
<script>document.getElementById("life" + "").style.display = "n" + "o" + "ne";</script>