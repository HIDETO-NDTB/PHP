<?php

    include './config.php';

    /*$sql = "INSERT INTO USERS(username,password,email) VALUES('John','asdf','john@gmail.com');";
    $sql .= "INSERT INTO USERS(username,password,email) VALUES('Michel','asdf','michel@gmail.com');";
    $sql .= "INSERT INTO USERS(username,password,email) VALUES('Raj','asdf','raj@gmail.com');";
    $sql .= "INSERT INTO USERS(username,password,email) VALUES('Hiro','asdf','hiro@gmail.com');";
    $sql .= "INSERT INTO USERS(username,password,email) VALUES('Maiko','asdf','maiko@gmail.com');";

    if($conn->multi_query($sql) == TRUE)
        echo "Records inserted successfully";
    else
        echo "Error inserting records".$conn->error;*/
    

    /*$sql = "INSERT INTO product(prod_name,price) VALUES('Apple',200);";
    $sql .= "INSERT INTO product(prod_name,price) VALUES('Mango',300);";
    $sql .= "INSERT INTO product(prod_name,price) VALUES('Grapes',100);";
    $sql .= "INSERT INTO product(prod_name,price) VALUES('Banana',300);";
    $sql .= "INSERT INTO product(prod_name,price) VALUES('Guava',250);";
        
    
    if($conn->multi_query($sql) == TRUE)
        echo "Records inserted successfully";
    else
        echo "Error inserting records".$conn->error;*/

        
    /*$sql = "INSERT INTO Customers(CustomerName,ContactName,Country) VALUES('JohnDoe','John','India');";
    $sql .= "INSERT INTO Customers(CustomerName,ContactName,Country) VALUES('Micheal','Gates','Japan');";
    $sql .= "INSERT INTO Customers(CustomerName,ContactName,Country) VALUES('Sridhar','Murali','Italy');";
    $sql .= "INSERT INTO Customers(CustomerName,ContactName,Country) VALUES('Bill','Clinton','India');";
    $sql .= "INSERT INTO Customers(CustomerName,ContactName,Country) VALUES('Mark','Zucherberg','Japan');";

    if($conn->multi_query($sql) == TRUE)
        echo "New record inserted successfully<br>";
    else
        echo "Error: ".$sql."<br>".$conn->error;*/
        
       /* $sql = "INSERT INTO Orders(CustomerID) VALUES(4);";
        $sql .= "INSERT INTO Orders(CustomerID) VALUES(3);";
        $sql .= "INSERT INTO Orders(CustomerID) VALUES(2);";
        $sql .= "INSERT INTO Orders(CustomerID) VALUES(1);";
        $sql .= "INSERT INTO Orders(CustomerID) VALUES(6);";
        $sql .= "INSERT INTO Orders(CustomerID) VALUES(5);";*/

    $sql = "INSERT INTO Employee(name,address,salary) VALUES('JohnDoe','John,India',10000);";
    $sql .= "INSERT INTO Employee(name,address,salary) VALUES('Micheal','Gates,Japan',20000);";
    $sql .= "INSERT INTO Employee(name,address,salary) VALUES('Sridhar','Murali,Italy',30000);";
    $sql .= "INSERT INTO Employee(name,address,salary) VALUES('Bill','Clinton,India',40000);";
    $sql .= "INSERT INTO Employee(name,address,salary) VALUES('Mark','Zucherberg,Japan',50000);";

    if($conn->multi_query($sql) == TRUE)
        echo "New record inserted successfully<br>";
    else
        echo "Error: ".$sql."<br>".$conn->error;

?>