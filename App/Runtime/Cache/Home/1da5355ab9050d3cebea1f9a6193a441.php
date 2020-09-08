<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
 <html lang="en"> 
 <head> 
 <meta charset="UTF-8"> 
 <title>2019乐安居夜宴3</title> 
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

#p_view{
   width:900px;
   margin:50px auto;
   padding:10px 0px; 
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
  color:white;

}
#bot a{
   color:white;
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

.arrow{

	animation: ghostUpdown 1s infinite alternate; 
	-webkit-animation: ghostUpdown 1s infinite alternate; 
}

@keyframes ghostUpdown { 
     	0%
      { 
        opacity: 0.1; 
      } 
     	25% 
      { 
        opacity: 0.3; 

      } 
        50% 
      { 
        opacity: 0.5; 

      } 
        75% 
      { 
        opacity: 0.6; 

      } 
        100% 
      { 
        opacity: 0.9; 

      } 
} 

@-webkit-keyframes ghostUpdown { 
    0%
      { 
        opacity: 0.1; 
      } 
     	25% 
      { 
        opacity: 0.3; 

      } 
        50% 
      { 
        opacity: 0.5; 

      } 
        75% 
      { 
        opacity: 0.6; 

      } 
        100% 
      { 
        opacity: 0.9; 

      } 
}


</style> 
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
 </head> 
 <body> 

<p id="p_view" align="right" style="color:white;font-size:18px;background: rgb(250,12,2);">
    <span>浏览量：</span><span><b><?php echo ((isset($playhits) && ($playhits !== ""))?($playhits):'1'); ?></b></span><span style="display:inline-block;width: 50px;"></span>
</p> 


<div class="cut">
<p class="text-center"><img src="/Public/images/play/leanju/1206/12061.JPG" alt="" width="100%"></p>
<p class="text-center h1">2017年，</p>
<p class="text-center h1">乐安居家居夜宴横空出世</p>
<p class="text-center h1">限时抢购3小时</p>
<p class="text-center h1 text-danger">创行业成交奇迹</p>
<p class="text-center h1">2018年，</p>
<p class="text-center h1">夜宴2“家装挑战夜”再度来袭</p>
<p class="text-center h1">极限5小时<span class="text-danger display-4">再创神话！</span></p>
<p class="text-center h1">2019年，</p>
<p class="text-center h1">翘首以盼的收官大战</p>
<p class="text-center h1"><span class="bg-danger text-white" style="padding:0px 50px;font-weight: 600;"> 夜宴·3</span>  </p>
<p class="text-center h1">终于王者归来荣耀登场！</p>

<p class="text-center"><img src="/Public/images/play/leanju/1206/12062.GIF" alt="" width="90%"></p>

<p class="text-center h1">金钞纳福，千万钜惠</p>
<p class="text-center h1" style="margin-bottom: 16px;">价值<span class="text-danger">16999元</span>的<span class="text-white display-4 bg-danger" style="padding:0px 50px;">华为Mate X</span></p>
<p class="text-center h1"><span class="text-white display-4 bg-danger" style="padding:0px 50px;">折叠屏手机</span>重磅压轴</p>
<p class="text-center h1">力度空前，誓破底价!</p>
<p class="text-center h1">限时抢购5小时</p>
<p class="text-center h1">全年仅此一次</p>
<p class="text-center h1">饕餮盛宴，一触即发！</p>

<p class="text-center"><img src="/Public/images/play/leanju/1206/12063.GIF" alt="" width="40%"></p>


<p class="text-center arrow"><img src="/Public/images/play/leanju/1206/arrow.PNG" alt="" width="50px"></p>


</div>


<div id="main" class="text-white bg-danger" style="padding-bottom: 50px;">

    <div class="bg-white" style="width:90%;margin:50px auto;padding-bottom: 20px;">
        <p class="text-dark text-center display-4" style="padding-top:50px;font-weight: 600;"><span class="bg-warning" style="border-radius:50%;padding:10px;border-right: 2px dotted black;">01</span><span style="margin-left: 8px;">一波N~折</span></p>

	    <p class="text-center"><img src="/Public/images/play/leanju/1206/12064.JPG" alt="" width="90%"></p>
	    <p class="text-center h1 text-dark">乐安居全线品牌联手打造</p>
		<p class="text-center h1 text-dark">极致夜宴盛惠！</p>
		<p class="text-center h1 text-dark">爆款<span class="text-danger">不止5折</span></p>
		<p class="text-center text-danger h1">不止买一送一！</p>
		<p class="text-center text-danger display-4">第二件享半价！</p>
		<p class="text-center text-danger display-3">满减上不封顶！</p>
		<p class="text-center h1 text-dark">（此处省略1万字）……</p>
		<p class="text-center h1 text-dark">上千商户八仙过海各显神通</p>
		<p class="text-center h1 text-dark">挑战2019最后一役！！</p>

		<p class="text-center"><img src="/Public/images/play/leanju/1206/1265.jpg" alt="" width="90%"></p>
    </div>

    <div class="bg-white" style="width:90%;margin:50px auto;">
        <p class="text-dark text-center display-4" style="padding-top:50px;font-weight: 600;"><span class="bg-warning" style="border-radius:50%;padding:10px;border-right: 2px dotted black;">02</span><span style="margin-left: 8px;">金“钞”纳福</span></p>
        <p class="text-center"><img src="/Public/images/play/leanju/1206/12066.JPG" alt="" width="90%">
        <p class="text-center h1 text-dark">提前通过官方微信公众号</p>
		<p class="text-center h1 text-dark">报名成功的业主</p>
		<p class="text-center h1 text-dark">且于12月14日17：00开始</p>
		<p class="text-center h1 text-dark">在报名分店活动处签到</p>
		<p class="text-center h1 text-dark"><span class="text-danger" style="font-weight: 600;">成功签到</span>的顾客</p>
		<p class="text-center h1 text-dark">即可<span class="text-danger" style="font-weight: 600;">尊享三重福利！</span></p>
 
		<div class="border border-danger text-dark clearfix" style="margin:10px auto;width:90%;">
			<p class="float-left" style="width:40%;">
				 <img src="/Public/images/play/leanju/1206/12067.JPG" alt="" width="100%">

			</p>
			<p class="float-left text-justify h1" style="width:60%;">
				  <span style="display:block; margin:10px auto;width:90%;" class="bg-warning text-white text-center">福利一</span>
				  <span style="text-indent: 2em;display:block;width:90%;margin:10px auto;">
				  	最高有机会抽取价值488元的<span class="text-danger" style="font-weight: 600;">福鼠金钞</span>一套！
				  </span>
			</p>

		</div>
		<p class="text-center arrow"><img src="/Public/images/play/leanju/1206/arrow.PNG" alt="" width="50px"></p>

		<div class="border border-danger text-dark clearfix" style="margin:10px auto;width:90%;">
			<p class="float-left" style="width:40%;">
				 <img src="/Public/images/play/leanju/1206/12068.JPG" alt="" width="100%">

			</p>
			<p class="float-left text-justify h1" style="width:60%;">
				  <span style="display:block; margin:10px auto;width:90%;" class="bg-warning text-white text-center">福利二</span>
				  <span style="text-indent: 2em;display:block;width:90%;margin:10px auto;">
				  	夜宴当天下单可享受抽奖券<span class="text-danger" style="font-weight: 600;">翻倍</span>资格！
				  </span>
			</p>

		</div>
		<p class="text-center arrow"><img src="/Public/images/play/leanju/1206/arrow.PNG" alt="" width="50px"></p>

		<div class="border border-danger text-dark clearfix" style="margin:10px auto;width:90%;">
			<p class="float-left" style="width:40%;">
				 <img src="/Public/images/play/leanju/1206/12069.JPG" alt="" width="100%">

			</p>
			<p class="float-left text-justify h1" style="width:60%;">
				  <span style="display:block; margin:10px auto;width:90%;" class="bg-warning text-white text-center">福利三</span>
				  <span style="text-indent: 2em;display:block;width:90%;margin:10px auto;">
				  夜宴当天下单且符合条件，欢乐摇钱鼠<b class="text-danger" style="font-weight: 600;">机会+1</b>！
				  </span>
			</p>


		</div>
		<p class="text-center" style="width:100%;height: 30px;"></p>



        

     </div>

     <div class="bg-white" style="width:90%;margin:50px auto;">
        <p class="text-dark text-center display-4" style="padding-top:50px;font-weight: 600;"><span class="bg-warning" style="border-radius:50%;padding:10px;border-right: 2px dotted black;">03</span><span style="margin-left: 8px;">
“淘金校尉”</span></p>

	    <p class="text-center"><img src="/Public/images/play/leanju/1206/120610.JPG" alt="" width="90%"></p>
	    <p class="text-center h1 text-dark">12月1-14日</p>
		<p class="text-center h1 text-dark">顾客单笔实付金额满2000元</p>
		<p class="text-center h1 text-dark">即可参与<span class="text-danger" style="font-weight: 600;">摇钱挑战</span>一次</p>
		<p class="text-center h1 text-dark">4000元可参与两次</p>
		<p class="text-center h1 text-dark">以此类推，<span class="text-danger" style="font-weight: 600;">上不封顶</span>！</p>
		<p class="text-center h1 text-dark">从摇钱鼠上摇落金币</p>
		<p class="text-center h1 text-dark">即可<span class="bg-danger text-white">兑领现金</span>！</p>
		<p class="text-center h1 text-dark">限时10秒/次</p>
		<p class="text-center h1 text-danger"><span class="h4">摇</span><span class="h3">得</span><span class="h2">越</span><span class="h1">多</span><span class="display-4">返</span><span class="display-3">现</span><span class="display-2">越</span><span class="display-1">多</span>！</p>
		<p class="text-center h1 text-dark">快来参与挑战吧！</p>

		<p class="text-center"><img src="/Public/images/play/leanju/1206/120611.PNG" alt="" width="70%"></p>
    </div>

    <div class="bg-white" style="width:90%;margin:50px auto;">
        <p class="text-dark text-center display-4" style="padding-top:50px;font-weight: 600;"><span class="bg-warning" style="border-radius:50%;padding:10px;border-right: 2px dotted black;">04</span><span style="margin-left: 8px;">
闻“机”起舞</span></p>

	    <p class="text-center"><img src="/Public/images/play/leanju/1206/8899.jpg" alt="" width="90%"></p>
	    <p class="text-center h1 text-dark">12月1日—14日20：20</p>
		<p class="text-center h1 text-dark">在乐安居同一分店下定金</p>
		<p class="text-center h1 text-dark">单笔消费</p>
		<p class="text-center h1 text-dark">满1000元，可获赠抽奖券1张</p>
		
		<p class="text-center h1 text-dark">满2000元，可获赠抽奖券2张</p>
		<p class="text-center h1 text-dark">依此类推</p>
		
		<p class="text-center h1 text-dark">单笔消费最高可获得</p>
		<p class="text-center h1 text-dark">3张抽奖券</p>

		<p class="text-center h1 text-dark">持有抽奖券的顾客</p>
		<p class="text-center h1 text-dark">即可参与 12月14日20:30 </p>
		<p class="text-center h1 text-dark">统一举行的抽奖活动</p>
		<p class="text-center h1 text-dark">最高可赢得</p>
		
		<p class="text-center h1 text-dark"><span class="text-white bg-danger" style="padding:0px 50px;margin-bottom: 16px;">价值16999元的</span></p>
		<p class="text-center h1 text-dark"><span class="text-white bg-danger" style="padding:0px 50px;">华为Mate X折叠屏手机</span></p>
		

		<p class="text-center"><img src="/Public/images/play/leanju/1206/9988.jpg" alt="" width="70%"></p>
		<p class="text-center h3 text-secondary" style="padding-bottom:30px;">（手机领取以厂家到货时间为准，敬请谅解）</p>
    </div>

     <div class="bg-white" style="width:90%;margin:50px auto;">
        <p class="text-dark text-center display-4" style="padding-top:50px;font-weight: 600;"><span class="bg-warning" style="border-radius:50%;padding:10px;border-right: 2px dotted black;">05</span><span style="margin-left: 8px">
“箱”得益彰</span></p>

	    <p class="text-center"><img src="/Public/images/play/leanju/1206/120614.JPG" alt="" width="90%"></p>
	    <p class="text-center h1 text-dark">12月1日—14日 </p>
		<p class="text-center h1 text-dark">顾客在3个不同专柜消费</p>
		<p class="text-center h1 text-dark">且单笔实付满 5500元 以上</p>
		<p class="text-center h1 text-dark">（沙井、龙岗坪山5个专柜，</p>
		<p class="text-center h1 text-dark">单笔实付满3500）</p>
		<p class="text-center h1 text-dark">即可持销售单于</p>
		<p class="text-center h1 text-dark"> 12月1、7、8、14日 </p>
		<p class="text-center h1 text-dark">在活动处<span class="text-white bg-danger" style="padding:0px 50px;margin-bottom: 16px;">免费兑领</span></p>
		<p class="text-center h1 text-dark">价值589元、超萌超可爱</p>
		<p class="text-center h1 text-dark">网红B.Duck小黄鸭</p>
		<p class="text-center h1 text-dark">24寸儿童骑行</p>
		<p class="text-center h1 text-dark"><span class="text-white bg-danger" style="padding:0px 50px;">万向轮行李箱</span>一个！</p>


		<p class="text-center"><img src="/Public/images/play/leanju/1206/120615.PNG" alt="" width="70%"></p>
		 <p class="text-center display-4" style="font-weight:600;padding-bottom:30px;"><span style="padding:0px 50px;background-color:rgb(127,57,126);" class="text-white">数量有限，送完即止！</span></p>
    </div>

 </div>

 <div  class="bg-white text-dark" style="width:90%;margin:30px auto;">
	    <p class="text-center h1 text-dark">夜精彩，夜给利！ </p>
		<p class="text-center h1 text-dark">越夜越有机！</p>
		<p class="text-center h1 text-dark">乐安居2019家装</p>
		<p class="text-center h1 text-danger">收官大战</p>
		<p class="text-center h1 text-danger">燃爆一夜</p>
		<p class="text-center display-4"><span class="bg-danger text-white" style="padding:0px 50px;font-weight: 600;">机不可失！</span></p>
        <p class="text-center"><img src="/Public/images/play/leanju/1206/heart.GIF" alt="" width="70%"></p>
       
 
</div>


<h2 class="bg-warning text-white" style="margin:30px auto;width:90%;height:50px;line-height:50px;text-align: center;">分店地址</h2>

<div class="bg-white clearfix" style="width:90%;margin:30px auto;padding-left: 5px;">

	     <a style="display: block;" target="_blank" href="https://map.baidu.com/poi/%E4%B9%90%E5%AE%89%E5%B1%85(%E6%AF%94%E4%BA%9A%E8%BF%AA%E8%B7%AF%E5%BA%97)/@12728995.875,2581648.79,12z?uid=05d8a068fb905028d91318b4&ugc_type=3&ugc_ver=1&device_ratio=1&compat=1&querytype=detailConInfo&da_src=shareurl">
		     <div onmouseover="this.style.backgroundColor='yellow'" onmouseout="this.style.backgroundColor='white'"  class="text-dark border border-1" style="float:left;width: 33%;height: 280px;padding-right: 20px;">
			    <p style="text-align: center;">
			        <img src="/Public/images/play/leanju/map.png" alt="" align="top" width="60px;">
			    </p>
			    <p style="font-weight: 800;text-align: center;margin:0px 5px;width:100%;">
			       坪山中心店：
			    </p>
			    <p style="text-align:justify;width:100%;">
		           坪山区坪山大道与比亚迪路交会处
		        </p>
		    </div>																	
	    </a>

        <a target="_blank" href="https://map.baidu.com/search/%E4%B9%90%E5%AE%89%E5%B1%85(%E9%BE%99%E5%B2%97%E4%B8%AD%E5%BF%83%E5%9F%8E%E5%BA%97)/@12718532.956149999,2583608.88157,19z?querytype=s&da_src=shareurl&wd=%E4%B9%90%E5%AE%89%E5%B1%85(%E9%BE%99%E5%B2%97%E4%B8%AD%E5%BF%83%E5%9F%8E%E5%BA%97)&c=340&src=0&wd2=%E6%B7%B1%E5%9C%B3%E5%B8%82%E9%BE%99%E5%B2%97%E5%8C%BA&pn=0&sug=1&l=12&b=(12696227.875,2562960.79;12761763.875,2600336.79)&from=webmap&biz_forward=%7B%22scaler%22:1,%22styles%22:%22pl%22%7D&sug_forward=bba87388c65526b9bca82210&device_ratio=1">
		    <div onmouseover="this.style.backgroundColor='yellow'" onmouseout="this.style.backgroundColor='white'" class="text-dark border border-1" style="float:left;width: 33%;height:280px;padding-right: 20px;">
			<p style="text-align: center;">
			    <img src="/Public/images/play/leanju/map.png" alt="" align="top" width="60px;">
			</p>
			<p style="font-weight: 800;text-align: center;margin:0px 5px;width:100%;">
			   龙岗中心城店：
			</p>
			<p style="text-align:justify;width:100%;">
			   龙岗区龙平西路与长兴路交会处
			</p>
		    </div>		
	    </a>

        <a target="_blank" href="https://map.baidu.com/search/%E4%B9%90%E5%AE%89%E5%B1%85(%E5%87%AF%E6%97%8B%E5%9F%8E%E5%BA%97)/@12680028.76455,2561834.83958,19z?querytype=s&da_src=shareurl&wd=%E4%B9%90%E5%AE%89%E5%B1%85(%E5%87%AF%E6%97%8B%E5%9F%8E%E5%BA%97)&c=340&src=0&wd2=%E6%B7%B1%E5%9C%B3%E5%B8%82%E5%AE%9D%E5%AE%89%E5%8C%BA&pn=0&sug=1&l=19&b=(12718276.956149999,2583462.88157;12718788.956149999,2583754.88157)&from=webmap&biz_forward=%7B%22scaler%22:1,%22styles%22:%22pl%22%7D&sug_forward=43b7e8890928cd7358f6be4c&device_ratio=1">
		    <div onmouseover="this.style.backgroundColor='yellow'" onmouseout="this.style.backgroundColor='white'" class="text-dark border border-1" style="float:left;width: 33%;height:280px;padding-right: 20px;">
	        <p style="text-align: center;">
			    <img src="/Public/images/play/leanju/map.png" alt="" align="top" width="60px;">
			</p>
			<p style="font-weight: 800;text-align: center;margin:0px 5px;width:100%;">
			   宝安凯旋城店：
			</p>
			<p style="text-align:justify;width:100%;">
			   宝安区宝安大道与新安一路交会处(新城联检站旁)
			</p>
		    </div>
	    </a>

	    <a target="_blank" href="https://map.baidu.com/search/%E4%B9%90%E5%AE%89%E5%B1%85(%E7%A6%8F%E7%94%B0%E6%A0%B8%E5%BF%83%E5%BA%97)/@12695224.27,2558648.115,19z?querytype=s&da_src=shareurl&wd=%E4%B9%90%E5%AE%89%E5%B1%85(%E7%A6%8F%E7%94%B0%E6%A0%B8%E5%BF%83%E5%BA%97)&c=340&src=0&wd2=%E6%B7%B1%E5%9C%B3%E5%B8%82%E7%A6%8F%E7%94%B0%E5%8C%BA&pn=0&sug=1&l=19&b=(12679772.76455,2561688.83958;12680284.76455,2561980.83958)&from=webmap&biz_forward=%7B%22scaler%22:1,%22styles%22:%22pl%22%7D&sug_forward=e6ee2fd2022608482b11d117&device_ratio=1">
		    <div onmouseover="this.style.backgroundColor='yellow'" onmouseout="this.style.backgroundColor='white'" class="text-dark border border-1" style="float:left;width: 33%;height:280px;padding-right: 20px;">
	        <p style="text-align: center;">
			    <img src="/Public/images/play/leanju/map.png" alt="" align="top" width="60px;">
			</p>
			<p style="font-weight: 800;text-align: center;margin:0px 5px;width:100%;">
			   福田新洲店：
			</p>
			<p style="text-align:justify;width:100%;">
			   福田区福强路与沙嘴路交会处
			</p>
		    </div>
	    </a>

         <a target="_blank" href="https://map.baidu.com/search/%E4%B9%90%E5%AE%89%E5%B1%85(%E5%8D%97%E5%B1%B1%E5%90%8E%E6%B5%B7%E5%BA%97)/@12683801.70535,2557706.9952999996,19z?querytype=s&da_src=shareurl&wd=%E4%B9%90%E5%AE%89%E5%B1%85(%E5%8D%97%E5%B1%B1%E5%90%8E%E6%B5%B7%E5%BA%97)&c=340&src=0&wd2=%E6%B7%B1%E5%9C%B3%E5%B8%82%E5%8D%97%E5%B1%B1%E5%8C%BA&pn=0&sug=1&l=19&b=(12694968.27,2558502.115;12695480.27,2558794.115)&from=webmap&biz_forward=%7B%22scaler%22:1,%22styles%22:%22pl%22%7D&sug_forward=56f2f6963295e4800aa8d449&device_ratio=1">
		    <div onmouseover="this.style.backgroundColor='yellow'" onmouseout="this.style.backgroundColor='white'" class="text-dark border border-1" style="float:left;width: 33%;height:280px;padding-right: 20px;">
	        <p style="text-align: center;">
			    <img src="/Public/images/play/leanju/map.png" alt="" align="top" width="60px;">
			</p>
			<p style="font-weight: 800;text-align: center;margin:0px 5px;width:100%;">
			    南山后海店：
			</p>
			<p style="text-align:justify;width:100%;">
			   南山区后海大道与创业路交会处
			</p>
		    </div>
	    </a>

        <a target="_blank" href="https://map.baidu.com/search/%E4%B9%90%E5%AE%89%E5%B1%85(%E7%BD%97%E6%B9%96%E7%AC%8B%E5%B2%97%E5%BA%97)/@12703508.36485,2564155.025,19z?querytype=s&da_src=shareurl&wd=%E4%B9%90%E5%AE%89%E5%B1%85(%E7%BD%97%E6%B9%96%E7%AC%8B%E5%B2%97%E5%BA%97)&c=340&src=0&wd2=%E6%B7%B1%E5%9C%B3%E5%B8%82%E7%BD%97%E6%B9%96%E5%8C%BA&pn=0&sug=1&l=19&b=(12683545.70535,2557560.9952999996;12684057.70535,2557852.9952999996)&from=webmap&biz_forward=%7B%22scaler%22:1,%22styles%22:%22pl%22%7D&sug_forward=07f3c8b51ee35a616340a997&device_ratio=1">
		    <div onmouseover="this.style.backgroundColor='yellow'" onmouseout="this.style.backgroundColor='white'" class="text-dark border border-1" style="float:left;width: 33%;height:280px;padding-right: 20px;">
	        <p style="text-align: center;">
			    <img src="/Public/images/play/leanju/map.png" alt="" align="top" width="60px;">
			</p>
			<p style="font-weight: 800;text-align: center;margin:0px 5px;width:100%;">
			   罗湖笋岗店：
			</p>
			<p style="text-align:justify;width:100%;">
			   罗湖区笋岗梨园路555号
			</p>
		    </div>
	    </a>

        <a target="_blank" href="https://map.baidu.com/search/%E4%B9%90%E5%AE%89%E5%B1%85(%E5%AE%9D%E5%AE%89%E6%B2%99%E4%BA%95%E5%BA%97)/@12673776.76295,2582775.48153,19z?querytype=s&da_src=shareurl&wd=%E4%B9%90%E5%AE%89%E5%B1%85(%E5%AE%9D%E5%AE%89%E6%B2%99%E4%BA%95%E5%BA%97)&c=340&src=0&wd2=%E6%B7%B1%E5%9C%B3%E5%B8%82%E5%AE%9D%E5%AE%89%E5%8C%BA&pn=0&sug=1&l=19&b=(12703252.36485,2564009.025;12703764.36485,2564301.025)&from=webmap&biz_forward=%7B%22scaler%22:1,%22styles%22:%22pl%22%7D&sug_forward=7c5e480bb73386b4adb22afd&device_ratio=1">
		    <div onmouseover="this.style.backgroundColor='yellow'" onmouseout="this.style.backgroundColor='white'" class="text-dark border border-1" style="float:left;width: 33%;height:280px;padding-right: 20px;">
		     <p style="text-align: center;">
			    <img src="/Public/images/play/leanju/map.png" alt="" align="top" width="60px;">
			</p>
			<p style="font-weight: 800;text-align: center;margin:0px 5px;width:100%;">
			   宝安沙井店：
			</p>
			<p style="text-align:justify;width:100%;">
			   沙井街道新沙东路与107国道交会处(沙井客运中心旁)
			</p>
		    </div>
	    </a>

		
</div>
	
<p style="width:100%;height:150px;color: white;"></p>


<div id="bot">
     <p style="text-align:center;"><a href="tel:4008899446"><img src="/Public/images/comm/tel1.png" style="padding-right:5px;width:70px;height:80%;vertical-align: middle;"><b>拨打电话</b></a></p>
     
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