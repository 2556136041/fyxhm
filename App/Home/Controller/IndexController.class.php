<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
use Think\Upload;
use Think\Verify;
use Think\Image;
use Think\Model;
use \Home\Model\UserModel;
use \Home\Model\CommonModel;
class IndexController extends Controller {

    //qqlogin
    public function qqLogin($type = Qq){
        empty($type) && $this->error('参数错误');

        $sns = \Org\ThinkSDK\ThinkOauth::getInstance($type);

         //跳转到授权页面
        redirect($sns->getRequestCodeURL());
    } 


    public function callback($type = Qq, $code = null){
        $code=I('code');
        (empty($type) || empty($code)) && $this->error('参数有错误');
        //加载ThinkOauth类并实例化一个对象
        $sns = \Org\ThinkSDK\ThinkOauth::getInstance($type);

        //腾讯微博需传递的额外参数
        /*
        $extend = null;
        if($type == 'tencent'){
            $extend = array('openid' => $this->_get('openid'), 'openkey' => $this->_get('openkey'));
        }
        */

        //请妥善保管这里获取到的Token信息，方便以后API调用
        //调用方法，实例化SDK对象的时候直接作为构造函数的第二个参数传入
        //如： $qq = ThinkOauth::getInstance('qq', $token);
        $token = $sns -> getAccessToken($code,$extend);

        if($token){
            $accesstoken=$token['access_token'];
            $openid=$token['openid'];            
            cookie("qq_accesstoken",$accesstoken,86400);
            cookie("qq_openid",$openid,86400);
            $user_info = A('Type', 'Event')->$type($type,$token,$openid['openid']);
            $userinfo=$user_info;
            $qquserImg=$userinfo['figureurl_qq_2'];
            cookie("userimg",$qquserImg,86400);
            $userModel=M('user');
            if($userinfo){
                        $name=$userinfo['nickname'];
                        $sex=$userinfo['gender'];
                        $addr=$userinfo['province'].".".$userinfo['city'];
                        $userImg=$userinfo['figureurl_qq_2'];
                        $where['username']=$name;
                        $olduser=$userModel->where($where)->find(); 
                        $oldtimes=$olduser['logintimes'];
                        if($olduser==null){
                            $userModel->create();
                            $userModel->username=$name;
                            $userModel->sex=$sex;
                            $userModel->pwd='';
                            $userModel->tel='';
                            $userModel->email='';
                            $userModel->addr=$addr;
                            $userModel->photo=$userImg;
                            $userModel->class=0;
                            $userModel->regtime=date("Y-m-d H:i:s");
                            $userModel->logintimes=0;
                            $userModel->lastlogintime=date("Y-m-d H:i:s");
                            $userModel->ip=$_SERVER['REMOTE_ADDR'];
                            $addres=$userModel->add(); 
                                   
                        }else{
                            $userModel->create();
                            $userModel->username=$name;
                            $userModel->sex=$sex;
                            $userModel->pwd='';
                            $userModel->tel='';
                            $userModel->email='';
                            $userModel->addr=$addr;
                            $userModel->photo=$userImg;
                            $userModel->class=0;
                            $userModel->regtime=date("Y-m-d H:i:s");
                            $userModel->logintimes=$oldtimes+1;
                            $userModel->lastlogintime=date("Y-m-d H:i:s");
                            $userModel->ip=$_SERVER['REMOTE_ADDR'];
                            $where['username']=$name;
                            $saveres=$userModel->where($where)->save();
                           
                        
                        }  
                       $this->success('','/index.html');
                       // $this->redirect('/index');
            }
        }
        
    }

    public function qqlogout(){
        cookie("qq_accesstoken",null);
        cookie("qq_openid",null);
        cookie("userimg",null);
        //$this->redirect('index');
        $this->success('','/index.html');
    }
    

    //判断是否登陆

    private function judgeLogin(){
        if(!session('user')){
            $this->error('请登陆','/login.html');

        }
    }
	
	//微信小程序注册
	public function wxminireg(){	    
		$username=test_input(I("username"));
		$pwd=test_input(I("pwd"));
		$tel=test_input(I("tel"));
		$time=date('Y-m-d H:i:s');
		$user=M('user');
        $user->create();
        $user->username=$username;
		$user->pwd=$pwd;
        $user->tel=$tel;        
        $user->regtime=date('Y-m-d H:i:s');
        if($user->add()){
            $arr=0;            
        }else{
			$arr=1;
        }	
		echo $arr;
        
	}

    //注册
    public function reg(){
        $this->display();
    }

    //保存注册资料
    public function saveReg(){
        $username=I('username');
        $sex=I('sex');
        $pwd=I('pwd');
        $tel=I('Mobile');
        $email=I('email');
        $address=I('address');
        $photo=I('photo');
        $ip=I('ip');
        $user=M('user');
        $user->create();
        $user->username=$username;
        $user->sex=$sex;
        $user->pwd=$pwd;
        $user->email=$email;
        $user->photo=$photo;
        $user->ip=$ip;
        $user->tel=$tel;        
        $user->addr=$address;        
        $user->class=0;
        $user->regtime=date('Y-m-d H:i:s');
        $user->logintimes=0;     
        $user->lastlogintime=date('Y-m-d H:i:s');   
        if($user->add()){
            $this->success('成功注册', '/index.html');
        }else{
            $this->error('注册失败');
        }
    }

    //验证码
    public function verify(){
        $verify = new Verify();
        $verify->fontsize=30;
        $verify->length=4;
        //$Verify->imageW = 150; 
        //$Verify->imageH = 40; 
        //$verify->bg=array(255, 100, 20);
        $verify->entry();    
    }

    //登陆
    public function login(){
        $this->display();

    }

    public function checklogin(){
        $code = I('yzm');
        $verify = new Verify();  
        if($verify->check($code)){
            $userModel=M('user');
            $username=I('username');
            $pwd=I('pwd');
            $where['username']=$username;
            $where['pwd']=$pwd;
            $res=$userModel->where($where)->find();
            session('user',$username);
            if(!empty($res)){
                $userModel->logintimes=$res['logintimes']+1;
                $userModel->where('userid=%d',$res['userid'])->save();
                $arr=0;
                echo $arr;
                /*$this->success('登陆成功','/index.html');*/
            }            
        }else{
            $this->error('验证码错误');
        }


    }
	//检测小程序登陆
	public function checklogin1(){
            $userModel=M('user');
            $username=I('post.username');
            $pwd=I('post.pwd');
            $where['username']=$username;
            $where['pwd']=$pwd;
            $res=$userModel->where($where)->find();
            if(!empty($res) && $res['class']==1 || $res['class']==88){
                $userModel->logintimes=$res['logintimes']+1;
                $userModel->where('userid=%d',$res['userid'])->save();
                $arr=1;
                
            }elseif(!empty($res) && $res['class']==0){
				$arr=2;
			}else{
			    $arr=0;
			}
			echo $arr;
	 }
	
	
	//修改密码
    public function getbackpwd(){
        $this->display();
    }

    public function sendMail(){  
   
        if(IS_AJAX){
            //接收账号信息
            $data['name'] = I('get.forget_name');            
            if(!$data['name']) $this->ajaxReturn("请填写登录账号",0);
            //接收邮箱
            $data['email'] = I('get.forget_email');
            if(!$data['email']) $this->ajaxReturn("请填写邮箱账号",0);
            //验证邮箱格式
            $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
            if(preg_match( $pattern, $data['email'])){
                //邮箱格式正确下，判断用户是否存在
                $user = M('user');
               // $condition['display'] = 1;
                $condition['username'] = $data['name'];
               // $condition['status'] > 1;
                $userInfo = $user->where($condition)->find();
                
                if($userInfo){
                    //核对用户账号与邮箱是否一致
                    if($userInfo['email'] == $data['email']){
                        //设置参数
                        $title = "邮箱验证";    //邮件标题
                        $font = "此邮件为找回密码验证邮件，请勿回复，您的验证码为"; //邮件内容
                        $code = rand(1000,9999);    //随机码
                        $content = $font.$code; //拼接
                        
                        if(send_mail($title,$content,$data['email'])) {
                                //存验证码
                                $Condition['code'] = $code;
                                //$Condition['updatetime'] = time();
                                $Cond['username'] = $data['name'];
                                $userSave = $user->where($Cond)->save($Condition);                               
                                if($userSave){
                                     $this->ajaxReturn("发送成功",0);
                                }else{
                                    $this->ajaxReturn("验证码保存失败",0);
                                }
                                
                                $this->ajaxReturn("发送成功",0);
                        }else{
                            $this->ajaxReturn("发送失败",0);
                        }
                    }else{
                        $this->ajaxReturn("请核对用户信息的正确性",0);
                    }
                }else{
                    $this->ajaxReturn("请核对用户信息",0);
                }
            }else{
                $this->ajaxReturn("请核对邮箱信息",0);
            }
        }else{
            $this->ajaxReturn(0);
        }


    }

    public function savepwd(){
        $input_name = I('forget_name'); 
        $code=I('code');
        $newpwd=I('newpwd');
        // dump($code);
        // exit;
        $user=M("user");   
        $condition['username']= $input_name;  
        $res=$user->where($condition)->find();        
        if($code==$res['code']){
              $data['pwd']=$newpwd;
              $saveres=$user->where($condition)->save($data);
              if($saveres){
                   $this->success("修改成功","/login.html");
              }else{
                   $this->error("密码修改失败");
              }
        }else{
            $this->error("验证码有误");
        }

    }

    //退出
    public function logout(){
        session('user',null);
        cookie('user',null);
        $this->success('成功退出','/index.html');
        //$this->redirect('/');
    }
	
	
	//导航
	public function daohang(){
       
        return $this->display('./Template/map/daohang.html');
    }
   
    //index
    public function index(){
         //新闻
         $new=M('new');
         //头条
         $topnews=$new->where('newclass=%d',1)->order('pubtime DESC')->find();
         $this->assign('topnews',$topnews);
         //资讯
         $news=$new->where('newclass=%d',0)->limit(10)->order('pubtime DESC')->select();
         //资讯轮播
         //$where['newclass']=0;
		 $where['pos']=1;	
         $newsqh=$new->where($where)->order('newid DESC')->find();
         $this->assign('news',$news);
         $this->assign('newsqh',$newsqh);
		 //视频
         $video=M('video');
         $videotop=$video->where('choice=%d',1)->order('pubtime DESC')->find();
         $this->assign('videotop',$videotop);
         //产品
         $pro=M('Pro');
         $protop=$pro->where('choice=%d',1)->limit(18)->order('proid DESC')->select();
         $this->assign('protop',$protop);
         //挑选
         $service=M('service');
         $choose=$service->where('serclass=%d',0)->limit(10)->order('pubtime DESC')->select();
         $this->assign('choose',$choose);
         //保养
         $by=$service->where('serclass=%d',1)->limit(10)->order('pubtime DESC')->select();
          //保养切换
         $byqh=$service->where('pos=%d',1)->find();
         $this->assign('by',$by);
         $this->assign('byqh',$byqh);
         //时间
         $this->assign('date',date('Y-m-d'));
         //点击数
         $hitModel=M('pagehit');
         $hitModel->where('id=%d',1)->setInc('hits',1);
         $index_hits_res=$hitModel->where('id=%d',1)->field('hits')->find();
         $index_hits=$index_hits_res['hits'];
         $this->assign('indexhits',$index_hits);        

         //判断登陆情况
         $user=M('user');
         $qq_accesstoken=cookie('qq_accesstoken');
         $qq_openid=cookie('qq_openid');
         $usersess=session('user');
         $userinfo=$user->where("username='$usersess'")->find();
         $userclass=$userinfo['class'];
         $this->assign('userclass',$userclass);
         $this->assign('usersess',$usersess);
         if($qq_accesstoken){
            $this->assign('qq_accesstoken',$qq_accesstoken);
         }
         if($qq_openid){
            $this->assign('qq_openid',$qq_openid);
         }         

         //调用模板
         $this->display();
    }


    //上传并保存到数据库
    public function test_upload(){
        $this->display();
    }

    public function testupload_do(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Uploads/'; // 设置附件上传根目录
        $upload->savePath = ''; // 设置附件上传（子）目录
        // 上传文件
        $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息
             $this->error($upload->getError());
        }else{// 上传成功
             //$this->success('上传成功！');
                foreach($info as $file){
                   $imgName=$file['savepath'].$file['savename'];
            }
            $model = M('user');
            $data['photo'] = $imgName;
            if($model->where(array('id'=>16))->save($data)){
               $this->success('成功保存到数据库','test_upload');
            }            
        }
    }
	
    //视频
	public function video_center(){
        $videoObj=M('video');
        $videoall=$videoObj->order('pubtime DESC')->select();
        $videonums=$videoObj->count();
        $this->assign('videoall',$videoall);
        $this->assign('videonums',$videonums);
        $this->display();
    }

    public function videoshow(){
        $id=I('id');
        $videoObj=M('video');
        $videoshow=$videoObj->where('id=%d',$id)->find();        
        $this->assign('detail',$videoshow);
        $this->display();
    }

 
    //ajax产品1
	public function ajaxdata(){
        $pro=M("pro");
        $page = I('page');
        $res=$pro->order("proid DESC")->limit(20*($page-1), 20)->select();
        // $res=$pro->order("proid DESC")->limit(20, 20)->select();
        // $resall=json_encode($res);  
        // echo $resall;
        echo json_encode($res);
        // echo $this->ajaxReturn($res);
    }
	 
	//ajax产品2
    public function ajaxProData(){
        $pro=M("pro");
        $res=$pro->order("proid DESC")->select();
        // $res=$pro->order("proid DESC")->limit(20, 20)->select();
        // $resall=json_encode($res);  
        // echo $resall;
        echo json_encode($res);
        // echo $this->ajaxReturn($res);
    }
    //产品
    public function pro_center1(){
        $this->display();
    }

    public function pro_center(){
        $proObj=M('pro');
        $proall=$proObj->order('proid DESC')->select();
        $pronums=$proObj->count();
        $this->assign('proall',$proall);
        $this->assign('pronums',$pronums);
        $this->display();
    }
	
    public function pro_center0(){
        $proObj=M('pro');
        $proall=$proObj->order('proid DESC')->select();
        $pronums=$proObj->count();
        $this->assign('proall',$proall);
        $this->assign('pronums',$pronums);
        $this->display();
    }

    public function proshow(){
        $proid=I('id');
        $proObj=M('pro');
        $proshow=$proObj->where('proid=%d',$proid)->find();
        $proname=$proshow['proname'];
        $samepro=$proObj->where("proname like '%$proname%'")->order('proid DESC')->limit(3)->select();
        $this->assign('detail',$proshow);
        $this->assign('samepro',$samepro);
        $this->display();
    }

    public function prosearch(){
        $keyword=I('keyword');
        $proObj=M('pro');
        $count=$proObj->where("proname like '%$keyword%'")->count();
        $page=new \Think\Page($count,10);  
        $page_tpl = urlencode('[PAGE]'); 
        $page->url=__ROOT__.'/prosearch/p/'.urlencode('[PAGE]');
        $page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
        $page->lastSuffix = false;//最后一页不显示为总页数     
        $show = $page->show();
        $list=$proObj->where("proname like '%$keyword%'")->order('pubtime DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();

    }

    //资讯中心
    public function concenter(){
        $new=M('new');
        $top=$new->where('newclass=%d',1)->order('pubtime DESC')->limit(5)->select();
        $this->assign('top',$top);
        $news=$new->where('newclass=%d',0)->order('pubtime DESC')->limit(11)->select();
        $this->assign('news',$news);
        $service=M('service');
        $choose=$service->where('serclass=%d',0)->order('pubtime DESC')->limit(10)->select();
        $this->assign('choose',$choose);
        $baoyang=$service->where('serclass=%d',1)->order('pubtime DESC')->limit(10)->select();
        $this->assign('baoyang',$baoyang);

        $this->display();
        

    }

    //全部头条
    public function top_all(){
        $new=M('new');
        $count=$new->where('newclass=%d',1)->count();
        $page=new \Think\Page($count,10);  
        $page_tpl = urlencode('[PAGE]'); 
        $page->url=__ROOT__.'/top_all/p/'.urlencode('[PAGE]').'.html';
        $page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
        $page->lastSuffix = false;//最后一页不显示为总页数     
        $show = $page->show();
        $list=$new->where('newclass=%d',1)->order('pubtime DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    //全部资讯
    public function news_all(){
        $new=M('new');
        $count=$new->where('newclass=%d',0)->count();
        $page=new \Think\Page($count,10);  
        $page_tpl = urlencode('[PAGE]'); 
        $page->url=__ROOT__.'/news_all/p/'.urlencode('[PAGE]').'.html';
        $page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
        $page->lastSuffix = false;//最后一页不显示为总页数     
        $show = $page->show();
        $list=$new->where('newclass=%d',0)->order('pubtime DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }
    
    //全部挑选
    public function choose_all(){
        $new=M('service');
        $count=$new->where('serclass=%d',0)->count();
        $page=new \Think\Page($count,10);  
        $page_tpl = urlencode('[PAGE]'); 
        $page->url=__ROOT__.'/choose_all/p/'.urlencode('[PAGE]').'.html';
        $page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
        $page->lastSuffix = false;//最后一页不显示为总页数     
        $show = $page->show();
        $list=$new->where('serclass=%d',0)->order('pubtime DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    //全部保养
    public function by_all(){
        $new=M('service');
        $count=$new->where('serclass=%d',1)->count();
        $page=new \Think\Page($count,10);  
        $page_tpl = urlencode('[PAGE]'); 
        $page->url=__ROOT__.'/by_all/p/'.urlencode('[PAGE]').'.html';
        $page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
        $page->lastSuffix = false;//最后一页不显示为总页数     
        $show = $page->show();
        $list=$new->where('serclass=%d',1)->order('pubtime DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    //newsinfo
    public function newsinfo(){
        $newid=I('id');
        //new
        $news=M('new');
        $data=$news->where("newid=$newid and newclass=0")
        ->find();
        $this->assign('new',$data);
        //top
        $contop['newclass']=1;
        $topnew=$news->where($contop)->order('pubtime DESC')->select();
        $this->assign('top',$topnew);
        //serverModel
        $ser=M('service');
        //choose
        $conchoose['serclass']=0;
        $choose=$ser->where($conchoose)->order('pubtime DESC')->find();
        $this->assign('choose',$choose);
        //by
        $conby['serclass']=1;
        $by=$ser->where($conby)->order('pubtime DESC')->find();
        $this->assign('by',$by);
        //上一篇下一篇
        $Article_ID=I('id');
        $front=M('new')->where("newid<$Article_ID and newclass=0")->order('newid desc')->limit('1')->find();//上一篇文章查出来
        if($front){
            $furl='/newsinfo/id/'.$front['newid'];//输入上一篇文章的访问路径
        }else{
            $furl="javascript:void(0);";
        }
        //下一页
        $after=M('new')->where("newid>$Article_ID and newclass=0")->order('newid asc')->limit('1')->find();//下一篇文章查出来
        //echo M()->getLastSql();
        if($after){
            $aurl='/newsinfo/id/'.$after['newid'];//输出下一篇文章的访问路径

        }else{
            $aurl="javascript:void(0);";
        }
        $this->assign('f_t',$front['title']);//将上一篇文章的标题输出到页面

        $this->assign('a_t',$after['title']);
        $this->assign('aurl',$aurl);
        $this->assign('furl',$furl);
        //调用模板
        $this->display();
    }

    //topnewinfo
    public function topnewinfo(){
        $newid=I('get.id');
        //top
        $news=M('new');
        $data=$news->where("newid=$newid and newclass=1")
        ->find();
        $this->assign('top',$data);
        //new
        $contop['newclass']=0;
        $topnew=$news->where($contop)->order('pubtime DESC')->select();
        $this->assign('new',$topnew);
        //serverModel
        $ser=M('service');
        //choose
        $conchoose['serclass']=0;
        $choose=$ser->where($conchoose)->order('pubtime DESC')->find();
        $this->assign('choose',$choose);
        //by
        $conby['serclass']=1;
        $by=$ser->where($conby)->order('pubtime DESC')->find();
        $this->assign('by',$by);
        //上一篇下一篇
        $Article_ID=I('get.id');
        $front=M('new')->where("newid<$Article_ID and newclass=1")->order('newid desc')->limit('1')->find();//上一篇文章查出来
        if($front){
            $furl='/topnewinfo/id/'.$front['newid'];//输入上一篇文章的访问路径
        }else{
            $furl="javascript:void(0);";
        }
        //下一页
        $after=M('new')->where("newid>$Article_ID and newclass=1")->order('newid asc')->limit('1')->find();//下一篇文章查出来
        //echo M()->getLastSql();
        if($after){
            $aurl='/topnewinfo/id/'.$after['newid'];//输出下一篇文章的访问路径

        }else{
            $aurl="javascript:void(0);";
        }
        $this->assign('f_t',$front['title']);//将上一篇文章的标题输出到页面

        $this->assign('a_t',$after['title']);
        $this->assign('aurl',$aurl);
        $this->assign('furl',$furl);
        //调用模板
        $this->display();
    }

    //chooseinfo
    public function chooseinfo(){
        $serid=I('id');
        //choose
        $ser=M('service');
        $data=$ser->where("serid=$serid and serclass=0")
        ->find();
        $this->assign('choose',$data);
        //by
        $conby['serclass']=1;
        $by=$ser->where($conby)->order('pubtime DESC')->find();
        $this->assign('by',$by);
        //newModel
        $news=M('new');
        //top
        $topcon['newclass']=1;
        $top=$news->where($topcon)->order('pubtime DESC')->select();
        $this->assign('top',$top);
        //new
        $newscon['newclass']=0;
        $new=$news->where($newscon)->order('pubtime DESC')->find();
        $this->assign('new',$new);
        //上一篇下一篇
        $Article_ID=I('id');
        $front=M('service')->where("serid<$Article_ID and serclass=0")->order('serid desc')->limit('1')->find();//上一篇文章查出来
        if($front){
            $furl='/chooseinfo/id/'.$front['serid'];//输入上一篇文章的访问路径
        }else{
            $furl="javascript:void(0);";
        }
        //下一页
        $after=M('service')->where("serid>$Article_ID and serclass=0")->order('serid asc')->limit('1')->find();//下一篇文章查出来
        //echo M()->getLastSql();
        if($after){
            $aurl='/chooseinfo/id/'.$after['serid'];//输出下一篇文章的访问路径

        }else{
            $aurl="javascript:void(0);";
        }
        $this->assign('f_t',$front['title']);//将上一篇文章的标题输出到页面

        $this->assign('a_t',$after['title']);
        $this->assign('aurl',$aurl);
        $this->assign('furl',$furl);
        //调用模板
        $this->display();
    }
      
    //byinfo  
    public function byinfo(){
        $serid=I('get.id');
        //choose
        $ser=M('service');
        $data=$ser->where("serid=$serid and serclass=1")
        ->find();
        $this->assign('by',$data);
        //by
        $contop['serclass']=0;
        $by=$ser->where($contop)->order('pubtime DESC')->find();
        $this->assign('choose',$by);
        //newModel
        $news=M('new');
        //top
        $newscon['newclass']=1;
        $top=$news->where($newscon)->order('pubtime DESC')->select();
        $this->assign('top',$top);
        //new
        $newscon['newclass']=0;
        $new=$news->where($newscon)->order('pubtime DESC')->find();
        $this->assign('new',$new);
        //上一篇下一篇
        $Article_ID=I('get.id');
        $front=M('service')->where("serid<$Article_ID and serclass=1")->order('serid desc')->limit('1')->find();//上一篇文章查出来
        if($front){
            $furl='/byinfo/id/'.$front['serid'];//输入上一篇文章的访问路径
        }else{
            $furl="javascript:void(0);";
        }
        //下一页
        $after=M('service')->where("serid>$Article_ID and serclass=1")->order('serid asc')->limit('1')->find();//下一篇文章查出来
        //echo M()->getLastSql();
        if($after){
            $aurl='/byinfo/id/'.$after['serid'];//输出下一篇文章的访问路径

        }else{
            $aurl="javascript:void(0);";
        }
        $this->assign('f_t',$front['title']);//将上一篇文章的标题输出到页面

        $this->assign('a_t',$after['title']);
        $this->assign('aurl',$aurl);
        $this->assign('furl',$furl);
        //调用模板
        $this->display();
    }

    //topic
    public function new1_1(){
        $this->display('./Template/topic/new1_1.html');
    }
    public function new1_2(){
        $this->display('./Template/topic/new1_2.html');
    }
    public function new1_3(){
        $this->display('./Template/topic/new1_3.html');
    }

    public function about(){
        $this->display('./Template/about/about.html');
    }
	
	public function wxabout(){
		$this->display('./Template/about/about1.html');
	}

    //留言
    public function leavemes(){
        $Model = D("UserView");
        $count=$Model->count();
        $page=new \Think\Page($count,10);  
        $page_tpl = urlencode('[PAGE]'); 
        $page->url=__ROOT__.'/leavemes/p/'.urlencode('[PAGE]');
        $page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
        $page->lastSuffix = false;//最后一页不显示为总页数     
        $show = $page->show();
        $list=$Model->field('username,title,content,createtime')->order('createtime desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('allmes',$list);
        $this->assign('page',$show); 
        $time=date('Y-m-d H:i:s');
        $this->assign('nowtime',$time);
        $where['username']=session('user');
        $userres=M('user')->where($where)->find();
        $pwd=$userres['pwd'];
        $this->assign('pwd',$pwd);
        $this->display('./Template/leavemes/index.html');

         
    }

    public function writemes(){
        $this->judgeLogin();
        $time=date('Y-m-d H:i:s');
        $this->assign('nowtime',$time);
        $this->display('./Template/leavemes/leaveword.html');
    }
    
    public function saveleavemes(){
        $this->judgeLogin();
        $usersession=session('user');
        $where['username']=$usersession;
        $user=M('user')->where($where)->find();
        $leavemes_userid=$user['userid'];
        $Model=M('leaveword');
        $Model->create();
        $userid=$leavemes_userid;
        $title=I('title');
        $content=I('content');
        $createtime=date('Y-m-d H:i:s');
        $Model->userid=$userid;
        $Model->title=$title;
        $Model->content=$content;
        $Model->createtime=$createtime;
        $res=$Model->add();
        if($res){
            $this->success('成功提交一条留言','leavemes');
        }

    }

	//小程序留言
    public function uploadmes_minicon(){
        $Model=M('leaveword');
        $Model->create();
        if(I('post.content')==null || I('post.title')==null || I('post.username')==null){
            $this->error('未提交任何内容');
        }else{
            $title=I('post.title');
            $username=I('post.username');
            $pic=I('post.pic');
            $content=I('post.content');
            $createtime=date('Y-m-d H:i:s');
            $Model->username=$username;
            $Model->title=$title;
			$Model->pic=$pic;
            $Model->content=$content;
            $Model->createtime=$createtime;
            $res=$Model->add();
            if($res){
                echo 1;
            }else{
                echo 0;
            }

        }
        
        
    }
	//小程序留言图片处理
    public function uploadmes_miniimg(){
            $upload = new Upload();
            $upload->maxsize = '1024*1024*2';
            $upload->exts = array('jpg','gif','png','jpeg');
            $uplad->rootPath= '';
            $upload->savePath = '/images/mes/';
            $info = $upload->uploadOne($_FILES['file']);
            if($info){
                $filesavename=$info['savename'];
                echo $filesavename;
     
            }else{
                $this->error($upload->getError());
            }
            
    }


    //后台
    public function admin(){
        $this->judgeLogin();
        $newnum=M('new')->count();
        $sernum=M('service')->count();
        $usernum=M('user')->count();
        $this->assign('allnew',$newnum);
        $this->assign('allser',$sernum);
        $this->assign('alluser',$usernum);
        $this->display('./Template/admin/index.html');
    }

    //newslist
    public function news(){
        $this->judgeLogin();
        $news=M('new');
        $newsall=$news->select();
        $this->assign('allnews',$newsall);
        $this->display();
    }
	
	//福逸轩网站活动报名
    public function play(){
		$counts=M('playuser')->count();
        $this->assign('counts',$counts);
		$playuser=M("playuser")->order("regtime DESC")->select();
		$this->assign('user',$playuser);
		$Model=M("play");
		$res=$Model->order("pubtime DESC")->limit(1)->select();
		$this->assign('data',$res);
		$this->display("./Template/play/play1.html");
	

	}	

    //乐安居活动报名9月前
    public function play_le(){
        $counts=M('playuser')->count();
        $this->assign('counts',$counts);
        $playuser=M("playuser")->order("regtime DESC")->select();
        $this->assign('user',$playuser);
        $Model=M("play");
        $res=$Model->order("pubtime DESC")->limit(1)->select();
        $this->assign('data',$res);
        $this->display("./Template/play/play_leanju.html");
    
    }

    //乐安居活动报名双11
    public function play_le1(){
        //点击数
        $hitModel=M('pagehit');
        $hitModel->where('id=%d',2)->setInc('hits',1);
        $play_hits_res=$hitModel->where('id=%d',2)->field('hits')->find();
        $play_hits=$play_hits_res['hits'];
        $this->assign('playhits',$play_hits); 

        $counts=M('playuser')->count();
        $this->assign('counts',$counts);
        $playuser=M("playuser")->order("regtime DESC")->select();
        $this->assign('user',$playuser);
        $Model=M("play");
        $res=$Model->order("pubtime DESC")->limit(1)->select();
        $this->assign('data',$res);
        $this->display("./Template/play/play_leanju1.html");
    

    }

    //乐安居活动报名双11
    public function play_le2(){
        //点击数
        $hitModel=M('pagehit');
        $hitModel->where('id=%d',3)->setInc('hits',1);
        $play_hits_res=$hitModel->where('id=%d',3)->field('hits')->find();
        $play_hits=$play_hits_res['hits'];
        $this->assign('playhits',$play_hits); 

        // $counts=M('playuser')->count();
        // $this->assign('counts',$counts);
        // $playuser=M("playuser")->order("regtime DESC")->select();
        // $this->assign('user',$playuser);
        // $Model=M("play");
        // $res=$Model->order("pubtime DESC")->limit(1)->select();
        // $this->assign('data',$res);
        $this->display("./Template/play/play_leanju2.html");
    

    }

    //乐安居活动报名双11
    public function play_le3(){
        //点击数
        $hitModel=M('pagehit');
        $hitModel->where('id=%d',5)->setInc('hits',1);
        $play_hits_res=$hitModel->where('id=%d',5)->field('hits')->find();
        $play_hits=$play_hits_res['hits'];
        $this->assign('playhits',$play_hits); 

        // $counts=M('playuser')->count();
        // $this->assign('counts',$counts);
        // $playuser=M("playuser")->order("regtime DESC")->select();
        // $this->assign('user',$playuser);
        // $Model=M("play");
        // $res=$Model->order("pubtime DESC")->limit(1)->select();
        // $this->assign('data',$res);
        $this->display("./Template/play/play_leanju3.html");
    

    }

    //乐安居2019夜宴
    public function play_le4(){
        //点击数
        $hitModel=M('pagehit');
        $hitModel->where('id=%d',16)->setInc('hits',1);
        $play_hits_res=$hitModel->where('id=%d',16)->field('hits')->find();
        $play_hits=$play_hits_res['hits'];
        $this->assign('playhits',$play_hits); 

        // $counts=M('playuser')->count();
        // $this->assign('counts',$counts);
        // $playuser=M("playuser")->order("regtime DESC")->select();
        // $this->assign('user',$playuser);
        // $Model=M("play");
        // $res=$Model->order("pubtime DESC")->limit(1)->select();
        // $this->assign('data',$res);
        $this->display("./Template/play/play_leanju4.html");
    

    }

    //乐安居2019夜宴
    public function play_le5(){
        //点击数
        $hitModel=M('pagehit');
        $hitModel->where('id=%d',17)->setInc('hits',1);
        $play_hits_res=$hitModel->where('id=%d',17)->field('hits')->find();
        $play_hits=$play_hits_res['hits'];
        $this->assign('playhits',$play_hits); 

        // $counts=M('playuser')->count();
        // $this->assign('counts',$counts);
        // $playuser=M("playuser")->order("regtime DESC")->select();
        // $this->assign('user',$playuser);
        // $Model=M("play");
        // $res=$Model->order("pubtime DESC")->limit(1)->select();
        // $this->assign('data',$res);
        $this->display("./Template/play/play_leanju5.html");
    

    }

    //中国好红木观摩团活动报名
    public function play_redwood(){
        $user=M('playuser');
        $list=$user->where('userid > 129')->where('mark = 2')->order('userid DESC')->select();
        $allnums=$user->where('userid > 129')->where('mark = 2')->sum('nums'); 
        $this->assign('data',$list);
        $this->assign('allnums',$allnums);
        $this->display("./Template/play/redwoodaction.html");
    

    }
	public function playreg_ok(){	    
		$username=test_input(I("username"));
		$tel=test_input(I("tel"));

		if(test_input(I("nums"))!=""){
           $nums=test_input(I("nums"));
		}
		if(test_input(I("mark"))!=""){
           $mark=test_input(I("mark"));
        }
		$time=date('Y-m-d H:i:s');
		$user=M('playuser');
        $user->create();
        $user->username=$username;
        $user->tel=$tel;  
        if(test_input(I("mark"))!=""){
           $user->mark=$mark;  
		}else{
           $user->mark=1; 
        }
        if(test_input(I("nums"))!=""){
           $user->nums=$nums;
        }else{
           $user->nums=1;
        }
        $user->regtime=date('Y-m-d H:i:s');
        if($user->add()){
            $arr=0;            
        }else{
			$arr=1;
        }	
		echo $arr;
        
	}

    //hitslist
	public function hitslist(){

        $Model=M('pagehit');
        $count=$Model->count();
        $page=new \Think\Page($count,20);  
        $page_tpl = urlencode('[PAGE]'); 
        $page->url=__ROOT__.'/hitslist/p/'.urlencode('[PAGE]');
        $page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
        $page->lastSuffix = false;//最后一页不显示为总页数     
        $show = $page->show();
        $list=$Model->order('id DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$list);
        $this->assign('page',$show);
        $this->display('./Template/play/hitslist.html');

    }

    //hitsupdate.html
    public function hitsupdate(){
    	$id=test_input(I("id"));
    	//点击数
        $Model=M('pagehit');
        $data=$Model->where('id=%d',$id)->find();
        $this->assign('pagehit',$data);       
        $this->display("./Template/play/hitsupdate.html");
    

    }

    //updatehitsmethod
	public function updatehits(){	    
		$hits=test_input(I("hits"));
		$id=test_input(I("id"));
		$pagename=test_input(I("pagename"));
		$Model=M('pagehit');      
        $Model->hits=$hits;
        $Model->pagename=$pagename;        
        $where['id']=$id;
        $res=$Model->where($where)->save();  
        if($res){
             $this->success('成功修改点击量','hitslist');
        }else{
        	 $this->error('修改失败');
        }
        // if($res){
        //     $arr=0;

        // }else{
        // 	$arr=1;
        // }
        // echo $arr;
	}
	
	//playuserlist
	public function playuserlist(){
        $this->judgeLogin();		
        $playuser=M('playuser');
        $count=$playuser->count();
        $page=new \Think\Page($count,30);  
        $page_tpl = urlencode('[PAGE]'); 
        $page->url=__ROOT__.'/playuserlist/p/'.urlencode('[PAGE]');
        $page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
        $page->lastSuffix = false;//最后一页不显示为总页数     
        $show = $page->show();
        $list=$playuser->order('regtime DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$list);
        $this->assign('page',$show);
        $this->display('./Template/admin/playuserlist.html');

    }
	
	//添加活动
    public function playadd(){
        $this->judgeLogin();
        $this->display('./Template/admin/playadd.html');

    }
	
	//playlist
	public function playlist(){
        $this->judgeLogin();
		$flag=$this->judgeClass();
		$this->assign("flag",$flag);
		
        $new=M('play');
        $count=$new->count();
        $page=new \Think\Page($count,20);  
        $page_tpl = urlencode('[PAGE]'); 
        $page->url=__ROOT__.'/playlist/p/'.urlencode('[PAGE]');
        $page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
        $page->lastSuffix = false;//最后一页不显示为总页数     
        $show = $page->show();
        $list=$new->order('pubtime DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$list);
        $this->assign('page',$show);
        $this->display('./Template/admin/playlist.html');

    }
	
	//play处理图片
    public function upload_playimg(){
        $this->judgeLogin();
        $upload = new Upload();
        $upload->maxsize = '1024*1024*2';
        $upload->exts = array('jpg','gif','png','jpeg');
        $uplad->rootPath= '';
        $upload->savePath = '/images/play/';
        $info = $upload->uploadOne($_FILES['file']);
        if($info){
            $filesavename=$info['savename'];
            echo $filesavename;
            //$this->assign('file',$filesavename);
            //$this->display('./Template/admin/proadd.html');     
        }else{
            $this->error($upload->getError());
        }
    }
	//addplay
    public function playsave(){
        $this->judgeLogin();
        $Model=M('play');
        $Model->create();
        $title=I('title');            
        $content=html_entity_decode(I('content'));
        $pubtime=date('Y-m-d H:i:s');
        $Model->title=$title;
        $Model->content=$content;
        $Model->pubtime=$pubtime;
        $res=$Model->add();
        if($res){
            $this->success('成功提交一个新活动','playadd');
        }
            
    }

    //playupdate
    public function playupdate(){
        $this->judgeLogin();
        $Model=M('play');
        $id=I('id');
        $data=$Model->where('id=%d',$id)->find();
        $this->assign('data',$data); 
        $this->display('./Template/admin/playupdate.html');
    }
	
    public function updateplay(){
        $this->judgeLogin();
        $Model=M('play');
        $id=I('id');
        $title=I('title');
        $content=I('content');  
        $pubtime=I('pubtime');
        $Model->title=$title;
        $Model->content=$content;
        $Model->pubtime=$pubtime;
        $where['id']=$id;
        $res=$Model->where($where)->save();  
        if($res){
            $this->success('成功修改一条活动内容');
        }else{
            $this->error('修改失败');
        }
        
    }

    //playdel
    public function playdel(){
        $this->judgeLogin();		
        $Model=M('play');
        $id=I('id');
        $thisdata=$Model->where('id=%d',$id)->find();             
        $res=$Model->where('id=%d',$id)->delete();
        if($res){
            $this->success('成功删除一条活动内容');
        }
    }


    //添加新闻
    public function newsadd(){
        $this->judgeLogin();
        $this->display('./Template/admin/newsadd.html');

    }

    //news处理图片
    public function upload_news(){
        $this->judgeLogin();
        $upload = new Upload();
        $upload->maxsize = '1024*1024*2';
        $upload->exts = array('jpg','gif','png','jpeg');
        $uplad->rootPath= '';
        $upload->savePath = '/images/new/';
        $info = $upload->uploadOne($_FILES['file']);
        if($info){
            $filesavename=$info['savename'];
            echo $filesavename;
            //$this->assign('file',$filesavename);
            //$this->display('./Template/admin/newsadd.html');
           // $this->success('上传成功！','newsadd');            
        }else{
            $this->error($upload->getError());
        }
    }

    //addnew
    public function newsave(){
        $this->judgeLogin();
        $Model=M('new');
        $Model->create();
        if(I('title')==null || I('author')==null || I('lead')==null || I('pic')==null || I('content')==null){
            $this->error('未提交图片或内容未填完整！');
        }else{
            $title=I('title');
            $author=I('author');
            $comfrom=I('from');
            $lead=I('lead');
            $pic=I('pic');
            $content=html_entity_decode(I('content'));
            $pubtime=date('Y-m-d H:i:s');
            $newclass=I('newclass');
            $pos=I('pos');
            $Model->title=$title;
            $Model->author=$author;
            $Model->comfrom=$comfrom;
            $Model->lead=$lead;
            $Model->pic=$pic;
            $Model->content=$content;
            $Model->pubtime=$pubtime;
            $Model->newclass=$newclass;
            $Model->pos=$pos;
            $res=$Model->add();
            if($res){
                $this->success('成功提交一条新闻','newsadd');
            }

            }
            
    }

    //newsupdate
    public function newsupdate(){
        $this->judgeLogin();
        $Model=M('new');
        $id=I('id');
        $data=$Model->where('newid=%d',$id)->find();
        $this->assign('data',$data); 
        $this->display('./Template/admin/newsupdate.html');
    }
    public function updatenews(){
        $this->judgeLogin();
        $Model=M('new');
        $id=I('id');
        $title=I('title');
        $author=I('author');
        $comfrom=I('from');
        $lead=I('lead');
        $pic=I('pic'); 
        $content=I('content');  
        $pubtime=I('pubtime');
        $newclass=I('newclass');
        $pos=I('pos');
        $Model->title=$title;
        $Model->author=$author;
        $Model->comfrom=$comfrom;
        $Model->lead=$lead;
        $Model->pic=$pic;
        $Model->content=$content;
        $Model->pubtime=$pubtime;
        $Model->newclass=$newclass;
        $Model->pos=$pos;
        $where['newid']=$id;
        $res=$Model->where($where)->save();  
        if($res){
            $this->success('成功修改一条新闻');
        }else{
            $this->error('修改失败');
        }
        
    }

    //newsdel
    public function newsdel(){
        $this->judgeLogin();
        $Model=M('new');
        $id=I('id');
        $thisdata=$Model->where('newid=%d',$id)->find();             
        $imgname=$thisdata['pic'];
        $imgpath = "./Public/images/new/$imgname";
        unlink($imgpath);
        $res=$Model->where('newid=%d',$id)->delete();
        if($res){
            $this->success('成功删除一条新闻');
        }

    }
	
	//判断登陆用户的级别
	public function judgeClass(){
	    $user=M("user");
		$condition['username']=session('user');
		$userres=$user->where($condition)->find();
		if($userres['class']==88){
			$flag=1;
		
		}else{
			$flag=0;		
		}
		return $flag;
	
	}

    //newslist
    public function newslist(){
        $this->judgeLogin();
		$flag=$this->judgeClass();
		$this->assign("flag",$flag);
		
        $new=M('new');
        $count=$new->count();
        $page=new \Think\Page($count,20);  
        $page_tpl = urlencode('[PAGE]'); 
        $page->url=__ROOT__.'/newslist/p/'.urlencode('[PAGE]');
        $page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
        $page->lastSuffix = false;//最后一页不显示为总页数     
        $show = $page->show();
        $list=$new->order('pubtime DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$list);
        $this->assign('page',$show);
        $this->display('./Template/admin/newslist.html');

    }

    //添加服务
    public function seradd(){
        $this->judgeLogin();
        $this->display('./Template/admin/seradd.html');

    }

    //ser处理图片
    public function upload_ser(){
        $this->judgeLogin();
        $upload = new Upload();
        $upload->maxsize = '1024*1024*2';
        $upload->exts = array('jpg','gif','png','jpeg');
        $uplad->rootPath= '';
        $upload->savePath = '/images/service/';
        $info = $upload->uploadOne($_FILES['file']);
        if($info){
            $filesavename=$info['savename'];
            echo $filesavename;
            //$this->assign('file',$filesavename);
            //$this->display('./Template/admin/seradd.html');     
        }else{
            $this->error($upload->getError());
        }
    }

    //addser
    public function sersave(){
        $this->judgeLogin();
        $Model=M('service');
        $Model->create();
        if(I('title')==null || I('author')==null || I('lead')==null || I('pic')==null || I('content')==null){
            $this->error('未提交图片或内容未填完整！');
        }else{
            $title=I('title');
            $author=I('author');
            $comfrom=I('from');
            $lead=I('lead');
            $pic=I('pic');
            $content=html_entity_decode(I('content'));
            $pubtime=date('Y-m-d H:i:s');
            $newclass=I('serclass');
            $pos=I('pos');
            $Model->title=$title;
            $Model->author=$author;
            $Model->comfrom=$comfrom;
            $Model->lead=$lead;
            $Model->pic=$pic;
            $Model->content=$content;
            $Model->pubtime=$pubtime;
            $Model->newclass=$newclass;
            $Model->pos=$pos;
            $res=$Model->add();
            if($res){
                $this->success('成功提交一条新闻','seradd');
            }
        }

    }

    //serlist
    public function serlist(){
        $this->judgeLogin();
		$flag=$this->judgeClass();
		$this->assign("flag",$flag);
		
        $new=M('service');
        $count=$new->count();
        $page=new \Think\Page($count,20);  
        $page_tpl = urlencode('[PAGE]'); 
        $page->url=__ROOT__.'/serlist/p/'.urlencode('[PAGE]');
        $page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
        $page->lastSuffix = false;//最后一页不显示为总页数     
        $show = $page->show();
        $list=$new->order('pubtime DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$list);
        $this->assign('page',$show);
        $this->display('./Template/admin/serlist.html');

    }

    //serupdate
    public function serupdate(){
        $this->judgeLogin();
        $Model=M('service');
        $id=I('id');
        $data=$Model->where('serid=%d',$id)->find();
        $this->assign('data',$data); 
        $this->display('./Template/admin/serupdate.html');
    }
    public function updateser(){
        $this->judgeLogin();
        $Model=M('service');
        $id=I('id');
        $title=I('title');
        $author=I('author');
        $comfrom=I('from');
        $lead=I('lead');
        $pic=I('pic');
        $content=I('content');
        $pubtime=I('pubtime');
        $serclass=I('serclass');
        $pos=I('pos');
        $Model->title=$title;
        $Model->author=$author;
        $Model->comfrom=$comfrom;
        $Model->lead=$lead;
        $Model->pic=$pic;
        $Model->content=$content;
        $Model->pubtime=$pubtime;
        $Model->serclass=$serclass;
        $Model->pos=$pos;
        $res=$Model->where('serid=%d',$id)->save();
        if($res){
            $this->success('成功修改一条服务资讯','serlist');
        }
        
    }

    //serdel
    public function serdel(){
        $this->judgeLogin();
        $Model=M('service');
        $id=I('id');
        $thisdata=$Model->where('serid=%d',$id)->find();             
        $imgname=$thisdata['pic'];
        $imgpath = "./Public/images/service/$imgname";
        unlink($imgpath);
        $res=$Model->where('serid=%d',$id)->delete();
        if($res){
            $this->success('成功删除一条新闻');
        }

    }
    
    //添加服务
    public function proadd(){
        $this->judgeLogin();
        $this->display('./Template/admin/proadd.html');

    }

    //pro处理图片
    public function upload_proimg(){
        $this->judgeLogin();
        $upload = new Upload();
        $upload->maxsize = '1024*1024*2';
        $upload->exts = array('jpg','gif','png','jpeg');
        $uplad->rootPath= '';
        $upload->savePath = '/images/pro/';
        $info = $upload->uploadOne($_FILES['file']);
        if($info){
            $filesavename=$info['savename'];
            echo $filesavename;
            //$this->assign('file',$filesavename);
            //$this->display('./Template/admin/proadd.html');     
        }else{
            $this->error($upload->getError());
        }
    }

    
	
	//小程序文字处理
    public function upload_minicon(){
        $Model=M('pro');
        $Model->create();
        if(I('post.prono')==null || I('post.proprice')==null || I('post.proabout')==null || I('post.proname')==null){
            $this->error('未提交任何内容');
        }else{
            $prono=I('prono');
            $proname=I('proname');
            $proprice=I('proprice');
            $proabout=I('proabout');
            $propic=I('propic');
            $pubtime=date('Y-m-d H:i:s');
            $Model->prono=$prono;
            $Model->proname=$proname;
            $Model->proprice=$proprice;
            $Model->proabout=$proabout;
            $Model->propic=$propic;
            $Model->pubtime=$pubtime;
            $res=$Model->add();
            if($res){
                echo 1;
            }else{
                echo 0;
            }

        }
        
        
    }
	
	//微缩图测试
	public function thumbimg_test(){
	    $image = new \Think\Image(); 
        $image->open('./Public/images/pro/1.jpg');
        $image->thumb(150, 150)->save('./Public/images/pro/1thumb.jpg');
	
	}
	//小程序图片处理
    public function upload_miniimg(){
            $upload = new Upload();
            $upload->maxsize = '1024*1024*2';
            $upload->exts = array('jpg','gif','png','jpeg');
            $uplad->rootPath= '';
            $upload->savePath = '/images/pro/';
            $info = $upload->uploadOne($_FILES['file']);
            if($info){
                $filesavename=$info['savename'];
                //echo $filesavename;
				$image = new \Think\Image(); 
                $image->open('./Public/images/pro/'.$filesavename);
				$thumbimg="thumb_".$filesavename;
                $image->thumb(650, 1300)->save('./Public/images/pro/'.$thumbimg); 
				$imgpath = "./Public/images/pro/".$filesavename;
                unlink($imgpath);  
				echo $thumbimg;  
            }else{
                $this->error($upload->getError());
            }
            
    }

    //addpro
    public function prosave(){
        $this->judgeLogin();
        $Model=M('pro');
        $Model->create();
        if(I('prono')==null || I('proname')==null || I('propic')==null || I('proabout')==null){
            $this->error('未提交图片或内容未填完整！');
        }else{
            $prono=I('prono');
            $proname=I('proname');
            $proprice=I('proprice');
            $propic=I('propic');
            $proabout=I('proabout');
            $pubtime=date('Y-m-d H:i:s');
            $choice=I('choice');
            $Model->prono=$prono;
            $Model->proname=$proname;
            $Model->proprice=$proprice;
            $Model->propic=$propic;
            $Model->proabout=$proabout;
            $Model->content=$content;
            $Model->pubtime=$pubtime;
            $Model->choice=$choice;
            $res=$Model->add();
            if($res){
                $this->success('成功提交一款产品','proadd');
            }

        }
        

    }

    //prolist
    public function prolist(){
        $this->judgeLogin();
		$flag=$this->judgeClass();
		$this->assign("flag",$flag);		
        $new=M('pro');
        $count=$new->count();
        $page=new \Think\Page($count,30);  
        $page_tpl = urlencode('[PAGE]'); 
        $page->url=__ROOT__.'/prolist/p/'.urlencode('[PAGE]');
        $page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
        $page->lastSuffix = false;//最后一页不显示为总页数     
        $show = $page->show();
        $list=$new->order('pubtime DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$list);
        $this->assign('page',$show);
        $this->display('./Template/admin/prolist.html');

    }
    //更新产品
    public function proupdate(){
        $this->judgeLogin();
        $Model=M('pro');
        $id=I('id');
        $data=$Model->where('proid=%d',$id)->find();
        $this->assign('data',$data); 
        $this->display('./Template/admin/proupdate.html');
    }

    public function updatepro(){
        $this->judgeLogin();
        $Model=M('pro');
        $id=I('id');
        $prono=I('prono');
        $proname=I('proname');
        $proprice=I('proprice');
        $propic=I('propic');
        $proabout=I('proabout');        
        $pubtime=I('pubtime');
        $choice=I('choice');
        $Model->prono=$prono;
        $Model->proname=$proname;
        $Model->proprice=$proprice;
        $Model->propic=$propic;
        $Model->proabout=$proabout;
        $Model->pubtime=$pubtime;
        $Model->choice=$choice;
        $res=$Model->where('proid=%d',$id)->save();
        if($res){
            $this->success('成功修改一款产品','prolist');
        }
        
    }

    //prodel
    public function prodel(){
        $this->judgeLogin();
        $Model=M('pro');
        $id=I('id');
        $thisdata=$Model->where('proid=%d',$id)->find();             
        $imgname=$thisdata['propic'];
        $imgpath = "./Public/images/pro/$imgname";
        unlink($imgpath);
        $res=$Model->where('proid=%d',$id)->delete();
        if($res){
            $this->success('成功删除一款产品');
        }

    }

    //userlist
    public function userlist(){
        $this->judgeLogin();
		$flag=$this->judgeClass();
		$this->assign("flag",$flag);
		
        $new=M('user');
        $count=$new->count();
        $page=new \Think\Page($count,30);  
        $page_tpl = urlencode('[PAGE]'); 
        $page->url=__ROOT__.'/userlist/p/'.urlencode('[PAGE]');
        $page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
        $page->lastSuffix = false;//最后一页不显示为总页数     
        $show = $page->show();
        $list=$new->order('regtime DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$list);
        $this->assign('page',$show);
        $this->display('./Template/admin/userlist.html');

    }

    //更新产品
    public function userupdate(){
        $this->judgeLogin();
        $Model=M('user');
        $id=I('id');
        $data=$Model->where('userid=%d',$id)->find();
        $this->assign('data',$data); 
        $this->display('./Template/admin/userupdate.html');
    }

    public function updateuser(){
        $this->judgeLogin();
        $Model=M('user');
        $id=I('id');
        $username=I('username');
        $sex=I('sex');
        $pwd=I('pwd');   
        $tel=I('tel');   
        $email=I('email'); 
        $addr=I('addr'); 
        $photo=I('photo'); 
        $class=I('class');
        $regtime=I('regtime');
        $logintimes=I('logintimes');
        $lastlogintime=I('lastlogintime');
        $ip=I('ip');
        $Model->username=$username;
        $Model->sex=$sex;
        $Model->pwd=$pwd;
        $Model->tel=$tel;
        $Model->email=$email;
        $Model->addr=$addr;
        $Model->photo=$photo;
        $Model->class=$class;
        $Model->regtime=$regtime;
        $Model->logintimes=$logintimes;
        $Model->lastlogintime=$lastlogintime;
        $Model->ip=$ip;
        $res=$Model->where('userid=%d',$id)->save();
        if($res){
            $this->success('成功修改用户信息','userlist');
        }
        
    }

    //userdel
    public function userdel(){
        $this->judgeLogin();
        $Model=M('user');
        $id=I('id');
        $res=$Model->where('userid=%d',$id)->delete();
        if($res){
            $this->success('成功删除一个用户');
        }

    }

    //留言管理
    public function meslist(){
        $this->judgeLogin();
        $mesModel=M('leaveword');
        $count=$mesModel->count();
        $page=new \Think\Page($count,10);  
        $page_tpl = urlencode('[PAGE]'); 
        $page->url=__ROOT__.'/meslist/p/'.urlencode('[PAGE]');
        $page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
        $page->lastSuffix = false;//最后一页不显示为总页数     
        $show = $page->show();
        $list=$mesModel->order('createtime DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$list);
        $this->assign('page',$show);
        $this->display('./Template/admin/meslist.html');

    }

    public function mesdel(){
        $this->judgeLogin();
        $Model=M('leaveword');
        $id=I('id');
        $res=$Model->where('id=%d',$id)->delete();
        if($res){
            $this->success('成功删除一条留言');
        }

    }


    public function test_think(){
        unlink('./Public/images/pro/5b88ad99b34a7.jpg');
        //echo cookie('qq_openid');
        //$this->display();
    }

    public function delall(){
            //多条删除操作
            if(@$_POST['action'] == "delall"){  
                if(count($_POST['chk']) <= 0)
                    echo "<script>alert('请选择记录');history.go(-1);</script>";
                else
                {
                    for($i = 0; $i < count($_POST['chk']); $i++)
                    { 
                        $Model = new \Think\Model();
                        $chk_i=$_POST['chk'][$i];
                        $Model->execute("delete from new where newid =$chk_i");
                    }
                       $this->success('删除成功','admin');
                }
            }   

    }

    public function _empty($name){
        redirect('/index.html', 1, '页面跳转中...');
    }
	
	public function zhaoping(){
	    $this->display('./Template/zhaoping/zp.html');
	
	}
	
    
	//微信接口文件
    
    //获得数据
    public function getdata(){
        $pro=M("pro");
        $res=$pro->order("proid DESC")->limit(20,10000)->select();
        /*
        for ($i=0;$i<10;$i++){
            $res[$i] = rand(100, 400);
        }
        $this->assign('height', $res);
        */
        $resall=json_encode($res);  
        echo $resall;
        //$this->ajaxReturn($resall);
     }

	 //产品
    public function procenter_wx(){
        $proObj=M('pro');
        $proall=$proObj->order('proid DESC')->limit(20)->select();
        $pronums=$proObj->count();
		$this->assign('date',date('Y-m-d'));
        $this->assign('proall',$proall);
        $this->assign('pronums',$pronums);
        $this->display('./Template/wx/procenter_wx.html');
    }

    public function proshow_wx(){
        $proid=I('id');
        $proObj=M('pro');
        $proshow=$proObj->where('proid=%d',$proid)->find();
        $proname=$proshow['proname'];
        $samepro=$proObj->where("proname like '%$proname%'")->order('proid DESC')->limit(3)->select();
        $this->assign('detail',$proshow);
        $this->assign('samepro',$samepro);
        $this->display('./Template/wx/proshow_wx.html');
    }

	
	//test
    public function test_progress(){
        $this->display('./Template/test/test_progress.html');
    }
	
	 public function show(){
		$this->display('./Template/test/show.html');
        
    }
	
  //小程序接口
     public function getprosList(){
         $data=M('pro')->order('proid DESC')->select();
         echo json_encode($data);
     }
	 public function getsersList(){
         $data=M('service')->order('serid DESC')->select();
         echo json_encode($data);
     }
	 public function getplaysList(){
         $data=M('play')->order('pubtime DESC')->select();
		 //$dataparse=html_entity_decode($data);
         echo json_encode($data);
     }















}