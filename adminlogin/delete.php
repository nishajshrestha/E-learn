<?php
  include "../connect.php";
  
if (isset($_GET['delete_course'])) {
            $course_id = $_GET['delete_course'];

            $sql = "DELETE FROM course WHERE course_id='$course_id'";

            if ($con->query($sql) === TRUE) {
                echo "Course deleted successfully";
                header('location:course.php');
            } else {
                echo "Error deleting course: " . $con->error;
            }
        }

