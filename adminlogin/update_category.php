

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


        
            <?php
            $id=$_GET['update_category'];
            $query = "SELECT * FROM category where id=$id";
            $result = mysqli_query($con, $query);
            if($result==TRUE)
        {
            $count=mysqli_num_rows($result);
            if($count==1)
            {
                $row=mysqli_fetch_assoc($result);

                $name=$row['title'];
                $description=$row["description"];
            }
            else{
                header('location:category.php');
            }

        }
            ?>
        </table>

        <form action="" method="POST">
            <table style="width: 30%;">
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="name"
                            value="<?php echo $name; ?>" </td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name="description" placeholder="Enter your username"
                            value="<?php echo $description; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update category">
                    </td>
                </tr>
            </table>
        </form>





</body> 
</html>


       <?php

// Update course
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql = "UPDATE category SET title='$name', description='description' WHERE id='$id'";

    if ($con->query($sql) === TRUE) {
        echo "Course updated successfully";
        header('location:category.php');
    } else {
        echo "Error updating course: " . $con->error;
    }
}


?>

