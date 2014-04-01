<?php
	session_start();

	require_once("applications/errorHandler.php");

	if (isset($_SESSION['user_id'])) {
		header("location: home.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-US">
<head>
	<title>Quilloid</title>
	<link type="image/png" rel="icon" href="images/favicon.png">
	<link type="text/css" rel="stylesheet" href="styles/quilloid.css" />
</head>

<body>
	<?php require_once("frontend-temps/header.php"); ?>
	<div class='container'></div>
	<div class="container index-pagebody">
		<aside class="left">
			<h1 class="domain-name brand">Quilloid.</h1>
			<p class="domain-slogan">Your powerful portal to a faster, easier, and UI-efficient blogging.</p>
			<a href="about.php"><button class="btn big-btn" title="Browse Splendid Features of Quilloid">About Quilloid</button></a>
		</aside>
		<aside class="right">
			<form class="signup-form big-input-font-std" action="applications/signUp.php" method="POST">
				<input type="text" placeholder="Username" name="username" title="Enter USERNAME"/><br/>
				<input type="text" placeholder="Full Name" name="full_name" title="Enter FULL NAME"/><br/>
				<input type="email" placeholder="Email Address" name="email" title="Enter EMAIL ADDRESS"/><br/>
				<input type="password" placeholder="Enter Password" name="password" title="Enter PASSWORD (must be of length greater than 6 characters)"/><br/>
				<input type="password" placeholder="Confirm Password" name="check_password" title="Confirm PASSWORD"/><br/>
				<input type="date" name="birthdate" title="Enter your BIRTHDATE"/><br/>
				<span class="sex" title="Tick the box of your SEXUAL IDENTITY">
					<input type="radio" name="sex" value="MALE"/> Male 
					<input type="radio" name="sex" value="FEMALE"/> Female
				</span><br/>
				<button type="submit" class="btn big-btn" title="If you're done with the required fields, click HERE.">Submit</button>
			</form>
		</aside>
	</div>
	<div class="container">
		<ul class="nav-bar-bottom">
			<a href="about.php#blogs" title="Browse Blog Features in About Quilloid"><li>Blog</li></a>
			<a href="about.php#quotes" title="Browse Quotes Features in About Quilloid"><li>Quote</li></a>
			<a href="about.php#questions" title="Browse Questions Features in About Quilloid"><li>Question</li></a>
			<a href="about.php#photos" title="Browse Pictures Features in About Quilloid"><li>Picture</li></a>
			<a href="about.php#email" title="Browse Email Features in About Quilloid"><li>Email</li></a>
		</ul>
	</div>
	<?php require_once("frontend-temps/footer.php"); ?>
</body>
</html>