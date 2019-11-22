<?php

    include'./config.php';

// 2 
    /*$sql = "CREATE DATABASE IF NOT EXISTS db1";

    if ($conn->query($sql) == TRUE){
        echo "Database created<br>";
    } else {
        echo "Error creating DB".$conn->error;
    } */

// 3
    /*$sql ="CREATE TABLE IF NOT EXISTS Students(
        id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        age INT(2) NOT NULL,
        email VARCHAR(50) UNIQUE,
        gender VARCHAR(10) NOT NULL,
        reg_date TIMESTAMP
        )";*/

// 3-2
    $sql ="CREATE TABLE IF NOT EXISTS prizes(
        id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        prize_type VARCHAR(10) NOT NULL,
        studentID INT(3) NOT NULL,
        given_date TIMESTAMP
        )";

        if ($conn->query($sql) == TRUE) {
            echo "Table prizes created<br>";
        } else {
            echo "Error creating table";
        }




?>
