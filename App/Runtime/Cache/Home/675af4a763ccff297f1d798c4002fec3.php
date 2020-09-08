<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改密码</title>
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
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
input[type='submit']:hover{
	background: #990033;
	color:white;

}
input.inp1
{
	width:80%;
	height:35px;
	line-height:35px;
	padding-left:8px;
	font-size:16px;
	border:1px solid black;
	border-radius: 5px;
}
h1
{
	width: 600px;margin: 10px auto;margin-bottom:15px;text-align: center; 
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
<h1>修改密码</h1>
<form method="post" action="/savepwd.html">
<table border="0" cellpadding="0" cellspacing="15">

	<tr>
		<td><input type="text" class="inp1 user_icon" name="forget_name" id="forget_name" placeholder="账号" required="" size="40" onkeydown="switchKey(document.getElementById('pwd'))" /></td>
	</tr>
	<tr>
		<td><input type="text" class="inp1 user_icon" name="forget_email" placeholder="邮箱" id="forget_email" required="" size="40" onkeydown="switchKey(document.getElementById('yzm'))" />&nbsp;<a style="font-size: 18px;color:#3380EB;" href="#" onclick="send();">发送验证码</a></td>
	</tr>
	<tr>
		<td><input class="inp1 user_icon" name="code" placeholder="验证码" required="" type="text" size="40" onkeydown="switchKey(document.getElementById('username'))" /> </td>
	</tr>
	<tr>
		<td id="captcha-container"><input class="inp1 user_icon" name="newpwd" placeholder="新密码" required="" type="text">
		</td>

	</tr>
	<tr>
	    <td style="text-align:center;">
	         <input style="width:60px;height: 60px;font-size:20px;border-radius: 50%;" type="submit" value="确定">
	    </td>
		
	</tr>    
</table>
</form>

<script>
        function send(){
           var name = $('#forget_name').val();
           var email = $('#forget_email').val();
            $.ajax({
                type:"get",
                url:"http://www.szfyxhm.com/sendMail.html",
                async:false,
                contentType:"application/json",
                dataType:"json",
                data:{"forget_name":name,"forget_email":email},
                success:function(data){
                    alert(data);
                }
            });
        }
    </script>

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