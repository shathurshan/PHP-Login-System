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
    <div class="user-profile">
        <div class="text-center container">
            <h1 class="my-5"><strong>User Profile</strong></h1>
            <div class="type-1">
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
                $name;
                $id;
                if (isset($_GET["msg"])) {
                    $Id = $_GET["msg"];
                    echo $Id;
                    $sql = "select * from users where Id='$Id'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = $result->fetch_assoc()) {
                        $name = $row['FirstName'];
                        $lname = $row['LastName'];
                        $uname = $row['UserName'];
                        $mobno = $row['MobileNum'];
                        $adress = $row['Address'];
                    }
                }
                $id = $Id;
                ?>
                <p><?php
                    echo $name;
                    ?></p>
                <p><?php
                    echo $lname;
                    ?></p>
                </p>
                <p><?php
                    echo $uname;
                    ?></p>
                </p>
                <p><?php
                    echo $mobno;
                    ?></p>
                </p>
                <p><?php
                    echo $adress;
                    ?></p>
                </p>
            </div>
            <div class="text-center">
                <button onclick="update(<?php
                                        echo $id;
                                        ?>)" class="btn btn-lg btn-primary btn-block mt-2">
                    UPDATE PROFILE
                </button>
                <script>
                    function update(id) {
                        window.location.href = "update.php?id=" + id;
                    }
                </script>
            </div>
        </div>
    </div>
</body>

</html>