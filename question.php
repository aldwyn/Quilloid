<?php
	session_start();

	require_once("applications/errorHandler.php");
	require_once("applications/connectToServer.php");

	$user_id = $_SESSION['user_id'];
	$question_id = $_GET['question_id'];
	
	$users = mysql_query("SELECT * FROM users WHERE user_id = '$user_id'");
	$users = mysql_fetch_assoc($users);

	$questions = mysql_query("SELECT * FROM questions WHERE question_id = '$question_id'");
	$questions = mysql_fetch_assoc($questions);

	$username = ucfirst($users['username']);
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<title><?php echo $username?> | Quilloid Questions</title>
	<link type="text/css" rel="stylesheet" href="styles/quilloid.css" />
</head>

<body>
	<?php require_once("frontend-temps/header.php"); ?>
	<?php require_once("frontend-temps/modals.php"); ?>
	<div class="container">
		<?php require_once("frontend-temps/sidebar.php"); ?>
		<aside class="container">
			<div class="page-body right">
				<h2>Questions Update</h2>
				<article id="article">
					<section>
						<h3><?php echo $questions['title']; ?></h3>
					</section>
					<p><?php echo nl2br($questions['content']); ?></p>
					<div class="mini-info right">34 reblogs * 234 likes * 2013-04-21 00:00:00</div>
					<section>
						<ul>
							<a href="#"><li>React</li></a>
							<a href="#"><li>Like</li></a>
							<a href="#"><li>View Description</li></a>
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