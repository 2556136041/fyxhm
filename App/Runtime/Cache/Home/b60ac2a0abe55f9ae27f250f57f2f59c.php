<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<p><?php echo ((isset($prono) && ($prono !== ""))?($prono):"0"); ?></p>
<p><?php echo ((isset($proname) && ($proname !== ""))?($proname):"0"); ?></p>
<p><?php echo ((isset($proprice) && ($proprice !== ""))?($proprice):"0"); ?></p>
<p><?php echo ((isset($proabout) && ($proabout !== ""))?($proabout):"0"); ?></p>
	
</body>
</html>