<?php
ob_start();
session_start();
?>
<html lang="en">
<head>
   <title>Login System</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <style>
      #cont{
         width: 40%;
         margin-top: 250px;
      }
      
   </style>
</head>
<body>
   <div class="container form-signin">
   </div> 
   <div class="container" id="cont">
      <h1 class="text-center ">USER MANAGEMENT SYSTEM</h1>

      <form class="form-signin" role="form" action="login.php" method="post">
         <input type="text" class="form-control mt-5" name="username" placeholder="username" required autofocus></br>
         <input type="password" class="form-control mt-2" name="password" placeholder="password" required>
         <br>
         <div class="text-center">
            <button class="btn btn-md btn-primary btn-block mt-2" type="submit" name="login">Login</button>
            <br>
           <a class="mt-5 text-success" name="register" href="register.html">New to the system ? Register</a>
         </div>
      </form>
   </div>
</body>
</html>
