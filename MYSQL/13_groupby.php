<?php

    include'./config.php';

    $sql = "SELECT COUNT(id) AS No_of_users,Country FROM USERS
           GROUP BY Country;";
    
    $sql ="SELECT COUNT(id) AS No_of_users,Country FROM USERS
           GROUP BY Country
           ORDER BY Country ASC";

    $sql ="SELECT COUNT(id) AS No_of_users,Country FROM USERS
           GROUP BY Country
           ORDER BY Country DESC";

    $sql ="SELECT COUNT(id) AS No_of_users,Country FROM USERS
           GROUP BY Country
           HAVING COUNT(id) >= 2;";

    $sql ="SELECT COUNT(id) AS No_of_users,Country FROM USERS
           GROUP BY Country
           HAVING COUNT(id) >= 2
           ORDER BY Country DESC;";

    $sql ="SELECT COUNT(id) AS No_of_users,Country FROM USERS
           GROUP BY Country
           HAVING COUNT(id) >= 2
           ORDER BY Country;";
    
    $sql = "SELECT COUNT(id) AS No_of_users,Country FROM USERS
           GROUP BY Country
           ORDER BY No_of_users DESC;";
    
    $result = $conn->query($sql);
    if($result->num_rows > 0){ 
        echo "<table border='3' style='border-collapse: collapse'";
        echo "<thead>";
            echo "<tr>";
                echo "<th>Country</th>";
                echo "<th>Total User</th>";
            echo "</tr>";
        echo"</thead>";
        echo"<tbody>";
            while($row = $result->fetch_assoc()){
            echo "<tr>";
                echo "<td>".$row["Country"]."</td>";
                echo "<td>".$row["No_of_users"]."</td>";
            echo"</tr>";
            }
        echo "</tbody>";
        echo "</table>";
    } else echo "No records Found";


?>