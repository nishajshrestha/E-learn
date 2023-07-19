<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $mobile=$_POST['mobile'];

  $sql="insert into `crud` (name,email,password ,mobile) values ('$name','$email','$password',' $mobile') ";
  $result=mysqli_query($con,$sql);
  if(!$result){
    die("connection was not successfully".mysqli_error($con));
  } 
  else{
    header('location:user/login.php');
  }


}

?>





<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .signup-container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      padding: 40px;
      width: 400px;
      max-width: 90%;
      
    }

    h1 {
      text-align: center;
      color: #4caf50;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"]  {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
    
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    .phone{
      border: 1px solid #ccc;
      width: 100%;
      padding: 10px;
      color: black;
      border-radius: 4px;
      cursor: pointer;
    }
    .btn{
      padding: 10px 20px;
      background: #4caf50;
      border:none;
      outline:none;
      border-radius:5px;
      width:106%;
    }
    
  </style>

</head>
<body>
  <div class="signup-container">
    <h1>Sign Up</h1>
    <form onsubmit="return validation()" method="POST">
      <input type="text" placeholder="full name" id="fname" name="name"><span id="error" style="color:red"></span>
      <input type="email" placeholder="Email Address" id="femail" name="email" required>
      <input type="password" class="pass"  placeholder="Password" id="fpass" name="password" required><span id="error3"  style="color:red"></span>
      <input type="password" placeholder="confirm Password" id="frepass" required><span id="error4"  style="color:red"></span>
      <input class="phone" type="tel" placeholder="enter your phone number" id="fphone"name="mobile" required><span id="error5" style="color:red"></span>
      <br>
      <button class="btn"  type="submit"  name="submit">signup</button>
    </form>
  </div>
  <script>
    function  validation(){
       var fname=document.getElementById('fname').value;
       if(fname==""){
           document.getElementById('error').innerHTML="*Fullname cannot be null";
           return false;
       }
       

     var fpass=document.getElementById('fpass').value;
       if(fpass.length<8){
           document.getElementById('error3').innerHTML="*Your password must be at least 8 characters long. Please try another.";
           return false;
       }
       var frepass=document.getElementById('frepass').value;
       if(fpass!=frepass){
           document.getElementById('error4').innerHTML="*Password must be same";
           return false;
       }  
       var fphone=document.getElementById('fphone').value;
       if (fphone.length !=10) {
    document.getElementById('error5').innerHTML = "*must contain 10 digits";
    return false;
} 
   }
 </script>
</body>
</html>
