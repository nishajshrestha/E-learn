<?php include('menu.php');
include('../connect.php');?>




<!-- home section starts  -->


<section class="home" id="home">

<?php
// Placeholders for fetching data from database
$numberOfCourses = 10; // Replace with your logic to get the actual number of courses
$numberOfUsers = 50; // Replace with your logic to get the actual number of users
?>

<h2>Admin Dashboard</h2>

<div class="dashboard-course">
<?php
     
     $sql="select * from crud";

     $res=mysqli_query($con,$sql);

     $count=mysqli_num_rows($res);
  ?>
  <div class="card-title">Number of user</div>
  <div class="card-value"><?php echo $count; ?></div>
    
   
</div>

<div class="dashboard-user">
<?php
     
     $sql1="select * from course";

     $res1=mysqli_query($con,$sql1);

     $count1=mysqli_num_rows($res1);  
  ?>
  <div class="card-title">Number of Courses</div>
  <div class="card-value"><?php echo $count1; ?></div>
</div>


<div class="dashboard-user">
<?php
     
     $sql2="select * from category";

     $res2=mysqli_query($con,$sql2);

     $count2=mysqli_num_rows($res2);
  ?>
  <div class="card-title">Number of category</div>
  <div class="card-value"><?php echo $count1; ?></div>
</div>
</section>
    

<!-- home section ends -->








<!-- reviews section starts  -->


</body>
</html>


 
