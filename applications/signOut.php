<?php
	session_start();

	if (isset($_SESSION['user_id'])) {
		$_SESSION['error'] = 1;
		session_destroy();
	}

	header("location: ../index.php");
?>