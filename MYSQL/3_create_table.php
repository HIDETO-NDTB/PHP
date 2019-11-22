<?php

include './config.php';

$sql = "CREATE TABLE IF NOT EXISTS Users(
    id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(10) NOT NULL,
    email VARCHAR(50) UNIQUE,
    reg_date TIMESTAMP
)";

if($conn->query($sql) == TRUE)
    echo "Table Users created successfully";
else
    echo "Error creating table".$conn->error;

    $sql = "CREATE TABLE IF NOT EXISTS product(
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
echo "Error creating table".$conn->error;


?>