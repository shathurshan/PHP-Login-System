
<?php 
$Id;
     if (isset($_GET["msg"])) {
    $Id = $_GET["msg"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container m-5">
        <h4 class="text-success text-center">successfully Updated !</h4>
        <br><br>
        <button class="btn btn-primary btn-block mt-2"><a class="text-white href="user_profile.php?msg=<?php echo $Id ?>>User Profile</a></button>
    </div>
</body>
</html>
