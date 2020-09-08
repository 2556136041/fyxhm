<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
 <html lang="en"> 
 <head> 
 <meta charset="UTF-8"> 
 <title>活动报名</title> 
 <style type="text/css"> 

body{
  width: 100%;
  height: auto;
}
a{
  text-decoration: none;
  color: black;
}

.cover{
  width:100%;
  height: 100px;
  background: black;
  position: absolute;
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
   line-height:100px;
   
}
.wz{
	width:70%;
	float:left;
	text-align:right;
}
.tb{
	width:30%;
	float:right;
	text-align:center;
}

#toggle{
     position: fixed;
     display: block;
     top:0px;
     left:0px;
     width: 100%;
     height: 50px;
     line-height: 50px;
     background: #E50040;
     text-align: center;
     font-size: 30px;
     font-family: "Microsoft Yahei";
     color:white;
}

#reg{
      width:100%;
  	  height:100px;
  	  background:#990033;
      padding:15px 0px;
      margin-top: 50px;
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
  border-radius: 30px;
  font-size:25px;
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
  width:100%;
  height: 1200px;
  margin-top:10px;
  padding-bottom: 200px;


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
  
}
#bot p{
  display: inline-block;
  width: 70%;
  height: 90px;
  padding: 0px;
  margin:0px;
  line-height: 90px;
  text-align: right;
  background: lavender;
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
  width: 30%;
  height: 90px;
  line-height: 90px;
  padding: 0px;
  margin:0px;
  text-align: center;
  
}

 </style> 
 </head> 
 <body> 
 <a href="javascript:void(0)" id="toggle"><b>我要报名</b></a>
 <table id="reg" cellpadding="0" border="0" cellspacing="25" cellpadding="20" align="center" > 
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
    <span id="sign1">已报名</span><span id="sign2"><b><?php echo ((isset($counts) && ($counts !== ""))?($counts):"0"); ?>人</b></span>
    </td> 
 </tr>
</table> 
<div id="main">

<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "暂时没有活动" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div><img style="display: block;margin:0px auto;width:100%;height: auto;" src="/Public/images/play/<?php echo ($vo["pic"]); ?>"></div>
<h1><b><?php echo ($vo["title"]); ?></b></h1>
<div id="cont">
<?php echo (html_entity_decode($vo["content"])); ?>
</div><?php endforeach; endif; else: echo "暂时没有活动" ;endif; ?>
</div>

<div class="cover">
  <div class="warn wz"></div>
  <div class="warn tb">X</div>
</div>
<div id="bot"><p><a href="/play.html"><img align="top" src="/Public/images/play/more1.png">&nbsp;更多</a>&nbsp;&nbsp;<a href="/daohang.html"><img align="top" src="/Public/images/play/map.png">导航</a>&nbsp;&nbsp;</p><a href="javascript:void(0)" id="fast" style="color:white;">快速报名</a></div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
//点击回到头部
$('#toggle').on('click',function(){
    $('body,html').animate({scrollTop:0},500);
  });
$('#fast').on('click',function(){
    $('body,html').animate({scrollTop:0},500);
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