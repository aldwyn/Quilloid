<?php
	function findUser($user_id) {
		$users = mysql_query("SELECT * FROM users WHERE user_id = '$user_id'");
		$users = mysql_fetch_assoc($users);
		return $users;
	}
?>