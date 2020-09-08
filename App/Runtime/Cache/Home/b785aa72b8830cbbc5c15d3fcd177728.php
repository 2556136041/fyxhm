<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>后台管理中心</title>
	
	<link rel="stylesheet" href="/Public/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="img/css/ie.css" type="text/css" media="screen" />
	<script src="img/js/html5.js"></script>
	<![endif]-->
	<script src="/Public/js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="/Public/js/hideshow.js" type="text/javascript"></script>
	<script src="/Public/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/Public/js/jquery.equalHeight.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>
	<header id="header">
		<p id="p_top_l"><a href="/index.html"><img src="/Public/images/comm/fyxaa.png" width="250px" height="75px" align="middle" /></a></p>
		<p id="p_top_r">后台管理</p>
	</header> <!-- end of header bar -->

	
	<section id="secondary_bar">
		<div class="user">
			<p>admin</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="/admin">后台管理中心</a> <div class="breadcrumb_divider"></div> <a class="current">首页</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
<aside id="sidebar" class="column">
    <h3>活动管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="/playadd.html">添加活动</a></li>
		<li class="icn_categories"><a href="/playlist.html">管理活动</a></li>    
	</ul>
    <h3>活动用户</h3>
	<ul class="toggle">
		<li class="icn_categories"><a href="/playuserlist.html">报名名单</a></li>
	</ul>
	<h3>新闻管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="/newsadd.html">添加新闻</a></li>
		<li class="icn_categories"><a href="/newslist.html">管理新闻</a></li>    
	</ul>
	<h3>知识管理</h3>
	<ul class="toggle">
        <li class="icn_new_article"><a href="/seradd.html">添加知识</a></li>
		<li class="icn_categories"><a href="/serlist.html">管理知识</a></li>        
	</ul>
	<h3>产品管理</h3>
	<ul class="toggle">
	    <li class="icn_new_article"><a href="/proadd.html">添加产品</a></li>
		<li class="icn_categories"><a href="/prolist.html">管理产品</a></li>
	</ul>
	<h3>用户管理</h3>
	<ul class="toggle">
		<li class="icn_categories"><a href="/userlist.html">管理用户</a></li>
	</ul>
	<h3>留言管理</h3>
	<ul class="toggle">
		<li class="icn_categories"><a href="/meslist.html">留言管理</a></li>
	</ul>
	<h3>登陆管理</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="/logout.html">退出登录</a></li>
	</ul>
	
	<footer>
		
	</footer>
</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		<article class="module width_full">
			<header><h3>站点统计</h3></header>
			<div class="module_content">
				<p>本站共有行业新闻<?php echo ((isset($allnew) && ($allnew !== ""))?($allnew):'0'); ?>篇</p>
				<p>本站共有服务资讯<?php echo ((isset($allser) && ($allser !== ""))?($allser):'0'); ?>篇</p>
				<p>本站共有注册用户<?php echo ((isset($alluser) && ($alluser !== ""))?($alluser):'0'); ?>篇</p>
				<div class="clear"></div>
			</div>
		</article><!-- end of stats article -->

		<div class="clear"></div>

		<div class="spacer"></div>
	</section>


</body>

</html>