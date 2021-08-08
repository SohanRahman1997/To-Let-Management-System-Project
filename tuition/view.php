<?php include('create-post.php') ?>
<?php include('new-user.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>
    <link rel="stylesheet" type="text/css" href="create.css">
</head>
<body>

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM info"); ?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
            <th>Searching For</th>
            <th>Details</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
            <td><?php echo $row['search']; ?></td>
            <td><?php echo $row['details']; ?></td>
			<td>
				<a href="create.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="create-post.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
	
</table>
<a href="main.php" style="padding: 10px;font-size: 15px;color: white;background: #5F9EA0;border: none;
	    border-radius: 5px;text-decoration: none;">Go to Dashboard</a> 
<a href="create.php" style="padding: 10px;font-size: 15px;color: white;background: #5F9EA0;border: none;
	    border-radius: 5px;text-decoration: none;">Create Post</a> 		
</body>
</html>