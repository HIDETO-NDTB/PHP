<?php

include'./config.php';

$sql = "DELETE FROM USERS WHERE id = 5;";

if($conn->query($sql) == TRUE)
    echo "Record deleted successfully<br>";
else
    echo "Error deleting: ".$conn->error;


?>