<?php

    session_start();

    //check if user is loggedin, if not the redirect him to login page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] ==true){
    header("location:welcome.php");
    exit;
    }

    require_once './includes/config.php';

    $username = $password = "";
    $username_err = $password_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //validate username
        if(empty($_POST["username"])){
            $username_err = "Please enter a username";
        }else{
            $username = $_POST["username"];
        }

        //validate password
        if(empty($_POST["password"])){
            $password_err = "Please enter a password";
        }else{
            $password = $_POST["password"];
        }

        if(empty($username_err) && empty($password_err)){

            require_once './includes/config.php';
            $sql = "SELECT id, username, password FROM users WHERE username = ?";

            if($stmt = mysqli_prepare($conn,$sql)){
                mysqli_stmt_bind_param($stmt,"s",$param_username);

                $param_username = $username;

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        mysqli_stmt_bind_result($stmt,$id,$username,$hashed_password);
                        if(mysqli_stmt_fetch($stmt)){

                           if($password == $hashed_password){
                            //if(password_verify($password,$hashed_password)){

                                session_start();

                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;

                                header("location: welcome.php");
                            }
                            else
                                $password_err = "The password you entered was not valid";
                        }
                    }else
                    $username_err = "No account found with this username";
                }else
                    echo "Oops! Something went wrong. Please try again later";
            }
            mysqli_stmt_close($stmt);
        }
        mysqli_close($conn);
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
    <style>
        body{ background-color: #F98EED; }
        .wrapper{
            width: 550px;
            padding: 100px 100px;
            margin-left: 30%;
        }
        .error{ color:red }
    </style>
<body>
    <div class="wrapper">
    <h1>Login</h1>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
                <span class="error">*<?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
                <span class="error">*<?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" name="btn btn-primary" value="Submit">
                <input type="reset" name="btn btn-default" value="Reset">
            </div>
            <p>Don't have an account? <a href="register_padma.php">Sign UP here</a></p>
        </form>
    </div>
</body>
</html>