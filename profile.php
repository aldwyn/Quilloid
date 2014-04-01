<?php
	session_start();

	require_once("applications/errorHandler.php");
	require_once("applications/connectToServer.php");
	require_once("applications/findUser.php");

	$user_id = $_SESSION['user_id'];
	$users = findUser($user_id);

	$profile_id = $_GET['profile_id'];
	$profiles = findUser($profile_id);

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
				<h2>Profile Peek</h2>
				<article id="article">
					<section>
						<h3><?php echo $profiles['username']; ?></h3>
						<span id="update-btn" class="btn">Update</span>
						<div class="profile_data">
							<ul>
								<li><ul>
									<li>Username</li>
									<li><?php echo $profiles['username']; ?></li>
								</ul></li>
								<li><ul>
									<li>Full Name</li>
									<li><?php echo $profiles['full_name']; ?></li>
								</ul></li>
								<li><ul>
									<li>Joined Last</li>
									<li><?php echo date("F j, Y g:i a", strtotime($profiles['signup_date'])); ?></li>
								</ul></li>
								<li><ul>
									<li>Email Address</li>
									<li><?php echo $profiles['email']; ?></li>
								</ul></li>
								<li><ul>
									<li>Birthdate</li>
									<li><?php echo date("F j, Y", strtotime($profiles['birthdate'])); ?></li>
								</ul></li>
								<li><ul>
									<li>Sex</li>
									<li><?php echo ucwords($profiles['sex']); ?></li>
								</ul></li>
							</ul>
						</div>
						<div id="update_profile">
							<div class="modal-dialog">
								<div class="container"></div>
								<div class="container"></div>
								<div class="profile_data update_dialog">
									<form action="#">
										<ul>
											<li><ul>
												<li>Username</li>
												<input type="type" value="<?php echo $profiles['username']; ?>"/>
											</ul></li>
											<li><ul>
												<li>Full Name</li>
												<input type="type" value="<?php echo $profiles['full_name']; ?>"/>
											</ul></li>
											<li><ul>
												<li>Email Address</li>
												<input type="email" value="<?php echo $profiles['email']; ?>" readonly/>
											</ul></li>
											<li><ul>
												<li>Birthdate</li>
												<input type="date" value="<?php echo date("m/d/Y", strtotime($profiles['birthdate'])); ?>"/>
											</ul></li>
											<li><ul>
												<li>Sex</li>
												<input type="radio" name="sex"/> Male
												<input type="radio" name="sex"/> Female
											</ul></li>
										</ul>
										<div class="dialog-btn">
											<span id="cancel-btn" class="btn">Cancel</span>
											<input type="submit" class="btn" value="Save"/>
										</div>
									</form>
								</div>
							</div>
						</div>
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