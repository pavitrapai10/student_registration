<?php
include('config.php');
error_reporting(0);

$show = "SELECT * FROM `day_1`";
$result = mysqli_query($conn, $show);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Student Details</title>
    <style>
        body {
        font-family: Lucida , monospace;
        color:#513c05;
        height:900px;
        width:900px;
        /* background-color:#413f3b; */
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            height: 500px;
            border-collapse: collapse;
            border: solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 2px solid #ddd;
            color:#5c2727;
        }
            
        
        

        th {
            background-color: #f1c152;
            border:2px solid Black;
        }
        .go back{
            color:green;
            text-decoration:none;
        
        }
        .go back{
            display:block;
            float:right;
            margin-top:-20px;
            margin-right:0px;
            color:white;
            font-weight: bold;
            font-size:20px;
            background-color: #5442dc;

        }
        .logout{
            color:green;
            text-decoration:none;
        }
        .logout{
            display:block;
            float:right;
            margin-top:-20px;
            margin-right:0px;
            color:white;
            font-weight: bold;
            font-size:20px;
            background-color:#5442dc;


        }
 

        
    </style>
</head>

<body>
    <h1>Student Details</h1>
    <div class="go back">
    <button><a href="index.php">GO BACK</a></button>
    </div>
    
   
            
    <!-- <div style="float: right; margin-top: -20px; margin-left: 10px; color:#574a37; font-weight: bold; font-size: 20px;">        -->
    <div class="logout">
    <button><a href="logout.php">logout</a></button>  
    </div>

    <table>
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>PRN</th>
            <th>About_us</th>
            <th>Status</th>
        
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['Mobile']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['PRN']; ?></td>
                    <td><?php echo $row['About_us']; ?></td>
                    <td><?php echo $row['Status']; ?></td>
                    
                </tr>
        <?php

            }
        
        ?>
    </table>
</body>

</html>