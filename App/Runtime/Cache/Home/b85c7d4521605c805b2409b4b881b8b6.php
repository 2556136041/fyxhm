<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆</title>
<script src="/Public/js/jquery-1.5.2.min.js" type="text/javascript"></script>
<style type="text/css">

a{text-decoration: none;}
a:hover{color:red;}
div#div_main{
	width:600px;
	margin:30px auto;
	border:1px solid #990033;
}
table
{
	width:600px;
}
th
{
	text-align: right;
}
td
{
	text-align: left;
}

input[type="button"],input[type="reset"]
{
     margin-right:15px;
	 height:35px;
	 width:60px;		 
	 font-size:16px;

}
input.inp1
{
	width:80%;
	height:35px;
	line-height:35px;
	padding-left:8px;
	font-size:16px;
	border:1px solid black;
}
h1
{
	width: 600px;margin: 10px auto;margin-bottom:15px;text-align: center; 
}
.user_icon
{
   background:url(/Public/images/comm/user_icon.jpg) right center no-repeat;
}
select{
	border:none;
	outline: 1px solid black;
	height: 35px;
	width: 80px;
	font-size: 18px;
	font-family: "微软雅黑";
}
<literal>
</style>
<literal>
<script>
$(document).ready(function(){
	$('#username').focus();

});

function switchKey(obj){
	if(event.keyCode==40){
		obj.focus();
	}
}
function checkinput(form){
    if(form.username.value==""){
		alert("请输入用户名");
		form.username.focus();
		return(false);
	}
    if(form.pwd.value==""){
		alert("请输入密码");
		form.pwd.focus();
		return(false);
	}
	if(form.xym.value==""){
		alert("验证码不能为空！");
		form.xym.focus();
		return(false);

	}
	return(true);
}

function login_ajax(){
    var username=$("#username").val();
    var pwd=$("#pwd").val();
    var yzm=$("#yzm").val();
		 $.get("/checklogin.html",{"username":username,"pwd":pwd,"yzm":yzm},function(data){
			 	if(data==0){
			 		$('#tjbut').css("background-color","red").css('color','white').val('登陆...');
	                 window.location='/index.html';
			 	}else{
			 		 alert("失败！");
			 	}
		 });

}

//按回车键登陆
$("body").keydown(function() {
    if (event.keyCode == "13") {//keyCode=13是回车键
        var username=$("#username").val();
        var pwd=$("#pwd").val();
        var yzm=$("#yzm").val();
        $.get("/checklogin.html",
            {"username":username,"pwd":pwd,"yzm":yzm},function(data){
            if(data==0){
                 $('#tjbut').css("background-color","red").css('color','white').val('登陆...');
                 window.location="/index.html"; 
            }else{
                alert('失败！');
            }
        });        
    }
}); 	
	
</script>
<literal>
</head>

<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>top</title>
<style type="text/css">

a{text-decoration:none;}
a:link,a:visited{color:#000;}
a:hover{color:#F00;}
li{list-style-type : none;}
img{border:0px;}
#ul_nav{
	 width:100%;
	 margin:0px;
	 padding:0px;
	 background:#990033;
	 height:50px; 
	 letter-spacing:5px; 
	 box-shadow: 5px 5px 3px rgb(200,200,200);
}
#ul_nav>li{
	 height:50px;
	 float:left;
}
#ul_nav>.li_logo{
	 text-align:center;
	 width:20%
}
#ul_nav>.li_column{
	width:16%;
	line-height:50px;
	font-size:25px;
	font-family:"Microsoft YaHei";
	font-weight: 600;
	text-align:center;
	color: #FFF;
}
#ul_nav>.li_column a{
	width:100%;
	height:50px;
	font-weight: 600;
    display:block;
    color:#FFF;
}
#ul_nav>.li_column a:hover{
	width:100%;
	height:50px;
    display:block;
    background:#C36;
}


</style>
</head>

<body>
<ul id="ul_nav">
<li class="li_logo"><a href="/index.html"><img src="/Public/images/comm/fyxbb.png" width="150" height="50"></a></li>
<li class="li_column"><a href="/index.html">首页</a></li>
<li class="li_column"><a href="/concenter.html" target="_blank" class="nav">资讯</a></li>
<li class="li_column"><a href="/pro_center.html" target="_blank" class="nav">红木新品</a></li>
<li class="li_column"><a href="/play.html" target="_blank" class="nav">活动</a></li>
<li class="li_column"><a href="/video_center.html" target="_blank" class="nav">视频</a></li>
</ul>
</body>
</html>


<div id="div_main">
<h1>用户登陆</h1>

<table border="0" cellpadding="0" cellspacing="15">

	<tr>
		<th>用户名</th>
		<td><input type="text" class="inp1 user_icon" id="username" name="username" size="40" onkeydown="switchKey(document.getElementById('pwd'))" /></td>
	</tr>
	<tr>
		<th>密码</th>
		<td><input type="password" class="inp1 user_icon" name="pwd" id="pwd" size="40" onkeydown="switchKey(document.getElementById('yzm'))" /></td>
	</tr>
	<tr>
		<th>验证码</th>
		<td><input type="text" class="inp1 user_icon" id="yzm" name="yzm" size="40" onkeydown="switchKey(document.getElementById('username'))" /> </td>
	</tr>
	<tr>
		<th></th>
		<td id="captcha-container"><img src="/index.php/verify" alt="" title='看不清，再来一张' />
		</td>
<script>
	var captcha_img = $('#captcha-container').find('img')  
	var verifyimg = captcha_img.attr("src");  
	captcha_img.attr('title', '点击刷新');  
	captcha_img.click(function(){  
	    if( verifyimg.indexOf('?')>0){  
	        $(this).attr("src", verifyimg+'&random='+Math.random());  
	    }else{  
	        $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());  
	    }  
	});  
</script>
	</tr>
    <tr>
        <th>保存</th>
		<td>
			<select name="save" id="save">
                <option value="">选择</option>
				<option value="1">1小时</option>
				<option value="24">1天</option>
				<option value="30">1个月</option>
				<option value="90">3个月</option>
				<option value="365">1年</option>
			</select>
            &nbsp;<a href="/getbackpwd.html">忘记密码?</a>
	</tr>
	<tr>
	    <td colspan="2" style="text-align:center;">
	    <input id="tjbut" onclick="login_ajax()" size="40" type="button" name="sub" value="提交" />
        <input type="reset" value="重置" />
	    </td>
		
	</tr>
    <tr>
	    <td style="text-align:left;">
            其他登陆方式：<a href="/qqLogin"><img src="/Public/images/comm/qqlogin.png" align="top"  border="0" alt="点击登陆" /></a>
        </td>	
        <td style="text-align:right;">
           <a href="/reg.html"> <img height="100%" valign="middle" src="/Public/images/comm/icn_add_user.png"> &nbsp;注册</a>
        </td>		
	</tr>
</table>
</form>
</div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息中心</title>
<style type="text/css">
<literal>
a{text-decoration:none;}
a:link,a:visited{color:#000;}
a:hover{color:#F00;}
#div_bot{
	clear:both;
	width:100%;
	height:200px;
	background:url("/Public/images/comm/botbg.jpg") no-repeat;
	margin-top:20px;
    font-family: "微软雅黑";
    font-size: 18px;
    color:white;
}
#p_about{
	width:90%;
	height:auto;
	margin:0 auto;
	color:#000;
	margin-top:30px;
	line-height:1.2em;
	padding-top:25px;

}
#addr{
	width:90%;
	margin:15px auto;
	line-height: 30px;
}

p#botcutline{
   clear:both;
   width:90%;
   margin:3px auto;
   height:1px;
   background:white;

}
a#a_about{
	color:white;
}
a#a_about:link,a#a_about:visited{
	color:white;
}
a#a_about:hover{
	color:red;
}

@media only screen and (max-width: 981px){

    
   
}


</style>
</head>


<div id="div_bot">
<p id="p_about">
<a id="a_about" href="/about.html">关于我们 | </a><a id="a_about" href="/leavemes.html">留言 </a><a id="talk" style="color:black;background-image:linear-gradient(to right bottom,rgb(102,208,205),white);border:1px solid rgb(220,220,220);border-radius: 5px;padding:3px 8px;display:inline-block;line-height: 20px;" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2879286250&site=qq&menu=yes">
<!-- <img align="top"  border="0" src="http://wpa.qq.com/pa?p=2:379215781:51" alt="点击这里给我发消息" title="点击这里给我发消息"/> -->
   <img height="20px" style="vertical-align: middle;" border="0" src="/Public/images/comm/icon/QQ.svg" alt="点击这里给我发消息" title="点击这里给我发消息"/>
        <span style="vertical-align: middle;">QQ交谈</span>
</a>
</p>
<p id="botcutline"></p>
<p id="addr">
  地址:深圳市宝安区福永国际家具村松宝大家具广场二楼<br />
  电话:0755-84571273 邮箱:2879286250@qq.com<br />
  Copyright &copy; 2017-<span id="span_d"></span> www.szfyxhm.com版权所有 粤ICP备17024240号
<script src="/Public/js/year.js" type="text/javascript"></script>
</p>


</div>
</body>
</html>

</body>
</html>