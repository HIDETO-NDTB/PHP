<?php

    require_once './includes_hw/config_hw.php';

    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(10) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );";

    if($conn->query($sql))
        echo "Table Created Successfully<br>";
    else
        echo "Error".$conn->error;

    $username = $password = $confirm_password ="";
    $username_err = $password_err = $confirm_password_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

            //validate Username
            if(empty($_POST["username"])){
                $username_err = "Please enter a username";
            } else {
                
                $sql = "SELECT id FROM users WHERE username = ?";

                if($stmt = mysqli_prepare($conn, $sql)){
                    mysqli_stmt_bind_param($stmt, "s", $param_username);

                    $param_username = $_POST["username"];

                    if(mysqli_stmt_execute($stmt)){
                        mysqli_stmt_store_result($stmt);

                        if(mysqli_stmt_num_rows($stmt) == 1){
                            $username_err = "This username is already taken";
                        }else{
                            $username = $_POST["username"];
                        }
                    }
                    else{
                        echo "Something went wrong. Please try again later.";
                    }
                }
                mysqli_stmt_close($stmt);
            }

            //validate password
            if(empty($_POST["password"])){
                $password_err = "Please enter a password";
            } elseif(strlen($_POST["password"]) < 6){
                $password_err = "Password must have atleast 6 characters";
            }else {
                 $password = $_POST["password"];
            }

            //validate confirm password
            if(empty($_POST["confirm_password"])){
                $confirm_password_err = "Please confirm your password";
            } else {
                $confirm_password = $_POST["confirm_password"];
                if(empty($password_err) && ($password != $confirm_password)){
                    $confirm_password_err = "Passwords did not match";
                }
            }

            //set "terms to false by default
            $termsAccepted = false;

            if(isset($_POST['terms_of_service'])){
                //if checkbox has been checked
                $termsAccepted = true;
            }

            if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && $termsAccepted == true){

                $sql = "INSERT INTO users(username, password) VALUES( ?, ?);";

                if($stmt = mysqli_prepare($conn, $sql)){
                    mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

                    $param_username = $username;
                    $param_password = $password;
                    //password_hash($password, PASSWORD_DEFAULT);

                    if(mysqli_stmt_execute($stmt)){
                        //Redirect to login page
                        header("location: login_hw.php");
                    }
                    else{
                        echo "Something went wrong. Please try again later.";
                    }
                }
                mysqli_stmt_close($stmt);
            }
            mysqli_close($conn);
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>REGISTER</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link href="css/style.css" rel="stylesheet">
        <style>
            body{ background-color: #EFF19A; }
            .wrapper{ width:550px; padding:100px 100px; margin-left:30%; }
            .error{ color: red; }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <h2>Sign Up</h2>
            <p>Please fill this form to create an account.</p>
            <form action="answer_hw.php" method="post">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ' '; ?>">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <span class="error"><?php echo $username_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ' '; ?>">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                    <span class="error"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ' '; ?>">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                    <span class="error"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="terms_of_service" value="Y"> I accept the terms of service.
                    </label>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
                <p>Already have an account? <a href="login.php">Login here</a>.</p>   
            </form>
        </div>
    </body>
</html>