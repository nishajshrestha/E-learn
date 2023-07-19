<?php
include "../connect.php";

session_start();
if(isset($_SESSION['login'])){
    echo $_SESSION['login'];
    unset($_SESSION['login']);
}

if(isset($_POST['submit'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM adminlogin WHERE email = '$username' AND pass = '$password'";
    $query = mysqli_query($con, $sql);
 
    $row = mysqli_num_rows($query);
    if($row == 1){
        echo "login successful";
        $_SESSION['user'] = $username;
        header('location:dashboard.php');
    }
    else{
        $_SESSION['login'] = "<div>Login unsuccessful</div>";
        header('location:adminlogin.php');
    }
}
?>
