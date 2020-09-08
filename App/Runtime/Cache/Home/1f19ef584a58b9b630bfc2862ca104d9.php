<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>信息中心</title>
<link rel="stylesheet" type="text/css" href="/Public/css/commonstyle.css">
<link rel="stylesheet" type="text/css" href="/Public/css/topnews_qh.css">
<style type="text/css">


#div_main{
      width:1200px;
      height:auto;
      margin:10px auto;
      clear:both;      
}

td a:link{
     color:#000;
}
td a:hover{
     color:#0F0;
}
/*td a:visited{
     color:#990033;
}*/
#div_top{font-size:16px;
         font-family:"宋体";
         padding:10px 0px;     
         margin-bottom:15px;  
}


div#div_hot,div#div_news,div#div_choose,div#div_by{
      font-size:16px;
      margin-top: 5px;
      margin-bottom:0px;
      width:580px;
      height:520px;     
}
div#div_hot{
      float:left;      
}
div#div_news{
      float:right;      
}
div#div_choose{
      float:left;      
}
div#div_by{
      float:right;      
}

.titcss{
     font-family: "微软雅黑";
     font-size:16px;
}
p>a{
    color: black;
}
p>a:hover{
    color:#F00;
}
td>a:link,td>a:visted{
    color:#000;
}
td>a:hover{
     color:#F00;
}

td.pub{font-size: 14px;}

a.newstit{
    display: inline-block;
    /*background: url(/Public/images/comm/tit0.png) no-repeat left center;*/
    background: url(/Public/images/comm/tit0.png);
    padding:5px;
    /*background-clip: padding-box;*/
    background-repeat:no-repeat;
    background-position:left center;
}
a.newstit:hover{
   background: url(/Public/images/comm/tit1.png) no-repeat left center;
}

div.other{
    height:30px;
	  width:100%;
	  border-bottom: 1px solid rgb(200,200,200); 

}
p.cut{
   clear:both;
   width:100%;
   height:8px;
   margin:0px;
   padding:0px;
}
    
.p2{
    float:left;
    width:50%;
    height: 30px;
    line-height: 30px;
    font:22px '黑体';
    color:#333;
    margin-top: 0px;

}
p.mark span{
    background: rgba(100,100,100,0.8);
    display: inline-block;
    width: 18px;
    height: 18px;
    border-radius: 2px;
    font-size: 16px;
    color:white;
    margin-right: 6px;
    text-align: center;

}

/*  更多  */
p.more{
      float:right;
      width:50%;
      height: 30px;
      line-height: 30px;
      text-align:right;
      font-size: 18px;
      font-family: "微软雅黑";
      color: rgb(150,150,150);
}
p.more a{
      color: rgb(150,150,150);
}
.tb11 {
    	background-color: #F90;
    	text-align: center;
}
.tb11 {
	   text-align: center;
}
.sp{
    float:right;
    color:black;
}
li{
    list-style-type:none;
}
a{
    text-decoration:none;
}


#p_curpos{
    font-size: 18px;
    font-family: "微软雅黑";
    line-height:25px;
    padding:0px;
    margin:0px;
}
#p_curpos a:link,#p_curpls a:visited{
     color:black;
}
#p_curpos a:hover{
     color:red;
}

/*手机端隐藏内容*/
/*div#div_hot_mobile{
     display: none;
     width:100%;
     height: auto;
}*/

@media only screen and (max-width: 981px){

    #div_main{
         width:1000px;
         height:auto; 
         margin-left:10vw;
         zoom:1;
         overflow: hidden;
         margin-left:20px;
         /*margin:20px auto;*/

    }
   
  
    div#div_hot{
          width:1000px;   
          height:700px;  
          margin-bottom: 30px;
         /* display: none;*/
         clear:both;
         position: relative;

    }

    div#div_news,div#div_choose,div#div_by{
          width:1000px;
          height:auto;  
          margin-bottom: 30px;
          clear:both;
          position: relative;
    }


    p.more{
         clear:both;
         position: absolute;
         right: 0px;
         top:0px;
    }

    .p2{
        clear:both;       
        line-height: 40px;
        width: 1000px;
        height: 40px;
        text-align: left;
        font-size:2rem;
    /*    background: gray;*/

    } 

    p.mark span{
        background: rgba(200,200,200,0.8);
 /*       display: inline-block;*/
        width: 50px;
        height: 40px;
        border-radius: 5px;
        color:white;
        margin-right: 6px;
        text-align: center;
        vertical-align: top;
        font-size: 30px;
        font-weight: 600;

    }

    a.newstit{
        display: inline-block;
        /*background: url(/Public/images/comm/tit0.png) no-repeat left center;*/
        background: url(/Public/images/comm/icon/tit00.png);
        padding:5px;
        /*background-clip: padding-box;*/
        background-repeat:no-repeat;
        background-position:left center;
    }

    a.newstit span::before{
       
       
    }
    a.newstit:hover{
        background: url(/Public/images/comm/icon/tit11.png) no-repeat left center;
    }

    .titcss{
         font-family: "微软雅黑";
         /*font-size:28px;*/
         font-size: 4vw;
    }

    div.other{
        height:50px;
        border:none; 

    }

    td.pub{
         font-family: "微软雅黑";
         font-size:28px;

    }

    #p_curpos{
        font-size: 30px;
        line-height:40px;
    }

    #p_curpos img{
        width: 30px;
        height: 30px;
    }

    p.more{       
        font-size: 28px;
        padding-top:5px;   
    } 

    p#p_about{
         content: "";
         padding-left:20px;
    }
    div#addr p:before{
         content: "";
         padding-left:20px;
    }

    /*轮播样式改变*/

    .banner{
        width:960px;  
        height: 620px;   

    }

    .banner ul .slider-item {
        width:960px; 
        height: 600px;      
    }

    .banner ul .slider-item img{
        width:960px; 
        height: 600px;      
    }

    .banner ul .slider-item .slider-title {
        width: 960px;
        height: 600px;   
        font-size: 35px;   
        bottom: -20px;
    }

    .banner .progress{
        min-height:6px;

    }

    

}



</style>

<!-- <link rel="stylesheet" type="text/css" href="/Public/css/topnews_qh1.css"> -->
<script>

//设置向baiduspider自动推送
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</head>

<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>topnews</title>
<style type="text/css">
	*{
		padding: 0px;
		margin:0px;
	}
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

    @media only screen and (max-width: 981px){	  
        /*导航*/
	    #ul_nav{    
	       height:80px;   
	       width: 1050px; 

	    }
	    #ul_nav>li{
	       height:80px;

	    }
	    
	    #ul_nav>.li_column{
	      line-height:80px;
	      font-size:30px;
	      
	    }

	    #ul_nav>.li_logo{
	      height:80px;
	      line-height: 80px;
	    }
	    #ul_nav>.li_logo a img{
	      vertical-align: middle;
	    }
	    #ul_nav>.li_column a:hover{
	      height:80px;

	    }

	 
   
    }
   
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
  <div id="div_top">
  <p  id="p_curpos"><img src="/Public/images/comm/currentpos.png" width="25" height="25" style="vertical-align: middle;" /><span style="vertical-align: middle;">&nbsp;当前位置：<a href="#">资讯</a> >> 信息中心</span></p>
  </div>
  <p p_cut></p>

  <!-- 供手机端 -->
<!--    <div id="div_hot_mobile">
      <div class="other">
      <p class="p2 mark"><span>>></span>头条</p>
      <p class="more"><a href="/top_all.html">更多&nbsp;&nbsp;</a></p>
      </div>
      <p class="cut" style="margin-bottom:12px;"></p>
      <div class="banner1" id="b04">
        <ul>
          <?php if(is_array($top)): $i = 0; $__LIST__ = array_slice($top,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topval): $mod = ($i % 2 );++$i;?><li class="slider-item1">
                  <a href="/topnewinfo/id/<?php echo ($topval["newid"]); ?>.html"><img class="imgs" src="/Public/images/new/<?php echo ($topval["pic"]); ?>" alt="<?php echo ($topval["title"]); ?>" width="980px" height="650px" /><span class="slider-title1"><em><?php echo ($topval["title"]); ?></em></span></a>
              </li><?php endforeach; endif; else: echo "" ;endif; ?> 
        </ul>
        <div class="progress"></div>        
      </div>  
  </div> -->

  <!-- pc端 -->
  <div id="div_hot">
      <div class="other">
      <p class="p2 mark"><span>>></span>头条</p>
      <p class="more"><a href="/top_all.html">更多&nbsp;&nbsp;</a></p>
      </div>
      <p class="cut" style="margin-bottom:12px;"></p>
      <div class="banner" id="b04">
      	<ul>
          <?php if(is_array($top)): $i = 0; $__LIST__ = array_slice($top,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topval): $mod = ($i % 2 );++$i;?><li class="slider-item"><a href="/topnewinfo/id/<?php echo ($topval["newid"]); ?>.html"><img class="imgs" src="/Public/images/new/<?php echo ($topval["pic"]); ?>" alt="<?php echo ($topval["title"]); ?>" width="100%" height="400px" /><span class="slider-title"><em><?php echo ($topval["title"]); ?></em></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>	
      	</ul>
      	<div class="progress"></div>      	
      </div>
    <script src="/Public/js/jquery-1.11.1.min.js"></script>
    <script src="/Public/js/unslider.min.js"></script>
    
    <script>
    $(document).ready(function(e) {
    	  var progress = $(".progress"),li_width = $("#b04 li").length;
        var unslider04 = $('#b04').unslider({
    		dots: true,
    		complete:function(index){//自己添加的，官方没有
    			   progress.animate({"width":(100/li_width)*(index+1)+"%"});
    		}
    	}),

    	data04 = unslider04.data('unslider');
    	$('.unslider-arrow04').click(function() {
            var fn = this.className.split(' ')[1];
            data04[fn]();
        });
    });
    </script>
    

  </div>

  <div id="div_news">
      <div class="other">
        <p class="p2 mark"><span>>></span>动态</p>
        <p class="more"><a href="/news_all.html">更多&nbsp;&nbsp;</a></p>
      </div>
      <p class="cut"></p>
      <table width="100%" border="0" align="left" cellpadding="5" cellspacing="0">
      <?php if(is_array($news)): $i = 0; $__LIST__ = array_slice($news,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newsval): $mod = ($i % 2 );++$i;?><tr>
         <!--  <td width="8%" align="center"><img src="/Public/images/comm/tubiao.png" width="10" height="10" align="absmiddle" /></td> -->
          <td class="titcss" width="60%" style="padding:5px;"><a class="newstit" href="/newsinfo/id/<?php echo ($newsval["newid"]); ?>.html"><span style="margin-left:20px;display:inline-block;"><?php echo ($newsval["title"]); ?></a></span></td>
          <td class="pub" width="32%" align="right"><?php echo ($newsval["pubtime"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      </table>

  </div>

  <div id="div_choose">
    <div class="other">
    <p class="p2 mark"><span>>></span>选购</p>
    <p class="more"><a href="/choose_all.html">更多&nbsp;&nbsp;</a></p>
    </div>
    <p class="cut"></p>
    <table width="100%" border="0" align="left" cellpadding="5" cellspacing="0">
    <?php if(is_array($choose)): $i = 0; $__LIST__ = $choose;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chooseval): $mod = ($i % 2 );++$i;?><tr>
         <!--  <td width="8%" align="center"><img src="/Public/images/comm/tubiao.png" width="10" height="10" align="absmiddle" /></td> -->
          <td class="titcss" width="60%" style="padding:5px;"><a class="newstit" href="/chooseinfo/id/<?php echo ($chooseval["serid"]); ?>.html"><span style="margin-left:20px;display:inline-block;"><?php echo ($chooseval["title"]); ?></span></a></td>
          <td class="pub" width="32%" align="right"><?php echo ($chooseval["pubtime"]); ?></td>
       </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
  </div>

  <div id="div_by">
    <div class="other">
    <p class="p2 mark"><span>>></span>保养</p>
    <p class="more"><a href="/by_all.html">更多&nbsp;&nbsp;</a></p>
    </div>
    <p class="cut"></p>
    <table width="100%" border="0" align="left" cellpadding="5" cellspacing="0">
    <?php if(is_array($baoyang)): $i = 0; $__LIST__ = $baoyang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$byvo): $mod = ($i % 2 );++$i;?><tr>
          <!-- <td width="8%" align="center"><img src="/Public/images/comm/tubiao.png" width="10" height="10" align="absmiddle" /></td> -->
          <td class="titcss" width="60%" style="padding:5px;"><a class="newstit" href="/byinfo/id/<?php echo ($byvo["serid"]); ?>.html"><span style="margin-left:20px;display:inline-block;"><?php echo ($byvo["title"]); ?></span></a></td>
          <td class="pub" width="32%" align="right"><?php echo ($byvo["pubtime"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
  </div>
</div>

<div style="width:100px;height:5px;clear: both;"></div>
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
	background-size:100% 320px;
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

@media only screen and (max-width: 981px){
    #div_bot{
       width:1050px;
       height:250px;
       font-size: 26px;
	}

	a#talk img{
		height: 26px;
	}

	p#botcutline{
	   width:980px;
	   margin:10px auto;
	   height:2px;
	}

	#addr p{
		margin-bottom:6px;
	}

	
	   
}

</style>
</head>


<div id="div_bot">
<p id="p_about">
<a id="a_about" href="/about.html">关于我们 | </a><a id="a_about" href="/leavemes.html">留言 </a>
<a id="talk" style="color:black;background-image:linear-gradient(to right bottom,rgb(102,208,205),white);border:1px solid rgb(220,220,220);border-radius: 5px;padding:3px 8px;display:inline-block;line-height: 20px;" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2879286250&site=qq&menu=yes">
<!-- <img align="top"  border="0" src="http://wpa.qq.com/pa?p=2:379215781:51" alt="点击这里给我发消息" title="点击这里给我发消息"/> -->
   <img height="20px" style="vertical-align: middle;" border="0" src="/Public/images/comm/icon/QQ.svg" alt="点击这里给我发消息" title="点击这里给我发消息"/>
        <span style="vertical-align: middle;">QQ交谈</span>
</a>
</p>
<p id="botcutline"></p>
<div id="addr">
  <p>地址:深圳市宝安区福永国际家具村松宝大家具广场二楼</p>
  <p>电话:0755-84571273 邮箱:2879286250@qq.com</p>
  <p>Copyright &copy; 2017-<span id="span_d"></span> www.szfyxhm.com版权所有 粤ICP备17024240号</p>
<script src="/Public/js/year.js" type="text/javascript"></script>
</div>


</div>
</body>
</html>



</body>
</html>