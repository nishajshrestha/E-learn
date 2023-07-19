<?php


session_start();
if(!isset($_SESSION['user']))
{
    $_SESSION['no-login-message']="<div class='error'>please login to access damin pannel.</div>";

    header('location:login.php');
}
?>