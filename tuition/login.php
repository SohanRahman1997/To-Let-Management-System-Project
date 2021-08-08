<?php include('server.php') ?>
<?php include('error.php') ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required>
  	</div>

  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required>
  	</div>
	  
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
	<br>
	<p> 
	<a href="main.php" style="padding: 10px;font-size: 15px;color: white;background: #5F9EA0;border: none;
	border-radius: 5px;text-decoration: none;">Go to Dashboard</a> 
	</p>
  </form>
</body>
</html>