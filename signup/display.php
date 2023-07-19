<?php
include '../connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display table</title>
    <style>
        .btn{
            margin: 55px 120px;
                padding: 10px;
                color: white;
                background-color:blue;
        
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="btn">Add user</button>
        <table>
            <thead>
                <tr>
                    <th>sl no</th>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>mobile</th>
                    <th>operation</th>
                </tr>
            </thead>
            <tbody>
                
            <?php
            $sql="Select *from `crud`";
            $result=mysqli_query($con,$sql);
            if($result){
               while( $row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $password=$row['password'];
                $mobile=$row['mobile'];
                echo ' <tr>
                 <th>'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$password.'</td>
                    <td>'.$mobile.'</td>
                    <td>
                    <button><a href="update.php?updateid='.$id.'">update</a></button>
                    <button><a href="delete.php?deleteid='.$id.'">delete</a></button>
                 </td>
           
                </tr>'; 
              
               }
                
            }

            ?>
       

            </tbody>
        </table>
    </div>
</body>
</html>