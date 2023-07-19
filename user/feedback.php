<?php
session_start();


include '../connect.php';


$passmsg = '';

if (isset($_POST['submitfeedbackbtn'])) {
    if ($_POST['f_content'] == '') {
        $passmsg = '<div role="alert">Please fill all fields</div>';
    } else {
        $fcontent = $_POST['f_content'];

   
        $stmt = $con->prepare("INSERT INTO feedback (f_content) VALUES (?)");
        $stmt->bind_param("s", $fcontent);

      
        if ($stmt->execute()) {
            $passmsg = '<div role="alert">Feedback submitted successfully</div>';
        } else {
            $passmsg = '<div role="alert">Unable to submit feedback</div>';
        }


        $stmt->close();
    }
}


$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="userId">User Id</label>
            <input type="text" id="userId" name="userId" value="<?php if(isset($userId)){echo $userId;} ?>">
        </div>
        <div>
            <label for="f_content">Write Feedback</label>
            <input type="text" id="f_content" name="f_content">
        </div>
        <div>
            <button type="submit" name="submitfeedbackbtn">Submit</button>
            <?php if(isset($passmsg)) {echo $passmsg;} ?>
        </div>
    </form>
</body>
</html>
