<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en-ZH">
<head>
<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
手机端按手机屏幕大小显示，不能放大缩小 <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />  -->
<meta name="description" content="福逸轩红木家具网：工厂自产自销各类红木家具及制品">
<meta name="keywords" content="福逸轩红木家具网,缅甸花梨木,酸枝红木">
<meta http-equiv="X-UA-compatible" content="IE=edge">
<link rel="shortcut icon" href="/Public/images/comm/favicon.ico" type="image/x-icon"/>
<meta name="baidu-site-verification" content="bplULk83zq" />
<title>福逸轩红木家具网</title>
<link rel="stylesheet" type="text/css" href="/Public/css/indexqh.css"/>
<link rel="stylesheet" type="text/css" href="/Public/css/commonstyle.css">
<link rel="stylesheet" type="text/css" href="/Public/css/index.css">
<link rel="stylesheet" type="text/css" href='/Public/css/hoverbox.css' media="screen, projection" />
<link rel="stylesheet" type="text/css" href="/Public/css/swiper.min.css">
<style type="text/css">


/*点击标题样式*/
a.newstit{
    display: inline-block;
    /*background: url(/Public/images/comm/tit0.png) no-repeat left center;*/
    background: url(/Public/images/comm/tit0.png);
    padding:5px;
    /*background-clip: padding-box;*/
    background-repeat:no-repeat;
    background-position:left center;
}
a.newstit:hover{
   background: url(/Public/images/comm/tit1.png) no-repeat left center;
}

.loading{
  width: 100%;
	height: 100%;
	position:fixed;
	top:0;
	left:0;
	z-index: 120;
	background: white;
}
.pic{
   width:0%;
	 height:5px;
	 background:#990033;
	 position: absolute;
	 top: 0;
	 left: 0;
 }

#closer:hover{color:red;}


@media only screen and (max-width: 981px){    
  a.newstit{
      display: inline-block;
      /*background: url(/Public/images/comm/tit0.png) no-repeat left center;*/
      background: url(/Public/images/comm/icon/tit00.png);
      padding:5px;
      /*background-clip: padding-box;*/
      background-repeat:no-repeat;
      background-position:left center;
  }
  a.newstit:hover{
      background: url(/Public/images/comm/icon/tit11.png) no-repeat left center;
  }

}

</style>

<script src="/Public/js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="/Public/js/checkdevice.js" type="text/javascript"></script>

</head>

<body>

<!-- 通告 -->
<div id='tonggao' style="background:white;opacity:1;width:300px;height:auto;border:5px outset #990033;border-radius:15px;position:absolute;right:10px;top:300px;z-index: 1000;">
  <p style="width:95%;height:30px;line-height:30px;text-align:right;">
    <span><a id='closer' style="cursor:pointer;" onclick="document.getElementById('tonggao').style.display='none'">X</a></span>

  </p>
  <h2 style="text-align:center;">通告</h2>
  <p style="text-indent:2em;text-align:justify;width:90%;margin:8px auto;line-height:24px;font-family:'黑体'">福逸轩红木家具馆原在深圳市宝安区西乡街道臣田村宝田二路雍华源大厦二楼228号的店面,现搬迁至深圳宝安福永国际家具村松宝大家具广场二楼。百度地图、高德地图、腾讯地图等输入<a style="text-decoration: none;color:red;" href="/daohang.html">“福逸轩红木馆”</a>可导航前往。</p>


</div>
<script language="javascript">
        $(document).ready(function () {
            var menuYloc = $("#tonggao").offset().top;
            $(window).scroll(function () {
                var offsetTop = menuYloc + $(window).scrollTop() + "px";
                $("#tonggao").animate({ top: offsetTop }, { duration: 600, queue: false });
            });
        }); 
</script>

<!-- 载入 -->
<div class="loading">
  <div class="pic"></div>
</div> <!-- 载入end -->
<div id="top_cut"></div>  <!-- 分割线 -->

<!-- 头部 -->
<div id="div_top">
<p id="dm_l" style="color:black;">&nbsp;<span id="youdevice"></span>&nbsp;
<?php if(($qq_accesstoken == null) OR ($qq_openid == null)): if($usersess): switch($userclass): case "1": ?>欢迎<span style="color:red;"><?php echo (session('user')); ?></span>来到本站！&nbsp;<a href='/admin.html'>后台管理</a>&nbsp;<a href="/logout">注销</a><?php break;?>
             <?php case "88": ?>欢迎<span style="color:red;"><?php echo (session('user')); ?></span>来到本站！&nbsp;<a href='/admin.html'>后台管理</a>&nbsp;<a href="/logout">注销</a><?php break;?>
             <?php case "0": ?>欢迎<span style="color:red;"><?php echo (session('user')); ?></span>来到本站！&nbsp;<a href=''>个人中心</a>&nbsp;<a href='/logout'>注销</a><?php break; endswitch;?>

    <?php else: ?>
        欢迎来到本站！&nbsp;<a href='/reg.html'>注册</a>&nbsp;&nbsp;<a href='/login.html' >登陆</a>&nbsp;&nbsp;<a href='/qqlogin'><img style="vertical-align: middle;" height="26px" src="/Public/images/comm/qqz.png"/>&nbsp;QQ登陆</a><?php endif; ?>
<?php else: ?>
    <a href="#">个人中心</a>&nbsp;<img align="top" src="<?php echo (cookie('userimg')); ?>" style="border-radius: 50%;" width="40px" />&nbsp;<a href="/qqlogout">退出QQ</a><?php endif; ?>

</p>

<!-- logo及广告 -->
<p id="dm_r">
<?php echo ($date); ?>&nbsp;&nbsp;
</p>
</div>
<!-- logo及广告 -->
<div id="div_header">
<img id="logimg" src="/Public/images/comm/fyxaa.png" />
<!-- <img id="logimg" src="/Public/images/svg/fyxhm.svg" /> -->
<img id="banimg" src="/Public/images/comm/banner.jpg" />
</div>

<!-- 载入10% -->
<script type="text/javascript">
  $('.pic').animate({width:'10%'},100);
</script> <!-- 载入10% end-->


<!-- 导航 -->
<div id="div_nav">
  <ul id="ul_nav">
    <li>首页</li>
    <li><a href="/concenter.html" target="_blank" class="nav">资讯</a></li>
    <li><a href="/pro_center.html" target="_blank" class="nav">红木新品</a></li>
    <li id="li_warm"><a href="/play.html" target="_blank" class="nav">活动</a></li>
    <li id="li_video"><a href="/video_center.html" target="_blank" class="nav">视频</a></li>
  </ul>
<script>
/*
  var mes=document.getElementById('li_mes');
  mes.onclick=function(){
    alert('留言已关闭！');
  }
  var warm=document.getElementById('li_warm');
  warm.onclick=function(){
    alert('目前还未开通！');
  }
*/
</script>
</div><!-- 导航end -->

<!-- 载入30% -->
<script>
  $('.pic').animate({width:'30%'},100);
</script><!-- 载入30% end -->

<p id="main_cutline"></p> <!-- 分割线 -->
<div id="div_main">  <!-- 主要内容 -->
  <div id="div_news"><!-- 新闻 -->
      <div id="div_l">  <!-- 幻灯片 -->
          <div class="yx-rotaion">
            	<ul class="rotaion_list">
            
            	<!-- <li><a href="/topnewinfo/id/<?php echo ($topnews["newid"]); ?>.html"><img width="650px" height="450px" src="/Public/images/new/<?php echo ($topnews["pic"]); ?>" alt="<?php echo ($topnews["title"]); ?>"></a></li> -->
              <li><a href="/videoshow/id/<?php echo ($videotop["id"]); ?>.html" target="_blank"><img width="650px" height="450px" src="/Public/video/fm1.jpg" alt="福逸轩红木馆新店视频"></a></li>
            
            	<li><a href="/topnewinfo/id/<?php echo ($newsqh["newid"]); ?>.html"><img width="650px" height="450px" src="/Public/images/new/<?php echo ($newsqh["pic"]); ?>" alt="<?php echo ($newsqh["title"]); ?>"></a></li>
            
            	<li><a href="/byinfo/id/<?php echo ($byqh["serid"]); ?>.html"><img width="650px" height="450px" src="/Public/images/service/<?php echo ($byqh["pic"]); ?>" alt="<?php echo ($byqh["title"]); ?>"></a></li>
            
                <li><a href="/new1_1.html"><img src="/Public/images/topic/ffff1.jpg" alt="福逸轩红木走进贵州山区慰问留守儿童" ></a></li>
            
                <li><a href="/about.html"><img src="/Public/images/comm/shopface3.jpg" alt="福逸轩红木馆店面"></a></li>

            	</ul>
          </div>
      <!-- <script type="text/javascript" src="/Public/js/jquery.min.js"></script> -->
      <script type="text/javascript" src="/Public/js/jquery.yx_rotaion.js"></script>
      
          <script type="text/javascript">
          $(".yx-rotaion").yx_rotaion({auto:true});
          </script>
      
      </div>  <!-- 幻灯片end -->
      <div id="div_r1"> <!-- 头条 -->
          <h1><a href="/topnewinfo/id/<?php echo ($topnews["newid"]); ?>.html"><?php echo ($topnews["title"]); ?></a></h1>
      </div><!-- 头条end -->
      <div id="div_r2"><!-- 消息列表 -->
          <table border='0' width="100%" cellpadding="5" cellspacing="0">
          <?php if(is_array($news)): $i = 0; $__LIST__ = array_slice($news,0,6,true);if( count($__LIST__)==0 ) : echo "还没有内容" ;else: foreach($__LIST__ as $key=>$newsvo): $mod = ($i % 2 );++$i;?><tr>
                 <td id='headnews'>
                      <a class="newstit" href="/newsinfo/id/<?php echo ($newsvo["newid"]); ?>.html"><span style="margin-left:20px;display:inline-block;"><?php echo ($newsvo["title"]); ?></span></a>
                 </td>
              </tr><?php endforeach; endif; else: echo "还没有内容" ;endif; ?>
          </table>
      </div><!-- 消息列表end -->

      
  </div><!-- 新闻end -->

  <!-- 消息更多 -->
  <p id="gendou_first">
      <a href="/news_all.html"><span class="span_more">更多<em class="transone">></em><em class="transtwo">></em>
          </span></a>
  </p> <!-- 消息更多end -->

  <!-- <div id="pro_cut"></div> -->

  <div id="div_pro"><!--产品 -->
        <!-- 栏目及更多 -->
        <table id="pro_nav" width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr><!-- width:100%;height:50px;line-height:50px;overflow:hidden;text-align:left;margin:0px;padding:0px;" -->
            <td class="col p_mobile_nav" align='left' style="position:relative;width:100%;height:50px;line-height:50px;overflow:hidden;text-align:left;margin:0px;padding:0px;">
                 <img src="/Public/images/svg/newpros.svg" width="40px" style="vertical-align: middle;" align="absmiddle" alt="">&nbsp;<span style="vertical-align: middle;" class="span_mark">图赏</span>

                 <span id="shake" class="shake">鼠标左右拖动可获得更多</span>
                 
                <span id="pro_more" class="span_more" style="position:absolute;right:0px;top:0px;vertical-align:middle;"><a href="/pro_center.html">更多<em class="transone">></em><em class="transtwo">></em></a>
                </span>        
            </td>
          </tr>
        </table>  <!-- 栏目及更多end -->
        <!-- 横向滚动 -->
        <div class="swiper-container" style="width: 100%;height:800px;margin-top:10px;">
                <div class="swiper-wrapper">
                  <?php if(is_array($protop)): $i = 0; $__LIST__ = array_slice($protop,0,18,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$protopvo): $mod = ($i % 2 );++$i;?><div class="swiper-slide" style="vertical-align: top;width:300px;height:260px;">
                         <a href="/proshow/id/<?php echo ($protopvo["proid"]); ?>.html"><img style="width:100%;height:100%;" src="/Public/images/pro/<?php echo ($protopvo["propic"]); ?>" alt="description" /></a>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>           
                </div>    
        </div><!-- 横向滚动end -->

  <!-- 横向滚动js -->
  <script src="/Public/js/swiper.min.js"></script>
  <script>   
      //初始化一个Swiper实例    new Swiper(swiper容器, 个性化配置)
      var mySwiper = new Swiper ('.swiper-container', {
      // loop:true,      
      //slidesPerGroup:2, //切换一次的slide数量
      spaceBetween:10,  //设置slide之间的间隔,默认为px,也可以设置成百分比(字符串)
      //spaceBetween:'10%', //百分比时按container的百分比      
      //多行多列布局时，container和slide应设置高度
      //不能使用loop模式
      slidesPerView:3,  //一行同时显示的slide数量,一行可以显示3个
      slidesPerColumn:3,  //一列同时显示的slide数量,一列可以显示2个
      slidesPerColumnFill:'row',  //设置slide排列方式，row:横向，column:纵向
      })        
  </script><!-- 横向滚动js end-->
  </div><!--产品end -->


<!-- 载入50% -->
<script>
  $('.pic').animate({width:'50%'},100);
</script><!-- 载入50% end -->

  <div id="pro_cut1"></div> <!--产品与服务内容的分割线 -->

  <!-- 供手机端显示 -->
  <div id="div_mobile">
     <!-- 挑选 -->
     <p class="col p_mobile_nav">
            <img style="vertical-align: middle;" src="/Public/images/svg/choose1.svg" width="40px" align="absmiddle" alt="">&nbsp;<span class="span_mark" style="vertical-align: middle;">挑选</span>
      </p>
      <p style="width:100%;height:2px;background: rgb(200,200,200);margin: 15px auto;"></p>
      <table width="100%" border="0" cellspacing="5" cellpadding="0">
          <?php if(is_array($choose)): $i = 0; $__LIST__ = array_slice($choose,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$choosevo): $mod = ($i % 2 );++$i;?><tr>
                <td class="mobile_title" width="100%" align="left" valign="top"><a class="newstit" href="/chooseinfo/id/<?php echo ($choosevo["serid"]); ?>.html"><span style="margin-left:20px;display:inline-block;"><?php echo ($choosevo["title"]); ?></span></a></td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      </table>
      <p class="p_mobile_geduo geduo" style="">
            <a href="/choose_all.html"><span class="span_more">更多
                 <em class="transone">></em><em class="transtwo">></em>
            </span></a>
      </p>
      <!-- 保养 -->
      <p class="col p_mobile_nav">
          <img style="vertical-align: middle;" src="/Public/images/svg/by1.svg" width="40px" alt="">&nbsp;<span style="vertical-align: middle;" class="span_mark">保养</span>
      </p>
      <p style="width:100%;height:2px;background: rgb(200,200,200);margin: 15px auto;"></p>
      <table width="100%" border="0" cellspacing="5" cellpadding="0">
          <?php if(is_array($choose)): $i = 0; $__LIST__ = array_slice($choose,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$choosevo): $mod = ($i % 2 );++$i;?><tr>
                <td class="mobile_title" width="100%" align="left" valign="top"><a class="newstit" href="/chooseinfo/id/<?php echo ($choosevo["serid"]); ?>.html"><span style="margin-left:20px;display:inline-block;"><?php echo ($choosevo["title"]); ?></span></a></td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      </table>
      <p class="geduo p_mobile_geduo" style="">
          <a href="/by_all.html"><span class="span_more">更多<em class="transone">></em><em class="transtwo">></em>
          </span></a>
      </p>

  </div><!-- 手机端显示end -->

  <!-- 电脑端显示 -->
  <div id="div_help">
    <table id="tabcc" width="100%" border="0" cellspacing="0" cellpadding="0">
     <!--  栏目nav -->
      <tr>
        <td colspan="2" style="padding-bottom: 10px;position:relative;">
              <p class="col" style="width:100%;height:50px;line-height:50px;overflow:hidden;text-align:left;margin:0px;padding:0px;">
                  <img style="vertical-align: middle;" src="/Public/images/svg/choose1.svg" width="40px" align="absmiddle" alt="">&nbsp;<span class="span_mark" style="vertical-align: middle;">挑选</span>

                  <span class="span_more" style="vertical-align: middle;float:right;">
                     <a href="/by_all.html">更多<em class="transone">></em><em class="transtwo">></em>
                     </a>
                  </span>
              </p>
      
        </td>
        <td width="1%">&nbsp;</td>
        <td width="33%" style="padding-bottom: 10px;clear:both;">
            <p class="col" style="width:100%;height:50px;line-height:50px;overflow:hidden;text-align:left;margin:0px;padding:0px;">
                 <img style="vertical-align: middle;" src="/Public/images/svg/by1.svg" width="40px" align="absmiddle" alt="">&nbsp;<span style="vertical-align: middle;" class="span_mark">保养</span>

                 <span class="span_more" style="vertical-align: middle;float:right;">
                     <a href="/by_all.html">更多<em class="transone">></em><em class="transtwo">></em>
                     </a>
                 </span>
            </p>

        </td>
      </tr>
      <!-- 挑选 -->
      <tr id="tr_choose">
            <?php if(is_array($choose)): $i = 0; $__LIST__ = array_slice($choose,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$choosevo): $mod = ($i % 2 );++$i;?><!-- 显示最新一张挑选图片 -->
        <td class="td_choose"  width="33%" align="right" valign="middle"><a href="/chooseinfo/id/<?php echo ($choosevo["serid"]); ?>.html"><div id="div_choose"><img width="300" height="260" border="1" align="left" src="/Public/images/service/<?php echo ($choosevo["pic"]); ?>" /></div></a>
        </td><!-- 显示最新一张挑选图片 end --><?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- 挑选标题列表 -->
        <td width="33%" align="left" valign="top">
            <table width="100%" border="0" cellspacing="5" cellpadding="0">
                <?php if(is_array($choose)): $i = 0; $__LIST__ = array_slice($choose,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$choosevo): $mod = ($i % 2 );++$i;?><tr>
                  <td class="title3" width="90%" align="left" valign="top"><a class="newstit" href="/chooseinfo/id/<?php echo ($choosevo["serid"]); ?>.html"><span style="margin-left:20px;display:inline-block;"><?php echo ($choosevo["title"]); ?></span></a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>        
        </td><!-- 挑选标题列表 end -->
        <td>&nbsp;</td>
        <!-- 保养标题列表 -->
        <td align="left" valign="top">
           <table width="100%" border="0" cellspacing="5" cellpadding="0">
                <?php if(is_array($by)): $i = 0; $__LIST__ = array_slice($by,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$byvo): $mod = ($i % 2 );++$i;?><tr>
                   <td class="title3" width="90%" align="left" valign="top"><a class="newstit" href="/byinfo/id/<?php echo ($byvo["serid"]); ?>.html"><span style="margin-left:20px;display:inline-block;"><?php echo ($byvo["title"]); ?></span></a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
           </table>   <!-- 保养标题列表 end-->   
        </td>
      </tr>
    </table>
  </div><!-- 电脑端显示end -->

</div> <!-- main end -->

<!-- 载入80% -->
<script>
     $('.pic').animate({width:'80%'},100);
</script><!-- 载入80% end -->

<p id="bot_cutline"></p><!-- main与尾部分割线 -->
<div id="div_bottom"><!-- 尾部 -->
    <div id="div_qt"><!-- 分类 --> 
        <ul id="ul_qt">
            <li><a href="javascript:void(0)">红木生活</a></li>
            <li><a href="javascript:void(0)">红木知识</a></li>
            <li><a href="javascript:void(0)">红木投资</a></li>
            <li><a href="javascript:void(0)">红木课堂</a></li>
            <li><a href="javascript:void(0)">红木检测</a></li>
            <li><a href="javascript:void(0)">红木展会</a></li>
        </ul>
    </div><!-- 分类 end--> 
    <div id="div_wl"> <!-- 友情+about+网站信息 -->
        <ul id="ul_wl"><!-- 友情链接 -->
            <li style="text-align:left;color:#FFF;">友情链接:</li>
            <li><a href="http://collection.sina.com.cn/hmjj/">新浪·红木频道</a></li>
            <li><a href="http://hongmu.people.com.cn/">人民网·红木</a></li>
            <li><a href="http://www.szfa.com/">中国家具网</a></li>
            <li><a href="http://home.ifeng.com/">凤凰家居网</a></li>
            <li><a href="http://www.zghmzx.net/">中国红木在线</a></li>
        </ul><!-- 友情链接 end -->
        <div id="div_about"><!-- 关于我们以及访问量 -->
            <p id="p_about"><!-- about -->
                 <a href="/about.html">关于我们 </a><span style="color:#FFF;"> | </span><a href="/leavemes.html">留言 </a>&nbsp;<a id="talk" style="color:black;background-image:linear-gradient(to right bottom,rgb(102,208,205),white);border:1px solid rgb(220,220,220);border-radius: 5px;padding:3px 8px;display:inline-block;line-height: 20px;" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2879286250&site=qq&menu=yes"><!-- <img height="30px" align="absmiddle" border="0" src="http://wpa.qq.com/pa?p=2:379215781:51" alt="点击这里给我发消息" title="点击这里给我发消息"/> 
                 -->
                    <img height="20px" style="vertical-align: middle;" border="0" src="/Public/images/comm/icon/QQ.svg" alt="点击这里给我发消息" title="点击这里给我发消息"/>
                    <span style="vertical-align: middle;">QQ交谈</span>
                 </a>
            </p><!-- about end-->
            <!-- 友情链接 -->
            <p id="p_counter">你是本网站的第<span style="display:inline-block;padding:0px 8px;background: #E6E6FA;color:#990033;border:1px solid gray;font:18px '微软雅黑';font-weight:900;"><?php echo ((isset($indexhits) && ($indexhits !== ""))?($indexhits):'0'); ?></span>位访问者</p><!-- 友情链接 end -->
        </div><!-- 关于我们以及访问量 end -->
    <p id="botcutline"></p><!-- 分割线 -->
    <ul class="addr clearfloat"><!-- 网站信息 -->
        <li id="address">
          <span style="vertical-align: middle;">地址:深圳市宝安区福永国际家具村松宝大家具广场二楼&nbsp;&nbsp;<a href="/daohang.html"></span><img style="vertical-align: middle;" width="23" height="23" align="top" src="/Public/images/comm/map.png" /></a><br />
          电话:0755-84571273 邮箱:2879286250@qq.com<br />
          Copyright &copy; 2017-<span id="span_d"></span> www.szfyxhm.com版权所有 <a style="color:white;" href="http://www.beian.miit.gov.cn">粤ICP备17024240号-1</a>
        <script src="/Public/js/year.js" type="text/javascript"></script>
        </li>
        <li id="qr"><p style="padding:0px;margin-bottom:5px;">扫描进入官微</p><div id="div_qr"><img width='90px' height='90px' src='/Public/images/comm/qr.png'></div></li>
    </ul><!-- 网站信息 end-->
  </div> <!-- 友情+about+网站信息 end -->

</div><!-- bottom end -->

<!-- 载入100% -->
<script>
   $('.pic').animate({width:'100%'},100,function(){
        $('.loading').fadeOut();
   })
</script><!-- 载入100% end-->



<script>

//设置向baiduspider自动推送
(function(){
      var bp = document.createElement('script');
      var curProtocol = window.location.protocol.split(':')[0];
      if (curProtocol === 'https') {
          bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
      }
      else {
          bp.src = 'http://push.zhanzhang.baidu.com/push.js';
      }
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(bp, s);
})();
</script>

<script>
// 判断打开的端口及设备
  $(function(){     
      var isphone=browserRedirect();
      if(isphone=="phone"){
          $("#youdevice").text("手机端用户");
          $("#shake").html("手指左右划动可获得更多");
      }else{
          $("#youdevice").text("PC端用户");
      }

      if(isWeiXin()){
          $("#youdevice").text("微信用户");
      }

      var usertypephone=useTypePhone();
      if(usertypephone==1){
         $("#youdevice").text("安卓手机用户");
      }else if(usertypephone==2){
         $("#youdevice").text("苹果手机用户");
      }else if(usertypephone==3){
         $("#youdevice").text("winphone手机用户");
      }
  })
</script>

</body>
</html>