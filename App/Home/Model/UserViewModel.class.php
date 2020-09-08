<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class UserViewModel extends ViewModel{
	public $viewFields = array(
        'User'=>array('userid','username','sex','email'),
        'Leaveword'=>array( 'title','content','createtime','_on'=>'User.userid=Leaveword.userid')
    );
}










?>