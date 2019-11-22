<?php

    if(isset($_POST["id"]) && !empty($_POST["id"])){
        require_once'./config.php';

        $sql = "DELETE FROM Students WHERE studentID = ?";

        if($stmt = $conn->prepare($sql)){
            $stmt->bind_param("i",$param_id);

            $param_id = $_POST["id"];

            if($stmt->execute()){
                haeder ("location:Students_Manage.php");
                exit();
            } else {
                echo "Oops! Something went wrong.Please try again later.";
            }
        }
        $stmt->close();
        $conn->close();
    }else{
        if(empty($_GET["id"])){
            echo "Error";
            exit();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="cpl-md-12">
                    <div class="page header"><h1>Delete Record</h1></div>
                    <form action="delete_hw.php" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"];?>"/>
                            <p>Are you sure you want to delete this record ?</p><br>
                            <p>
                                <input type ="submit" value="Yes" class="btn btn-danger">
                                <a href ="Students_Manage.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>