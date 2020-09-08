<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>留言页面</title>
<style>

a
{
   text-decoration: none;
   color:white;
}
a:hover
{
	color:red;
}
p#p_pos 
{
	background: rgb(100,100,100);
    color:white;
	text-align: center;
	padding: 5px;
	margin:0px auto;
	font-family: "微软雅黑";
    font-size: 16px;
}
p#p_pos a{
    color:white;
}
p#p_pos a:hover{
    color:red;
}
p#p_ly{
  position: fixed;
  top: 160px;
  right:5px;
  width: 120px;
  height: 120px;
  font-size: 20px;
  font-family:"微软雅黑";

}
 div#div_main
 {
    width: 1000px;
    height: auto;
    margin:25px auto;
	font-family: "微软雅黑";
    font-size: 18px;
}


td#td_column{
  padding:10px 0px;
}
input.inputcss
{
   height: 40px;
   width: 70%;
   line-height:40px;
   padding-left:8px;
   font-size: 18px;
   padding-left:6px;

}
textarea{
   width:70%;
   padding:6px 0px 0px 6px;
   font-family: "微软雅黑";
   font-size: 18px;
}
input.buttoncss
{
   width: 60px;
   height: 35px;
   font-family: "微软雅黑";
   font-size: 18px;
   color:black;
   border:1px solid black;
}

input.buttoncss:hover
{
  background: black;
  color:white;
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

a{
	text-decoration: none;
	color:black;
}
div#div_head
{
     width: 100%;
     height: 100px;
     background: #990033;
     line-height: 100px;
     text-align: center;
     padding-top:40px; 
}


</style>
</head>

<body>
<div id="div_head">
<a href="/index.html"><img border="0px" width="200px" src="/Public/images/comm/fyxbb.png" alt="" /></a>

</div>
</body>
</html>

<p id="p_ly"><span><a href="#"><img style="border:0px;" src="/Public/images/comm/ly.png" alt="" /></a></span></p>
<p id="p_pos">
今天是:<?php echo ($nowtime); ?>&nbsp;&nbsp;您当前的位置：<a href="/leavemes.html">留言首页</a>>>留言
</p>
<div id="div_main">
<table id="tab_main" width="1000" border="0" align="center" cellpadding="10" cellspacing="0">
<form name="form1" method="post" action="/saveleavemes" onclick="return chkinput(form1);">
<tr>
    <td colspan="2" bgcolor="lavender" id="td_column">&nbsp;&nbsp;发表留言</td>
</tr>

<script>
function chkinput(form){
    if(form.title.value==""){
      alert("请输入留言主题！");
      form.title.focus();
      return(false);
    }

    if(form.content.value==""){
       alert("请输入留言内容！");
       form.content.focus();
    return(false);
    }

return(true);
}

</script>

<tr>
   <td width="180" align="right">留言主题：</td>
   <td width="400" align="left" valign="top">&nbsp;<input type="text" name="title" size="40" class="inputcss"></td>
</tr>
<tr>
    <td valign="top" align="right">留言内容：</td>
    <td align="left">&nbsp;<textarea name="content" rows="10" cols="60" class="inputcss"></textarea></td>
</tr>
<tr>
    <td colspan="2" align="center">
    <input type="submit"  name="submit" value="发表" class="buttoncss" >&nbsp;&nbsp;&nbsp;
    <input type="reset" name="reset" value="重写" class="buttoncss">
    </td>
</tr>
</form>
</table>
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
	width:1000px;
	height:auto;
	margin:0 auto;
	color:#000;
	margin-top:30px;
	line-height:1.2em;
	padding-top:25px;

}
#addr{
	width:1000px;
	margin:15px auto;
	line-height: 30px;
}

p#botcutline{
   clear:both;
   width:1000px;
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


</style>
</head>


<div id="div_bot">
<p id="p_about">
  <a id="a_about" href="/about.html">关于我们 </a><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2879286250&site=qq&menu=yes"><img align="top"  border="0" src="http://wpa.qq.com/pa?p=2:379215781:51" alt="点击这里给我发消息" title="点击这里给我发消息"/>
</a>
</p>
<p id="botcutline"></p>
<p id="addr">
  地址:深圳市宝安区西乡街道臣田村宝田二路雍华源大厦二楼228号<br />
  电话:0755-84571273 邮箱:2879286250@qq.com<br />
  Copyright &copy; 2017-<span id="span_d"></span> www.szfyxhm.com 深圳市市宝安区西乡福逸轩红木馆版权所有 粤ICP备17024240号
<script src="/Public/js/year.js" type="text/javascript"></script>
</p>


</div>
</body>
</html>


</body>
</html>