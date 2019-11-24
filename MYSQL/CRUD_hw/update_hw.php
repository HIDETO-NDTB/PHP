<?php

    if(isset($_POST["id"]) && !empty($_POST["id"])){

        $id = $_POST["id"];
        $name = $_POST["name"];
        $memberType = $_POST["memberType"];
        $email = $_POST["email"];

        if(!empty($name) && !empty($memberType) && !empty($email)){
            require_once'./includes_hw/config_hw.php';

            $sql = "UPDATE Membership SET name=?,memberType=?,email=? WHERE id=?;";

            if($stmt = $conn->prepare($sql)){
                $stmt->bind_param("sssi",$param_name,$param_memberType,$param_email,$param_id);

                $param_name = $name;
                $param_memberType = $memberType;
                $param_email = $email;
                $param_id = $id;

                if($stmt->execute()){
                    header("location:index_hw.php");
                    exit();
                } else {
                    header("location:error_hw.php");
                }
            }
            $stmt->close();
            $conn->close();
        } 
        
    } else {
        if(isset($_GET["id"]) && !empty($_GET["id"])){

            $id = $_GET["id"];

            require_once'./includes_hw/config_hw.php';

            $sql = "SELECT * FROM Membership WHERE id=?;";
            if($stmt = $conn->prepare($sql)){
                $stmt->bind_param("i",$param_id);
                $param_id = $id;

                if($stmt->execute()){
                    $result = $stmt->get_result();
                    if($result->num_rows == 1){
                        $row = $result->fetch_assoc();

                        $name = $row["name"];
                        $memberType = $row["memberType"];
                        $email = $row["email"];

                    } else {
                        header("location:error_hw.php");
                        exit();
                    }
                } else {
                    header("location:error_hw.php");
                } 
            }
            $stmt->close();
            $conn->close();
        } else {
            header("location:error_hw.php");
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
    <title>CRUD_HW</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header"><h1>Update Member</h1></div>
                    <form action="update_hw.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="memberType">Member Type</label>
                            <input type="text" class="form-control" name="memberType" value="<?php echo $memberType; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Enter your male address">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" class="btn btn-primary" value="submit">
                            <a href="index_hw.php" class="btn btn-default">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>