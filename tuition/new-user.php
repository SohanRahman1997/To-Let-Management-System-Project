<?php 

if($_SESSION['username']==NULL){
    header("Location: login.php");
}
?>