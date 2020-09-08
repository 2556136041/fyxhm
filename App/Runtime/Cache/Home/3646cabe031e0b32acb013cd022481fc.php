<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息中心</title>
<style type="text/css">



#div_main{
      width:900px;
      height:auto;
      margin:15px auto;
      font-size: 25px;  
      font-family: "微软雅黑"; 
}




</style>
<link rel="stylesheet" type="text/css" href="/Public/css/topnews_qh.css">
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
<li class="li_column"><a href="/concenter.html" class="nav">资讯</a></li>
<li class="li_column"><a href="/pro_center.html" class="nav">红木新品</a></li>
<li class="li_column"><a href="javascript:void(0)" class="nav">活动</a></li>
<li class="li_column"><a href="/leavemes.html">留言</a></li>
</ul>
</body>
</html>


<div id="div_main">
<table width="100%" border="0" align="left" cellpadding="20" cellspacing="20">
<?php if(is_array($hmzs)): $i = 0; $__LIST__ = $hmzs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
      <td align="center"><img width="80px" height="60px" src="/Public/images/service/<?php echo ($data["pic"]); ?>" /></td>
      <td style="padding:10px;"><a href="/byinfo/id/<?php echo ($data["serid"]); ?>.html"><?php echo ($data["title"]); ?></a></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</div>
</body>
</html>