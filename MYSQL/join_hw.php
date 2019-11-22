<?php

    include'./config.php';

    $sql = "SELECT prizes.id,Students.studentID,Students.username,prizes.prize_type,Students.age,Students.gender,prizes.given_date
            FROM prizes
            INNER JOIN Students ON prizes.studentID = Students.studentID;";

    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo "<table border='3'>";
        echo "<thead>";
            echo "<tr>";
                echo "<th>NO</th>";
                echo "<th>Students ID</th>";
                echo "<th>NAME</th>";
                echo "<th>Prize Type</th>";
                echo "<th>Age</th>";
                echo "<th>Gender</th>";
                echo "<th>Given Date</th>";
            echo"</tr>";
        echo "</thead>";

        echo "<tbody>";
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["studentID"]."</td>";
                    echo "<td>".$row["username"]."</td>";
                    echo "<td>".$row["prize_type"]."</td>";
                    echo "<td>".$row["age"]."</td>";
                    echo "<td>".$row["gender"]."</td>";
                    echo "<td>".$row["given_date"]."</td>";
                echo "</tr>";
            }
            
        echo "</tbody>";
        echo "</table>";

    } else echo "No records Found";


?>