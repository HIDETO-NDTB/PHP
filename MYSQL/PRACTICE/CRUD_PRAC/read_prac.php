<?php

    if(isset($_GET["id"]) && !empty($_GET["id"])){

        require_once './includes/config.php';

        $sql = "SELECT * FROM employee WHERE id = ?;";

        if($stmt = $conn->prepare($sql)){

            $stmt->bind_param("i",$param_id);
            $param_id = $_GET["id"];

            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result->num_rows == 1){
                    $row = $result->fetch_assoc();

                    $name = $row["name"];
                    $gender = $row["gender"];
                    $age = $row["age"];
                    $salary = $row["salary"];
                } else {
                    header("location:error_prac.php");
                }
            }
            $stmt->close();
            $conn->close();
        } else {
            header("location:error_prac.php");
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
    <title>Crud-PRAC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Staff Detale</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                            <p class="card-text">
                                <b>Gender: <?php echo $row["gender"]; ?><br></b>
                                <b>Age: <?php echo $row["age"]; ?><br></b>
                                <b>Salary: <?php echo $row["salary"]; ?><br></b>
                            </p>
                            <a href="crud_prac.php" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>