<?php

    include'./config.php';

    $sql = "UPDATE Students set studentID = '1' WHERE ID = 1;";
    $sql .= "UPDATE Students set studentID = '2' WHERE ID = 2;";
    $sql .= "UPDATE Students set studentID = '3' WHERE ID = 3;";
    $sql .= "UPDATE Students set studentID = '4' WHERE ID = 4;";
    $sql .= "UPDATE Students set studentID = '5' WHERE ID = 5;";
    $sql .= "UPDATE Students set studentID = '6' WHERE ID = 6;";
    $sql .= "UPDATE Students set studentID = '7' WHERE ID = 7;";
    $sql .= "UPDATE Students set studentID = '8' WHERE ID = 8;";
    $sql .= "UPDATE Students set studentID = '9' WHERE ID = 9;";
    $sql .= "UPDATE Students set studentID = '10' WHERE ID = 10;";
    $sql .= "UPDATE Students set studentID = '11' WHERE ID = 11;";

    /*$sql = "UPDATE USERS set Country = 'India' WHERE ID = 1;";
    $sql .= "UPDATE USERS set Country = 'Japan' WHERE ID = 2;";
    $sql .= "UPDATE USERS set Country = 'US' WHERE ID = 3;";
    $sql .= "UPDATE USERS set Country = 'India' WHERE ID = 4;";
    $sql .= "UPDATE USERS set Country = 'Japan' WHERE ID = 5;";
    $sql .= "UPDATE USERS set Country = 'UK' WHERE ID = 6;";
    $sql .= "UPDATE USERS set Country = 'Russia' WHERE ID = 7;";
    $sql .= "UPDATE USERS set Country = 'Italy' WHERE ID = 8;";
    $sql .= "UPDATE USERS set Country = 'India' WHERE ID = 9;";
    $sql .= "UPDATE USERS set Country = 'Porland' WHERE ID = 10;";*/

    if($conn->multi_query($sql) == TRUE)
        echo "Records Updated successfully";
    else
        echo "Error updation".$conn->error;

   /* $sql = "UPDATE USER set email = 'yukito@hotmail.co.jp' WHERE id=3;";

    if($conn->query($sql) == TRUE)
        echo "Record updated successfully";
    else
        echo "Error updating".$conn->error; */

?>