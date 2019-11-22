<?php

    include './config.php';

    //prepare statement and bind parameters
    $stmt = $conn->prepare("INSERT INTO USERS(username,password,email) VALUES(?,?,?);");
    $stmt->bind_param("sss",$username,$password,$email);

    //set parameter with values and execute
    $username = "Virat";
    $password = "kholi";
    $email = "virat@gmail.com";
    $stmt->execute();

    $username = "Mahendra";
    $password = "Dhoni";
    $email = "mahendra@gmail.com";
    $stmt->execute();

    $username = "Adbul";
    $password = "kalam";
    $email = "kalam@gmail.com";
    $stmt->execute();

    $username = "Kalpana";
    $password = "chawla";
    $email = "kalpana@gmail.com";
    $stmt->execute();

    $username = "Sania";
    $password = "mirsa";
    $email = "sania@gmail.com";
    $stmt->execute();

    echo "New records inserted successfully";

    $stmt->close();
    $conn->close();

?>


