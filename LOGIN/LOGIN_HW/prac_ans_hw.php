<?PHP

    require_once './includes_hw/config_hw.php';

    $sql = "CREATE TABLE IF NOT EXISTS practice (
        id INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(100) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP);";

    if($conn->query($sql)){
        echo "Table Created Successfully<br>";
    } else {
        echo "Error".$conn->error;
    }

    $username = $password = $confirm_password ="";
    $username_err = $password_err = $confirm_password_err ="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST["username"])){
            $username_err = "Please enter a username";
        }else{

            $sql = "SELECT id FROM practice WHERE username = ?";

            if($stmt = mysqli_prepare($conn,$sql)){
                mysqli_stmt_bind_param($stmt,"s",$param_username);

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
                    echo "Something went wrong.";
                }
            }
            mysqli_stmt_close($stmt);
        }

        if(empty($_POST["password"])){
            $password_err = "Please enter a password";
        } elseif(strlen($_POST["password"]) < 6){
            $password_err = "Password must more than 6 characters";
        }else{
            $password = $_POST["password"];
        }

        if(empty($_POST["confirm_password"])){
            $confirm_password_err = "Please confirm a password";
        }else{
            $confirm_password = $_POST["confirm_password"];
            if(empty($password_err) && ($password != $confirm_password)){
                $confirm_password_err = "Password did not match";
            }
        }

        $termsAccepted = false;

        if(isset($_POST['terms_of_service'])){
            $termsAccepted =true;
        }

        if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && ($termsAccepted == true)){

            $sql = "INSERT INTO  practice(username,password) VALUES( ?, ?);";

            if($stmt = mysqli_prepare($conn, $sql)){
                mysqli_stmt_bind_param($stmt, "ss", $param_username,$param_password);

                $param_username = $username;
                $param_password = password_hash($password,PASSWORD_DEFAULT);

                if(mysqli_stmt_execute($stmt)){
                    header("location: login_hw.php");
                }else{
                    echo "Something went wrong.Please try again later.";
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER_HW</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
        body{ background-color:#EADAE8; }
        .wrapper{ width:550px; padding:100px 100px; margin-left:30%; }
        .error{ color:red; }
    </style>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="prac_ans_hw.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="error">*<?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="error">*<?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="error">*<?php echo $confirm_password_err; ?></span>
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
            <p>Already have an account? <a href="login_hw.php">Login here</a></p>
        </form>
    </div>
</body>
</html>