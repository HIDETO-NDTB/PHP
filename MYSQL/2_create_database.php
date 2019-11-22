<?php

include './config.php';

$sql = "CREATE DATABASE IF NOT EXISTS db1";

if($conn->query($sql) == TRUE){
    echo "Database created successfully";
} else{
    echo "Error creating database.".$conn->error;
}


?>
