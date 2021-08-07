<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>User Profile</title>
    <style>
        .type-1 {
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <div class="register-section form-signin">
        <div class="container text-center">
            <h2 class="mt-5 mb-2">Update Profile</h2>
            <?php
            // DATABASE Connection--REQUIREMENTS
            $servername   = "localhost";
            $database = "user_management";
            $username = "root";
            $password = "";
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            // $conn---->responsible for user_management database connection
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
             $Id;
            if (isset($_GET["id"])) {
                $Id =  $_GET["id"];

                $sql = "select * from users where Id='$Id'";
                $result = mysqli_query($conn, $sql);
                while ($row = $result->fetch_assoc()) {
                    $name = $row['FirstName'];
                    $lname = $row['LastName'];
                    $uname = $row['UserName'];
                    $mobno = $row['MobileNum'];
                    $adress = $row['Address'];
                    $date = $row['DateOfBirth'];
                    $pass = $row['Password'];
                }
            }
            ?>
            <form class="form-signin" role="form" action="update-functional.php?id=<?php echo $Id ?>"method="POST">
                <div class="py-3">
                    <label for="fname">First name:</label>
                    <input type="text" id="fname" name="fname" value="<?php echo $name ?>">
                </div>
            
                <div>
                    <label for="lname">Last name:</label>
                    <input type="text" id="lname" name="lname" value="<?php echo $lname ?>">
                </div>
                <div class="py-3">
                    <label for="fname">User Name:</label>
                    <input type="text" id="uname" name="uname" value="<?php echo $uname ?>">
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" value="<?php echo $pass ?>">
                </div>
                <div class="py-3">
                    <label for="dbirth">Date of Birth:</label>
                    <input type="text" id="dbirth" name="dbirth" value="<?php echo $date ?>">
                </div>
                <div>
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" value="<?php echo $adress ?>">
                </div>
                <div class="py-3">
                    <label for="mnum">Mobile Number:</label>
                    <input type="text" id="mnum" name="mnum" value="<?php echo $mobno ?>">
                </div>
                <div>
                    <button class="btn" type="submit" >UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>