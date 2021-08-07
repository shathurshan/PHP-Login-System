<?php

            $servername   = "localhost";
            $database = "user_management";
            $username = "root";
            $password = "" ;

            $conn = mysqli_connect($servername, $username, $password, $database);

            $firstName= $_POST['fname'] ;
            $lastName=$_POST['lname'];
            $userName=$_POST['uname'];
            $dateOfBirth=$_POST['dbirth'];
            $address=$_POST['address'];
            $mobileNum=$_POST['mnum'];
            $password = $_POST['password'];

             $sqlForCheck="select * from users where UserName='$userName'";
             $sql="insert into users (FirstName,LastName,UserName,DateOfBirth,Address,MobileNum,Password) values('$firstName','$lastName','$userName','$dateOfBirth','$address','$mobileNum','$password')";
              
             $result=mysqli_query($conn, $sqlForCheck);

             if(mysqli_num_rows($result)!=0){
                echo "Username already exists !";
              }
              
             else{
             if(mysqli_query($conn, $sql)) {
                header("location:user_profile.php");
               } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
               }
            }
?>