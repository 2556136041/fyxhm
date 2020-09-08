<?php
 
 
$con=mysqli_connect("bdm272871582.my3w.com","bdm272871582","13088829771","bdm272871582_db"); 
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
 
 
mysqli_query($con,"set names utf8");
 
 
if (!empty($_POST['username'])&&!empty($_POST['tel'])){
	$sql="INSERT INTO playuser (username, tel) VALUES ('$_POST[username]','$_POST[tel]')";
	
	
	$result = mysqli_query($con,$sql);
	if (!$result)
	  {  
		die('Error: ' . mysqli_connect_error());
	 }
 
}
 
 
 
 
  $sql1 = "SELECT * FROM playuser";
  $result1 = mysqli_query($con,$sql1);
  
 
  
?>
 
<!doctype html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
 
 
<title>报名表单</title>
</head>
 
<body style="margin:50px;">
 
<script language="JavaScript"> 
function myrefresh(){ 
     window.location.reload(); 
} 
setTimeout('myrefresh()',10000); //指定1秒刷新一次 
</script>  
 
<table align="center" border='1' cellpadding="0" cellspacing="0" width="600px" height="auto">
         <tr><th>id</th><th>名字</th><th>电话</th><th>报名时间</th></tr>
<?php
     $rows=mysqli_num_rows($result1);
     while ($bookInfo = mysqli_fetch_array($result1,MYSQLI_ASSOC)){ //返回查询结果到数组
			$user = $bookInfo["username"]; //将数据从数组取出
			$tel = $bookInfo["tel"];
			$id = $bookInfo["userid"];
			$regtime = $bookInfo["regtime"];
              echo "<tr align='center'><td>{$id}</td><td>{$user}</td><td>{$tel}</td><td>{$regtime}</td></tr>";
     }
	 
//释放结果集
mysqli_free_result($result1);
 
mysqli_close($con);
?>
<tr><td colspan="4" align="left">截止目前报名人数 <font color="red"><?php echo $rows; ?></font>人</td></tr>
</table> 
</body>
</html>
