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
<style type="text/css">
 
/*上传图片进程条*/      
#probox {
    width: 800px; 
    height: 30px; 
    line-height: 30px; 
    position: relative;
    display: none;
}
#probar {
	display:inline-block;
    width: 0; 
    height: 10px; 
    background: red;
}
#imgshow{
	display:none;

}
#imgname{
	color:blue;
}
input[type=file]{
	display: inline-block;
	font-size:20px;
	width:100px;
	height:40px;
}
input[type=button]{
	display: inline-block;
	font-size:20px;
	padding:3px 10px;
}
input[type=button]:hover{
	background:red;
	color:white;
}


</style>
   
<script type="text/javascript">
$(document).ready(function(){
   $('#content').ckeditor();
});
$(document).ready(function(){ 
  	  $(".tablesorter").tablesorter(); 
});
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

$(function(){
     $('.column').equalHeight();
});

//上传图片
window.onload = function(){
	var oBtn = document.getElementById('btn');
	var oMyFile = document.getElementById('myFile');
	var oDiv1 = document.getElementById('probox');
	var oDiv2 = document.getElementById('probar');
	var oDiv3 = document.getElementById('prorel');
    oBtn.onclick = function() {
	    //利用ajax发送必须要有一个ajax对象
	    var xhr = new XMLHttpRequest();

	    //监听上传事件
	    xhr.onload = function(){
	    	var imagename,imagepath;
	        //alert(1);
	        //alert(this.responseText);//后端返回的数据

	        //var d = JSON.parse(this.responseText);
	        //alert(d.msg + ' : ' + d.url); //显示上传成功 并且显示文件路径
	        //alert('OK 上传完成');
	        imagename=this.responseText;
	        imagepath='/Public/images/new/'+imagename;
	        document.getElementById('imgshow').style.display='block';
	        document.getElementById('imgshow').src=imagepath;
	        document.getElementById('imgname').style.color='red';
	        document.getElementById('imgname').innerHTML=imagename;
	        document.getElementById('pic').value=imagename;

	    }

	    //如果要实现上传进度条，则要使用上传进度对象
	    var oUpload = xhr.upload;
	    // alert(oUpload);//上传进度的事件对象
	    // 上传过程中是连续被触发的 监控上传进度
	    oUpload.onprogress = function(ev){
	        //ev.total(要发送的总量)、ev.loaded(待发送的总量)
	        console.log(ev.total + ' : ' + ev.loaded);
	        document.getElementById('probox').style.display="block";
	        var iScale = ev.loaded / ev.total;
	        oDiv2.style.width = 700 * iScale + 'px';//显示上传进度
	        oDiv3.innerHTML = iScale * 100 + '%'; //显示上传百分百
	    }

	    xhr.open('post','/upload_news',true); //open打开的方式不能使用get,上传文件的地址,使用异步上传
	    //在使用post发送的时候必须要带一些请求头信息
	    xhr.setRequestHeader('X-Request-With', 'XMLHttpRequest');

	    //send要发送数据 
	    //将要上传的数据转换成二进制数据
	    //那么必须知道后端接收当前文件的名称是什么 然后后面带上当前文件的数据

	    var oFormData = new FormData(); //通过FormData来构建提交数据
	    oFormData.append('file',oMyFile.files[0]);

	    xhr.send(oFormData);
    }
}
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
			<article class="breadcrumbs"><a href="/admin">后台管理系统</a> <div class="breadcrumb_divider"></div> <a class="current">发布新闻</a></article>
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
       <table width="94%" border="0" cellspacing="0" cellpadding="10" style="margin:20px auto;">
         <tr>
            <td colspan="2">
            	<div id="probox">
			       <span id="probar"></span>
			       <span id="prorel">0%</span>
			    </div>
            </td>
         <tr>
            <td align="left" width="300px"><input type="file" id="myFile" /><font style="color:red;">（图片规格：650*450）</font>
            </td>
            <td align="left">
               <input type="button" id="btn" value="上传" />
        	
            </td>
        <tr>
           <td colspan="2">          
           <p><img id="imgshow" src='' width='350'></p>
           <p id="imgname">还没有上传图片</p>
          </td>
        </tr>

     </table>   

	<form id="form1" name="form1" method="post" action="/newsave">
	<article class="module width_full">
		<header><h3>发布新闻</h3></header>
			   <div class="module_content">
                <fieldset>
						<label>类别</label>
							<select name="newclass" id="" style="height:30px;width:100px;font-size:16px;font-family:'微软雅黑';border-radius:5px;;">
                               <option value="0">动态</option>
                               <option value="1">头条</option>
                            </select> 
				</fieldset>
				<fieldset>
						<label>位置</label>
                            封面轮播<input name="pos" type="radio" value="1"  style="width: 20px;height: 20px;vertical-align:middle;color:blue;">
                            正常<input name="pos" type="radio" value="0" style="width: 20px;height: 20px;vertical-align:middle;" checked>
				</fieldset>
				<fieldset>
						<label>标题</label>
							<input style="height:40px;font-size:18px;" type="text" name="title">
				</fieldset>
                <fieldset style="width:48%;float:left; margin-right: 3%;">
						<label>作者</label>
						<input type="text" name="author" style="width:92%;height:40px;font-size:18px;">
				</fieldset>
				<fieldset style="width:48%; float:right;">
					    <label>出处</label>
							<input type="text" name="from" style="width:92%;height:40px;font-size:18px;" value="网络">
				</fieldset><div class="clear"></div>
                <fieldset>
						<p style="padding:0px 8px;margin:0px;font-size:12px;font-weight: bold;">导语</p>
						<textarea style="padding:8px 0px 0px 8px;margin-top:8px;font-size:16px;" rows="8" name="lead" id="lead"></textarea>
				</fieldset>
				<fieldset>
						<p style="padding:0px 8px;margin:0px;font-size: 12px;font-weight: bold;">内容</p>
                        <p style="width:100%;height:10px;margin:0px;"></p>
						<textarea style="padding:8px 0px 0px 8px;" rows="12" name="content" id="content"></textarea>
				</fieldset>
                
				
             </div>
		<footer>
			<div class="submit_link">
                <input id='pic' type="hidden" name="pic" value="">
				<input type="submit" name="submit" value="提交" class="alt_btn">
			</div>
		</footer>
	</article>
	</form>
		<div class="spacer"></div>
</section>

</body>
</html>