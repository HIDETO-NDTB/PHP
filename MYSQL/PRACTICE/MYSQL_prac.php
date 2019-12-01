<?php

    include './config_prac.php';

    // 登録１
    /*$sql = "INSERT INTO Member(name,email,message) VALUES('HIDE','hide@yahoo.com','hello!!');";
    $sql .= "INSERT INTO Member(name,email,message) VALUES('RENA','rena@yahoo.com','Thank you');";

    if($conn->multi_query($sql) == TRUE){
        echo "new record inserted successfully";
    } else {
        echo "error ".$sql.$conn->error;
    }*/

    // 登録２
    /*$stmt = $conn->prepare("INSERT INTO items(itemName,price,member_id) VALUES(?,?,?);");
    $stmt->bind_param("sii",$itemName,$price,$member_id);

    $itemName = "beer";
    $price = "10000";
    $member_id = "1";
    $stmt->execute();

    $itemName = "red wine";
    $price = "3000";
    $member_id = "5";
    $stmt->execute();

    $itemName = "Gin";
    $price = "2000";
    $member_id = "8";
    $stmt->execute();

    $itemName = "white wine";
    $price = "3000";
    $member_id = "3";
    $stmt->execute();

    $itemName = "sake";
    $price = "7000";
    $member_id = "1";
    $stmt->execute();

    $itemName = "beer";
    $price = "2000";
    $member_id = "6";
    $stmt->execute();

    $itemName = "red wine";
    $price = "3000";
    $member_id = "4";
    $stmt->execute();

    $itemName = "Gin";
    $price = "2000";
    $member_id = "8";
    $stmt->execute();

    $itemName = "white wine";
    $price = "6000";
    $member_id = "7";
    $stmt->execute();

    $itemName = "sake";
    $price = "7000";
    $member_id = "1";
    $stmt->execute();

    echo "New records inserted successfully";*/

    // 絞り込み
    /*$sql = "SELECT * FROM Member;";
    $sql = "SELECT name,message,created_at FROM Member WHERE id = 5;";
    $sql = "SELECT id,name,message,created_at FROM Member WHERE id IN(2,5);";
    $sql = "SELECT id,name,message,created_at FROM Member WHERE id BETWEEN 2 AND 5;";
    $sql = "SELECT * FROM Member LIMIT 3;";
    $sql = "SELECT * FROM Member LIMIT 3 OFFSET 1;";
    $sql = "SELECT DISTINCT name FROM Member;";
    $sql = "SELECT * FROM Member WHERE id = 2 or name = 'Aika';";
    $sql = "SELECT * FROM Member WHERE id = 2 and name = 'Aika';";
    $sql = "SELECT * FROM Member WHERE NOT id = 2;";
    $sql = "SELECT * FROM Member WHERE name LIKE '%a';";
    $sql = "SELECT * FROM Member WHERE name LIKE '_i%';";
    $sql = "SELECT * FROM Member WHERE name LIKE '%e%';";

    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo "<table border='1' style='border-collapse:collapse'>";
        echo "<thead>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>email</th>";
                echo "<th>message</th>";
                echo "<th>created_at</th>";
            echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["email"]."</td>";
                    echo "<td>".$row["message"]."</td>";
                    echo "<td>".$row["created_at"]."</td>";
                echo "</tr>";
            }
        echo "</tbody>";
        echo "</table>";
    } else echo "No records found";*/

    // 名前抹消
    /*$sql = "DELETE FROM Member WHERE id = 3;";

    if($conn->query($sql) == TRUE){
        echo "Deleted successfully";
    } else {
        echo "Deliting failed".$conn->error;
    }*/

    // 全名簿抹消
    /*$sql = "TRUNCATE TABLE Member";

    if($conn->query($sql) == TRUE){
        echo "Truncated successfully";
    } else {
        echo "Truncating error";
    }*/

    // テーブル抹消
    /*$sql = "DROP TABLE Member";

    if($conn->query($sql) == TRUE){
        echo "Dropped table successfully";
    } else {
        echo "Dropping error";
    }*/

    // 項目追加
    /*$sql = "ALTER TABLE Member ADD age INT(3) NOT NULL AFTER name;";

    if($conn->query($sql) == TRUE){
        echo "Altered successfully";
    } else {
        echo "Altering error";
    }*/

    // アップデート
    /*$sql = "UPDATE Member set age = '42' WHERE id = 1;";
    $sql .= "UPDATE Member set age = '23' WHERE id = 2;";
    $sql .= "UPDATE Member set age = '29' WHERE id = 3;";
    $sql .= "UPDATE Member set age = '32' WHERE id = 4;";
    $sql .= "UPDATE Member set age = '19' WHERE id = 5;";
    
    if($conn->multi_query($sql) == TRUE){
        echo "Updated successfully";
    } else {
        echo "Updating error";
    }*/

    // Function機能
    /*$sql = "SELECT COUNT(name) AS No_of_member FROM Member";
    $sql = "SELECT UCASE(name) AS name FROM Member;";
    $sql = "SELECT MIN(age) AS Min_age FROM Member;";
    $sql = "SELECT AVG(age) AS Avg_age FROM Member;";
    $sql = "SELECT name,age,NOW() AS PerDate FROM Member;";

    $result = $conn->query($sql);
        if($result->num_rows >0){
            echo "<table border='3' style = 'border-collapse: collapse'>";
                echo "<thead>";
                    echo "<tr>";
                        //echo "<th>Number_of_member</th>";
                        //echo "<th>Member_Name</th>";
                        //echo "<th>Min_Age</th>";
                        //echo "<th>Avg_Age</th>";
                        echo "<th>Name</th>";
                        echo "<th>Age</th>";
                        echo "<th>Date</th>";
                    echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                            //echo "<td>".$row["No_of_member"]."</td>";
                            //echo "<td>".$row["name"]."</td>";
                            //echo "<td>".$row["Min_age"]."</td>";
                            //echo "<td>".$row["Avg_age"]."</td>";
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["age"]."</td>";
                            echo "<td>".$row["PerDate"]."</td>";
                        echo "</tr>";
                    }
                echo "</tbody>";
            echo "</table>";
        } else echo "No records found";*/

    /*$sql = "SELECT COUNT(id) AS name,age FROM Member
    GROUP BY age
    ORDER BY name DESC;";

    $sql = "SELECT COUNT(id) AS name,age FROM Member
    GROUP BY age
    HAVING COUNT(id) >= 2
    ORDER BY name DESC;";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo "<table border='3' style='border-collapse: collapse';>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>No_member</th>";
                    echo "<th>Age</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                while ($row = $result->fetch_assoc()){
                    echo "<tr>";
                        echo "<td>".$row["name"]."</td>";
                        echo "<td>".$row["age"]."</td>";
                    echo "</tr>";
                }
            echo "</tbody>";
        echo "</table>";

    } else echo "Not found";*/

    // join
    $sql = "SELECT items.id,items.itemName,items.price,Member.name,items.member_id,items.bought_at
            FROM Member
            INNER JOIN items ON Member.id = items.member_id;";

    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo "<table border='3' border-collapse: collapse;>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>No</th>";
                    echo "<th>Item Name</th>";
                    echo "<th>Price</th>";
                    echo "<th>Name</th>";
                    //echo "<th>Member ID</th>";
                    echo "<th>Date</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                        echo "<td>".$row["id"]."</td>";
                        echo "<td>".$row["itemName"]."</td>";
                        echo "<td>".$row["price"]."</td>";
                        echo "<td>".$row["name"]."</td>";
                        //echo "<td>".$row["member_id"]."</td>";
                        echo "<td>".$row["bought_at"]."</td>";
                    echo "</tr>";
                }
            echo "</tbody>";
        echo "</table>";
    } else echo "Data not found";

?>