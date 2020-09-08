<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>controller hits</title>
	<style>
	   *{
	   	   font-size: 40px;
	   	   font-style: "Microsoft Yahei";
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

    
	</style>

</head>
<body>
<h1>controller hits</h1>
<h3>现在点击量：<?php echo ($pagehit["hits"]); ?></h3>
<form id="form1" name="form1" method="post" action="/updatehits.html">
 <table id="addhits" border="0" cellspacing="20" cellpadding="20" class="bg-danger"> 
 <tr> 
    <td align="center">
         <input type="text" class="input1" name="hits" value="<?php echo ($pagehit["hits"]); ?>" required id="hits" placeholder="点击数" />
        <!--  <input type="text" class="input1" name="hits" required id="hits" placeholder="点击数" /> -->
    </td> 

 </tr> 
 
<tr> 
    <td align="center">
   <!--  <button id="tjbut" onclick="hits_ajax()">提交</button> -->
   <input type="hidden" name="pagename" value="<?php echo ($pagehit["pagename"]); ?>" />
   <input type="hidden" name="id" value="<?php echo ($pagehit["id"]); ?>">
   <input type="submit" value="提交" />
    </td> 
</tr> 

</table> 
<!-- </form> -->
<!-- 
<h1>中国好红木观摩团报名名单</h1>
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

</table>  -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>

// 点击提交
// function hits_ajax(){
//        var hits=$('#hits').val();
//        if(hits==""){
//             alert("不能为空！");
//        }else{
//        	    //alert(hits);
//             $.get("/addplayhits.html",
//             {"hits":hits,"id":2,"pagename":"play_le1"},function(data){
// 	            if(data==0){
// 	                 alert("成功！");
// 	                 location.reload();
// 	            }else{
// 					 alert("失败！")
// 					 location.reload();
// 	            }
//             });

//        }
       
       
// }

</script>
</body>
</html>