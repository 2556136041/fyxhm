<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>选购</title>
<link rel="stylesheet" type="text/css" href="/Public/css/commonstyle.css">
<style type="text/css">

h1{
	font-family:"微软雅黑";
}

p#currpos{
     background:#CCC;
	 font-family:"黑体";
	 font-size:18px;
	 width:1200px;
	 height:25px;
	 margin:20px auto;
	 line-height:25px;
	 padding:5px 0px;
}
#currimg{
	width:25px;
	height:25px;	
}

#div_main{
	width:1200px;
	height:auto;
	margin:10px auto;
}
#div_l{
	float:left;
	width:73%;
}
#p_lead{
	width:80%;
	background:gray;
	margin:15px auto;
	padding:10px;
	text-align:justify; 	
	text-indent: 2em;	
	color:white;
	font-family: "黑体";
	font-size: 16px;
	line-height: 26px;

}

#content{
	 text-align:justify;
	 font-size:16px;
	 font-family:"微软雅黑";
	 line-height: 26px;
}

/*  分享   */
#share{width:100%;
       height:auto;}
#share a{width: 40px;height: 40px;padding: 0;margin: 6px;}
#share a.bds_weixin{background: url(/Public/images/comm/微信.png) no-repeat;}
#share a.bds_tsina{background: url(/Public/images/comm/微博.png) no-repeat;}
#share a.bds_qzone{background: url(/Public/images/comm/QQ空间.png) no-repeat;}
#share a.bds_renren{background: url(/Public/images/comm/人人网.png) no-repeat;}
#share a.bds_more{background: url(/Public/images/comm/更多.png) no-repeat;}
table{
	width:100%;

}
table{
	width:100%;

}
#tab2{
	clear: both;
	margin-bottom: 20px;
	font-family: "微软雅黑";
	font-size: 18px;
	color:rgb(20,20,20);
}

.turnpage>a{
	color:rgb(20,20,20);
}
.turnpage>a:hover{
	color:red;
}

#div_right{
	float:right;
	width:25%;
	height:auto;
	/*background: gray;*/
	margin:10px 0px;
}
#tab3{
	width:90%;
	margin:15px auto;
	font-family: "黑体";
	font-size: 16px;
}	

#tab3 img{
	width: 100%;

}
.side_bar{
    font-family: "微软雅黑";
	font-size: 20px;
	margin:0px;
	padding:0px;
}
.sideline{
	margin:0px;
	padding:0px;
	width:100%;
	height: 4px;
}
.sideline_w{
	display: inline-block;
	width:20%;
	height: 4px;
	margin:0px;
	padding:0px;
	background:#990033;

}
.sideline_l{
	display: inline-block;
	width:80%;
	height: 2px;
    margin:1px auto;
	background:#C36;

}

p#p_cutline{
    width:100%;
	height:3px;
	background:#990033;
	margin:10px auto;
}

/* qh  */
*{
   margin:0;
   padding:0;
}
ul,li{
	list-style:none;
	font-size:16px;
	font-family:'黑体';
	text-align:left;
	}
.list_lh a{
	text-decoration:none;
}
.list_lh a:hover{
	color:red;
}
.bcon{
	width:100%;
	/*border:1px solid #eee;*/
	margin:15px auto;
}
.list_lh{
	height:100px;
	overflow:hidden;
	text-align: center;
	font-size: 16px;
}
.list_lh li p{
	height:30px;
	line-height:30px;
}
p.classic_cut{
	height:15px;
	width:100%;
}

/*回到顶部*/
#btn{
	display: none;
	width: 80px;
	height: 80px;
	position: fixed;
	left:50%;
	margin-left: 620px;
	bottom:220px;
	background:url(/Public/images/pro/fyx2.jpg) no-repeat left top;
}
#btn:hover{
	background:url(/Public/images/pro/fyx2.jpg) no-repeat left -80px;
}

.flow{
	text-overflow: ellipsis;
	overflow: hidden;
	white-space: nowrap;
	width:280px;
}

@media only screen and (max-width: 981px){

	p#currpos{
		 width:980px;		 
	}

	#div_main{
		width:980px;
	}
	#div_l{
		width:980px;
		clear: both;
	}
	
	#div_right{
		display: none;
	}
	
    #div_img img{
    	width: 980px;
    }

    h1{
    	font-size: 40px;
    }
    #p_lead{
        font-size: 20px;
    }
    #content{
		 text-align:justify;
		 padding:0px 20px; 
		 font-size:20px;
		 font-family:"微软雅黑";
		 line-height: 26px;

    }

}

</style>
<script type="text/javascript" src="/Public/js/jquery/jquery3.0.js"></script>


<script>
(function($){
    $.fn.myScroll = function(options){
    //默认配置
    var defaults = {
        speed:40,  //滚动速度,值越大速度越慢
        rowHeight:24 //每行的高度
    };
    var opts = $.extend({}, defaults, options),intId = []; 
    function marquee(obj, step){    
        obj.find("ul").animate({
            marginTop: '-=1'
        },0,function(){
                var s = Math.abs(parseInt($(this).css("margin-top")));
                if(s >= step){
                    $(this).find("li").slice(0, 1).appendTo($(this));
                    $(this).css("margin-top", 0);
                }
            });
        }       
        this.each(function(i){
            var sh = opts["rowHeight"],speed = opts["speed"],_this = $(this);
            intId[i] = setInterval(function(){
                if(_this.find("ul").height()<=_this.height()){
                    clearInterval(intId[i]);
                }else{
                    marquee(_this, sh);
                }
            }, speed);
            _this.hover(function(){
                clearInterval(intId[i]);
            },function(){
                intId[i] = setInterval(function(){
                    if(_this.find("ul").height()<=_this.height()){
                        clearInterval(intId[i]);
                    }else{
                        marquee(_this, sh);
                    }
                }, speed);
            });

        });
    }
})(jQuery);

$(document).ready(function(){      
    $("div.list_lh").myScroll({
        speed:40, //数值越大，速度越慢
        rowHeight:30 //li的高度
    });
})

//回到顶部
//document.onreadystatechange等同于window.onload
	window.onload=function(){
		var obtn=document.getElementById('btn');
		var clientHeight=document.documentElement.clientHeight;
		var timer=null;
		var isTop=true;
		window.onscroll=function(){
			var ostop=document.documentElement.scrollTop || document.body.scrollTop;
			if(ostop>=clientHeight){
                obtn.style.display='block';
			}else{
				obtn.style.display='none';
			}
			if(!isTop){
				clearInterval(timer);
			}
			isTop=false;
		}
		    obtn.onclick=function(){
		    	// alert(clientHeight);
		    	timer=setInterval(function(){
                    var ostop=document.documentElement.scrollTop || document.body.scrollTop;
                    var ispeed=Math.floor(-ostop / 10);
		    	    document.documentElement.scrollTop = document.body.scrollTop =ostop+ispeed;
		    	    isTop=true;
		    	    if(ostop==0){
		    	    	clearInterval(timer);
		    	    }
		    	},30);
		    	
		    }
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
<img id="currimg" src="/Public/images/comm/currentpos.png" align="top">&nbsp;当前位置：<a href="/index.php">首页</a> >> <a href="/choose_all.html">选购</a>>>正文
</p>
<div id="div_main">
<div id="div_l">
<table border="0" cellspacing="10" cellpadding="0">
	<tr>
		<td><h1 align="center"><?php echo ($choose["title"]); ?></h1></td>
    </tr>
    <tr>
		<td align="center"><span><?php echo ($choose["author"]); ?></span>&nbsp;<span><?php echo ($choose["comfrom"]); ?></span>&nbsp;<span><?php echo ($choose["pubtime"]); ?></span></td>
	</tr>
    <tr>
		<td>
            <div id="share">
			<div class="bdsharebuttonbox">  
			<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a> 
			<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>  
			<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>  
			<!-- <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
			<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>   -->   
			<a href="#" class="bds_more" data-cmd="more"></a>     
			</div>  
			</div>
			
			<script type="text/javascript">
			window._bd_share_config={  
			        "common":{  
			            "bdPopTitle":"您的自定义pop窗口标题",  
			            "bdSnsKey":{},  
			            "bdText":"此处填写自定义的分享内容",   
			            "bdMini":"2",  
			            "bdMiniList":false,  
			            "bdPic":"http://localhost/centlight/public/attachment/201410/24/14/5449ef39574f5_282x220.jpg", /* 此处填写要分享图片地址 */  
			            "bdStyle":"0",  
			            "bdSize":"16"  
			            },  
			        "share":{}  
			};  
			with(document)0[  
			                (getElementsByTagName('head')[0]||body).  
			                appendChild(createElement('script')).  
			                src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)  
			];  

			</script> 
			
        </td>
	</tr>
    <tr>
		<td><p id="p_lead"><?php echo ($choose["lead"]); ?></p></td>
	</tr>
	<tr>
		<td align="center"><div class="div_img"><img src="/Public/images/service/<?php echo ($choose["pic"]); ?>" width="600px" alt="" /></div></td>
	</tr>
    <tr>
		<td id="content"><?php echo (html_entity_decode($choose["content"])); ?></td>
	</tr>
</table>

<p id="p_cutline"></p>
<table border="0" cellspacing="10" cellpadding="0" id="tab2">
<?php if($f_t!=null): ?><tr>
<td class="turnpage">上一篇：<a href="<?php echo ($furl); ?>.html"><?php echo ($f_t); ?></a></td>
</tr>
<?php else: ?>
<tr><td>没有了</td></tr><?php endif; ?>
<?php if($a_t!=null): ?><tr>
<td class="turnpage">下一篇：<a href="<?php echo ($aurl); ?>.html"><?php echo ($a_t); ?></a></td>
</tr>
<?php else: ?>
<tr><td>没有了</td></tr><?php endif; ?>
</table>
</div>

<div id="div_right">
<table border="0" cellspacing="10" cellpadding="0" id="tab3">
	<tr>
		<td>
		<p class="side_bar">热点</p>
		<p class="sideline"><span class="sideline_w"></span><span class="sideline_l"></span></p>
		<p class='classic_cut'>
		 <?php if(is_array($top)): $i = 0; $__LIST__ = array_slice($top,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topvo): $mod = ($i % 2 );++$i;?><p class="p_img"><img src="/Public/images/new/<?php echo ($topvo["pic"]); ?>" alt="" />
		</p>
		<p class='classic_cut'>
		<p class="side_tit"><a href="/topnewinfo/id/<?php echo ($topvo["newid"]); ?>.html"><?php echo ($topvo["title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="bcon">
            <div class="list_lh">
               <ul>
               <?php if(is_array($top)): $i = 0; $__LIST__ = array_slice($top,1,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topvo): $mod = ($i % 2 );++$i;?><li><p class='flow'><a href="/topnewinfo/id/<?php echo ($topvo["newid"]); ?>.html"><?php echo ($topvo["title"]); ?></a></p></li><?php endforeach; endif; else: echo "" ;endif; ?>
               </ul>
            </div>
        </div>

		</td>
	</tr>
    <tr>
		<td>
		<p class="side_bar">动态</p>
		<p class="sideline"><span class="sideline_w"></span><span class="sideline_l"></span></p>
		<p class='classic_cut'>
		<p class="p_img"><img src="/Public/images/new/<?php echo ($new["pic"]); ?>" alt="" />
		</p>
		<p class='classic_cut'>
		<p class="side_tit"><a href="/newsinfo/id/<?php echo ($new["newid"]); ?>.html"><?php echo ($new["title"]); ?></a></p>
		</td>
	</tr>
	<tr>
		<td>
		<p class='classic_cut'>
		<p class="side_bar">保养</p>
		<p class="sideline"><span class="sideline_w"></span><span class="sideline_l"></span></p>
		<p class='classic_cut'>
		<p class="p_img"><img src="/Public/images/service/<?php echo ($by["pic"]); ?>" alt="" /></p>	
		<p class='classic_cut'>
		<p class="side_tit"><a href="/byinfo/id/<?php echo ($by["serid"]); ?>.html"><?php echo ($by["title"]); ?></a></p>
		</td>
	</tr>
	
</table>
</div>
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


<a href="javascript:void(0);" id="btn" title="回到顶部"></a>
</body>
</html>