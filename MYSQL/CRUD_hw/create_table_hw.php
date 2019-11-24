<?php

    include('./includes_hw/config_hw.php');

    $sql = "CREATE TABLE IF NOT EXISTS Membership(
        id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        memberType VARCHAR(10) NOT NULL,
        email VARCHAR(50) UNIQUE,
        reg_date TIMESTAMP
    )";

if($conn->query($sql) == TRUE)
    echo "Table Membership created successfully";
else
    echo "Error creating table".$conn->error;

?>