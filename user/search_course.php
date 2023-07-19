<?php
include('../connect.php');
?>

<?php


include('usercheck.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainbuster</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    
    <style>
      :root{
  --primary-bg-clr: #006d77;

  --primary-clr: #83c5be;
} 
 
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

ul,ol [role="list"] {
  list-style: none;
}

a {
  text-decoration: none;
}

section {
  padding: 60px 5%;
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
  color: #44bb6a;
  text-transform: uppercase;
}

.heading h3 {
  padding-top: 1rem;
  font-size: 2rem;
  color: #263238;
  text-transform: uppercase;
}

.btn {
  display: inline-block;
  font-size: 1.15rem;
  margin-top: 1rem;
  padding: 1.15rem 1.5rem;
  cursor: pointer;
  color: #fff;
  background: #263238;
  font-weight: 500;
  text-transform: capitalize;
  transition: all ;
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

.header .navbar a {
  display: block;
  font-size: 1.15rem;
  color: #fff;
  font-weight: 500;
  text-transform: capitalize;

}

.header .navbar a:hover{
  color: var(--primary-clr)
}

.header .search-form input {
  min-height: 2rem;
  padding: 0.5rem 1rem;
  margin-right:1rem;
  width:220px;
}
.header .search-form button{
  padding:10px;
  
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

.header .share a:hover {
  color: #fff;
  background: #263238;
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

.home .container {
  display: flex;
  align-items: center;
  gap: 2rem;
}

.home .image {
flex: 1 1 40rem;
}

.home .image img {
  width: 100%;
}

.home .content {
  width: 45rem;
}

.home .content span {
  color: #44bb6a;
  font-size: 1.25rem;
  text-transform: uppercase;
  margin-bottom: 0.5rem;
  display: block;
}

.home .content h3 {
  color: #263238;
  font-size: 2rem;
  margin-bottom: 1.5rem;
  text-transform: capitalize;
}

.home .content h3 a {
  color: #44bb6a;
}

.home .content h3 a:hover {
  text-decoration: underline;
}

.home .content p {
  color: #777;
  padding-bottom: 1rem;
  line-height: 2;
}
.category .box-container {
  display: grid;
  -ms-grid-columns: (minmax(30rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  gap: 2rem;
}

.category .box-container .box {
  text-align: center;
  padding: 3rem 2rem;
  border: 0.1rem solid #999;
  display: block;
}

.category .box-container .box i {
  height: 5.5rem;
  width: 5.5rem;
  line-height: 5.5rem;
  font-size: 2rem;
  border-radius: .5rem;
  color: #fff;
  background: #44bb6a;
  margin-bottom: 1.5rem;
}

.category .box-container .box h3 {
  font-size: 2rem;
  color: #263238;
  text-transform: capitalize;
}

.category .box-container .box p {
  font-size: 1.4rem;
  color: #777;
  line-height: 2;
  padding-top: 1.5rem;
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

.courses .box-container {
  display: grid;
      grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  gap: 2rem;
}

.courses .box-container .box {
  position: relative;
  padding: 2rem;
  border: 0.1rem solid #999;
  overflow: hidden;
  text-align: center;
}

.courses .box-container .box:hover .content {
  opacity: 1;
}

.courses .box-container .box .image img {
  width: 100%;
}

.courses .box-container .box .image h3 {
  font-size: 2rem;
  color: #263238;
  font-weight: normal;
  padding-bottom: 1rem;
}

.courses .box-container .box .content {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  display: flex;
          align-items: center;
          justify-content: center;
          flex-flow: column;
  background: #44bb6a;
  padding: 2rem;
  opacity: 0;
}



.courses .box-container .box .content h3 {
  font-size: 2rem;
  color: #fff;
}

.courses .box-container .box .content p {
  font-size: 1.4rem;
  color: #fff;
  padding: 1.5rem 0;
  line-height: 2;
}

.courses .box-container .box .content .btn:hover {
  background: #ff0;
  color: #263238;
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


.courses h2 {
  text-align: center;
  margin-bottom: 2rem;
}


@media (min-width: 425px){
  .courses__box-wrapper {
    display: grid;
    grid-template-columns: repeat(2 , minmax(400px,1fr));
    gap: 1rem
}
}

@media (min-width: 1024px){
  .courses__box-wrapper{
    grid-template-columns: repeat(3 ,minmax(200px,1fr));

  }
}

.courses__box-wrapper .box  {
  padding: 40px;
  border: 2px solid black;
  margin-bottom: 1.5rem;
  overflow:hidden;
}

.courses__box-wrapper .box .thumbnail {
  margin-bottom: 2rem;
}

.courses__box-wrapper .box .thumbnail img{
  height: 400px;
  width: 100%;
  object-fit: cover;
}

.courses__box-wrapper .box .content h4 {
  text-transform: capitalize;
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.courses__box-wrapper .box .content p{
  margin-bottom: 1.5rem;
}

@media (max-width: 450px) {
  html {
    font-size: 50%;
  }
  .contact .row form .inputBox input {
    width: 100%;
  }
} 


    </style>


</head>
<body>

<section class="search">
    <div class="container">
        <?php
        $search = mysqli_real_escape_string($con, $_POST['search_course']);
        ?>
        <h2>Your Search on <a href="#" class="text-white">"<?php echo $search ?>"</a></h2>
    </div>
</section>

<section class="course">
    <div class="container">
        <h2 class="text-center">Courses</h2>
        <?php
        $sql = "SELECT * FROM course WHERE course_name LIKE '%$search%'";
        $res = mysqli_query($con, $sql);
        $count = mysqli_num_rows($res);

        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['course_id'];
                $course_name = $row['course_name'];
                $course_description = $row['course_description'];
                ?>
                <div class="box">
                    <div class="content">
                        <h4><?php echo $course_name; ?></h4>
                        <p><?php echo $course_description; ?></p>
                        <a href="coursesdetail.php?id=<?php echo $id; ?>"><button class="btn">view pdf</button></a>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<div class='error'>Course not found.</div>";
        }
        ?>
        <div class="clearfix"></div>
    </div>
</section>




<a href="user.php">back</a>

