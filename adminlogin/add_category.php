<?php


include '../connect.php';
// Add course
if (isset($_POST['category'])) {
    $name = $_POST['title'];
    $description = $_POST['description'];
  

    $sql = "INSERT INTO category (title,description) VALUES ('$name', '$description')";
    header("location:category.php");
    if (mysqli_query($con, $sql)) {
        echo "Course added successfully";
    } else {
        die(mysqli_error($con));
    }
}

?>