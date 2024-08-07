<?php
session_start();
include('config.php');

error_reporting(0);

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM `admin` WHERE `Username`='$username' AND `Password`='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row['username'];
        header('location:index.php');
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* background-color: #f2f2f2; */
            background-image: url(purple.webp);
        background-size: cover;
        background-position:center;
        background-repeat: no-repeat;
        }

        .login-form {
            background-color: #36c3cc;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            width: 320px;
            flex:-1;
        }

        .login-form h2 {
            text-align: center;
            color: #333333;
        }

        .login-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333333;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 92%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 19px;
        }

        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            border: none;
            color: #ffffff;
            cursor: pointer;
            border-radius: 10px;
            font-weight: bold;
        }

        .login-form input[type="submit"]:hover {
            background-color: #45a049;
        }
        .image-container {
  width: 555px;
  height:312px;
  margin-right: 9px;
  padding:0px;
  border-radius:4px;
  flex:-1;
}

.image-container img {
  max-width: 100%;
  height: auto;
  border-radius:4px;
 
}

    </style>
</head>

<body>
    <div class="login-form">
        <h2>Login Form</h2>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br><br>

           <input type="submit" value="Login" name="login">
        
        </form>
    </div>
    <div class="container">
  <div class="image-container">
    <img src="register.webp" alt="Image">
  </div>
</body>

</html>