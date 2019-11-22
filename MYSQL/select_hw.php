<?php

    include'./config.php';

    // 6
    $sql = "SELECT * FROM Students;";
    $sql = "SELECT * FROM Students WHERE id IN (3,7,11);";
    $sql = "SELECT * FROM Students WHERE id BETWEEN  5 and 9;";
    $sql = "SELECT * FROM Students LIMIT 7 OFFSET 2;";
    $sql = "SELECT DISTINCT username FROM Students;";
    $sql = "SELECT * FROM Students WHERE id =7 OR username = 'HIDETO';";
    $sql = "SELECT * FROM Students WHERE NOT username = 'HIDETO';";
    $sql = "SELECT * FROM Students WHERE username LIKE 'k%';";
    $sql = "SELECT * FROM Students WHERE username LIKE '%i';";
    $sql = "SELECT * FROM Students WHERE username LIKE '_a%';";
    $sql = "SELECT * FROM Students WHERE username LIKE '%it%';";
    $sql = "SELECT * FROM Students WHERE username NOT LIKE 'k%';";


    $result = $conn->query($sql);
    if($result->num_rows>0){
        echo "<table border ='3' style='border-collapse:collapse'";
        echo "<thead>";
            echo"<tr>";
                echo"<th>ID</th>";
                echo"<th>Username</th>";
                echo"<th>Age</th>";
                echo"<th>Email</th>";
                echo"<th>Gender</th>";
                echo"<th>Registration Date</th>";
            echo"</tr>";
        echo"</thead>";
        echo"<tbody>";
        while($row = $result->fetch_assoc()){
            echo"<tr>";
                echo"<td>".$row["id"]."</td>";
                echo"<td>".$row["username"]."</td>";
                echo"<td>".$row["age"]."</td>";
                echo"<td>".$row["email"]."</td>";
                echo"<td>".$row["gender"]."</td>";
                echo"<td>".$row["reg_date"]."</td>";
            echo"</tr>";
        }
    echo"</tbody>";
    echo"</table>";
} else echo "No records found";


?>