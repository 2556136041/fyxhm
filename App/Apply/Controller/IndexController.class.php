<?php
namespace Apply\Controller;
use Think\Controller;
use Think\Page;
use Think\Upload;
use Think\Verify;
use Think\Image;
use Think\Model;
use \Home\Model\UserModel;
use \Home\Model\CommonModel;
class IndexController extends Controller {


	public function _initialize(){        
		//处理跨域问题，不建议直接Access-Control-Allow-Origin:*
        $originarr = [
           'https://www.51mfgs.com',
           'http://www.51mfgs.com',
        ];
        $origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
        if (in_array($origin, $originarr)) {
            header('Access-Control-Allow-Origin:' . $origin);       
            header('Access-Control-Allow-Headers:Accept,Referer,Host,Keep-Alive,User-Agent,X-Requested-With,Cache-Control,Content-Type,Cookie,token');        
            header('Access-Control-Allow-Credentials:true');        
            header('Access-Control-Allow-Methods:GET,POST,OPTIONS');
            header('Access-Control-Max-Age:3600');     
            //echo "init";
 
        }
		
	
	}
    

    public function test(){
        //echo 'hello tp5';
		//$this->display();	
		
		//$this->display('./Template/test.html');
		//$this->redirect('/index');
		redirect('/pro_center');
   }



/****************************************测试跨域**********************************/
   
   public function testgetjson(){
         $arr = '{"data" : "testgetjson"}'; 
		 //echo $this->ajaxReturn($arr);  //传过去的值为string类型
		 echo $arr;  //原来是什么类型就是什么类型
    }
   public function testajax(){
         $arr = "getajax"; 
		 //echo $this->ajaxReturn($arr);
		 echo $arr;
    }

    public function testjsonp(){
         $arr = "hello jsonp"; 
		 //echo $this->ajaxReturn($arr);
		 echo $this->ajaxReturn($arr,'jsonp');  //jsonp
		 //echo json_encode($arr); //把数组转化成json对象数据 json_decode($arr) 把json对象转化成数组
    }

    public function postJson(){
    	 $name = I("name");
    	 $arr = '{"data" : "postJson '.$name.'"}';
    	 //$arr ='{"data" : "postJson xiaofengqing"}';
		 //echo $this->ajaxReturn($arr);
		 echo $arr;
    }

    public function getCookie(){
    	 $loginuser = cookie('loginuser');
    	 $return = '{"data" : "getCookie '.$loginuser.'"}';
    	 //$arr ='{"data" : "postJson xiaofengqing"}';
		 //echo $this->ajaxReturn($arr);
		 echo $return;
    }

    public function testHeader(){
    	echo $_SERVER["HTTP_ORIGIN"];
    }

  
   
    public function _empty($name){
       redirect('/index.html', 1, '页面跳转中...');
    }



}