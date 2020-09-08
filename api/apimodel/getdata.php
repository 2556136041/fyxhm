<?php 
header("Content-Type:text/html;charset=utf-8");
$filename="./files/test1.txt";
$contents = file_get_contents($filename);
$value=substr($contents, 11);
$data=json_decode($value);
$jsondata=json_encode($data);
echo $jsondata;



?>