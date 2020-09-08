<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
 <html lang="en"> 
 <head> 
 <meta charset="UTF-8"> 
 <title>2019乐安居双11大促</title> 
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
  	  background:white;
/*      padding:15px 0px;*/
      margin-top: 40px;
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
  border-radius: 8px;
  font-size:40px;
  font-family: "微软雅黑";
 /* background-color: gray; */
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
  background: rgb(255,204,0);
  padding-top: 40px;

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
   font-size: 3em;
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
  color:white;
  font-family: "Microsoft Yahei";
  font-size: 30px;

}
span#sign3{
  padding:3px 15px;
  color:white;
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
  
}
#bot p{
  display: inline-block;
  width: 100%;
  height: 90px;
  padding: 0px;
  margin:0px;
  line-height: 90px;
  background: rgb(219,38,20);
  text-align: center;
  color:black;

}
#bot a{
   color:black;
   text-decoration:none;
}


div.navbox{
	padding-top:50px;
	margin: 15px auto;

}
p.nav_tit{
	width:200px;
	height: 200px;
	border-radius: 50%;
	background:red;
	text-align:center; 
	vertical-align:top;
	margin:0 auto;
	font-size: 4em;
	color:white;
}

p.nav_con{
	width:60%;
	height: 80px;
	font-size: 4em;;
	text-align: center;
	line-height: 80px;
	margin:0px auto;
	position: relative;
	left:0px;
	top:-125px;
	background: white;
	z-index:100;
}


div.cut{
	padding-top:30px;
	width:850px;
	margin: 0 auto;
	text-align: center;
}
h2{
	text-align: center;
	font-weight: 800;
}

img{
	padding:8px 0px;
}

.text-dark{
	padding-left: 30px;
	font-size: 26px;
}


</style> 
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
 </head> 
 <body> 

<!--  <a class="bg-danger text-white" href="javascript:void(0)" id="toggle"><b>我要报名</b></a> -->
<table class="text-black" id="reg" border="0" cellspacing="0" cellpadding="0"> 

<tr> 
    <td align="right" style="color:black;font-size:18px;">
   <!--  <span id="sign1">已报名</span><span id="sign2"><b><?php echo ((isset($counts) && ($counts !== ""))?($counts):"0"); ?>人</b></span>&nbsp; -->
    <span>浏览量：</span><span><b><?php echo ((isset($playhits) && ($playhits !== ""))?($playhits):'1'); ?></b></span><span style="display:inline-block;width: 50px;"></span>
    </td> 
 </tr>
</table> 

<div class="cut">
<img src="/Public/images/play/leanju/191026s.gif" alt="" width="100%">
<img src="/Public/images/play/leanju/img1910260.gif" alt="" width="100%">
<img src="/Public/images/play/leanju/191026s.gif" alt="" width="100%">

<h2 style="margin-top: 10px;" class="display-2 text-danger">双11马上到了</h2>
<h2 class="display-2" style="color:rgb(153,0,51);">你&nbsp;&nbsp;</h2>
<h2 class="display-2" style="color:rgb(153,0,51);">准备好了吗？</h2>
<p style="text-align: center;">
<img src="/Public/images/play/leanju/191026point.png" alt="" width:100px>
</p>

</div>


<div id="main" class="text-white">

<!-- <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "暂时没有活动" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div><img style="display: block;margin:0px auto;width:100%;height: auto;" src="/Public/images/play/<?php echo ($vo["pic"]); ?>"></div>
<h1><b><?php echo ($vo["title"]); ?></b></h1>
<div id="cont">
<?php echo (html_entity_decode($vo["content"])); ?>
</div><?php endforeach; endif; else: echo "暂时没有活动" ;endif; ?>
<p id="hide" style="width:100%;height:80px;background: white;"></p>
<p class="p_img"><img src="/Public/images/play/leanju/1.jpg" alt="" class="photo"></p>

<p class="p_img"><img src="/Public/images/play/leanju/2.jpg" alt="" class="photo"></p>
 -->

<p style="text-align: right;"><img src="/Public/images/play/leanju/091026point.png" alt=""></p>
<img src="/Public/images/play/leanju/1910261.jpg" alt="" width="100%">

<p class="p_con display-3 text-danger">乐安居11·10</p>
<p class="p_con display-3 text-danger">家装购物节</p>
<p class="p_con">喊出了一个十分</p>
<p class="p_con">实在的口号：</p>
<p class="p_con">人无我<span class="display-4 text-danger">有！</span></p>
<p class="p_con">人有我<span class="display-3 text-danger">优！</span></p>
<p class="p_con">人优我<span class="display-2 text-danger">恵！</span></p>

<p class="p_con">等您摩拳擦掌 <span class="bg-danger">大干一场！</span></p>
<img src="/Public/images/play/leanju/img1910261.gif" alt="" width="100%">

<div class="navbox">
<p class="nav_tit">01</p>
<p class="nav_con text-danger">优选好物不怕比</p>
</div>
<img src="/Public/images/play/leanju/191026z.png" alt="" width="100%">
<img src="/Public/images/play/leanju/1910262.jpg" alt="" width="100%">
<img src="/Public/images/play/leanju/191026z.png" alt="" width="100%">
<p class="p_con">每年双11</p>
<p class="p_con">既是线上电商们的狂欢</p>
<p class="p_con">也是线下实体店</p>
<p class="p_con" style="margin-bottom: 20px;">一场声势浩大的保卫战</p>
<p class="p_con">取得这场战争的胜利</p>
<p class="p_con">乐安居七店联动</p>
<p class="p_con">建材家具设计装修</p>
<p class="p_con">一站式大起底！</p>
<p class="p_con">上千品牌联手</p>
<p class="p_con">共掀让利风暴！</p>
<p class="p_con">特价低折专享<span class="text-danger display-3">拿货价</span></p>
<p class="p_con">厂价<span class="display-3">爆款</span>大回馈！</p>
<p class="p_con text-danger"><span class="bg-danger text-white">价比双十一</span></p>
<p class="p_con text-danger"><span class="bg-danger text-white">一省再省一省到底！</span></p>
<img src="/Public/images/play/leanju/1910263.jpg" alt="" width="100%">
<p class="p_con text-danger">真低价不怕比</p>
<p class="p_con">乐安居为消费者保价护航</p>
<p class="p_con">在同类卖场或展会有更低者</p>
<p class="p_con"> <span class="text-white bg-danger">承诺十倍赔差！</span></p>
<div class="navbox">
	
<p class="nav_tit">02</p>
<p class="nav_con text-danger">锤必中，放心锤</p>

</div>
<img src="/Public/images/play/leanju/191026z.png" alt="" width="100%">
<img src="/Public/images/play/leanju/1910264.jpg" alt="" width="100%">
<img src="/Public/images/play/leanju/1910264-1.jpg" alt="" width="100%">
<img src="/Public/images/play/leanju/191026z.png" alt="" width="100%">
<p class="p_con">线下购物</p>
<p class="p_con">永远有着网上购物</p>
<p class="p_con"><span class="text-danger display-2">不可取代</span>的优势与乐趣</p>
<p class="p_con">活动期间</p>
<p class="p_con">顾客在乐安居同一分店</p>
<p class="p_con display-2 text-danger">任意品牌专柜</p>
<p class="p_con">单笔下定满1000元</p>
<p class="p_con">就可以参与砸金蛋一次！</p>
<p class="p_con">3000元，两次！</p>
<p class="p_con">8000元，三次！</p>
<p class="p_con"> 单笔最高可获得三次砸金蛋机会 </p>
<p class="p_con display-2 text-danger"> 最高赢取</p>
<p class="p_con" style="padding: 8px 0px;"><span class="bg-danger display-2 text-white">4999免单大奖！</p>
<img src="/Public/images/play/leanju/img1910262.gif" alt="" width="100%">
<p class="p_con text-danger">（往期砸金蛋现场~）</p>
<p class="p_con"><span class="display-2 text-danger">专属</span>您的神秘惊喜</p>
<p class="p_con">就藏在<span class="display-2 text-danger">金蛋</span>里</p>
<p class="p_con">等您来锤！</p>


<div class="navbox">
<p class="nav_tit">03</p>
<p class="nav_con text-danger">实力派，玩得起</p>
</div>
<img src="/Public/images/play/leanju/191026z.png" alt="" width="100%">
<img src="/Public/images/play/leanju/1910265.jpg" alt="" width="100%">
<img src="/Public/images/play/leanju/1910265-1.jpg" alt="" width="100%">
<img src="/Public/images/play/leanju/191026z.png" alt="" width="100%">
<p class="p_con">活动期间</p>
<p class="p_con">顾客在两个不同专柜下单消费</p>
<p class="p_con">累计实付满5000元以上</p>
<p class="p_con">即有机会于</p>
<p class="p_con">11月10日16:30于活动处</p>
<p class="p_con">领取抢购资格券</p>
<p class="p_con">参与17:30准时开始的</p>
<p class="p_con"> 千元家居好物<span class="text-danger display-1">11元抢</span>活动！ </p>

<img src="/Public/images/play/leanju/img1910263.gif" alt="" width="100%">


<p class="p_con text-danger">（往期抢购现场~）</p>
<p class="p_con">每户仅限参与一次</p>
<p class="p_con">一杯奶茶不到的价格</p>
<p class="p_con">就可能买到价值千元的沙发、</p>
<p class="p_con">衣柜、书柜、床……</p>
<p class="p_con"> <span class="text-white display-1 bg-danger">实利嗨购双十一！</span></p>

<div class="navbox">
<p class="nav_tit">04</p>
<p class="nav_con text-danger">灵魂一"积"</p>
</div>
<img src="/Public/images/play/leanju/191026z.png" alt="" width="100%">
<img src="/Public/images/play/leanju/1910266.jpg" alt="" width="100%">
<img src="/Public/images/play/leanju/191026z.png" alt="" width="100%">
<p class="p_con">活动期间</p>
<p class="p_con">持有乐安居购物积分券的顾客</p>
<p class="p_con">累计满一定积分</p>
<p class="p_con">即可在活动处换购</p>
<p class="p_con">相应家居好物！</p>
<p class="p_con"> <span class="text-danger display-2">买得越多省得越多</span></p>
<p class="p_con">积分当现金用</p>
<p class="p_con" style="margin-bottom: 10px;"><span class="bg-danger text-white display-1">省钱才是硬道理！</span></p>
<img src="/Public/images/play/leanju/img1910264.gif" alt="" width="100%">

<img src="/Public/images/play/leanju/1910267.jpg" alt="" width="100%">

<p class="p_con"><span class="text-danger">更多活动优惠请进店咨询</span></p>
<p class="p_con">除了上述优惠</p>
<p class="p_con">11月9日-10日</p>
<p class="p_con">我们的乐粉大军</p>
<p class="p_con">还可享受</p>
<p class="p_con"> 更多超值专享福利哦！</p>
<p style="text-align: center;"><img src="/Public/images/play/leanju/640.gif" alt=""></p>


<p class="p_con text-danger">乐安居作为深受市民信赖的</p>
<p class="p_con text-danger">大型建材家居连锁卖场</p>
<p class="p_con display-2">“质量、价格、服务”</p>
<p class="p_con display-2">三大王牌</p>
<p class="p_con display-2">王炸双十一</p>
<p class="p_con display-2 text-danger">今年盘定了！</p>
<p style="text-align: center;"><img src="/Public/images/play/leanju/641.gif" alt=""></p>

	<div class="bg-white">
	    <h2 class="bg-danger text-white" style="height:50px;line-height:50px;text-align: center;">分店地址：</h2>
	    <p class="text-dark">
	    <img src="/Public/images/play/leanju/map.png" alt="" align="top" width="30px;"><span style="font-weight: 800;">坪山中心店：</span>坪山区坪山大道与比亚迪路交会处</p>

	    <p class="text-dark">
	    <img src="/Public/images/play/leanju/map.png" alt="" align="top" width="30px;"><span style="font-weight: 800;">
	    龙岗中心城店：</span>龙岗区龙平西路与长兴路交会处</p>
	    <p class="text-dark">
	    <img src="/Public/images/play/leanju/map.png" alt="" align="top" width="30px;"><span style="font-weight: 800;">
	    宝安凯旋城店：</span>宝安区宝安大道与新安一路交会处(新城联检站旁)</p>
	    <p class="text-dark">
        <img src="/Public/images/play/leanju/map.png" alt="" align="top" width="30px;"><span style="font-weight: 800;">
	    福田新洲店：</span>福田区福强路与沙嘴路交会处</p>

	    <p class="text-dark">
	    <img src="/Public/images/play/leanju/map.png" alt="" align="top" width="30px;"><span style="font-weight: 800;">
	    南山后海店：</span>南山区后海大道与创业路交会处</p>
	    <p class="text-dark">
	    <img src="/Public/images/play/leanju/map.png" alt="" align="top" width="30px;"><span style="font-weight: 800;">
	    罗湖笋岗店：</span>罗湖区笋岗梨园路555号</p>
	    <p class="text-dark">
	    <img src="/Public/images/play/leanju/map.png" alt="" align="top" width="30px;"><span style="font-weight: 800;">
	    宝安沙井店：</span>沙井街道新沙东路与107国道交会处(沙井客运中心旁)</p>

	<p style="width:100%;height:150px;"></p>
	</div>
</div>



<!-- <div class="cover">
  <div class="warn wz"></div>
  <div class="warn tb"><img align="center" width="60px" height="60px" src="/Public/images/comm/close_icon.png" alt="">&nbsp;&nbsp;</div>
</div> -->
<div id="bot">
     <p style="text-align:center;"><a href="tel:4008899446"><img src="/Public/images/comm/tel.png" style="padding-right:5px;width:70px;height:80%;vertical-align: middle;"><b>拨打电话</b></a></p>
     
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
            {"username":username,"tel":tel,"mark":3},function(data){
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