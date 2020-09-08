<?php 
namespace Home\Model;
use Think\Model;
class NewsModel extends Model{
	// protected $insertFields = array('title','author','comefrom','pubtime','hit','status');
 //    protected $updateFields = array('hit');
 //    protected $fields=array('id','title','author','comefrom','content','pubtime','hit','status',
 //    	'_type'=>array('id'=>'int','author'=>'varchar','author'=>'text','pubtime'=>'timestamp','hit'=>'int','status'=>'int')
 //    	);
    protected $conn='mysql://bdm272871582:13088829771@bdm272871582.my3w.com:3306/bdm272871582_db#utf8';
    public function conn(){
    	return $this->conn;
    }




}










?>