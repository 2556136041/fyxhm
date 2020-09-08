<?php 

require_once('./apimodel/response1.php');
require_once('./apimodel/file1.php');

$file = new File();
$data = $file->cacheData('pro');
if($data) {
	return Response::show($data);
}else{
	return Response::show($data);
}

?>

