<?php
include('config.php');

error_reporting(0);

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $mail = $_POST["email"];
    $prn = $_POST["prn"];
    $about = $_POST["about_us"];
    $status = $_POST["status"];

    $insert="INSERT INTO `day_1`(`Name`, `Mobile`, `Email`, `PRN`, `About_us`, `Status`) VALUES ('$name', '$mobile', '$mail', '$prn', '$about', '$status')";

    if(mysqli_query($conn, $insert)) {
        echo "<script>alert('Data Inserted')</script>";
        echo "<script>window.location.href='show.php'</script>";
    }
    else{
        echo "<script>alert('Data Not Inserted')</script>";
    } 
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Student Form</title>
    <style>
        body {
        font-family:Lucida, Monospace;
        background-image: url(dypiu.jpg);
        background-size: cover;
        background-position:center;
        background-repeat: no-repeat;

    }
    .card{
        max-width:500px;
        margin: 0 auto;
        /* padding:40px;
        background-color:#4593e0; */
        backdrop-filter: blur(4px);
        /* background-color: #95adc5; */
        padding: 20px;
        border-radius: 5px;
        /* box-shadow: 0 0 10px rgba(0,0,0,0.1); */
    }

        .card {
            width: 500px;
            padding: 20px;
            border: 2px solid white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(4, 4, 4, 0.6);
        }

        .card h1 {
            margin-top: 0;
            text-align:center;
            color:#d2c6b5;
        }

        .card label {
            display: block;
            margin-bottom: 38px;
            font-size:20px;
        }

        .card input,
        .card textarea,
        .card select {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: 1px solid white;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        .card input[type="submit"] {
            background-color: #d7b193;
            color: black;
            border:1px solid black;
            font-size: 20px;
            font-weight:bold;
            cursor: pointer;

        }

        .card input[type="submit"]:hover {
            background-color:  #e7d63e;
        }
        .button-link {
          display: inline-block;
          padding: 10px 20px;
          background-color: #84c47b;
          color: black;
          text-decoration: none;
          border-radius: 4px;
          border:1px solid black;
          cursor: pointer;
          margin-right:30px;
          /* position:absolute;
          right:0;
          bottom:0; */
          
          }

          .button-link a {
            text-decoration: none;
            color: inherit;
          }
         
        
    </style>
</head>

<body>
    <div class="card">
        <h1>Student Details</h1>
        <form method="POST" action="" >
            <div>
                <label for="name"><b>Name</b></label>
                <input type="text" id="name" name="name" required>
            </div>

            <!-- <div>
                <label for="id">Id</label>
                <input type="number" id="id" name="id" required>
            </div> -->

            <div>
                <label for="mobile"><b>Mobile</b></label>
                <input type="phone" id="mobile" name="mobile" required>
            </div>

            <div>
                <label for="email"><b>Email</b></label>
                <input type="Email" id="email" name="email" required>
            </div>
            <div>
                <label for="prn"><b>PRN</b></label>
                <input type="number" id="prn" name="prn" required>
            </div>
            <label for="about_us"><b>About_us</b></label>
            <textarea id="about_us" name="about_us" rows="4" cols="50"></textarea>

            <div>
                <label for="status"><b>Status</b></label>
                <select id="status" name="status" required>
                    <option value="">--Select--</option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>

            <input type="submit" value="Submit" name="submit">
            <!-- <a href="show.php" target="_blank">Check Output here </a> -->
            <button class="button-link">
            <a href="show.php">Show</a><br>
          
            
            <div>
                <button class="button-link">
                <a href="logout.php">Logout</a>
            </div>     


        </form>
    </div>
</body>

</html>