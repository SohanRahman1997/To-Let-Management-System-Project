<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'review');

	$name = "";
	$rating = "";
    $details = "";

	if (isset($_POST['save'])) {
		$name = mysqli_real_escape_string($db,$_POST['name']);
		$rating = mysqli_real_escape_string($db,$_POST['rating']);
        $details = mysqli_real_escape_string($db,$_POST['details']);

		mysqli_query($db, "INSERT INTO info (name, rating, details) VALUES ('$name', '$rating', '$details')"); 
		$_SESSION['message'] = "Rating Saved"; 
		header('location: review.php');
	}