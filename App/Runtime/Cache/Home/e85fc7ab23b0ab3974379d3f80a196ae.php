<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>后台管理系统</title>
	
	<link rel="stylesheet" href="/Public/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="img/css/ie.css" type="text/css" media="screen" />
	<script src="img/js/html5.js"></script>
	<![endif]-->
	<script src="/Public/js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="/Public/js/hideshow.js" type="text/javascript"></script>
	<script src="/Public/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/Public/js/jquery.equalHeight.js"></script>
    <script src="/Public/js/ckeditor/ckeditor.js"></script>
	<script src="/Public/js/ckeditor/adapters/jquery.js"></script>   
	    
	<script type="text/javascript">
	$(document).ready(function()
	{
	$('#content').ckeditor();
	}
	);
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
			<article class="breadcrumbs"><a href="/index.php/admin">后台管理系统</a> <div class="breadcrumb_divider"></div> <a class="current">用户更新</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
<aside id="sidebar" class="column">
	<h3>新闻管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="/index.php/newsadd">添加新闻</a></li>
		<li class="icn_categories"><a href="/index.php/newslist">管理新闻</a></li>    
	</ul>
	<h3>知识管理</h3>
	<ul class="toggle">
        <li class="icn_new_article"><a href="/index.php/seradd">添加知识</a></li>
		<li class="icn_categories"><a href="/index.php/serlist">管理知识</a></li>        
	</ul>
	<h3>产品管理</h3>
	<ul class="toggle">
	    <li class="icn_new_article"><a href="/index.php/proadd">添加产品</a></li>
		<li class="icn_categories"><a href="/index.php/prolist">管理产品</a></li>
	</ul>
	<h3>用户管理</h3>
	<ul class="toggle">
		<li class="icn_categories"><a href="/index.php/userlist">管理用户</a></li>
	</ul>
	<h3>留言管理</h3>
	<ul class="toggle">
		<li class="icn_categories"><a href="/index.php/meslist">留言管理</a></li>
	</ul>
	<h3>登陆管理</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="/logout.html">退出登录</a></li>
	</ul>
	
	<footer>
		
	</footer>
</aside><!-- end of sidebar -->
	
<section id="main" class="column">
              
	<form id="form1" name="form1" method="post" action="/index.php/updateuser">
	<article class="module width_full">
		<header><h3>用户管理</h3></header>
			   <div class="module_content">
                <fieldset style="width:48%;float:left; margin-right: 3%;">
						<label>昵称</label>
						<input type="text" name="username" style="width:92%;height:40px;font-size:18px;" value="<?php echo ($data["username"]); ?>">
				</fieldset>
				<fieldset style="width:48%; float:right;">
					    <label>性别</label>
							<input type="text" name="sex" style="width:92%;height:40px;font-size:18px;" value="<?php echo ($data["sex"]); ?>">
				</fieldset><div class="clear"></div>
                <fieldset style="width:48%;float:left; margin-right: 3%;">
						<label>密码</label>
						<input type="text" name="pwd" style="width:92%;height:40px;font-size:18px;" value="<?php echo ($data["pwd"]); ?>">
				</fieldset>
				<fieldset style="width:48%; float:right;">
					    <label>手机</label>
							<input type="text" name="tel" style="width:92%;height:40px;font-size:18px;" value="<?php echo ($data["tel"]); ?>">
				</fieldset><div class="clear"></div>
                <fieldset style="width:48%;float:left; margin-right: 3%;">
						<label>邮箱</label>
						<input type="text" name="email" style="width:92%;height:40px;font-size:18px;" value="<?php echo ($data["email"]); ?>">
				</fieldset>
				<fieldset style="width:48%; float:right;">
					    <label>地址</label>
							<input type="text" name="addr" style="width:92%;height:40px;font-size:18px;" value="<?php echo ($data["addr"]); ?>">
				</fieldset><div class="clear"></div>
                <fieldset style="width:48%;float:left; margin-right: 3%;">
						<label>级别</label>
						<input type="text" name="class" style="width:92%;height:40px;font-size:18px;" value="<?php echo ($data["class"]); ?>">
				</fieldset>
				<fieldset style="width:48%; float:right;">
					    <label>注册时间</label>
							<input type="text" name="regtime" style="width:92%;height:40px;font-size:18px;" value="<?php echo ($data["regtime"]); ?>">
				</fieldset><div class="clear"></div>
				
             </div>
		<footer>
			<div class="submit_link">
				<input type="hidden" name="id" value="<?php echo ($data["userid"]); ?>">
                <input type="hidden" name="photo" value="<?php echo ($data["photo"]); ?>">
                <input type="hidden" name="regtime" value="<?php echo ($data["regtime"]); ?>">
                <input type="hidden" name="logintimes" value="<?php echo ($data["logintimes"]); ?>">
                <input type="hidden" name="lastlogintime" value="<?php echo ($data["lastlogintime"]); ?>">
                <input type="hidden" name="ip" value="<?php echo ($data["ip"]); ?>">
				<input type="submit" name="submit" value="提交" class="alt_btn">
			</div>
		</footer>
	</article>
	</form>
		<div class="spacer"></div>
</section>

</body>
</html>