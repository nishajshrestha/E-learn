<?php include('menu.php');
include "../connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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

        /* for table */
        
        
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
          /* table*/
    </style>
</head>
<body>
<!-- <h2>Add Course</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
    <label for="course_name">Course Name:</label>
    <input type="text" name="course_name" id="course_name" required><br><br>

    <label for="course_description">Course Description:</label>
    <textarea name="course_description" id="course_description" required></textarea><br><br>

    <label for="pdf_file">PDF File:</label>
    <input type="file" name="pdf_file" id="pdf_file" required><br><br>

    

    <input type="submit" value="Add Course">
</form>
--> 

<h2>All Category</h2>
        <form method="POST" action="add_category.php">
            <input type="submit" name="category" value="Add Category">
            <br>
            <br>
            <input type="text" name="title" placeholder="Category Name" required><br>
            <textarea name="description" placeholder="Category Description" required></textarea><br>
        </form>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        
            <?php
            $sn = 1;
            $query = "SELECT * FROM category";
            $result = mysqli_query($con, $query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $sn++ . "</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td><a href='update_category.php?update_category=" . $row['id'] . "'>Edit</a>
                            | <a href='delete_category.php?delete_category=" . $row['id'] . "'>Delete</a>  ";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No course found</td></tr>";
            }
            ?>
        </table>






</body> 
</html>

