<?php 
	header("Content-Type:text/html; charset=utf-8");
	echo "<div class='comment'><h6>{$_REQUEST['username']}:</h6><p class='para'>{$_REQUEST['content']}</p>
	<p class='para'>{$_REQUEST['address']}</p>
	<p class='para'>{$_REQUEST['hobby']}</p>
	</div>";
?>
