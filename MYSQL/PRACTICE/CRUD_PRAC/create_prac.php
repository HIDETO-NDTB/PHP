<?php

    $name = $gender = $age = $salary ="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $salary = $_POST["salary"];

        if(!empty($name) && !empty($gender) && !empty($age) && !empty($salary)){

            require_once './includes/config.php';

            $sql = "INSERT INTO employee(name,gender,age,salary) VALUES(?,?,?,?);";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssii",$param_name,$param_gender,$param_age,$param_salary);

            $param_name = $name;
            $param_gender = $gender;
            $param_age = $age;
            $param_salary = $salary;

            if($stmt->execute()){
                header("location:crud_prac.php");
                exit();
            } else {
                header("location:error_prac.php");
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
    <title>CRUD-PRAC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .error{ color:red; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 class="text-center">ADD NEW EMPLOYEE</h2>
                    </div>
                    <form action="create_prac.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Please enter a name">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="radio" name="gender" value="male">Male;
                            <input type="radio" name="gender" value="female">Female;
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" name="age" class="form-control" placeholder="Please enter the age">
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control" placeholder="Please enter the salary">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="submit">
                            <a href="crud_hw.php" class="btn btn-default">Cancel</a>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>