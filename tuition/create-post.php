<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	
	$name = "";
    $address = "";
	$search = "";
	$details = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = mysqli_real_escape_string($db,$_POST['name']);
        $address= mysqli_real_escape_string($db,$_POST['address']);
		$search= mysqli_real_escape_string($db,$_POST['search']);
		$details = mysqli_real_escape_string($db,$_POST['details']);

		mysqli_query($db, "INSERT INTO info (name,address,search, details) 
		VALUES ('$name','$address','$search', '$details')"); 
        $_SESSION['message'] = "Details saved"; 
		header('location: view.php');
	}

	if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = mysqli_real_escape_string($db,$_POST['name']);
        $address = mysqli_real_escape_string($db,$_POST['address']);
		$search= mysqli_real_escape_string($db,$_POST['search']);
		$details = mysqli_real_escape_string($db,$_POST['details']);
    
        mysqli_query($db, "UPDATE info SET name='$name', address='$address' , search='$search', 
		details='$details' WHERE id=$id");
        $_SESSION['message'] = "Address updated!"; 
        header('location: view.php');
    }
	if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM info WHERE id=$id");
        $_SESSION['message'] = "Address deleted!"; 
        header('location: view.php');
    }
	?>