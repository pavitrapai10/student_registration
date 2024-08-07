<?php
session_start();
include('config.php');

error_reporting(0);

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM `admin` WHERE `Username`='$username'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        echo "<script>alert('Woops! Username already exists.')</script>";
    } else {
        $sql = "INSERT INTO `admin`(`Username`, `Password`) VALUES ('$username','$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('User Registration Successful')</script>";
            echo "<script>window.location.href='login.php'</script>";
        } else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }
    }
}
?>  
<!DOCTYPE html>
<html>

<head>
    <title>Register Form</title>
    <style>
        body {
        font-family:Lucida, Monospace;
        background-image: url(pink.jpg);
        background-size: cover;
        background-position:center;
        background-repeat: no-repeat;
        height:450px;
        width:450px;
        
        
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width:-100px;
        background: linear-gradient(-108deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        background-size: 300% 300%;
        animation: gradientAnimation 5s ease infinite;
        }
@keyframes gradientAnimation {
0% { background-position: 0% 50%; }
50% { background-position: 100% 50%; }
100% { background-position: 0% 50%; }
}

        
        
 
          .login-form {
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            width: 500px;
            height:400px;
            text-align:center;
            border-radius:50px 5px;
            
          }
        
         /* .login-form {
            max-width:500px;
        margin: 0 auto;
        padding:40px;
        backdrop-filter: blur(8px);
        padding: 20px;
        border-radius: 5px;
         } */

        .login-form h2 {
            text-align: center;
            color: #ffffff;

        } 

        .login-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #ffffff;
        }
        .login-form{
            position:absolute;
            top:250px;
            right:550px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 40%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 10px;
        
        }

        .login-form input[type="submit"] {
            width: 40%;
            padding: 10px;
            background-color: #45a049;
            border: none;
            color: #ffffff;
            cursor: pointer;
            border-radius: 10px;
            font-weight: bold;
        }

        .login-form input[type="submit"]:hover {
            background-color: #7249e5;
            width:40%;
        }
    </style>
</head>

<body>
    <div class="login-form">
        <h1>Register Form</h1>
        <form action="" method="post">
            <label for="username"><h2>Username:</h2></label>
            <input type="text" id="username" name="username" required>
            <br><br>

            <label for="password"><h2>Password:</h2></label>
            <input type="password" id="password" name="password" required>
            <br><br>

            <h2><input type="submit" value="register" name="register"></h2>
           
                <a href="login.php">Login</a>
             
           
        </form>
    </div>
</body>

</html>