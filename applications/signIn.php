<?php
	session_start();

	require_once("connectToServer.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	$userCheck = mysql_query("SELECT * FROM users WHERE username = '$username' OR email = '$username'");
	$userCheck = mysql_fetch_assoc($userCheck);

	if ($userCheck['password'] == $password) {
		$_SESSION['user_id'] = $userCheck['user_id'];
		header("location: ../home.php");
	} else {
		$_SESSION['error'] = 0;
		header("location: ../index.php");
	}

	mysql_close($connect);
?>