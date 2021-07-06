<?php

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$post = validate($_POST['post']);
	$author = validate($_POST['author']);
	$date__created = validate($_POST['date__created']);
	$pages = validate($_POST['pages']);


	$user_data = 'post=' . $post . '&author=' . $author . 'date__created=' . $date__created . 'pages=' . $pages;

	if (empty($post)) {
		header("Location: ../index.php?error=Post is required&$user_data");
	} else if (empty($author)) {
		header("Location: ../index.php?error=Author is required&$user_data");
	} else if (empty($date__created)) {
		header("Location: ../index.php?error=Date-Created  is required&$user_data");
	} else if (empty($pages)) {
		header("Location: ../index.php?error=Pages  is required&$user_data");
	} else {

		$sql = "INSERT INTO baiviet (tenbv, tacgia, ngaydang, sotrang)
               VALUES('$post', '$author','$date__created','$pages')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header("Location: ../read.php?success=successfully-created");
		} else {
			header("Location: ../index.php?error=unknown-error-occurred&$user_data");
		}
	}
}
