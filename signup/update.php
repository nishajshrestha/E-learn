<?php
include '../connect.php';

$id = $_GET['updateid'];

// Fetch the previous details from the database
$sql = "SELECT * FROM `crud` WHERE id = $id";
$result = mysqli_query($con, $sql);

if (!$result) {
    die("Connection was not successful: " . mysqli_error($con));
}

$row = mysqli_fetch_assoc($result);

// Assign the retrieved values to variables
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];
$mobile = $row['mobile'];

if (isset($_POST['submit'])) {
    // Process the form submission and update the database
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    $sql = "UPDATE `crud` SET name='$name', email='$email', password='$password', mobile='$mobile' WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Connection was not successful: " . mysqli_error($con));
    } else {
        header('location:display.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 400px;
            max-width: 90%;
        }

        h1 {
            text-align: center;
            color: #4caf50;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .phone {
            width: 100%;
            height: 30px;
            margin: 12px 3px;
        }
    </style>
</head>
<body>
<div class="signup-container">
    <h1>Sign Up</h1>
    <form onsubmit="return validation()" method="POST">
        <input type="text" placeholder="full name" id="fname" name="name" value="<?php echo $name; ?>"><span id="error"
                                                                                                          style="color:red"></span>
        <input type="email" placeholder="Email Address" id="femail" name="email" value="<?php echo $email; ?>" required>
        <input type="password" placeholder="Password" id="fpass" name="password"
               value="<?php echo $password; ?>" required><span id="error3" style="color:red"></span>
        <input class="phone" type="tel" placeholder="enter your phone number" name="mobile"
               value="<?php echo $mobile; ?>" required>
        <input type="submit" value="Sign Up" name="submit">
    </form>
</div>
<script>
    function validation() {
        var fname = document.getElementById('fname').value;
        if (fname == "") {
            document.getElementById('error').innerHTML = "*Fullname cannot be null";
            return false;
        }


        var fpass = document.getElementById('fpass').value;
        if (fpass.length < 8) {
            document.getElementById('error3').innerHTML = "*At least password must be 8";
            return false;
        }
    }
</script>
</body>
</html>
