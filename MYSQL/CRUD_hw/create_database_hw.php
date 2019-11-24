<?php

include('./includes_hw/config_hw.php');

$sql = "CREATE DATABASE IF NOT EXISTS crud_hw";

if($conn->query($sql) == TRUE){
    echo "Database created successfully";
} else{
    echo "Error creating database.".$conn->error;
}


?>