<?php
	require_once("errors.php");

	if (isset($_SESSION['error'])) {
		echo $error[$_SESSION['error']];
		unset($_SESSION['error']);
	}
?>