<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>保养</title> 
<link rel="stylesheet" type="text/css" href="/Public/css/commonstyle.css">
<style type="text/CSS"> 

a{text-decoration:none;}
div.page{text-align:center;}
div.page a{border:#CCC 1px solid;
           padding:3px 5px;
		   margin:0px 5px;
           }
div.page span.current{background:#c36;
                      border:#CCC 1px solid;
                      padding:3px 7px;
                      }
div.page span.nohref{border:#CCC 1px solid;
                     padding:3px 5px;
		             margin:0px 5px;
           } 
#tab1{width:1200px;
      height:auto;
	  margin:0px auto;
	  }
#tab2{width:1200px;
	  margin:20px auto;
	  font:16px verdana;
	  }

p#currpos{
     background:#CCC;
	 font-family:"黑体";
	 font-size:18px;
	 width:1200px;
	 height:25px;
	 margin:15px auto;
	 line-height:25px;
	 padding:5px 0px;
}
h3{
   font-family:"微软雅黑";
}
#currimg{
	width:25px;
	height:25px;
	
}

.pages a,
	.pages span {
		display: inline-block;
		padding: 2px 5px;
		margin: 0 1px;
		border: 1px solid white;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		border-radius: 3px;
	}

.pages a,
.pages li {
	display: inline-block;
	list-style: none;
	text-decoration: none;
	color: #990033;
}
.pages li {
	margin-right: 50px;
}

.pages a.first,
.pages a.prev,
.pages a.next,
.pages a.end {
	margin: 0;
}

.pages a:hover {
	border-color: #990033;
}

.pages span.current {
	background: #990033;
	color: #FFF;
	font-weight: 700;
	border-color: #990033;
}

@media only screen and (max-width: 981px){
    div.page{text-align:center;}
  
  #tab1{
      width:964px;
      }
  #tab2{
      width:964px;
      }

  p#currpos{
     width:964px;
  }
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

<p id="currpos">&nbsp;
<img id="currimg" src="/Public/images/comm/currentpos.png" align="top">&nbsp;当前位置：<a href="/index.php">首页</a> >> 保养
</p>

<table id="tab1" align="center" border="0" cellpadding="10" cellspacing="0"> 
<?php if(is_array($list)): foreach($list as $key=>$all): ?><tr>
<td height='25' width="100px" align='left' class='m_td'><div class="div_img"><img src="/Public/images/service/<?php echo ($all["pic"]); ?>" width="100px" height="65px" alt="" /></div></td>
<td height='25' width="" align='left' class='m_td'><a href="/byinfo/id/<?php echo ($all["serid"]); ?>.html"><h3><?php echo ($all["title"]); ?></h3></a></td>
<td height='25' width="20%" align='right' class='m_td'><?php echo ($all["pubtime"]); ?></td>
</tr><?php endforeach; endif; ?>
</table> 
<table id="tab2">
<tr> 
<td align='center' colspan="8" class="pages">
<?php echo ($page); ?>
<td>
</tr> 
</table>

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