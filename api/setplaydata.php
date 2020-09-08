<?php 
require_once('./apimodel/file1.php');
require_once('./apimodel/db.php');
$connect = Db::getInstance()->connect();
$sql = "select * from play order by pubtime DESC";
$result = mysql_query($sql, $connect);
while($row= mysql_fetch_assoc($result)) {
	$rows[] = $row;
}
$file = new File();
echo $file->cacheData('play',$rows);



?>