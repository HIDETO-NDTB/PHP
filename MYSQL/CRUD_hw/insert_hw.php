<?php

    include('./includes_hw/config_hw.php');

    //prepare statement and bind parameters
    $stmt = $conn->prepare("INSERT INTO Membership(name,memberType,email) VALUES(?,?,?);");
    $stmt->bind_param("sss",$name,$memberType,$email);

    //set parameter with values and execute
    $name = "Bob";
    $memberType = "Gold";
    $email = "bob@gmail.com";
    $stmt->execute();

    $name = "John";
    $memberType = "Gold";
    $email = "john@gmail.com";
    $stmt->execute();

    $name = "Paul";
    $memberType = "Silver";
    $email = "paul@gmail.com";
    $stmt->execute();

    $name = "George";
    $memberType = "Silver";
    $email = "george@gmail.com";
    $stmt->execute();

    $name = "Ringo";
    $memberType = "Blonze";
    $email = "ringo@gmail.com";
    $stmt->execute();

    echo "New records inserted successfully";

    $stmt->close();
    $conn->close();

?>