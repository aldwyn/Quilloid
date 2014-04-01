<?php
	session_start();

	require_once("../applications/connectToServer.php");

	$username = $_POST['username'];
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$birthdate = date("Y-m-d", strtotime($_POST['birthdate']));
	$sex = $_POST['sex'];
	$password = $_POST['password'];
	$check_password = $_POST['check_password'];

	if ($username && $full_name && $email && $password && $check_password) {
		$userCheck = mysql_query("SELECT * FROM users WHERE username = '$username' OR email = '$email'");
		if (mysql_num_rows($userCheck) == 0) {
			if (strlen($password) >= 6) {
				if ($password == $check_password) {
					mysql_query("INSERT INTO users (username, full_name, email, birthdate, sex, password)
						VALUES ('$username', '$full_name', '$email', '$birthdate', '$sex', '$password')");
					$_SESSION['user_id'] = mysql_insert_id();
					$_SESSION['success'] = 'Welcome, ' . $username . '! Explore Quilloid!';
					header("location: ../home.php");
				} else {
					$_SESSION['error'] = 5;
					header("location: ../index.php");
				}
			} else {
				$_SESSION['error'] = 4;
				header("location: ../index.php");
			}
		} else {
			$_SESSION['error'] = 3;
			header("location: ../index.php");
		}
	} else {
		$_SESSION['error'] = 2;
		header("location: ../index.php");
	}

	mysql_close($connect);
?>