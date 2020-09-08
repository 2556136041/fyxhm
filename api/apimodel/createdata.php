<?php 


require_once('./file.php');
require_once('./db.php');
$connect = Db::getInstance()->connect();
$sql = "select * from pro order by pubtime DESC";
$result = mysql_query($sql, $connect);
while($row= mysql_fetch_assoc($result)) {
	$rows[] = $row;
}
// $data=array(
//      'id'=>1,
//      'name'=>'wxl',
//      'int'=>array('play','read','write')
//  );

$file = new File();

echo $file->cacheData('test1',$rows);















?>