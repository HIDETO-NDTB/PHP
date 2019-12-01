<?php

include './config.php';

$sql = "CREATE TABLE IF NOT EXISTS Member(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    message VARCHAR(100) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );";

if($conn->query($sql) == TRUE)
    echo "Table Members created successfully";
else
    echo "Error creating table".$conn->error;

    /*$sql = "CREATE TABLE IF NOT EXISTS product(
        prod_id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        prod_name VARCHAR(30) NOT NULL,
        price INT(5) NOT NULL,
        reg_date TIMESTAMP)";
    
    if($conn->query($sql) == TRUE)
        echo "Table Product created successfully";
    else
        echo "Error creating table".$conn->error;
    

    $sql ="CREATE TABLE IF NOT EXISTS Customers(
           CustomerID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
           CustomerName VARCHAR(30) NOT NULL,
           ContactName VARCHAR(30) NOT NULL,
           Country VARCHAR(50)
           );";

if($conn->query($sql) == TRUE)
    echo "Table Costomer created successfully";
else
    echo "Error creating table".$conn->error;


    $sql ="CREATE TABLE IF NOT EXISTS Orders(
        OrderID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        CustomerID INT(4) UNSIGNED NOT NULL,
        OrderDate TIMESTAMP
        );";

if($conn->query($sql) == TRUE)
 echo "Table Orders created successfully";
else
 echo "Error creating table".$conn->error;

 $sql ="CREATE TABLE IF NOT EXISTS Employee(
    id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    address VARCHAR(50) NOT NULL,
    salary INT(10) NOT NULL,
    reg_date TIMESTAMP
    );";

if($conn->query($sql) == TRUE)
echo "Table Emproyee created successfully";
else
echo "Error creating table".$conn->error;*/


?>