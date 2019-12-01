<?php

    $name = $address = $salary ="";
    $name_err = $address_err = $salary_err ="";

    if (isset($_POST["id"]) && !empty($_POST["id"])){

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
        
        $id = $_POST["id"];

        $name = $_POST["name"];
        $address = $_POST["address"];
        $salary = $_POST["salary"];


        if (empty($name_err) && empty($address_err) && empty($salary_err)) {
            

            require_once'./includes/config.php';

            $sql = "UPDATE Employee SET name = ?,address = ?,salary = ? WHERE id=?;";


            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("ssii", $param_name, $param_address, $param_salary, $param_id);

                $param_name = $name;
                $param_address = $address;
                $param_salary = $salary;
                $param_id = $id;

                if ($stmt->execute()) {
                    header("location: index.php");
                    exit();
                } else {
                    header("location:error.php");
                }
            }
            $stmt->close();
            $conn->close();
        }
}else{
    if (isset($_GET["id"]) && !empty($_GET["id"])){
        
        $id = $_GET["id"];

        require_once'./includes/config.php';

        $sql = "SELECT * FROM Employee WHERE id = ?;";
        if($stmt = $conn->prepare($sql)){
            $stmt->bind_param("i",$param_id);
            $param_id = $id;

            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result->num_rows == 1){
                    $row = $result->fetch_assoc();

                    $name = $row["name"];
                    $address = $row["address"];
                    $salary = $row["salary"];

                }else{
                    header("location:error.php");
                    exit();
                }
            }else{
                header("location:error.php");
            }
        }
        $stmt->close();
        $conn->close();
    }else{
        header("location:error.php");
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
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>.error{color:red;}</style>
</head>
<body>
<div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header"><h1>Update Employee</h1></div>
                    <form action="update.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" placeholder="Enter your username">
                            <span class="error">*<?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="" cols="10" rows="5" class="form-control"><?php echo $address; ?></textarea>
                            <span class="error">*<?php echo $address_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="text" class="form-control" name="salary" value="<?php echo $salary; ?>" placeholder="Typein your salary">
                            <span class="error">*<?php echo $salary_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" class="btn btn-primary" value="submit">
                            <a href="index.php" class="btn byn-default">Cancel</a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>