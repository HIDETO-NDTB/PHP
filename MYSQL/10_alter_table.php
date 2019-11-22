<?php

    // 項目追加
    include'./config.php';

    // 項目名変更
    $sql = "ALTER TABLE Students CHANGE COLUMN id studentNum INT(3) NOT NULL AFTER age;";
    // テーブル名変更
    //$sql = "RENAME TABLE Students to Student;";

    //MODIFYはINTをVARCHARや文字数の変更
    //$sql = "ALTER TABLE Students MODIFY studentID INT(3) NOT NULL AFTER id;";

    //$sql = "ALTER TABLE Students ADD studentID INT(3) NOT NULL AFTER id;";

    /*$sql = "ALTER TABLE USERS ADD Country VARCHAR(10) NOT NULL AFTER email;";*/

    if($conn->query($sql) == TRUE)
        echo "Table Students change successfully";
    else
        echo "Error alter table" .$conn->error;

    // 項目削除  
   /* $sql = "ALTER TABLE User DROP COLUMN Phone;";
    
    if($conn->query($sql) == TRUE)
        echo "Table User altered successfully";
    else
        echo "Error alter table" .$conn->error;
     
        

?>