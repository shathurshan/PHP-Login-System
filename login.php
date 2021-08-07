<?php
        // DATABASE Connection--REQUIREMENTS
        $servername   = "localhost";
        $database = "user_management";
        $username = "root";
        $password = "" ;

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // $conn---->responsible for user_management database connection

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $name= $_POST['username'] ;
        $password= $_POST['password'];

        $sql="select * from users where username='$name' AND password='$password'";
        $userId="select Id from users where username='$name' AND password='$password'";
       
        $result=mysqli_query($conn,$sql);   
        $result2 =mysqli_query($conn,$userId);
        
        if(mysqli_num_rows($result)==0){
                header("location:error.php ? msg='Login Failed !'");
        }
        else{
                while ($row = $result2->fetch_assoc()) {
                        $test = $row['Id'];
                        header("location:user_profile.php ? msg=$test");
                    }                
        }
    ?> 