<?php
	$connect = mysql_connect('localhost', 'root', '') or die('Cannot connect to server...');
	mysql_select_db('quilloid', $connect) or die('Cannot connect to database...');
?>