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
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $userName = $_POST['uname'];
        $dateOfBirth = $_POST['dbirth'];
        $address = $_POST['address'];
        $mobileNum = $_POST['mnum'];
        $password = $_POST['password'];                  
       $Id;
       if (isset($_GET["id"])) {
        $Id =  $_GET["id"];
        $sql = "select * from users where Id=$Id";  
    }
    $sql = "UPDATE users SET FirstName = '$firstName',UserName= '$userName',LastName='$lastName', Address ='$address',MobileNum='$mobileNum',Password='$password',DateOfBirth='$dateOfBirth' WHERE Id = '$Id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("location:success.php? msg=$Id");
            // header("location:user_profile.php ? msg='$Id'");
        } else {
            header("location:error.php ? msg='There is a Error to Update your Profile'");
        }
?>