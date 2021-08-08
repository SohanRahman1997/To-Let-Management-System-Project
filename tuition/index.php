<?php include('logout.php') ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Tuition Management System</h2>
</div>
<div class="content">
  	
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <?php echo $_SESSION['username']; ?></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		
    <?php endif ?>
	<br>
	<p>
	<a href="main.php" style="padding: 10px;font-size: 15px;color: white;background: #5F9EA0;border: none;
	border-radius: 5px;text-decoration: none;">Go to Dashboard</a> 
    </p>
</div>
		
</body>
</html>