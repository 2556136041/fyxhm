
       //判断用户设备是手机还是电脑
       function browserRedirect() {
            var sUserAgent = navigator.userAgent.toLowerCase();
            var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
            var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
            var bIsMidp = sUserAgent.match(/midp/i) == "midp";
            var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
            var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
            var bIsAndroid = sUserAgent.match(/android/i) == "android";
            var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
            var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
            if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
                return "phone";
            } else {
                return "pc";
            }
     }

     //判断用户是否用微信打开的
     function isWeiXin(){ 
	       var ua = navigator.userAgent.toLowerCase(); 
	       if(ua.indexOf('micromessenger') != -1) { 
	            return true; 
	       } else { 
	           return false; 
	       } 
	}
    
    //判断用户是用什么手机打开的,1为安卓手机,2为苹果手机,3为winphone手机
    function useTypePhone(){
         var u = navigator.userAgent;
	     if (u.indexOf('Android') > -1 || u.indexOf('Linux') > -1) {
	         //安卓手机
	         return 1;
	     } else if (u.indexOf('iPhone') > -1) {
	         //苹果手机
	         return 2;
	     } else if (u.indexOf('Windows Phone') > -1) {
	         //winphone手机
	         return 3;
	     }

    }



