<?php

    if(isset($_GET["id"]) && !empty($_GET["id"])){
        require_once'./includes_hw/config_hw.php';

        $sql = "SELECT * FROM Membership WHERE id=? ;";
        if($stmt = $conn->prepare($sql)){
            $stmt->bind_param("i",$param_id);
            $param_id = $_GET["id"];

            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result->num_rows == 1){
                    $row = $result->fetch_assoc();

                    $name=$row["name"];
                    $memberType=$row["memberType"];
                    $email=$row["email"];
                } else {
                    header ("location:error_hw.php");
                    exit();
                }
            } else {
                header ("location:error_hw.php");
            }
        }
        $stmt->close();
        $conn->close();

    } else {
        header ("location:error_hw.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h4 class="card-header">Mamber Detales</h4>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["name"];?></h5>
                            <p class="card-text">
                                <b>Member Type : <?php echo $row["memberType"];?><br></b>
                                <b>Email : <?php echo $row["email"];?><br></b>
                            </p>
                            <a href="index_hw.php" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>