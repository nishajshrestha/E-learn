<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    .login-container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      padding: 40px;
      width: 400px;
      max-width: 90%;
      position: relative;
      /* border: 2px solid black; */
    }

    .close-btn{
      background-color: transparent;
      border: none;
      position: absolute;
      right: 20px;
      top: 20px;
      font-size: 20px;
      cursor: pointer;
    }

    .close-btn:hover{
      color:black;
      background-color:green;
      transition: all .3s;
    }

    .close-btn:active{
      color: blue;
    }

    h1 {
      text-align: center;
      color: #4caf50;
    }

    input[type="email"],
    input[type="password"] {
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

    .form-link {
      text-align: center;
      margin-top: 10px;
    }

    .form-link a {
      color: #4caf50;
      text-decoration: none;
    }

    </style>
</head>
<body>
    <div>
        <h1>Admin login page</h1>
        <form action="logincheck.php" method="POST">
            <label for="">email:</label>
            <input type="email" name="user" ><br>
            <label for="">password:</label>
            <input type="password" name="pass"><br>
            <input type="submit" name="submit">
        </form>
      
    </div>
</body>
</html>