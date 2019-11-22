<?php

    include'./config.php';

    $sql = "DROP TABLE Users";

    if($conn->query($sql) == TRUE)
        echo "Table users dropped successfully<br>";
    else
        echo "Error deleting: ".$conn->error;


?>