<?php

    include'./config.php';

    $sql = "TRUNCATE TABLE USERS";

    if($conn->query($sql) == TRUE)
        echo "All Records deleted successfully<br>";
    else
        echo "Error deleting: ".$conn->error;


?>