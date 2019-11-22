<?php

    include './config.php';

    // 4
    $sql ="INSERT INTO Students (username,age,email,gender)VALUES('KAITO','23','kaito@google.com','male');";
    $sql .="INSERT INTO Students (username,age,email,gender)VALUES('KOUDAI','21','koudai@yahoo.com','male');";
    $sql .="INSERT INTO Students (username,age,email,gender)VALUES('YUKITO','20','yukito@hotmale.com','male');";

    if($conn->multi_query($sql) == TRUE)
        echo "Records inserted successfully";
    else
        echo "Error inserting records".$conn->error;




?>