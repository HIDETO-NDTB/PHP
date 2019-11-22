<?php

include'./config.php';

$sql = "SELECT COUNT(username) AS NO_of_Users FROM USERS";

$sql = "SELECT UCASE(username) AS username FROM USERS;";

$sql = "SELECT LCASE(username) AS username FROM USERS;";

$sql = "SELECT MIN(price) AS Min_Price FROM product;";

$sql = "SELECT MAX(price) AS Max_Price FROM product;";

$sql = "SELECT AVG(price) AS Avg_Price FROM product;";

$sql = "SELECT SUM(price) AS Total_Price FROM product;";

$sql = "SELECT prod_name,price,Now() AS PerDate FROM product;";



$result = $conn->query($sql);
    if($result->num_rows > 0){ 
        echo "<table border='3' style='border-collapse: collapse'";
        echo "<thead>";
            echo "<tr>";
                //echo"<th>Number_of_Users</th>";
                //echo "<th>Username</th>";
                //echo "<th>Minimum price</th>";
                //echo "<th>Maximum price</th>";
                //echo "<th>Average price</th>";
                //echo "<th>Total price</th>";
                echo "<th>Product Name</th>";
                echo "<th>Product Price</th>";
                echo "<th>Current Date</th>";
            echo "</tr>";
        echo"</thead>";
        echo"<tbody>";
            while($row = $result->fetch_assoc()){
            echo "<tr>";
                //echo "<td>".$row["NO_of_Users"]."</td>";
                //echo "<td>".$row["username"]."</td>";
                //echo "<td>".$row["Min_Price"]."</td>";
                //echo "<td>".$row["Max_Price"]."</td>";
                //echo "<td>".$row["Avg_Price"]."</td>";
                //echo "<td>".$row["Total_Price"]."</td>";
                echo"<td>".$row["prod_name"]."</td>";
                echo"<td>".$row["price"]."</td>";
                echo"<td>".$row["PerDate"]."</td>";
            echo"</tr>";
            }
        echo "</tbody>";
        echo "</table>";
    } else echo "No records Found";


?>