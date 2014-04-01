<?php
	session_start();

	require_once("connectToServer.php");

	$user_id = $_SESSION['user_id'];
	$medium = $_POST['medium'];
	$title = $_POST['title'];
	$tags = $_POST['tags'];
	$content = $_POST['content'];
	
	print_r($_POST);

	if ($title && $content) {
		$tag_ids = saveTags($tags);
		saveData($user_id, $medium, $tag_ids, $title, $content);
	} else {
		$_SESSION['error'] = 7;
		header("location: ../home.php");
	}

	function saveData($user_id, $medium, $tag_ids, $title, $content) {
		$specific_medium = mb_convert_case($medium, MB_CASE_LOWER);
		$table = $specific_medium . "s";
		$users_table = "users_" . $table;
		$m_id_name = $specific_medium . "_id";
		
		mysql_query("INSERT INTO '$table' (title, content) VALUES ('$title', '$content')");
		$m_id = mysql_insert_id();

		mysql_query("INSERT INTO '$users_table' (user_id, '$m_id_name') VALUES ('$user_id', '$m_id')");

		foreach ($tag_ids as $tag_id) {
			mysql_query("INSERT INTO medium_tags VALUES ('$m_id', '$tag_id', '$medium')");
		}

		if ($m_id != 0) {
			header("location: ../" . $specific_medium . ".php?" . $m_id_name . "=" . $m_id);
		}
	}
	
	function saveTags($tags) {
		$tags_array = explode(",", $tags);
		$tag_ids = array();

		if (count($tags_array) == 0 || $tags == '') {
			array_push($tag_ids, 1);
		} else {
			foreach ($tags_array as $tag) {
				if ($tag == ' ') {
					break;
				} else {
					$tagCheck = mysql_query("SELECT * FROM tags WHERE tag = '$tag'");
					$tagCheck = mysql_fetch_array($tagCheck);
					$tag_id = 0;

					if ($tagCheck == TRUE && in_array($tag, $tagCheck) == FALSE) {
						mysql_query("INSERT INTO tags (tag) VALUES ('$tag')");
						$tag_id = mysql_insert_id();
					} else {
						$tag_id = $tagCheck['tag_id'];
					}

					array_push($tag_ids, $tag_id);
				}
			}
		}
		return $tag_ids;
	}

	mysql_close($connect);
?>