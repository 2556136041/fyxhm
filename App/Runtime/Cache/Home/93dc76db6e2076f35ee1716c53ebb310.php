<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>hitslist</title>
	
	<link rel="stylesheet" href="/Public/css/layout.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/Public/css/page.css" type="text/css" media="screen" />
	<link rel="stylesheet" href='/Public/css/hoverbox_admin.css' type="text/css" media="screen, projection" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="img/css/ie.css" type="text/css" media="screen" />
	<script src="img/js/html5.js"></script>
	<![endif]-->
	<script src="/Public/js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="/Public/js/hideshow.js" type="text/javascript"></script>
	<script src="/Public/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/Public/js/jquery.equalHeight.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

				<table class="tablesorter" border="0" cellspacing="0" style="margin:0"> 
					<thead> 
						<tr>  
			    				<th>ID</th>
			    				<th>页面</th>
			    				<th>点击数</th>
			    				<th>操作</th>
						</tr> 
					</thead>
					<tbody>
					<?php if(is_array($data)): foreach($data as $key=>$value): ?><tr>
			    				<td><?php echo ($value["id"]); ?></td> 
			    			    <td><?php echo ($value["pagename"]); ?></td>                               
			    				<td><?php echo ($value["hits"]); ?></td> 
			    				<?php if($value["id"] == 1): ?><td><input type="image" src="/Public/images/comm/icn_edit.png" title="Edit" onClick="window.location.href='javascript:void(0)'">
			    				    </td><?php endif; ?>
			    				<?php if($value["id"] > 1): ?><td><input type="image" src="/Public/images/comm/icn_edit.png" title="Edit" onClick="window.location.href='/hitsupdate/id/<?php echo ($value["id"]); ?>'">
				    				</td><?php endif; ?>
						</tr><?php endforeach; endif; ?>
					</tbody>
					<tfoot> 
						<tr>  
			    			<td align='center' colspan="8" class="pages"><?php echo ($page); ?>
			    			</td>
						</tr> 
					</tfoot>
				</table>

</body>

</html>