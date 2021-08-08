<?php include('review-user.php') ?>
<?php include('new-user.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Review</title>
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
			<th>Rating</th>
			<th>Details</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['rating']; ?></td>
            <td><?php echo $row['details']; ?></td>
		</tr>
	<?php } ?>
</table>

	<form method="post" action="review-user.php" >
    <h1>Share Your Opinion</h1>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" class="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group"> 
            <label>Rating:</label>
            <select name="rating" class="rating" value="<?php echo $rating; ?>">
                <option value="very satisfied">Very Satisfied</option>
                <option value="satisfied">Satisfied</option>
                <option value="above average">Above Average</option>
                <option value="average">Above Average</option>
                <option value="bellow average">Bellow Average</option>
                <option value="poor">Poor</option>
                <option value="very poor">Very Poor</option>
            </select>
        </div>
        <div class="input-group">
			<label>Details</label>
			<textarea type="text" class="details" name="details" value="<?php echo $details; ?>"></textarea>
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
		<a href="main.php" style="padding: 10px;font-size: 15px;color: white;background: #5F9EA0;border: none;
	    border-radius: 5px;text-decoration: none;">Go to Dashboard</a> 
	</form>
</body>
</html>