// JavaScript Document
//用Ajax检测用户名
window.onload=function(){
		var xhr;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xhr=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xhr=new ActiveXObject("Microsoft.XMLHTTP");
		  }
         var username=document.getElementById('username');
         username.onblur=function(){
         var name=this.value;
         xhr.open('post','checkname.php',true);
         xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
         xhr.send("username="+name);
         xhr.onreadystatechange=function(){
          if(this.readyState == 4 && this.status == 200){
              if(this.responseText == 1){
                  alert('有同名用户，不可以注册！');  
                        //document.getElementById("p_ts").innerHTML="<b>不可以注册</b>";
              }else{
        				  //alert('可以注册！');
                //document.getElementById("p_ts").innerHTML="<b>可以注册</b>";
            }
         }
      }
   }
}

//用户名验证
function focus_username() { 
    var resultObj=document.getElementById('result_username'); 
    resultObj.innerHTML="以字母开头的6-12位的字符"; 
    resultObj.style.color="black"; 
    document.form.username.style="border:1px solid red"; 
 }  
function blur_username () { 
    var resultObj=document.getElementById('result_username')  
    var pre=document.form.username.value; 
    var reg=/^\w{6,12}$/; 
    if (pre=='') { 
    resultObj.innerHTML="(必填项)用户名不能为空"; 
    resultObj.style.color="red"; 
    return false; 
    }else if (!reg.test(pre)) { 
    resultObj.innerHTML="用户名字符输入不合法"; 
    resultObj.style.color="red"; 
    return false; 
    }else{ 
    resultObj.innerHTML="ok"; 
    resultObj.style.color="green"; 
    return true; 
    } 
} 

//密码
function focus_userpwd() { 
   var resultObj=document.getElementById('result_userpwd'); 
   resultObj.innerHTML="6位以上的非特殊字符"; 
   resultObj.style.color="black"; 
   document.form.userpwd.style="border:1px solid red"; 
}  
function blur_userpwd () {  
    var resultObj=document.getElementById('result_userpwd')  
    var pre=document.form.userpwd.value; 
    var reg=/^\w{6,}$/; 
    if (pre=='') { 
    resultObj.innerHTML="用户名密码不能为空"; 
    resultObj.style.color="red"; 
    return false; 
    }else if (!reg.test(pre)) { 
    resultObj.innerHTML="用户名密码字符输入不合法"; 
    resultObj.style.color="red"; 
    return false; 
    }else{ 
    resultObj.innerHTML="ok"; 
    resultObj.style.color="green"; 
    return true; 
    } 
}

//重复密码
function focus_userpwd1() { 
   var resultObj=document.getElementById('result_userpwd1'); 
   resultObj.innerHTML="与初次输入密码相同"; 
   resultObj.style.color="black"; 
   document.form.userpwd1.style="border:1px solid red"; 
 }  
function blur_userpwd1() { 
    var resultObj=document.getElementById('result_userpwd1')  
    var pre=document.form.userpwd1.value; 
    var reg=/^\w{6,}$/; 
    if (pre=='') { 
    resultObj.innerHTML="用户名密码不能为空"; 
    resultObj.style.color="red"; 
    return false; 
    }else if (!reg.test(pre)) { 
    resultObj.innerHTML="用户名密码字符输入不合法"; 
    resultObj.style.color="red"; 
    return false; 
    }else if(document.form.userpwd.value!=document.form.userpwd1.value){ 
    resultObj.innerHTML="两次用户名密码输入不一致"; 
    resultObj.style.color="red"; 
    return false; 
    }else {resultObj.innerHTML="ok"; 
    resultObj.style.color="green"; 
    return true; 
    }   
} 

 //真实姓名验证
function focus_truename() { 
    var resultObj=document.getElementById('result_truename'); 
    resultObj.innerHTML="请输入你真实姓名"; 
    resultObj.style.color="black"; 
    document.form.truename.style="border:1px solid red"; 
}  
function blur_truename() {  
    var resultObj=document.getElementById('result_truename')  
    var pre=document.form.truename.value; 
    var reg=/./; 
    if (pre=='') { 
    resultObj.innerHTML="真实姓名不能为空"; 
    resultObj.style.color="red";   
    }else if (!reg.test(pre)) { 
    resultObj.innerHTML="真实姓名字输入不合法"; 
    resultObj.style.color="red";   
    }else { 
    resultObj.innerHTML="ok"; 
    resultObj.style.color="green";   
    }   
} 

 //手机号验证
function focus_Mobile() { 
    var resultObj=document.getElementById('result_Mobile'); 
    resultObj.innerHTML="请输入你11位数的手机号码"; 
    resultObj.style.color="black"; 
    document.form.Mobile.style="border:1px solid red"; 
}  
function blur_Mobile() {  
    var resultObj=document.getElementById('result_Mobile')  
    var pre=document.form.Mobile.value; 
    var reg=/^(13|14|15|17|18)[0-9]{9}$/; 
    if (pre=='') { 
    resultObj.innerHTML="手机号码不能为空"; 
    resultObj.style.color="red";   
    }else if (!reg.test(pre)) { 
    resultObj.innerHTML="手机号码字符输入不合法"; 
    resultObj.style.color="red";   
    }else { 
    resultObj.innerHTML="ok"; 
    resultObj.style.color="green";   
    }   
} 

 //QQ
function focus_qq() { 
    var resultObj=document.getElementById('result_qq'); 
    resultObj.innerHTML="请输入你的QQ"; 
    resultObj.style.color="black"; 
    document.form.qq.style="border:px solid red"; 
}  
function blur_qq() {  
    var resultObj=document.getElementById('result_qq')  
    var pre=document.form.qq.value; 
    var reg=/\d{5,10}/; 
    if (pre=='') { 
    resultObj.innerHTML="QQ不能为空"; 
    resultObj.style.color="red"; 
    }else if (!reg.test(pre)) { 
    resultObj.innerHTML="QQ输入不合法"; 
    resultObj.style.color="red"; 
    }else { 
    resultObj.innerHTML="ok"; 
    resultObj.style.color="green";   
    }   
} 

//邮箱验证
function focus_email() { 
    var resultObj=document.getElementById('result_email'); 
    resultObj.innerHTML="请输入你的邮箱号码"; 
    resultObj.style.color="black"; 
    document.form.email.style="border:1px solid red"; 
}  
function blur_email() {  
    var resultObj=document.getElementById('result_email'); 
    var pre=document.form.email.value; 
    var reg=/^[a-zA-Z-][a-zA-Z0-9-][a-zA-Z-\._]+@[a-z0-9]+\.(com)(\.(cn))?$/; 
    if (pre=='') { 
    resultObj.innerHTML="邮箱号码不能为空"; 
    resultObj.style.color="red"; 
    }else if (!reg.test(pre)) { 
    resultObj.innerHTML="邮箱号码字符输入不合法"; 
    resultObj.style.color="red"; 
    }else { 
    resultObj.innerHTML="ok"; 
    resultObj.style.color="green"; 
    }   
} 

//身份证验证
function focus_ID() { 
    var resultObj=document.getElementById('result_ID'); 
    resultObj.innerHTML="(必填项)请输入你18位的二代身份证号码"; 
    resultObj.style.color="black"; 
    document.form.ID.style="border:px solid red"; 
}  
function blur_ID() {  
    var resultObj=document.getElementById('result_ID'); 
    var pre=document.form.ID.value; 
    var reg=/^\d{6}(18|19|20)?\d{2}(0[1-9]|1[012])(0[1-9]|[12]\d|3[01])\d{3}(\d|[xX])$/; 
    if (pre=='') { 
    resultObj.innerHTML="(必填项)二代身份证号码字符不能为空"; 
    resultObj.style.color="red"; 
    return false; 
    }else if (!reg.test(pre)) { 
    resultObj.innerHTML="二代身份证号码字符输入不合法"; 
    resultObj.style.color="red"; 
    return false; 
    }else { 
    resultObj.innerHTML="ok"; 
    resultObj.style.color="green"; 
    return true; 
    }   
} 

 //地址验证
function focus_address() { 
    var resultObj=document.getElementById('result_address'); 
    resultObj.innerHTML="请输入你的地址"; 
    resultObj.style.color="black"; 
    document.form.address.style="border:1px solid red"; 
}  
function blur_address() {  
    var resultObj=document.getElementById('result_address'); 
    var pre=document.form.address.value; 
    var reg=/./; 
    if (pre=='') { 
    resultObj.innerHTML="地址不能为空"; 
    resultObj.style.color="red"; 
    }else if (!reg.test(pre)) { 
    resultObj.innerHTML="地址字符输入不合法"; 
    resultObj.style.color="red"; 
    }else { 
    resultObj.innerHTML="ok"; 
    resultObj.style.color="green"; 
    }   
} 


//标签验证
function focus_usermark() { 
    var resultObj=document.getElementById('result_usermark'); 
    resultObj.innerHTML="请输入你的个人标签"; 
    resultObj.style.color="black"; 
    document.form.usermark.style="border:1px solid red"; 
}  
function blur_usermark() {  
    var resultObj=document.getElementById('result_usermark'); 
    var pre=document.form.usermark.value; 
    var reg=/^.{1,100}$/; 
    if (pre=='') { 
    resultObj.innerHTML="不能为空"; 
    resultObj.style.color="red"; 
    }else if (!reg.test(pre)) { 
    resultObj.innerHTML="多于100个字"; 
    resultObj.style.color="red"; 
    }else { 
    resultObj.innerHTML="ok"; 
    resultObj.style.color="green"; 
    }   
}  

//兴趣必选


 //表单提交事件
 function checkForm(){ 
    var flag_username=blur_username(); 
    var flag_userpwd=blur_userpwd(); 
    if (flag_username==true&&flag_userpwd==true) {   
    return true; 
    }else{ 
    return false; 
    }  
} 
