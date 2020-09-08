<?php 

require_once('./apimodel/response1.php');
require_once('./apimodel/file1.php');

$token=$_POST['access_token'];
$mytoken=md5('hello fyxhm');
if($token===$mytoken){
        $file = new File();
		$data = $file->cacheData('pro');
		if($data) {
			return Response::show($data);
		}else{
			return Response::show($data);
		}
}else{
	    echo "你没有权限";
}



?>

