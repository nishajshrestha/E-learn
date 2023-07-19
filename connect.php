<?php
$con=new mysqli('localhost','root','','crudoperation');
if(!$con){
    die("connection was not succefully".mysqli_error($con));
}

?>
