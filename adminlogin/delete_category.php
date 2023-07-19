<?php
  include "../connect.php";
  
if (isset($_GET['delete_category'])) {
            $id = $_GET['delete_category'];

            $sql = "DELETE FROM category WHERE id=$id";

            if ($con->query($sql) === TRUE) {
                echo "Course deleted successfully";
                header('location:category.php');
            } else {
                echo "Error deleting course: " . $con->error;
                
                header('location:category.php');
            }
        }

