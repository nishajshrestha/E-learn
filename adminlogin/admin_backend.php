<?php
    include '../connect.php';
    // Add course
    if (isset($_POST['add_course'])) {
        $course_name = $_POST['course_name'];
        $course_description = $_POST['course_description'];
        $pdf_name = $_FILES['pdf']['name']; 
        $pdf_tmp = $_FILES['pdf']['tmp_name']; 

      
        $target_directory = "../uploads"; 
        $target_file = $target_directory . basename($pdf_name);
        move_uploaded_file($pdf_tmp, $target_file);

        $sql = "INSERT INTO course (course_name, pdf, course_description) VALUES ('$course_name', '$target_file', '$course_description')";
        header("location:course.php");
        if (mysqli_query($con, $sql)) {
            echo "Course added successfully";
        } else {
            die(mysqli_error($con));
        }
    }
    
    ?>