<?php 
	require_once '../config/connect.php';

	$title = $_POST['title'];
	$description = $_POST['description'];
	$text = $_POST['text'];
	$pubdate = $_POST['pubdate'];
	$author = $_POST['author'];
	$image = $_POST['image'];
	$tags = $_POST['tags'];
	$status = $_POST['status'];

	// echo $title.'<br>';
	// echo $description.'<br>';
	// echo $text.'<br>';
	// echo $pubdate.'<br>';
	// echo $author.'<br>';
	// echo $image.'<br>';
	// echo $tags.'<br>';
	// echo $status.'<br>';
	mysqli_query($connect ,"INSERT INTO `news` (`id`, `Title`, `Description`, `Text`, `Publication Date`, `Author`, `Image`, `Category`, `Tags`, `Views`, `Rating`, `Status`) VALUES (NULL, '$title', '$description', '$text', '$pubdate', '$author', '$image', '', '$tags', NULL, NULL, '$status')");

	/* Перенаправление браузера на другую страницу в той же директории, что и
	изначально запрошенная */
	$host  = $_SERVER['HTTP_HOST'];
	$extra = 'admin_panel.php';
	header("Location: http://$host$uri/$extra");