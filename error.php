<?php
$msg;
 if (isset($_GET["msg"])) {
    $msg=  $_GET["msg"];
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
</head>
<body>
      <div class="container">
          <h4 class="text-danger text-center m-5"><?php echo $msg ?></h4>
      </div>
      <button><a href="index.php">Back</a></button>
</body>
</html>