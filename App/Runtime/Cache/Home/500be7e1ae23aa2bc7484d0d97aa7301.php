<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
 <html lang="en"> 
 <head> 
 <meta charset="UTF-8"> 
 <title>2019乐安居十一黄金周大促</title> 
 <style type="text/css"> 

body{
  width: 100%;
  height: auto;
  padding:0;
  margin: 0;
  background:white;
}
a{
  text-decoration: none;
  color: black;
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
.tb{
	width:30%;
	float:right;
	text-align:right;
}

#toggle{
     position: fixed;
     display: block;
     top:0px;
     left:0px;
     width: 100%;
     height: 80px;
     line-height: 80px;
     background: #E50040;
     text-align: center;
     font-size: 50px;
     font-family: "Microsoft Yahei";
     color:white;
}


table#reg{
      width:100%;
  	  height:100px;
  	  background:#990033;
/*      padding:15px 0px;*/
      margin-top: 80px;
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
  border-radius: 20px;
  font-size:40px;
  font-family: "微软雅黑";
  background-color: gray;
  color:white;
}

#tjbut:hover
{
   background: #E50040;
}

#main{
  /*position: absolute;
  top:420px;
  left:0px;*/
  width:900px;
  min-height: 1200px;
  margin:20px auto;

}

.p_img{
  width:900px;
  height: auto;

}
.p_img img{
	width:900px;
}
.p_con{
   text-align: center;
   font-family: "Microsoft Yahei";
   font-size: 36px;
   margin: 0;
   padding: 0;
}

h1{
  text-align:center;
  font-size:60px;
  font-family: "Microsoft Yahei";
  font-weight: 700;

}
span#sign1{
  padding:3px 15px;
  background: #E50040;
  color:white;
  font-family: "Microsoft Yahei";
  font-size: 30px;
}
span#sign2{
  padding:3px 15px;
  background: white;
  color:#E50040;
  font-family: "Microsoft Yahei";
  font-size: 30px;

}
#bot{
  position: fixed;
  left: 0px;
  bottom: 0px;
  width: 100%;
  height: 90px;
  font-family: "Microsoft Yahei";
  font-size: 40px;
  border:1px solid gray;
  
}
#bot p{
  display: inline-block;
  width: 35%;
  height: 90px;
  padding: 0px;
  margin:0px;
  line-height: 90px;
  background: rgb(255,255,255);
  text-align: center;
  /*border:1px solid gray;
  */

}
#bot img{
  height: 90px;
}
#fast{
  background: #E50040;
  display: inline-block;
  width: 65%;
  height: 90px;
  line-height: 90px;
/*  padding: 0px;
  margin:0px;*/
  text-align: center;
  
}


 </style> 
 </head> 
 <body> 
 <a href="javascript:void(0)" id="toggle"><b>我要报名</b></a>
 <table id="reg" border="0" cellspacing="20" cellpadding="20"> 
 <tr> 
    <td align="center"><input type="text" class="input1" name="username" id="username" placeholder="姓名" /></td> 

 </tr> 
 <tr> 
    <td align="center"><input class="input1" type="text" name="tel" id="tel" placeholder="手机号" /></td> 

 </tr> 
<tr> 
    <td align="center">
   <button id="tjbut" onclick="login_ajax()">提交</button>
    </td> 
</tr> 
<tr> 
    <td align="center" style="color:white;font-size:40px;">
    <span id="sign1">已报名</span><span id="sign2"><b>2<?php echo ((isset($counts) && ($counts !== ""))?($counts):"0"); ?>人</b></span>
    </td> 
 </tr>
</table> 

<div id="main">

<!-- <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "暂时没有活动" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div><img style="display: block;margin:0px auto;width:100%;height: auto;" src="/Public/images/play/<?php echo ($vo["pic"]); ?>"></div>
<h1><b><?php echo ($vo["title"]); ?></b></h1>
<div id="cont">
<?php echo (html_entity_decode($vo["content"])); ?>
</div><?php endforeach; endif; else: echo "暂时没有活动" ;endif; ?> -->
<!-- <p id="hide" style="width:100%;height:80px;background: white;"></p> -->
<!-- <p class="p_img"><img src="/Public/images/play/leanju/1.jpg" alt="" class="photo"></p> -->

<!-- <p class="p_img"><img src="/Public/images/play/leanju/2.jpg" alt="" class="photo"></p> -->
<p class="p_img"><img src="/Public/images/play/leanju/guoqing.gif" alt="" class="photo"></p>
<p class="p_con">中国人最喜团聚</p>
<p class="p_con">聚是一团火，家和万事兴！</p>
<p class="p_con">恰逢中华人民共和国成立70周年</p>
<p class="p_con">乐安居以“聚”为义</p>
<p class="p_con">以“家”为魂</p>
<p class="p_con">倾情打造一场空前盛大的</p>
<p class="p_con"><span style="color:red;font-size:46px;">“家装聚利量”</span>活动</p>
<p class="p_con">誓要回馈全城</p>
<p class="p_con">将让利进行到底！</p>
<p class="p_img"><img src="/Public/images/play/leanju/3.jpg" alt="" class="photo"></p>
<p class="p_img"><img src="/Public/images/play/leanju/4.jpg" alt="" class="photo"></p>
<p class="p_con">活动期间</p>
<p class="p_con">顾客凭活动VIP卡</p>
<p class="p_con">即可尊享三大福利！</p>
<p class="p_img"><img src="/Public/images/play/leanju/5.jpg" alt="" class="photo"></p>
<p class="p_img"><img src="/Public/images/play/leanju/6.jpg" alt="" class="photo"></p>
<p class="p_img"><img src="/Public/images/play/leanju/8.jpg" alt="" class="photo"></p>
<p class="p_con">“聚让利”、“巨让利”</p>
<p class="p_con">活动期间</p>
<p class="p_con">乐安居上千品牌齐聚</p>
<p class="p_con">联贺国庆</p>
<p class="p_con">厂价爆款再享商场补贴</p>
<p class="p_con">誓将零利进行到底！</p>
<p class="p_con">乐安居为消费者保价护航</p>
<p class="p_con"><span style="background:red;padding:5px 10px;color:white;">真低价不怕比！</span></p>
<p class="p_con">若发现同品牌同款产品</p>
<p class="p_con">在同类卖场或展会有更低者</p>
<p class="p_con"><span style="color:red;">承诺十倍赔差价！</span></p>
<p class="p_img"><img src="/Public/images/play/leanju/9.jpg" alt="" class="photo"></p>
<p class="p_img"><img src="/Public/images/play/leanju/10.jpg" alt="" class="photo"></p>
<p class="p_img"><img src="/Public/images/play/leanju/11.jpg" alt="" class="photo"></p>
<p class="p_img"><img src="/Public/images/play/leanju/12.jpg" alt="" class="photo"></p>
<p class="p_img"><img src="/Public/images/play/leanju/13.jpg" alt="" class="photo"></p>
<p class="p_img"><img src="/Public/images/play/leanju/14.jpg" alt="" class="photo"></p>
<p class="p_con">9月20日—10月7日</p>
<p class="p_con">单笔下定或付全款</p>
<p class="p_con">满1000元即可返100元现金</p>
<p class="p_con">满2000元可返200元现金</p>
<p class="p_con">以此类推</p>
<p class="p_con"><span style="background:red;padding:5px 10px;color:white;">单笔最高返1000元！</span></p>
<p class="p_con">符合条件的顾客</p>
<p class="p_con">持购物单于返现日在活动处</p>
<p class="p_con">即可兑领返现金额！</p>
<p class="p_con">惊喜马上拿得到！</p>
<p class="p_img"><img src="/Public/images/play/leanju/15.jpg" alt="" class="photo"></p>
<p  style="color:red;text-align:center;font-size:26px;text-indent: 2em;"><span><b>（注：沙井店500元封顶；福田店返现时间：9月20日-10月7日）</b></span></p>
<p class="p_img"><img src="/Public/images/play/leanju/16.jpg" alt="" class="photo"></p>
<p class="p_img"><img src="/Public/images/play/leanju/17.jpg" alt="" class="photo"></p>
<p class="p_con">9月20日—10月7日</p>
<p class="p_con">顾客在乐安居任意专柜</p>
<p class="p_con">下定或付全款</p>
<p class="p_con">累计金额满足以下条件</p>
<p class="p_con">即可 <span style="color:red;font-size:46px;">0元兑领</span>&nbsp; 相应礼品！</p>
<p class="p_con">千元大家电</p>
<p class="p_con">免费带回家！</p>
<p class="p_img"><img src="/Public/images/play/leanju/18.jpg" alt="" class="photo"></p>
<p class="p_img"><img src="/Public/images/play/leanju/19.jpg" alt="" class="photo"></p>
<p class="p_img"><img src="/Public/images/play/leanju/20.jpg" alt="" class="photo"></p>
<p class="p_con">活动期间</p>
<p class="p_con">在乐安居同一分店下定</p>
<p class="p_con">单笔消费满1000元</p>
<p class="p_con">可获赠抽奖券1张</p>
<p class="p_con">满2000元可获赠2张</p>
<p class="p_con">依此类推，单笔消费</p>
<p class="p_con">最高可获3张抽奖券！</p>
<p class="p_con">持有抽奖券的顾客</p>
<p class="p_con">即可参与10月7日下午17:30</p>
<p class="p_con">统一举行的抽奖活动</p>
<p class="p_con">最高可赢得 &nbsp;<span style="color:red;font-size:46px;">万元现金大奖！</span></p>
<p class="p_con">每家分店70份奖品</p>
<p class="p_con">现场一件不留铁定全部抽出！</p>
<p class="p_img"><img src="/Public/images/play/leanju/21.jpg" alt="" class="photo"></p>
<p class="p_con"><span style="background: red;color:white;padding:5px 10px;">百川归海，积小致巨</span></p>
<p class="p_con"家装聚利量 聚集了</p>
<p class="p_con">深受顾客喜爱的经典环节</p>
<p class="p_con">誓要在这举国欢腾的日子里</p>
<p class="p_con">回馈全城拼底抢利嗨到底！</p>
<p class="p_con">国庆70th狂欢季</p>
<p class="p_con"><span style="background: red;color:white;padding:5px 10px;">聚您所想，想您所需！</span></p>
<p style="width: 100%;height: 100px;"></p>
</div>

<div class="cover">
  <div class="warn wz"></div>
  <div class="warn tb"><img align="center" width="60px" height="60px" src="/Public/images/comm/close_icon.png" alt="">&nbsp;&nbsp;</div>
</div>
<div id="bot">
     <p style="text-align:center;"><b><a href="tel:4008899446"><!-- 0755-83454597 --><img src="/Public/images/comm/tel.png" align="center" alt="" style="padding-right:5px;width:73px;height: 35px;">拨打电话</a></b>&nbsp;&nbsp;</p><a href="javascript:void(0)" id="fast" style="color:white;"><img src="/Public/images/comm/dianji1.png" align="center" alt="" style="padding-right:5px;width:50px;height: 60px;">报名有机会赢取万元大奖</a>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
//点击回到头部
$('#toggle').on('click',function(){
    $('body,html').animate({scrollTop:0},500);

  });
$('#fast').on('click',function(){
    $('body,html').animate({scrollTop:0},500);
    $("#reg").slideToggle("slow");

  });

//点击登陆
function login_ajax(){
    var username=$('#username').val();
    var tel=$('#tel').val();
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
            {"username":username,"tel":tel},function(data){
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

$("#toggle").on('click',function(){
      $("#reg").slideToggle("slow");

});

</script>
 </body> 
 </html>