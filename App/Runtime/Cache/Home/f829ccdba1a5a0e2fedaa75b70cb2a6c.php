<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>留言首页</title>
<link rel="stylesheet" href="/Public/css/page.css" type="text/css" media="screen" />
<style>

a{
	text-decoration: none;
	color:white;
}
a:hover{
	color:red;
}
p#p_pos{
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
div#div_main{
    width:1100px;
	height:auto;
	background:red;
	margin-top:20px;

}
#tab_login{
   float:left;
   width:300px;
   height:auto;
}
#tab_main{
    float:right;
	  width:750px;
	
}
table#tab_page{
  width:650px;
  float:right;
  margin-top:20px;

}
.tr_title{
  background: rgb(230,230,230);
}
.td_ts{
   text-align:right;
}
.td_con{
   text-align:left;
}

.input_con{
   width:90%;
   height:30px;
   font-size:16px;
   padding-left:6px;

   
}
.a_button
{
   display:block;
   background:rgb(230,230,230); 
   border: 1px solid black; 
   width:60px;
   height: 35px;
   line-height: 35px;
   font-family: "黑体";
   font-size: 16px;  
}
.a_button:hover{
   background:lavender;

}
.input_button
{
   width:60px;
   height: 35px;
   font-family: "黑体";
   font-size: 16px;  
}
.input_button:hover{
   background:lavender;

}
th{
   font-family: "微软雅黑";
   font-size: 18px;
}

#div_cut{
  clear:both;
  width:100%;
  height:10px;
  background:white;
}

/*page*/
div.page{
   font-family: "微软雅黑";
   font-size: 18px;
}
div.page a{
  border:#CCC 1px solid;
  padding:3px 5px;
  margin:0px 5px;

}
div.page a:hover{
  background:#F93;
}
div.page span.current{
  background:#990033;
  color:white;
  border:#CCC 1px solid;
  padding:3px 7px;
}
div.page span.nohref{
  border:#CCC 1px solid;
  padding:3px 5px;
  margin:0px 5px;
} 

</style>

<script>
function chkinputlogin(form){
     if(form.username.value==""){
     alert("用户昵称不能为空！");
     form.username.focus();
     return(false);
    }

    if(form.userpwd.value==""){
     alert("用户昵称不能为空！");
     form.userpwd.focus();
     return(false);
    }
    return(true);

}
</script>

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

<!-- currentpos -->
<p id="p_ly"><span><a href="/writemes.html"><img style="border:0px;" src="/Public/images/comm/ly.png" alt="" /></a></span></p>
<p id="p_pos">
<?php echo ($nowtime); ?>&nbsp;&nbsp;当前位置：<a href="#">留言首页</a>
</p>
<div id="div_main">
<!-- login -->

<table id="tab_login" width="280" height="100" border="0" align="center" cellpadding="10" cellspacing="0">
    <tr>
         <th colspan="2" align="center">用户登录</th>
    </tr>

<form name="form1" method="post" action="/checkuserlogin" onsubmit="return chkinputlogin(form1);">
<tr>
    <th class="td_ts">用户名：</th>
<?php if(($_SESSION['user']!= null)): ?><td class="td_con"><input class="input_con" type="text" size="16" class="inputcss" name="username" value="<?php echo (session('user')); ?>" /></td>
<?php else: ?>
    <td class="td_con"><input class="input_con" type="text" size="16" class="inputcss" name="username" value="<?php echo ($username); ?>" /></td><?php endif; ?>
</tr>
<tr>
    <th class="td_ts"><span style="letter-spacing:10px;">密码</span>：</th>
    <td class="td_con"><input class="input_con" type="password" size="16" class="inputcss" name="userpwd" value="<?php echo ($pwd); ?>" /></td>
</tr>
<tr>
<?php if(($_SESSION['user']!= null)): ?><td colspan="2" align="center"><a class="a_button" href="/logout">退出</a></td>    
<?php else: ?>
     <td colspan="2" align="center"><a style="font-size:16px;" href="/reg.html">注册</a>&nbsp;&nbsp;<input class="input_button" type="submit" value="登录" >&nbsp;&nbsp;<input class="input_button" type="reset" value="重置" ></td><?php endif; ?>
</tr>
<tr>
    <th id="th_alert" colspan="2" align="center"></th>
</tr>
</form>
</table>
</div>

<!-- main -->
<div id="div_main">

<table id="tab_main" border="0" cellpadding="10" cellspacing="0">
<?php if(is_array($allmes)): foreach($allmes as $key=>$all): ?><tr>
<td colspan="2"><span style="float:left;color:blue;"><?php echo ($all["username"]); ?></span><span style="float:right;"><?php echo ($all["createtime"]); ?></span></td>
</tr>
<tr class="tr_title">
<th width="100px" align="right">主题:</th>
<td height='25' align='left' class='m_td'><?php echo ($all["title"]); ?></td>
</tr>
<tr>
<th width="100px" align="right">内容:</th>
<td height='25' align='justify' class='m_td'><?php echo ($all["content"]); ?></td>
</tr><?php endforeach; endif; ?>
</table> 
<table id="tab_page" border="0">
<tr> 
<td align="center" class="pages">
<?php echo ($page); ?>

</td> 
</tr> 
</table>

</div>

<!-- bottom -->
<div id="div_cut"></div>
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
  地址:深圳市宝安区福永国际家具村松宝大家具广场二楼<br />
  电话:0755-84571273 邮箱:2879286250@qq.com<br />
  Copyright &copy; 2017-<span id="span_d"></span> www.szfyxhm.com 版权所有 粤ICP备17024240号
<script src="/Public/js/year.js" type="text/javascript"></script>
</p>


</div>
</body>
</html>

</body>
</html>