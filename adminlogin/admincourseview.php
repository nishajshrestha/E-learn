
<?php
include('adminmainpage.php');
    $conn = new mysqli('localhost', 'root', '', 'crudoperation');
    if (!$conn) {
        die("Connection was not successfully: " . mysqli_error($conn));
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">s
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Display Table</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            h1, h2 {
                color: #333;
            }

            form {
                margin-bottom: 20px;
            }

            input[type="text"],
            textarea {
                width: 300px;
                padding: 5px;
                margin-bottom: 10px;
            }

            input[type="submit"] {
                padding: 5px 10px;
                background-color: #4CAF50;
                color: white;
                border: none;
                cursor: pointer;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            th {
                background-color: #f2f2f2;
            }

            td:last-child {
                text-align: center;
            }
    
            a {
                color: #3498db;
                text-decoration: none;
            }

            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        

        <h2>All Courses</h2>
        <form method="POST" action="../admindashboard/admin.backend.php" enctype="multipart/form-data">
            <input type="submit" name="add_course" value="Add Course">
            <br>
            <br>
            <input type="text" name="course_name" placeholder="Course Name" required><br>
            <input type="file" name="pdf" required><br><br>
            <textarea name="course_description" placeholder="Course Description" required></textarea><br>
        </form>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>PDF</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        
            <?php
            $sn = 1;
            $query = "SELECT * FROM course";
            $result = mysqli_query($conn, $query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $sn++ . "</td>";
                    echo "<td>" . $row['course_name'] . "</td>";
                    echo "<td>" . $row['pdf'] . "</td>";
                    echo "<td>" . $row['course_description'] . "</td>";
                    echo "<td><a href='?update_course=" . $row['course_id'] . "'>Edit</a> | <a href='delete.php?delete_course=" . $row['course_id'] . "'>Delete</a>  ";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No course found</td></tr>";
            }
            ?>
        </table>

       <?php

       

        // Fetch all courses
        $sql = "SELECT * FROM course";
        $result = mysqli_query($conn, $sql);
        ?>

        <?php
        $conn->close();
        ?>


    </body>
    </html>