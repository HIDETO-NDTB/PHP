<?php

    //MYSQL ->Structed Query Language
    define('SERVER_NAME','localhost');
    define('DB_NAME','db1');
    define('USERNAME','root');
    define('PASSWORD','root');

    $conn = mysqli_connect(SERVER_NAME,USERNAME,PASSWORD,DB_NAME);

    //test the connection
    if($conn){
        echo "Connected Successfully<br>";
    
    } else{
        die("Connection failed".mysqli_connect_error);
    }

?>