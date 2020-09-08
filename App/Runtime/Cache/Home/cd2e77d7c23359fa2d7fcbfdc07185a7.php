<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>活动联系电话</title>
	<style>
	   *{
	   	   font-size: 40px;
	   	   font-style: "Microsoft Yahei";
	    }

	   .cover{
		  width:100%;
		  height: 80px;
		  background: black;
		  position: fixed;
		  z-index: 100;
		  display:none;
		  left: 0px;
		  top: 0px;

		}

		.warn{
		   color:white;
		   font-size:30px;
		   text-align:center;

		   height:50px;
		   line-height:80px;
		   
		}
		.wz{
			width:70%;
			float:left;
			text-align:right;
		}

       table#reg{
		    width:100%;
		  	height:100px;
		  	background:#990033;
		    /*margin-top: 80px;*/
		    margin-left:0px;

       }

		.input1
		{
		    width: 70%;
		    height: 60px;
		    font-size: 25px;
		    border:1px solid black;
		    padding-left:8px;
		}
		#tjbut
		{
		  width: 71%;
		  height: 70px;
		  line-height:70px;
		  border-radius: 8px;
		  font-size:40px;
		  font-family: "微软雅黑";
		  background-color: rgb(150,150,150);
		  color:white;
		}

		#tjbut:hover
		{
		   background: #E50040;
		}



       th>td,tr>td{
       	   text-align: center;

       }
       h1{
       	  text-align: center;
       	  font-weight: 800;
       	  font-size:50px;
       }
       a{
       	  color:red;
       	  text-decoration: none;
       }

       span.more{
			
			animation: dh_mark 2s linear 1s infinite alternate;
			-webkit-animation:dh_mark 2s linear 1s infinite alternate;
		}
        @keyframes dh_mark
		{
			0%{opacity: 0;}
			10%{opacity: 0;}    
			30%{opacity: 0.5;}
			60%{opacity: 0.7;}
			80%{opacity: 1;}
			100%{opacity: 1;}
		}
		@-webkit-keyframes dh_mark
		{
			0%{opacity: 0;}
			10%{opacity: 0;}    
			30%{opacity: 0.5;}
			60%{opacity: 0.7;}
			80%{opacity: 1;}
			100%{opacity: 1;}
		}
	</style>

</head>
<body>

 <table id="reg" border="0" cellspacing="20" cellpadding="20" class="bg-danger"> 
 <tr> 
    <td align="center"><input type="text" class="input1" name="username" required id="username" placeholder="姓名" /></td> 

 </tr> 
 <tr> 
    <td align="center"><input class="input1" type="text" name="tel" id="tel" required placeholder="手机号" /></td> 

 </tr> 
  <tr> 
    <td align="center"><input class="input1" type="number" name="nums" required id="nums" placeholder="人数，默认1" /></td> 

 </tr> 
<tr> 
    <td align="center">
   <button id="tjbut" onclick="login_ajax()">提交</button>
    </td> 
</tr> 

</table> 

<h1>中国好红木观摩团报名名单</h1>


<h3 style="width:100%;height: 50px;text-align: center;">新增报名名单（<span class="more" style="color:rgb(255,0,0)">更新中...</span>）</h3>
<h3 style="text-align:right;width:90%;">已报名<span style="color:red;"><?php echo ($allnums); ?></span>人</h3>
<table width="90%" align="center" border="1" cellpadding="10" cellspacing="0">
         <tr>
        	<th>姓名</th>
        	<th>电话</th>
        	<th>人数</th>
        </tr>
        <?php if(is_array($data)): foreach($data as $key=>$value): ?><tr>

			<td width="30%"><?php echo ($value["username"]); ?></td> 
			<td width="30%"><a href="tel:<?php echo ($value["tel"]); ?>"><?php echo (substr_replace($value["tel"],'****',3,4)); ?></a></td> 
			<td><?php echo ($value["nums"]); ?></a></td> 	
		</tr><?php endforeach; endif; ?>
	    
</table>

<h3 style="width:100%;height: 50px;text-align: center;">报业内部报名名单</h3>
<table width="90%" align="center" border="1" cellpadding="10" cellspacing="0">
    <tr>
    	<th>联系人</th>
    	<th>手机号</th>
    	<th>联系人</th>
    	<th>手机号</th>
    </tr>
    <tr>
		<td>潘未末</td>
		<td><a href="tel:13802212533">13802212533</a></td>
		<td>丁庆林</td>
		<td><a href="tel:13312960117">13312960117</a></td>
	</tr>
	<tr>
		<td>冯佩珍</td>
		<td><a href="tel:13609616016">13609616016</a></td>
		<td>玄伟东</td>
		<td><a href="tel:13823209490">13823209490</a></td>
	</tr>
	<tr>
		<td>刘源屏</td>
		<td><a href="tel:13602687499">13602687499</a></td>
		<td>刘维坤</td>
		<td><a href="tel:13828880808">13828880808</a></td>
	</tr>
	<tr>
		<td>谭凤希</td>
		<td><a href="tel:13510260400">13510260400</a></td>
		<td>李素玉</td>
		<td><a href="tel:13631636936">13631636936</a></td>
	</tr>
	<tr>
		<td>石海华</td>
		<td><a href="tel:15986689923">15986689923</a></td>
		<td>张志灵</td>
		<td><a href="tel:13316581888">13316581888</a></td>
	</tr>
	<tr>
		<td>麦苗茵</td>
		<td><a href="tel:13602596013">13602596013</a></td>
		<td>刘思凡</td>
		<td><a href="tel:18824628677">18824628677</a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td>赵 璐</td>
		<td><a href="tel:13802565095">13802565095</a></td>
		<td>彭健雄</td>
		<td><a href="tel:13823733225">13823733225</a></td>
	</tr>
	<tr>
		<td>张 萌</td>
		<td><a href="tel:13823165818">13823165818</a></td>
		<td>郑晓军</td>
		<td><a href="tel:18098947130">18098947130</a></td>
	</tr>
	<tr>
		<td>杨  桥</td>
		<td><a href="tel:13923402939">13923402939</a></td>
		<td>张 忆</td>
		<td><a href="tel:13500065448">13500065448</a></td>
	</tr>
	<tr>
		<td>张  米</td>
		<td><a href="tel:13902939007">13902939007</a></td>
		<td>丁 薇</td>
		<td><a href="tel:15815515305">15815515305</a></td>
	</tr>
	<tr>
		<td>朱海燕</td>
		<td><a href="tel:13632578229">13632578229</a></td>
		<td>杨乔博</td>
		<td><a href="tel:13631621770">13631621770</a></td>
	</tr>
	<tr>
		<td>李  琳</td>
		<td><a href="tel:18565655522">18565655522</a></td>
		<td>曾思玮</td>
		<td><a href="tel:15012661060">15012661060</a></td>
	</tr>
	<tr>
		<td>张钰琳</td>
		<td><a href="tel:13651463083">13651463083</a></td>
		<td>盛佳婉</td>
		<td><a href="tel:15914155492">15914155492</a></td>
	</tr>
	<tr>
		<td>彭杰</td>
		<td><a href="tel:13632719100">13632719100</a></td>
		<td>谢欣如</td>
		<td><a href="tel:13138180032">13138180032</a></td>
	</tr>
	<tr>
		<td>陈皓晖</td>
		<td><a href="tel:15521326733">15521326733</a></td>
		<td>张敬媛</td>
		<td><a href="tel:18098905923">18098905923</a></td>
	</tr>
	<tr>
		<td>昌慧</td>
		<td><a href="tel:18603077183">18603077183</a></td>
		<td>汪新林</td>
		<td><a href="tel:13088829771">13088829771</a></td>
	</tr>
	<tr>
		<td>陈永南</td>
		<td><a href="tel:13530021228">13530021228</a></td>
		<td>刘春雨</td>
		<td><a href="tel:13632913639">13632913639</a></td>
	</tr>
	<tr>
		<td>梁晶晶</td>
		<td><a href="tel:15999554770">15999554770</a></td>
		<td>胡蓉</td>
		<td><a href="tel:13682465400">13682465400</a></td>
	</tr>
	<tr>
		<td>顾咏梅</td>
		<td><a href="tel:13510989695">13510989695</a></td>
		<td>袁 广</td>
		<td><a href="tel:13686868823">13686868823</a></td>
	</tr>
	<tr>
		<td>郑 剑</td>
		<td><a href="tel:13808802439">13808802439</a></td>
		<td>黄敏慧</td>
		<td><a href="tel:18576610606">18576610606</a></td>
	</tr>
	<tr>
		<td>王晓春</td>
		<td><a href="tel:15012912990">15012912990</a></td>
		<td>曾军敏</td>
		<td><a href="tel:13802225190">13802225190</a></td>
	</tr>
	<tr>
		<td>潘斌媚</td>
		<td><a href="tel:13691883838">13691883838</a></td>
		<td>何春红</td>
		<td><a href="tel:13530963917">13530963917</a></td>
	</tr>
	<tr>
		<td>关 琪</td>
		<td><a href="tel:13502893088">13502893088</a></td>
		<td>林智斌</td>
		<td><a href="tel:13802206870">13802206870</a></td>
	</tr>
	<tr>
		<td>汤万春</td>
		<td><a href="tel:13662696782">13662696782</a></td>
		<td>朱浩怀</td>
		<td><a href="tel:13537703608">13537703608</a></td>
	</tr>
	<tr>
		<td>陈  刚</td>
		<td><a href="tel:13622320995">13622320995</a></td>
		<td>徐国平</td>
		<td><a href="tel:13714389577">13714389577</a></td>
	</tr>
	<tr>
		<td>张 伟</td>
		<td><a href="tel:13008809190">13008809190</a></td>
		<td>雷 霆</td>
		<td><a href="tel:15999664489">15999664489</a></td>
	</tr>
<!-- 	<tr>
		<td>张红</td>
		<td><a href="tel:13502868657">13502868657</a></td>
		<td>余虹</td>
		<td><a href="tel:13509645529">13509645529</a></td>
	</tr>
	<tr>
		<td>梅细锁</td>
		<td><a href="tel:13823766351">13823766351</a></td>
		<td>吴小姐</td>
		<td><a href="tel:13570088262">13570088262</a></td>
	</tr>
	<tr>
		<td>余鹏</td>
		<td><a href="tel:13590425353">13590425353</a></td>
		<td>刘志新</td>
		<td><a href="tel:13631573892">13631573892</a></td>
	</tr> -->
	<!-- <tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="tel:"></a></td>
		<td></td>
		<td><a href="tel:"></a></td>
	</tr> -->
	
</table>

<div class="cover">
  <div class="warn wz"></div>
  <div class="warn tb"><img align="center" width="60px" height="60px" src="/Public/images/comm/close_icon.png" alt="">&nbsp;&nbsp;</div>
</div>

<p style="width:100%;height:150px;color:white;"></p>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>

//点击提交
function login_ajax(){
    var username=$('#username').val();
    var tel=$('#tel').val();
    var nums=$('#nums').val();
    if(username=="" || tel==""){
		    $(".cover").show();
	      $(".wz").text("不能为空！");	 
		    var pre=tel;
		    var reg=/^(13|14|15|17|18)[0-9]{9}$/; 
		    if (!reg.test(pre)) { 
		        $(".cover").show();
	            $(".wz").text("手机号码字符输入不合法！");
   			    return(false);
        }  
    }else{
            $.get("/playreg_ok.html",
            {"username":username,"tel":tel,"mark":2,"nums":nums},function(data){
            if(data==0){
                 $(".cover").show();
	               $(".wz").text("成功！");
				         $("#username").val("");
				         $("#tel").val("");
                 location.reload();
            }else{
				        $(".cover").show();
	              $(".wz").text("失败");
				        $("#username").val("").focus();
				        $("#tel").val("");
            }
        });
    }
    
}

$(".cover").click(function(){
    $(".cover").hide();

});



</script>
</body>
</html>