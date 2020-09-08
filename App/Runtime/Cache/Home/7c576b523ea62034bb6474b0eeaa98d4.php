<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>红木产品</title>
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
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

#p_lead{
	width:1000px;
	margin:20px auto;
	line-height:25px;
	font-size: 18px;
	font-family: '微软雅黑';
}

#p_lead a:link,#p_lead a:visited{color:#000;}
#p_lead a:hover{color:#F00;}

/*  搜索框  */
#tab_search{
     width:960px;
     height:40px;
     margin:15px auto;	 
	 text-align:right;      
}

input[type="text"]{
    width:400px;
    height:40px;
    font:16px "微软雅黑";
    border:1px solid rgb(200,200,200);
	padding-left:10px;
	line-height:40px;
}
input[type="submit"]{
    width:90px;
    height:40px;
    font:18px "微软雅黑";
    border-radius:3px;
}
input[type="submit"]:hover{
	  cursor:pointer;
	  background:#990033;
	  color:white;
}

/**{
  padding: 0;
  margin:0;
}*/

#main{
    position: relative;
    width:1100px;
    height: auto;
    margin:20px auto;
}
.pin{
    padding: 15px 0 0 15px;
    float:left;
}
.box{
    padding: 10px;
    border:1px solid #990033;
    box-shadow: 0 0 6px #ccc;
    border-radius: 5px;
}
.box img{
    width:324px;
    height:auto;
}

/* bottom */
#div_bot{
   margin:50px 0px;

}


/* 标注 */
#p_mark{
	width:1100px;
	height:auto;
	text-align:left;
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


</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

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
<div style="width:1100px;">
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

</div>
<p id="p_shop"><a href="javascript:void(alert('购物车尚未开通，如有兴趣可通过QQ(2879286250)咨询'))"><img src="/Public/images/comm/shopping1.png" width="49" height="25" align="top" /></a>
</p>
   <p id="p_lead"><img src="/Public/images/comm/currentpos.png" width="25" height="25" align="top" />&nbsp;当前位置：<a href="/index.html">首页</a> >>产品中心</p>

<table id="tab_search" border="0" cellpadding="" cellspacing="">
  <form id="form1" name="form1" method="post" action="/prosearch.html"   
  onsubmit="return checkinput(this)">
<tr>
<td>
    <input width="" align="left" type="text" name="keyword" id="keyword" placeholder=" 关键词" style="margin-right:5px;" />
</td>

<script>
   $(document).ready(function(){
       $("#keyword").focus(function(){
            $(this).css({
				"border":"1px solid red",
           
				 
			});
			$(this).attr("placeholder",null);
       });
	   $("#keyword").blur(function(){
            $(this).css({
				"border":"1px solid rgb(200,200,200)",
			
			});
			$(this).attr("placeholder","关键词");
       });
   });

</script>

<td width="50px" align="left">   
    <input name="submit" type="submit" id="button" value="搜索" />
</td>
</tr>
  </form>
</table>

  <script>
        function checkinput(form){
             if(form.keyword.value==""){
                  alert("还未输入关键词");
                  form.keyword.focus();
                  return false;
             }
             return true;
        }
  </script>

<div id="main">
    <?php if(is_array($proall)): $i = 0; $__LIST__ = $proall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$proval): $mod = ($i % 2 );++$i;?><div class="pin">
            <div class="box">
               <a href="/proshow_wx/id/<?php echo ($proval["proid"]); ?>.html"><img src="/Public/images/pro/<?php echo ($proval["propic"]); ?>" /></a> <span style="display: block;text-align: center;"><?php echo ($proval["proname"]); ?></span> 
            </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>  

<script>

$( window ).on( "load", function(){
    waterfall('main','pin');
    // var dataInt={'data':[{'src':'1.jpg'},{'src':'2.jpg'},{'src':'3.jpg'},{'src':'4.jpg'}]};
    // window.onscroll=function(){
    //     if(checkscrollside()){
    //         $.each( dataInt.data, function( index, value ){
    //             var $oPin = $('<div>').addClass('pin').appendTo( $( "#main" ) );
    //             var $oBox = $('<div>').addClass('box').appendTo( $oPin );
    //             $('<img>').attr('src','./images/' + $( value).attr( 'src') ).appendTo($oBox);
    //         });
    //         waterfall();
    //     };
    // }
});

/*
    parend 父级id
    pin 元素id
*/
function waterfall(parent,pin){
    var $aPin = $( "#main>div" );
    var iPinW = $aPin.eq( 0 ).width();// 一个块框pin的宽
    var num = Math.floor( $( "#main" ).width() / iPinW );//每行中能容纳的pin个数【窗口宽度除以一个块框宽度】
    //oParent.style.cssText='width:'+iPinW*num+'px;ma rgin:0 auto;';//设置父级居中样式：定宽+自动水平外边距
    $( "#main" ).css({
        'width:' : iPinW * num,
        'margin': '0 auto'
    });

    var pinHArr=[];//用于存储 每列中的所有块框相加的高度。

    $aPin.each( function( index, value ){
        var pinH = $aPin.eq( index ).height();
        if( index < num ){
            pinHArr[ index ] = pinH; //第一行中的num个块框pin 先添加进数组pinHArr
        }else{
            var minH = Math.min.apply( null, pinHArr );//数组pinHArr中的最小值minH
            var minHIndex = $.inArray( minH, pinHArr );
            $( value ).css({
                'position': 'absolute',
                'top': minH + 15,
                'left': $aPin.eq( minHIndex ).position().left
            });
            //数组 最小高元素的高 + 添加上的aPin[i]块框高
            pinHArr[ minHIndex ] += $aPin.eq( index ).height() + 15;//更新添加了块框后的列高
        }
    });
}

// function checkscrollside(){
//     var $aPin = $( "#main>div" );
//     var lastPinH = $aPin.last().get(0).offsetTop + Math.floor($aPin.last().height()/2);//创建【触发添加块框函数waterfall()】的高度：最后一个块框的距离网页顶部+自身高的一半(实现未滚到底就开始加载)
//     var scrollTop = $( window ).scrollTop()//注意解决兼容性
//     var documentH = $( document ).width();//页面高度
//     return (lastPinH < scrollTop + documentH ) ? true : false;//到达指定高度后 返回true，触发waterfall()函数
// }


</script>

<!-- <div id="div_bot">
<p id="p_mark">
<font color="red">*</font>共有<?php echo ($pronums); ?>件产品
<br /><br />
<font color="red">*</font>所有图片均为福逸轩红木家具实景拍摄
<br /><br />
<font color="red">*</font>因红木家具价格波动大，故未进行适时报价，详情可通过QQ咨询</
</p>

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

</div> -->
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
</body>
</html>