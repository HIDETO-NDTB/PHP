<?php

    //MYSQL ->Structed Query Language
    define('SERVER_NAME','localhost');
    define('DB_NAME','login');
    define('USERNAME','root');
    define('PASSWORD','root');

    $conn = mysqli_connect(SERVER_NAME,USERNAME,PASSWORD,DB_NAME);

    //test the connection
    if($conn){
        echo "Connected Successfully<br>";
    
    } else{
        die("Connection failed".mysqli_connect_error);
    }

    $sql = "CREATE TABLE IF NOT EXISTS users(
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            username VARCHAR(30) NOT NULL,
            password VARCHAR(100) NOT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP);";
        
        if($conn->query($sql) == TRUE){
            echo "Table created successfully";
        }else{
            echo "Error creating table";
        }

?>