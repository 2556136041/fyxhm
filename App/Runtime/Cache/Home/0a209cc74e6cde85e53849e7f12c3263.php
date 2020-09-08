<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>红木单品</title>
<style type="text/css">

a{text-decoration:none;}

#div_main{
  width:900px;
  height:auto;
  margin:10px auto;
  font-size:18px;
}

#p_nav{
  width:900px;
  margin:20px auto;
  padding:10px 10px;
  color:#000;
  font-family: "微软雅黑";
  font-size: 18px;
}
#p_nav a:link,#p_visited{
  color:#000;
}

div#div_con{
  width:900px;
  height: auto;
}
table{
  width: 900px;

}

div#relatepro{  
  width:900px;
  height: auto;

}

p#p_column{
  float:clear;
  width:870px;
  margin-top: 20px;
  text-align: left;
  font-size: 20px;
  font-family: "微软雅黑";
  padding-bottom: 10px;
  border-bottom: 3px solid red;

}

p.p_list{
  width:300px;
  height: auto;
  float:left;
  
}

div#cutline{
  width:100%;
  height: 10px;
  clear:both;
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
<li class="li_column"><a href="/leavemes.html" target="_blank">留言</a></li>
</ul>
</body>
</html>


<div id="div_main">
<div id="div_con">
 <p id="p_nav" style="line-height:25px;"><img src="/Public/images/comm/currentpos.png" width="25" height="25" align="top" />&nbsp;当前位置：<a href="/pro_center.html">产品中心</a>>>单品介绍</p>

  <table border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td ><img src="/Public/images/pro/<?php echo ($detail["propic"]); ?>" width="100%" align="top" /></td>
    </tr>
    <tr>
      <td valign="middle" height="20px"><span class="lb"><b>型号:</b></span>&nbsp;&nbsp;<?php echo ($detail["prono"]); ?></td>
    </tr>
    <tr>
      <td valign="middle" height="20px"><span class="lb"><b>名称:</b></span>&nbsp;&nbsp;<span class="pro_about"><?php echo ($detail["proname"]); ?></span></span></td>
    </tr>
    <tr>
      <td valign="middle" height="20px"><span class="lb"><b>价格:</b></span>&nbsp;&nbsp;<span class="pro_about">适时报价，请咨询店面</span></td>
    </tr>
    <tr>
      <td valign="top" height"60px"><span class="lb"><b>描述:</b></span>&nbsp;&nbsp;<span class="pro_about"><?php echo ($detail["proabout"]); ?></span></td>
    </tr>
    </table>
</div>
<p id="p_column"><b>同类产品</b></p>
<div id="relatepro">
<?php if(is_array($samepro)): foreach($samepro as $key=>$prosame): ?><p class="p_list"><a href="/proshow_wx/id/<?php echo ($prosame["proid"]); ?>.html"><img width="90%" src="/Public/images/pro/

<?php echo ($prosame["propic"]); ?>"></a></p><?php endforeach; endif; ?>

</div>

</div>
<div id="cutline"></div>
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
  Copyright &copy; 2017-<span id="span_d"></span> www.szfyxhm.com版权所有 粤ICP备17024240号
<script src="/Public/js/year.js" type="text/javascript"></script>
</p>


</div>
</body>
</html>

</body>
</html>