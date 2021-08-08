<?php
session_start();

$card = "";
$date = "";
$cvc = "";
$name = "";
$amount = "";



$db = mysqli_connect('localhost', 'root', '', 'payment');

if (isset($_POST['pay-btn'])) {

    $card =  mysqli_real_escape_string($db,$_POST['card']);
    $date =  mysqli_real_escape_string($db,$_POST['date']); 
    $cvc =  mysqli_real_escape_string($db,$_POST['cvc']);
    $name =  mysqli_real_escape_string($db,$_POST['name']);
    $amount =  mysqli_real_escape_string($db,$_POST['amount']);

  
    mysqli_query($db, "INSERT INTO pay (card,date,cvc,name, amount) 
    VALUES ('$card','$date','$cvc', '$name', '$amount')");
    $_SESSION['name'] = $name;
    $_SESSION['success'] = "Payment Successful";
    header('location: index.php');
}
?>