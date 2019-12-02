<?php

    //MYSQL ->Structed Query Language
    define('SERVER_NAME','localhost');
    define('DB_NAME','login_hw');
    define('USERNAME','root');
    define('PASSWORD','root');

    $conn = mysqli_connect(SERVER_NAME,USERNAME,PASSWORD,DB_NAME);

    //test the connection
    if($conn){
        echo "Connected Successfully<br>";
    
    } else{
        die("Connection failed".mysqli_connect_error);
    }

    /*$sql = "CREATE TABLE IF NOT EXISTS user(
        id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        password VARCHAR(10) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP);";

        if($conn->query($sql) == TRUE){
            echo "Table created successfully";
        }else{
            echo "Error creating table";
        }*/

?>