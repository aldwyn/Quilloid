<?php
	$temp = "";
	$signup_btn = "<a href='index.php' class='header-entity right'>
						<button  class='btn'><strong>Sign Up</strong></button>
					</a>";
	$tail = "";

	if ($_SERVER['SCRIPT_FILENAME'] == 'D:/xampp/htdocs/quilloid/index.php' || !isset($_SESSION['user_id'])) {
		$temp = "<form class='header-entity right' action='../quilloid/applications/signIn.php' method='POST'>
				<input type='text' placeholder='Username' name='username' title='Enter USERNAME'/>
				<input type='password' placeholder='Password' name='password' title='Enter PASSWORD'/>
				<button type='submit' class='btn' title='Sign In'><strong>Sign In</strong></button>
			</form>";
		if ($_SERVER['SCRIPT_FILENAME'] == 'D:/xampp/htdocs/quilloid/about.php') {
			$temp = $temp . $signup_btn;
			$tail = "<div class='container'></div>";
		}
	} else {
		$temp = "<div class='nav-bar'>
					<div class='container'>
						<a class='header-entity brand-fx left' href='#'>Quilloid</a>
						<nav id='nav-bar-menu' class='header-entity right'>
							<ul>
								<a href='blogs-page.php'><li>Blogs</li></a>
								<a href='#'><li>Quotes</li></a>
								<a href='questions-page.php'><li>Questions</li></a>
								<a href='#'><li>Photos</li></a>
								<a><li class='icon-nav-profile'></li></a>
							</ul>
						</nav>
					</div>
				</div>
				<div class='container'></div>";
		$tail = "<div class='container'>
					<div id='nav-bar-dropdown'>
						<ul>
							<a href='#'><li>Account Profile</li></a>
							<a href='#'><li>Account Settings</li></a>
							<a href='applications/signOut.php'><li>Sign Out</li></a>
						</ul>
					</div>
				</div>";
	}

	$header = "<div class='nav-bar'>
					<div class='container'>
						<a class='header-entity brand-fx left' href='about.php' title='Read more about Quilloid'>Quilloid</a>" . $temp .
						"	</div>
				</div>
				<div class='container'></div>" . $tail;

	echo $header;	
?>