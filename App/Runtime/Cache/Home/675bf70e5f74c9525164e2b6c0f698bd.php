<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>红木产品</title>
<!-- <script type="text/javascript" src="/Public/js/jquery-1.8.3.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
			}
			a{text-decoration:none;}
			a:link,a:visited{color:#000;}
			a:hover{color:#F00;}
			
            /*nav*/
			#div_nav{
				width: 100%;
				margin:0px;
	            padding:0px;
				height: 50px;
				background:#990033;
				letter-spacing:5px; 
			}
			.p_column,.p_logo{
				display: inline-block;
				height: 50px; 
				margin:0px;
				padding:0px;
				float:left;
			}
			.p_column{
				width: 15%;
				line-height:50px;
				font-size:25px;
				font-family:"Microsoft YaHei";
				font-weight: 600;
				text-align:center;
				color: #FFF;

			}
			#div_nav>.p_column a{
				width:100%;
				height:50px;
				font-weight: 600;
			    display:block;
			    color:#FFF;
			}
			#div_nav>.p_column a:hover{
				width:100%;
				height:50px;
			    display:block;
			    background:#C36;
			}
			.p_logo{
				width: 20%;
				text-align:center;
			}
            /*shop*/
            #p_shop{
				position:fixed;
				top:60px;
				right:5px;
				width:49px;
				height:25px;
				z-index: 100;
			}
			#p_shop a:link,#p_lead a:visited{color:#000;}
			#p_shop a:hover{color:#F00;}
            /*lead*/
			#p_lead{
				width:1100px;
				margin:20px auto;
				line-height:25px;
				font-size: 18px;
				font-family: '微软雅黑';
			}

			#p_lead a:link,#p_lead a:visited{color:#000;}
			#p_lead a:hover{color:#F00;}

			/*  搜索框  */
			#tab_search{
			     width:1100px;
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

            /*main*/
			ul{
				width: 1100px;
				margin: 0 auto;

			}
			ul li{
				float: left;
				width: 334px;
				list-style: none;
				margin: 16px;

			}
			ul li div{
				width: 334px;				
				margin-bottom: 20px;				
				padding: 10px;				
				box-sizing: border-box;				
				border-radius: 5px;				
				box-shadow: 2px 2px 10px #919B9C;
		
			}
			ul li img{
				width: 100%;
				margin-bottom: 10px;
			}
			ul li p{
				font-family: "microsoft yahei";
				font-size: 16px;
				text-align: center;
				height: 30px;
				line-height: 30px;
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

	</head>
	<body>
	    <div id="div_nav">
				<p class="p_logo"><a href="/index.html"><img src="/Public/images/comm/fyxbb.png" width="150px" height="50px"></a></p>
				<p class="p_column"><a href="/index.html">首页</a></p>
				<p class="p_column"><a href="/concenter.html" target="_blank" class="nav">资讯</a></p>
				<p class="p_column"><a href="/pro_center.html" target="_blank" class="nav">红木新品</a></p>
				<p class="p_column"><a href="/play.html" target="_blank" class="nav">活动</a></p>
				<p class="p_column"><a href="/video_center.html" target="_blank" class="nav">视频</a></p>
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

		<td width="50px" align="left">   
		    <input name="submit" type="submit" id="button" value="搜索" />
		</td>
		</tr>
		  </form>
		</table>

		<ul id="ul1">
			<li></li>
			<li></li>
			<li></li>	
		
		</ul>

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
         

        
        
	<script>
		 /**
		 * 
		 * @param {Object} method get和post方式
		 * @param {Object} url 文件路径
		 * @param {Object} data 页码
		 * @param {Object} success 成功的函数
		 */
		function ajax(method, url, data, success) {
			var xhr = null;
			try {
				xhr = new XMLHttpRequest();
			} catch (e) {
				xhr = new ActiveXObject('Microsoft.XMLHTTP');
			}
			
			if (method == 'get' && data) {
				url += '?' + data;
			}
			
			xhr.open(method,url,true);
			if (method == 'get') {
				xhr.send();
			} else {
				xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
				xhr.send(data);
			}
			
			xhr.onreadystatechange = function() {
				
				if ( xhr.readyState == 4 ) {
					if ( xhr.status == 200 ) {
						success && success(xhr.responseText);
						console.log(xhr.responseText);
					} else {
						alert('出错了,Err：' + xhr.status);
					}
				}
				
			}
		}

		window.onload = function() {
		//获取界面节点
		var ul = $('#ul1');
		var li = $('li');
		var liLen = li.length;
		page = 1;
		var bool = false;
		//调用接口获取数据
		loadPage();//首次加载

		/**
		 * 加载页面的函数
		 */
		function loadPage(){
			ajax('get', '/ajaxdata', 'page='+page, function(data) {
				//将数据库中获取的数据转换成数组形式，这里要根据数据库中的数据形式来写，这里我获取到的是json形式
				var data = JSON.parse(data);

				//将数据写入到div中
				
				for(var i = 0; i < data.length; i++) {
					var index = getShort(li);//查找最短的li
					//创建新的节点：div>img+p
					var div = $('<div>');
					var a = $('<a>');
					$(a).attr('href','/proshow/id/'+data[i].proid+'.html');
					$(a).appendTo($(div));
					var img = $('<img>');
					$(img).attr('src',"../Public/images/pro/"+data[i].propic);//img获取图片地址
					$(img).attr("alt","我在努力加载...");
					//根据宽高比计算img的高，为了防止未加载时高度太低影响最短Li的判断
					// $(img).css('height',(data[i].height+60) * (334 / data[i].width+20) + "px");
					$(img).appendTo($(a));
					var p = $('<p>');
					$(p).text(data[i].proname);//p获取图片标题
					$(p).appendTo($(div));
					//加入到最短的li中
					$(div).appendTo($(li[index]));
					$(li).appendTo($(ul));

				}
				bool = true;//加载完成设置开关，用于后面判断是否加载下一页
			});
		}
		
		
		window.onscroll = function (){
			var index = getShort(li);
			var minLi = li[index];

			var scrollTop = document.documentElement.scrollTop||document.body.scrollTop;
			
			if(minLi.offsetHeight+minLi.offsetTop<scrollTop+document.documentElement.clientHeight){
				//开关为开，即上一页加载完成，才能开始加载
				if(bool){
					bool = false;
					page++;
					loadPage();
			    }

			}
		}
	 
	}
	
	
	/**
	 * 获取数组中高度最小的索引
	 * @param {Object} li 数组
	 */
	function getShort(li) {
		var index = 0;
		var liHeight = li[index].offsetHeight;
		for(var i = 0; i < li.length; i++) {
			if(li[i].offsetHeight < liHeight) {
				index = i;
				liHeight = li[i].offsetHeight;
			}
		}
		return index;
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
	</body>
</html>