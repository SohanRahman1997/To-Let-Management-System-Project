<?php include('create-post.php') ?>
<?php include('new-user.php') ?>
<?php
  if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
        
		if (isset($record)) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
			$search = $n['search'];
			$details = $n['details'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" type="text/css" href="create.css">
</head>
<body>
<body>

<form method="post" action="create-post.php" >
    <h1>Create Post</h1>
        <div>
	        <input type="hidden" name="id" value="<?php echo $id; ?>">
		</div>
		<div class="input-group">
			<label>Name</label>
			<input type="text" class="name" name="name" value="<?php echo $name; ?>" required>
		</div>
        <div class="input-group">
			<label>Address</label>
			<input type="text" class="address" name="address" value="<?php echo $address; ?>" required>
		</div>
		<div class="input-group"> 
            <label>Searching For:</label>
            <select name="search" class="search">
                <option value="tuition">Tuition</option>
                <option value="tutor">Tutor</option>
            </select>
        </div>
		<div class="input-group">
			<label>Details</label>
			<textarea type="text" class="details" name="details" value="<?php echo $details; ?>"></textarea>
		</div>
		<div class="input-group">
		    <?php if ($update == true): ?>
	        <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
            <?php else: ?>
	        <button class="btn" type="submit" name="save" >Save</button>
            <?php endif ?>
		</div>
        <a href="main.php" style="padding: 10px;font-size: 15px;color: white;background: #5F9EA0;border: none;
	    border-radius: 5px;text-decoration: none;">Go to Dashboard</a>
		<a href="view.php" style="padding: 10px;font-size: 15px;color: white;background: #5F9EA0;border: none;
	    border-radius: 5px;text-decoration: none;">View Post</a> 	 
	</form>
</body>
</html>