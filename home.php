<?php
	session_start();

	require_once("applications/errorHandler.php");
	require_once("applications/connectToServer.php");

	if (!isset($_SESSION['user_id'])) {
		$_SESSION['error'] = 6;
		header("location: index.php");
	}

	$user_id = $_SESSION['user_id'];
	
	$users = mysql_query("SELECT * FROM users WHERE user_id = '$user_id'");
	$users = mysql_fetch_assoc($users);

	$username = ucfirst($users['username']);
?>

<!DOCTYPE html "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-US">
<head>
	<title><?php echo $username; ?> | Quilloid Home</title>
	<link type="text/css" rel="stylesheet" href="styles/quilloid.css" />
</head>

<body>
	<?php require_once("frontend-temps/header.php"); ?>
	<?php require_once("frontend-temps/modals.php"); ?>
	<div class="container">
		<?php require_once("frontend-temps/sidebar.php"); ?>
		<aside class="container">
			<div class="page-body right">
				<h2>Notifications</h2>
				<article></article>
			</div>
		</aside>
	</div>
	<?php require_once("frontend-temps/footer.php"); ?>
</body>

<script src="scripts/jquery-1.9.1.js"></script>
<script src="scripts/quilloid-scripts.js"></script>

</html>