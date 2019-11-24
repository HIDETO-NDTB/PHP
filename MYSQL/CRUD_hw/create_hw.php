<?php

    $name = $memberType =$email = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $memberType = $_POST["memberType"];
        $email = $_POST["email"];

        if(!empty($name) && !empty($memberType) && !empty($email)){
            require_once'./includes_hw/config_hw.php';

            // ユーザーからの入力情報を含むSQL文の作成
            $sql = "INSERT INTO Membership(name,memberType,email) VALUES(?,?,?);";
            // ユーザーの入力情報をSQL文に含める準備
            $stmt = $conn->prepare($sql);
            // SQL文にユーザーからの入力情報を代入
            $stmt->bind_param("sss",$param_name,$param_memberType,$param_email);

            $param_name = $name;
            $param_memberType = $memberType;
            $param_email = $email;

            // ユーザーからの入力情報を含んだSQLを実行
            if($stmt->execute()){
                header("location:index_hw.php");
                exit();
            } else {
                header("location:error_hw.php");
            }
            $stmt->close();
            $conn->close();

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
                    <div class="page-header"><h1>New Member</h1></div>
                    <form action="create_hw.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="memberType">Member Type</label>
                            <input type="text" class="form-control" name="memberType">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <textarea name="email" id="" cols="10" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="submit">
                            <a href="index_hw.php" class="btn btn-default">Cansel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>