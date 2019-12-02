<?php

    session_start();

    //check if user is logout, if not the redirect him to welcome page
    if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !==true){
        header("location:login.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo $_SESSION["username"]; ?></b>.</h1>
    </div>
    <p>
        <a href="logout.php" class="btn btn-danger">Logout from your account</a>
    </p>

</body>
</html>