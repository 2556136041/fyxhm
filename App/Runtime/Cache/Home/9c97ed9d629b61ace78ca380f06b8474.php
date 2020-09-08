<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
 <html lang="en"> 
 <head> 
 <meta charset="UTF-8"> 
 <title>用户注册</title> 
 <script type="text/javascript" src="/Public/js/checkform.js"> </script> 
 <style type="text/css"> 

body
{
  background-image: url(/Public/images/comm/fm.jpg);
  background-size: cover;
} 
a
{
  text-decoration: none;
  color:black;
}
a:hover
{
  color:red;
}
div#div_main{
		width:700px;
		margin:30px auto;
		border:1px solid black;
	}
table{width:600px;
	      }

.input1
{
  width: 300px;
  height: 30px;
  font-size: 18px;
  border:1px solid black;
}
.input2
{
  padding:2px 10px;
  border-radius: 5px;
  font-size:18px;
  font-family: "黑体";
}
.input2:hover
{
   background: yellow;
}
 .td_first
 {color:black;
  font-family: "黑体";
  width: 100px;
  font-size: 17px;

 }
 textarea
 {
  font-size: 17px;
  width:300px;
 }

 .user_icon
{
   background:url(/Public/images/comm/user_icon.jpg) right center no-repeat;
}

 </style> 
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
<form name="form" action="/saveReg" method="post" onsubmit="return checkForm()"> 
 <table width="700px" cellpadding="0" border="0" cellspacing="10" align="center" > 
 <tr style="text-align:left;"> 
     <th colspan="3">&nbsp;&nbsp;如你已经是本站的用户，请点击<a href="/login.html">这里</a>登陆</th> 
 </tr> 
 <tr> 
     <th colspan="3"><h1>会员注册</h1></th> 
 </tr> 
 <tr> 
    <td class="td_first" align="right" >用户名：</td> 
    <td><input type="text" class="input1 user_icon" name="username" id="username" onfocus="focus_username()" onblur="blur_username()" ></td> 
    <td><div id="result_username"></div></td> 
 </tr> 
  <tr> 
    <td class="td_first" align="right" >性别：</td> 
    <td>
    男<input type="radio" checked name="sex" value="男" />
    女<input type="radio" name="sex" value="女" />
    </td> 
 </tr> 
 <tr> 
    <td class="td_first" align="right">密码：</td> 
    <td><input class="input1" type="password" name="pwd" onfocus="focus_userpwd()" onblur="blur_userpwd()" /></td> 
    <td><div id="result_userpwd"></div></td> 
 </tr> 
 <tr> 
    <td class="td_first" align="right">确认密码：</td> 
    <td><input class="input1" type="password" name="repwd" onfocus="focus_userpwd1()" onblur="blur_userpwd1()"/></td> 
    <td><div id="result_userpwd1"></div></td> 
</tr> 
<tr> 
    <td class="td_first" align="right">手机号码：</td> 
    <td><input class="input1" type="text" name="Mobile" onfocus="focus_Mobile()" onblur="blur_Mobile()"/></td> 
    <td><div id="result_Mobile"></div></td> 
 </tr> 
<tr> 
    <td class="td_first" align="right">电子邮箱：</td> 
    <td><input class="input1" type="text" name="email" onfocus="focus_email()" onblur="blur_email()"/></td> 
    <td><div id="result_email"></div></td> 
 </tr> 
 <tr>
    <td class="td_first" align="right">地址：</td> 
    <td><input class="input1" type="text" name="address" onfocus="focus_address()" onblur="blur_address()"/></td> 
    <td><div id="result_address"></div></td> 
</tr>

<tr> 
    <td align="center" colspan="3">
    <input type="hidden" name="photo" value="0">
    <input type="hidden" name="ip" value="<?php echo ($_SERVER['REMOTE_ADDR']); ?>">
    <input class="input2" type="submit" value="提交" /> 
    <input class="input2" type="reset" value="重置" /></td> 
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