<?php

session_start();
if(!isset($_SESSION['user']))
{
    $_SESSION['no-login-message']="<div class='error'>please login to access damin pannel.</div>";

    header('location:adminlogin.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrainBoosters</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <style>
       * {
 box-sizing: border-box;
 margin: 0;
 padding: 0;
}

 
 html {
  font-size: 1rem;
  overflow-x: hidden;
  scroll-behavior: smooth;
}

body {
  font-family: 'Open Sans', sans-serif;
  font-size: 1rem;
  line-height: 1.4;
}

a{
  text-decoration: none;  
}
 
 section {
   padding: 3rem 5%;
 }
 
 section:nth-child(even) {
   background: #f6f6f6;
 }
 
 .heading {
   text-align: center;
   margin-bottom: 3rem;
 }
 
 .heading span {
   font-size: 2rem;
   color: blue;
   text-transform: uppercase;
 }
 
 .heading h3 {
   padding-top: 1rem;
   font-size: 3rem;
   color: #263238;
   text-transform: uppercase;
 }
 
 .btn {
   display: inline-block;
   margin-top: 1rem;
   padding: 1.2rem 3rem;
   cursor: pointer;
   color: #fff;
   background: #263238;
   font-size: 1.7rem;
 }
 
 .btn:hover {
   background: #44bb6a;
 }
 
 .header {
  background-color: #44bb6a;
  padding: 2rem 1rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.header .logo {
  font-size: 1.5rem;
  color: #fff;
}

.header .logo i {
  color: #ff0;
}

.header .navbar {
  display: flex;
  gap: 1rem
}

.header a {
  text-transform: capitalize;
}

.header .navbar a {
  display: block;
  font-size: 1.15rem;
  color: #fff;
  font-weight: 500;

}

.header .navbar a:hover{
  color: var(--primary-clr)
}

.header .logout-btn{
  color: white;
  font-weight: 500
}

.header .login-container{
  display: flex;
  gap: 1.5rem
}

.header .login-container a{
display: block;
color: white;
text-transform: capitalize;
}

.header #Login{
  font-size: 3rem;
  color: #fff;
  cursor: pointer;
}

.header #Login:hover{
  color: #444;
}
.header .share {
  text-align: center;
}

.header .share a {
  height: 4.5rem;
  width: 4.5rem;
  line-height: 4.5rem;
  font-size: 1.8rem;
  background: #fff;
  color: #263238;
  margin: 0 .1rem;
}

 #menu-btn {
   position: fixed;
   top: 1rem;
   right: 2rem;
   height: 5rem;
   width: 5rem;
   line-height: 5rem;
   font-size: 2.5rem;
   background: #44bb6a;
   color: #fff;
   cursor: pointer;
   text-align: center;
   z-index: 10000;
   display: none;
 }
 
 #menu-btn.fa-times {
   background: #fff;
   color: #263238;
 }
 
 h2 {
            color: #333;
        }

        .dashboard-course {
            display: inline-block;
            background-color:red;
            width: 200px;
            padding: 20px;
            margin: 10px;
            border: 1px solid #ccc;
        }
        .dashboard-user {
            display: inline-block;
            background-color:green;
            width: 200px;
            padding: 20px;
            margin: 10px;
            border: 1px solid #ccc;
        }

        .card-title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-value {
            font-size: 24px;
        } 
 
 
 .about {
   
   display: flex;
   -webkit-box-align: center;
       -ms-flex-align: center;
           align-items: center;
   -ms-flex-wrap: wrap;
       flex-wrap: wrap;
   gap: 2rem;
 }
 
 .about .image {
   -webkit-box-flex: 1;
       -ms-flex: 1 1 40rem;
           flex: 1 1 40rem;
 }
 
 .about .image img {
   width: 50%;
 }
 
 .about .content {
   width: 45rem;
 }
 
 .about .content span {
   font-size: 2rem;
   color: #44bb6a;
 }
 
 .about .content h3 {
   padding-top: 2rem;
   font-size: 2.4rem;
   color: #263238;
 }
 
 .about .content p {
   padding: 1.5rem 0;
   line-height: 2;
   font-size: 1.4rem;
   color: #777;
 }
 
 body {
            font-family: Arial, sans-serif;
        }

        h2 {
            
            color: #333;
        }

        form {
            width: 400px;
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
 .contact .row {
   display: flex;
   gap: 2rem;
 }
 
 .contact .row .contact-info-container {
   width: 40rem;
 }
 
 .contact .row .contact-info-container .box {
   margin-bottom: 3rem;
   display: flex;
   gap: 1.5rem;
 }
 
 .contact .row .contact-info-container .box i {
   height: 5rem;
   width: 5rem;
   line-height: 5rem;
   font-size: 1.7rem;
   background: #44bb6a;
   color: #fff;
   border-radius: 50%;
   text-align: center;
   margin-top: -1rem;
 }
 
 .contact .row .contact-info-container .box h3 {
   font-size: 2rem;
   color: #263238;
   padding-bottom: 1rem;
 }
 
 .contact .row .contact-info-container .box p {
   font-size: 1.5rem;
   color: #777;
   line-height: 2;
 }
 
 .contact .row .contact-info-container .share {
   padding-top: 1rem;
 }
 
 .contact .row .contact-info-container .share a {
   height: 5rem;
   width: 5rem;
   line-height: 5rem;
   font-size: 2rem;
   background: #263238;
   color: #fff;
   margin-right: .1rem;
   text-align: center;
 }
 
 .contact .row .contact-info-container .share a:hover {
   background: #44bb6a;
 }
 
 .contact .row form {
   -webkit-box-flex: 1;
       -ms-flex: 1 1 42rem;
           flex: 1 1 42rem;
 }
 
 .contact .row form .inputBox {
   display: flex;
       flex-wrap: wrap;
           justify-content: space-between;
 }
 
 .contact .row form .inputBox input {
   width: 49%;
 }
 
 .contact .row form .inputBox input, .contact .row form textarea {
   padding: 1.4rem;
   background: #f6f6f6;
   text-transform: none;
   color: #777;
   margin: .7rem 0;
   font-size: 1.6rem;
   border: 0.1rem solid #999;
 }
 
 .contact .row form textarea {
   width: 100%;
   resize: none;
   height: 15rem;
 }
 .reviews .box-container {
   display: grid;
       grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap: 2rem;
 }
 
 .reviews .box-container .box {
   text-align: center;
   padding: 3rem;
   background: #fff;
   border: 0.1rem solid #999;
 }
 
 .reviews .box-container .box img {
   height: 10rem;
   width: 10rem;
   border-radius: 50%;
   margin-bottom: 1rem;
 }
 
 .reviews .box-container .box h3 {
   font-size: 2rem;
   color: #263238;
 }
 
 .reviews .box-container .box p {
   line-height: 2;
   padding: 2rem 0;
   font-size: 1.3rem;
   color: #777;
 }
 
 .reviews .box-container .box .stars i {
   font-size: 1.7rem;
   color: #44bb6a;
 } 
 
 
 @media (max-width: 1200px) {
   html {
     font-size: 55%;
   }
 }
 
 @media (max-width: 991px) {
   body {
     padding-left: 0;
   }
   #menu-btn {
     display: block;
   }
   .header {
     left: -110%;
   }
   .header.active {
     left: 0;
             box-shadow: 0 0 0 100vw rgba(0, 0, 0, 0.7);
     width: 35rem;
   }
   .home .content h3 {
     font-size: 2.5rem;
   }
 }
 
 @media (max-width: 450px) {
   html {
     font-size: 50%;
   }
   .contact .row form .inputBox input {
     width: 100%;
   }
 }
 /*# sourceMappingURL=style.css.map */
    </style>


</head>
<body>
    
<!-- header section starts  -->

<div id="menu-btn" class="fas fa-bars"></div>

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-graduation-cap"></i> BrainBoosters </a>
   

    <nav class="navbar">
        <a href="dashboard.php">  Dashboard</a>
        <a href="category.php">  Category</a>
        <a href="course.php">  courses </a>
        <a href="reviews.php"> reviews </a>
     </nav>

      <a href="logout.php" type="button" role="button" class="logout-btn">logout</a>
</header>



 <!---jquery cdn link--->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!--custom js file link--->
<script src="../../js/script.js"></script>




</body>
</html>