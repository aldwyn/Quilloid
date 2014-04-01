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

<!DOCTYPE html>

<html lang="en">
<head>
	<title><?php echo $username?> | Quilloid Blogs</title>
	<link type="text/css" rel="stylesheet" href="styles/quilloid.css" />
</head>

<body>
	<?php require_once("frontend-temps/header.php"); ?>
	<?php require_once("frontend-temps/modals.php"); ?>
	<div class="container">
		<?php require_once("frontend-temps/sidebar.php"); ?>
		<aside class="container">
			<div class="page-body right">
				<h2>Blogs Update</h2>
				<article id="article">
					<section>
						<a href="#"><h3>If dogs never existed, what would be the Man's Best Friend?</h3></a>
					</section>
					<p>Thank you for that very wonderful question...</p>
					<div class="mini-info right">34 reblogs * 234 likes * 2013-04-21 00:00:00</div>
					<section>
						<ul>
							<a href="#"><li>Reblog</li></a>
							<a href="#"><li>Like</li></a>
							<a href="#"><li>View Full Text</li></a>
						</ul>
					</section>
				</article>
			</div>
		</aside>
	</div>
	<?php require_once("frontend-temps/footer.php"); ?>
</body>

<script src="scripts/jquery-1.9.1.js"></script>
<script src="scripts/quilloid-scripts.js"></script>

</html>