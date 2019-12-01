<?php

    define('SERVER_NAME','localhost');
    define('DB_NAME','db_hw');
    define('USERNAME','root');
    define('PASSWORD','root');

    $conn = mysqli_connect(SERVER_NAME,USERNAME,PASSWORD,DB_NAME);

    if($conn){
        echo "Connected Successfully<br>";
    } else {
        die("Connection failed".mysqli_connect_error);
    }

    /*$sql = "CREATE DATABASE IF NOT EXISTS db_hw";

    if($conn->query($sql) == TRUE){
        echo "Database created successfully<br>";
    } else {
        echo "Error creating databese." .$conn->error;
    }

    $sql = "CREATE TABLE IF NOT EXISTS employee(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(30) NOT NULL,
        gender VARCHAR(10) NOT NULL,
        age INT(3) NOT NULL,
        salary INT(6) NOT NULL,
        reg_date DATETIME DEFAULT CURRENT_TIMESTAMP
        );";

    if($conn->query($sql) == TRUE){
        echo "Table employee created successfully<br>";
    } else {
        echo "Error creating table".$conn->error;
    }

    $stmt = $conn->prepare("INSERT INTO employee(name,gender,age,salary) VALUES(?,?,?,?)");
    $stmt->bind_param(ssii,$name,$gender,$age,$salary);

    $name = "BiLing";
    $gender = "famale";
    $age = "32";
    $salary = "12000";
    $stmt->execute();

    $name = "WangJingyi";
    $gender = "famale";
    $age = "22";
    $salary = "14000";
    $stmt->execute();

    $name = "LiTong";
    $gender = "famale";
    $age = "30";
    $salary = "14000";
    $stmt->execute();

    $name = "Cai";
    $gender = "male";
    $age = "27";
    $salary = "15000";
    $stmt->execute();

    $name = "MaYun";
    $gender = "male";
    $age = "26";
    $salary = "9000";
    $stmt->execute();

    $name = "HeYan";
    $gender = "famale";
    $age = "28";
    $salary = "7000";
    $stmt->execute();

    echo "New employees inserted successfully";*/

    /*$sql = "DROP TABLE employee";

    if($conn->query($sql) == TRUE)
        echo "Table employee dropped successfully<br>";
    else
        echo "Error deleting: ".$conn->error;*/
    

?>