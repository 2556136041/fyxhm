<?php


$con=mysqli_connect("bdm272871582.my3w.com","bdm272871582","13088829771","bdm272871582_db"); 
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
 
 
mysqli_query($con,"set names utf8");



 

if (!empty($_POST['prono'])&&!empty($_POST['proname'])&&!empty($_POST['proabout'])){
	$sql="INSERT INTO pro (prono, proname,proabout) VALUES ('$_POST[prono]','$_POST[proname]','$_POST[proabout]')";
	
	
	$result = mysqli_query($con,$sql);
	if (!$result)
	  {  
		die('Error: ' . mysqli_connect_error());
	 }else{
	 	echo "success";
	 }
 
}
 
 

 
  
?>
 
