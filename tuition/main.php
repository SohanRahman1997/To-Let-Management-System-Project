<?php include('logout.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="wrap">
    <div class="sidebar">
        <img src="menu.png" alt="" id="menu">
        <h1>DASHBOARD</h1>
     <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="register.php">SignUp</a></li>
         <li><a href="login.php">LogIn</a></li>
         <li><a href="create.php?login='1'">Create Post</a></li>
         <li><a href="view.php">View Post</a></li>
         <li><a href="payment.php">Payment</a></li>
         <li><a href="review.php">Review</a></li>
         <li><a href="main.php?logout='1'">LogOut</a></li>
         <li><a href="about.php">About Us</a></li>
     </ul>
    </div>
    <section class="main">
        <h1>Tuition Management System</h1>
    </section>
    </div>

    <script>
        $(document).ready(function(){
            $("#menu").click(function(){
              $(".sidebar").toggleClass("opensidebar")
            });
        });
    </script>
</body>
</html>