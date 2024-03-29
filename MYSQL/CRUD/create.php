<?php

    $name = $address = $salary ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //valiated name
        $input_name = $_POST['name'];
        if(empty($input_name)){
            $name_err = "Please enter your name";
        }else{ 
            $name = $input_name;
            if(!preg_match("/^[a-zA-Z ]*$/",$name)){
                $name_err = "only letters and write space allowed";
            }
        }
        //valiated address
        $input_address = $_POST['address'];
        if(empty($input_address)){
            $address_err = "Please enter your address";
        }else{
            $address = $input_address;
        }
        //valiated salary
        $input_salary = $_POST['salary'];
        if(empty($input_salary)){
            $salary_err = "Please enter your salary";
        }else{
            $salary = $input_salary;
        }

        if (empty($name_err) && empty($address_err) && empty($salary_err)) {
            require_once'./includes/config.php';

            $sql = "INSERT INTO Employee(name,address,salary) VALUES(?,?,?);";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssi", $param_name, $param_address, $param_salary);

            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;

            if ($stmt->execute()) {
                header("location: index.php");
                exit();
            } else {
                header("location:error.php");
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
    <title>CURD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>.error{color:red;}</style>
</head>
<body>
<div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header"><h1>New Employee</h1></div>
                    <form action="create.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your username">
                            <span class="error">*<?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="" cols="10" rows="5" class="form-control"></textarea>
                            <span class="error">*<?php echo $address_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="text" class="form-control" name="salary" placeholder="Typein your salary">
                            <span class="error">*<?php echo $salary_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="submit">
                            <a href="index.php" class="btn btn-default">Cancel</a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>