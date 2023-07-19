<?php
include "../connect.php";


session_start();


if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from crud where email = '$username' and password = '$password'";
    $query=mysqli_query($con,$sql);
 

    $row=mysqli_num_rows($query);
        if($row==1){
            echo "login successful";
            $_SESSION['user']=$username;
            header('location:user.php');
            
        }
        else{
            echo "login failed";
    
        }

    }


?>