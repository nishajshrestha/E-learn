<?php

include "connect.php";


$user=$_POST["user"];
$pass=$_POST["pass"];

$user=mysqli_real_escape_string($con,$user);
$pass=mysqli_real_escape_string($con,$pass);

$sel=mysqli_query($con,"select * from admin where email='$user'");
$check=mysqli_num_rows($sel);

if($check==1){
    $fetch=mysqli_fetch_array($sel);

if($fetch['password']==$pass){
    
session_start();
$_SESSION["email"]=$fetch["email"];
echo true;



}else{
    echo "<script>alert('Incorrect Password');</script>";
}

}else{
    echo "<script>alert('Incorrect Email');</script>";
}

?>