<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="福逸轩红木家具网：工厂自产自销各类红木家具及制品">
<meta name="keywords" content="福逸轩红木家具网,缅甸花梨木,酸枝红木">
<meta name="baidu-site-verification" content="bplULk83zq" />
<title>福逸轩红木家具网</title>
<link rel="stylesheet" type="text/css" href="/Public/css/index.css">
<link rel="stylesheet" type="text/css" href="/Public/css/qh.css"/>
<link rel="stylesheet" href='/Public/css/hoverbox.css' type="text/css" media="screen, projection" />
<style type="text/css">

.loading{width: 100%;
	height: 100%;
	position:fixed;
	top:0;
	left: 0;
	z-index: 100;
	background: white;
}
.pic{width:0%;
	 height:5px;
	 background:#990033;
	 position: absolute;
	 top: 0;
	 left: 0;
 }
button.btn_mark{
	width: 20px;
	height: 20px;
	border-radius: 50%;
	background: #990033;
	animation: dh_mark 2s linear 1s infinite alternate;
	-webkit-animation:dh_mark 2s linear 1s infinite alternate;
}
@keyframes dh_mark
{
	0%{opacity: 0;}
	10%{opacity: 0;}    
	30%{opacity: 0.5;}
	60%{opacity: 0.7;}
	80%{opacity: 1;}
	100%{opacity: 1;}
}
@-webkit-keyframes dh_mark
{
	0%{opacity: 0;}
	10%{opacity: 0;}    
	30%{opacity: 0.5;}
	60%{opacity: 0.7;}
	80%{opacity: 1;}
	100%{opacity: 1;}
}


</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>

<body>
<div class="loading">
  <div class="pic"></div>
</div>
<div id="div_top">
<p id="dm_l">&nbsp;&nbsp;
<?php if($Think.session.user): switch($userclass): case "1": ?>欢迎<font style='color:red;'><?php echo (session('user')); ?></font>来到本站！&nbsp;<a href=''>后台管理</a>&nbsp;<a href="/index.php/User/Index/logout">注销</a><?php break;?>
      <?php default: ?>
            欢迎<font style='color:red;'><?php echo (session('user')); ?></font>来到本站！&nbsp;<a href=''>个人中心</a>&nbsp;<a href=''>注销</a><?php endswitch;?>
<elseif condition='($Think.cookie.qq_accesstoken) OR ($Think.cookie.qq_openid)'>
    <a href="#">个人中心</a>&nbsp;<img align="top" src="<?php echo ((isset($userimg) && ($userimg !== ""))?($userimg):''); ?>" style="border-radius: 50%;" width="40px" />&nbsp;<a href="">退出QQ</a>
<?php else: ?>
    欢迎来到本站！&nbsp;<a href=''>注册</a>&nbsp;&nbsp;<a href='' >登陆</a>&nbsp;&nbsp;<a href=''>QQ登陆</a><?php endif; ?>
</p>
<p id="dm_r">
<?php echo ($date); ?>&nbsp;&nbsp;
</p>
</div>
<div id="div_header">
<img id="logimg" src="/Public/images/comm/fyxaa.png" />
<img id="banimg" src="/Public/images/comm/banner.jpg" />
</div>

<script type="text/javascript">
  $('.pic').animate({width:'10%'},100);
</script>

<div id="div_nav">
<ul id="ul_nav">
<li>首页</li>
<li><a href="" class="nav">资讯</a></li>
<li><a href="" class="nav">红木新品</a></li>
<li id="li_warm"><a href="#" class="nav">活动</a></li>
<li id="li_mes"><a href="" class="nav">留言</a></li>
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
</div>

<script>
  $('.pic').animate({width:'30%'},100);
</script>

<div id="div_main">
<div id="div_l">

<div class="yx-rotaion">
	<ul class="rotaion_list">

	<li><a href="#"><img width="650px" height="450px" src="/Public/images/new/<?php echo ($topnews["pic"]); ?>" alt="<?php echo ($topnews["title"]); ?>"></a></li>

	<li><a href=""><img width="650px" height="450px" src="/Public/images/new/<?php echo ($newsqh["pic"]); ?>" alt="<?php echo ($newsqh["title"]); ?>"></a></li>

	<li><a href=""><img width="650px" height="450px" src="/Public/images/service/<?php echo ($byqh["pic"]); ?>" alt="<?php echo ($byqh["title"]); ?>"></a></li>

    <li><a href=""><img src="/Public/images/topic/ffff1.jpg" alt="福逸轩红木走进贵州山区慰问留守儿童" ></a></li>

    <li><a href=""><img src="/Public/images/comm/shopface1.jpg" alt="福逸轩红木馆店面"></a></li>

	</ul>
</div>
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/js/jquery.yx_rotaion.js"></script>

<script type="text/javascript">
$(".yx-rotaion").yx_rotaion({auto:true});
</script>

</div>
<div id="div_r1">

<h1><a href="">
<?php echo ($topnews["title"]); ?></a></h1>

</div>
<div id="div_r2">
<table width="100%" border="0" cellspacing="0" cellpadding="10">
<?php if(isset($news)): if(is_array($news)): $i = 0; $__LIST__ = array_slice($news,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newsvo): $mod = ($i % 2 );++$i;?><tr>
      <td width="10%" align="center" valign="middle"><img src="/Public/images/comm/tubiao.png" width="10" height="10" align="absmiddle" /></td>
      <td style="font-family:'黑体';font-size:18px;" width="86%" align="left"><a href=""><?php echo ($newsvo["title"]); ?></a></td><?php endforeach; endif; else: echo "" ;endif; ?>
<?php else: ?>
    还没有新闻<?php endif; ?>
    </tr>

</table>
<p id="gendou_first" style="text-align:right;">
<a href="index.html?controller=news&method=allnews"><span class="span_more">更多>></span></a>
</p>
</div>
<div id="div_pro">
<p class="col" style="margin:0px;"><button class="btn_mark"></button>&nbsp;图赏</p>    
<hr align="left" width="90%" />
<p class="geduo" style="text-align:right;margin:0px;padding:0px;"><a href="index.html?controller=pro&method=prolist"><span class="span_more">更多>></span></a></p>
<ul class="hoverbox">
<?php if(is_array($protop)): $i = 0; $__LIST__ = array_slice($protop,0,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$protopvo): $mod = ($i % 2 );++$i;?><li>
<a href="#"><img src="/Public/images/pro/<?php echo ($protopvo["propic"]); ?>" alt="description" /><img src="/Public/images/pro/<?php echo ($protopvo["propic"]); ?>" alt="" class="preview" /></a>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>

<script>
  $('.pic').animate({width:'50%'},100);
</script>

<div id="div_help">

  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td class="col" colspan="2"><button class="btn_mark"></button>&nbsp; 挑选
      <hr width="88%" align="left" />
      <p class="geduo" style="text-align:right;">
      <a href="#"><span class="span_more">更多>></span></a>
      </p>
      </td>
      <td width="2%">&nbsp;</td>
      <td class="col" width="32%"><button class="btn_mark"></button>&nbsp;保养
      <hr width="70%" align="left" />
      <p class="geduo" style="text-align:right;">
      <a href="#"><span class="span_more">更多>></span></a>
      </p>
      </td>
    </tr>
    <tr>
<?php if(is_array($choose)): $i = 0; $__LIST__ = array_slice($choose,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$choosevo): $mod = ($i % 2 );++$i;?><td width="30%" align="right" valign="middle"><a href="#"><img width="300" height="260" border="1" align="left" src="/Public/images/service/<?php echo ($choosevo["pic"]); ?>" /></a>
      </td><?php endforeach; endif; else: echo "" ;endif; ?>
      <td width="36%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="10">
<?php if(is_array($choose)): $i = 0; $__LIST__ = array_slice($choose,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$choosevo): $mod = ($i % 2 );++$i;?><tr>
            <td width="10%" align="justify" valign="middle"><img src="/Public/images/comm/tubiao11.png" width="10" height="10" align="absmiddle" /></td>
            <td class="title3" width="90%" align="left" valign="top"><a href="#"><?php echo ($choosevo["title"]); ?></a></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      </table>
      
      </td>
      <td>&nbsp;</td>
      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="10">
<?php if(is_array($by)): $i = 0; $__LIST__ = array_slice($by,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$byvo): $mod = ($i % 2 );++$i;?><tr>
            <td width="10%" align="justify" valign="middle"><img src="/Public/images/comm/tubiao11.png" width="10" height="10" align="absmiddle" /></td>
            <td class="title3" width="90%" align="left" valign="top"><a href="#"><?php echo ($byvo["title"]); ?></a></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      </table>

      
      </td>
    </tr>
  </table>
</div>

</div>

<script>
  $('.pic').animate({width:'80%'},100);
</script>

<div id="div_bottom">
<div id="div_qt">
<ul id="ul_qt">
<li><a href="javascript:void(0)">红木生活</a></li>
<li><a href="javascript:void(0)">红木知识</a></li>
<li><a href="javascript:void(0)">红木投资</a></li>
<li><a href="javascript:void(0)">红木课堂</a></li>
<li><a href="javascript:void(0)">红木检测</a></li>
<li><a href="javascript:void(0)">红木展会</a></li>
</ul>
</div>
<div id="div_wl">
<ul id="ul_wl">
<li style="text-align:left;color:#FFF;">友情链接:</li>
<li><a href="http://collection.sina.com.cn/hmjj/">新浪·红木频道</a></li>
<li><a href="http://hongmu.people.com.cn/">人民网·红木</a></li>
<li><a href="http://www.szfa.com/">中国家具网</a></li>
<li><a href="http://home.ifeng.com/">凤凰家居网</a></li>
<li><a href="http://www.zghmzx.net/">中国红木在线</a></li>
</ul>
<div id="div_about">
<p id="p_about">
  <a href="index.html?controller=index&method=about">关于我们 </a><span style="color:#FFF;"> | </span><a href="javascript:void(alert('未开通'))">红木论坛</a>&nbsp;<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2879286250&site=qq&menu=yes"><img height="30px" align="top" border="0" src="http://wpa.qq.com/pa?p=2:379215781:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
</p>
<p id="p_counter">你是本网站的第<span style="display:inline-block;padding:0px 8px;background: #E6E6FA;color:#990033;border:1px solid gray;font:18px '微软雅黑';font-weight:900;"><?php echo ((isset($hitstop) && ($hitstop !== ""))?($hitstop):'0'); ?></span>位访问者</p>
</div>
<p id="botcutline"></p>
<p id="addr">
  地址:深圳市宝安区西乡街道臣田村宝田二路雍华源大厦二楼228号<br />
  电话:0755-84571273 邮箱:2879286250@qq.com<br />
  Copyright &copy; 2017-<span id="span_d"></span> www.szfyxhm.com 深圳市宝安区西乡福逸轩红木馆版权所有 粤ICP备17024240号
<script src="static/js/year.js" type="text/javascript"></script>
</p>
</div>

</div>

<script>
   $('.pic').animate({width:'100%'},100,function(){
              $('.loading').fadeOut();
         })
</script>

</body>
</html>