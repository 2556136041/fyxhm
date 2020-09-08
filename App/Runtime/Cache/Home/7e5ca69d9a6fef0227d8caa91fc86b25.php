<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>红木视频</title>
<style type="text/css">

*{margin: 0;padding: 0;}
.loading{
	width: 100%;
	height: 100%;
	position:fixed;
	top:0;
	left: 0;
	z-index: 100;
	background: white;
}
.pic{
	 width:64px;
     height:64px;
     background-image:url(/Public/images/comm/35.gif);
     position: absolute;
     top: 0;
     bottom: 0;
     left: 0;
     right: 0;
     margin:auto;
}
a{text-decoration:none;}
#p_shop{
	position:fixed;
	top:60px;
	right:5px;
	width:49px;
	height:25px;
}
#p_shop a:link,#p_lead a:visited{color:#000;}
#p_shop a:hover{color:#F00;}


div#container{
     width: 100vw;
     height: 100vh;
     /*background: gray;*/
     position: relative;
}

div#top{
     width: 100%;
     position: fixed;
     left: 0px;
     top: 0px;
}

div#bottom{
     width: 100%;
     position: fixed;
     left: 0px;
     bottom: 0px;
}

#p_lead{
	width:1000px;
	margin:20px auto;
	line-height:25px;
	font-size: 18px;
	font-family: '微软雅黑';
}
#p_lead a:link,#p_lead a:visited{color:#000;}
#p_lead a:hover{color:#F00;}

#div_main{

	width:1000px;
	height:auto;
	margin:0px auto;
}

#div_main .div_video{
	float:left;
	width:480px;
	height:auto;
	background:black;
	color:white;
}
video#video1{
   width:460px;
   margin:10px;

}
#div_main .div_video a{
	color:white;
}

span#about{
	text-align:center;
	line-height:40px;
	font-size:20px;
	font-family:"微软雅黑";
	font-weight:800;
	color:white;
	padding-left:10px;
}

#p_mark{
	width:1000px;
	height:auto;
	text-align:left;
	clear:both;
	margin:25px auto;
	padding:15px 0px;
	font:16px "微软雅黑";
}

/*回到顶部 */
.dn{
    display: none;
}
.go-top{
    position: fixed;
    bottom: 220px;
    right: 20px;
    width: 46px;
    z-index: 999;
}
.go-top a{
    display: block;
    width: 46px;
    height: 46px;
    margin-bottom: 10px;
    background-image: url(/Public/images/hf/go-top1.png);
}
.go-top a:last-child{
    margin-bottom: 0;
}
.go-top .go{
    background-position: 0 -150px;
}
.go-top .go:hover{
    background-position: 0 -250px;
}
.go-top .feedback{
    background-position: 0 -100px;
}
.go-top .feedback:hover{
    background-position: 0 -300px;
}
.go-top .uc-2vm{
    background-position: 0 0;
}
.go-top .uc-2vm:hover{
    background-position: 0 -350px;
}
.go-top .uc-2vm-pop{
    position: absolute;right: 60px;top: -100px;
    width: 240px;box-shadow: 0px 1px 4px rgba(0,0,0,.1);
    background: #fff;
}
.go-top .uc-2vm-pop .title-2wm{
    font-size: 14px; margin: 10px 20px;
}
.go-top .uc-2vm-pop .logo-2wm-box{
    position: relative;
}

@media only screen and (max-width: 981px){

     div#container{
       width: 100vw;
       height: 100vh;
       /*background: gray;*/
       position: relative;
     }

     div#top{
       position: fixed;
       left: 0px;
       top: 0px;
     }

     div#bottom{
       position: fixed;
       left: 0px;
       bottom: 0px;
     }

     #p_lead{
      width: 900px;
      line-height:40px;
      font-size: 30px;
      margin:20px auto;

    }

    #p_lead img{
      width:30px;
      height:30px;

    }
    #div_main{
       width: 900px;
       height:auto;
       margin:0px auto;
    } 
    #div_main .div_video{
       width:900px;
       height:680px;
       background:black;

    }
    video#video1{
       width:880px;
       height:600px;
    }

    span#about{
      font-size:30px;
    }


    


}


</style>
<script type="text/javascript" src="/Public/js/jquery/jquery3.0.js"></script>

<script>
document.onreadystatechange=function(){
      var loading='<div class="loading"><div class="pic"></div></div>';
      $('body').append(loading);
      if(document.readyState=='complete'){
      	  $('.loading').fadeOut();
      };
}

//回到顶部


$(function(){
  $(window).on('scroll',function(){
    var st = $(document).scrollTop();
    if( st>0 ){
      if( $('#main-container').length != 0  ){
        var w = $(window).width(),mw = $('#main-container').width();
        if( (w-mw)/2 > 70 )
          $('#go-top').css({'left':(w-mw)/2+mw+20});
        else{
          $('#go-top').css({'left':'auto'});
        }
      }
      $('#go-top').fadeIn(function(){
        $(this).removeClass('dn');
      });
    }else{
      $('#go-top').fadeOut(function(){
        $(this).addClass('dn');
      });
    } 
  });
  $('#go-top .go').on('click',function(){
    $('html,body').animate({'scrollTop':0},500);
  });

  $('#go-top .uc-2vm').hover(function(){
    $('#go-top .uc-2vm-pop').removeClass('dn');
  },function(){
    $('#go-top .uc-2vm-pop').addClass('dn');
  });
});
</script>

<script>

	
</script>

</head>

<body>
<div id="container">

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

	@media only screen and (max-width: 981px){	  

	    /*导航*/
	    #ul_nav{    
	       width:1000px;
	       height:80px;    
  
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

      <!--
      <p id="p_shop"><a href="javascript:void(alert('购物车尚未开通，如有兴趣可通过QQ(2879286250)咨询'))"><img src="/Public/images/comm/shopping1.png" width="49" height="25" align="top" /></a>
      </p>
      -->
      <p id="p_lead"><img src="/Public/images/comm/currentpos.png" width="25" height="25" style="vertical-align: middle;" /><span style="vertical-align: middle;">&nbsp;当前位置：</span><a href="/index.html">首页</a> >> 视频中心</p>

      <div id="div_main">
      <?php if(is_array($videoall)): $i = 0; $__LIST__ = $videoall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$videoval): $mod = ($i % 2 );++$i;?><div class="div_video">

      <video id="video1" src="/Public/video/<?php echo ($videoval["source"]); ?>" poster="/Public/images/comm/<?php echo ($videoval["poster"]); ?>" controls >
      <!-- <video id="video1" src="/Public/video/<?php echo ($videoval["source"]); ?>" poster="/Public/video/fm1.jpg" controls > -->
        <!-- <source src="/Public/video/<?php echo ($videoval["source"]); ?>" type="video/mp4">
        <source src="movie.ogg" type="video/ogg"> -->
      您的浏览器不支持Video标签。
      </video>
      <span id="about"><a href="/videoshow/id/<?php echo ($videoval["id"]); ?>.html"><?php echo ($videoval["title"]); ?></a></span>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>  
      <div style="clear:both;"></div>

      <div id="bottom">
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
	width:1000px;
	height:260px;

   }

   #p_about{
	width:900px;
	}
	#addr{
		width:900px;
	}

	p#botcutline{
	   clear:both;
	   width:900px;

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
<p id="addr">
  地址:深圳市宝安区福永国际家具村松宝大家具广场二楼<br />
  电话:0755-84571273 邮箱:2879286250@qq.com<br />
  Copyright &copy; 2017-<span id="span_d"></span> www.szfyxhm.com版权所有 粤ICP备17024240号
<script src="/Public/js/year.js" type="text/javascript"></script>
</p>


</div>
</body>
</html>

            <!-- 回到顶部 -->
            <div class="go-top dn" id="go-top">
                <a href="javascript:;" class="uc-2vm"></a>
                <div class="uc-2vm-pop dn">
                    <h2 class="title-2wm">用微信扫一扫</h2>
                    <div class="logo-2wm-box">
                      <img src="/Public/images/comm/qr.png" alt="福逸轩红木官微" width="240" height="240">
                    </div>
                </div>
                <a href="/leavemes.html" target="_blank" class="feedback"></a>
                <a href="javascript:;" class="go"></a>
            </div>
      </div>
      
</div>
</body>
</html>