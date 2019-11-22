<?php

    include'./config.php';

    echo "<h2>Inner Join</h2>";

    $sql = "SELECT Customers.CustomerID,Orders.OrderID,Customers.CustomerName,Orders.OrderDate
            FROM Customers
            INNER JOIN Orders ON Orders.CustomerID = Customers.CustomerID;";
    
    echo "<h2>Left Outer Join</h2>";

    $sql = "SELECT Customers.CustomerName,Orders.OrderID
            FROM Customers
            LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID;";
    
    echo "<h2>Right Outer Join</h2>";

    $sql = "SELECT Orders.OrderID,Customers.CustomerName,Orders.OrderDate
            FROM Customers
            RIGHT JOIN Orders ON Customers.CustomerID = Orders.CustomerID;";
            

$result = $conn->query($sql);
if($result->num_rows > 0){ 
    echo "<table border='3'>";
    echo "<thead>";
        echo "<tr>";
            echo "<th>Order ID</th>";
            //echo "<th>Customer ID</th>";
            echo "<th>Customer Name</th>";
            echo "<th>Order Date</th>";
        echo "</tr>";
    echo"</thead>";
    echo"<tbody>";
        while($row = $result->fetch_assoc()){
        //nbsp -HTML charactee entity
        echo "<tr>";
            echo "<td>".$row["OrderID"]."</td>";
            //echo "<td>".$row["CustomerID"]."</td>";
            echo "<td>".$row["CustomerName"]."</td>";
            echo "<td>".$row["OrderDate"]."</td>";
        echo"</tr>";
        /* echo $row["id"]."&nbsp &nbsp &nbsp" .$row["username"]."&nbsp &nbsp &nbsp" .$row["email"]."&nbsp &nbsp &nbsp" .$row["reg_date"]."<br>";*/
        }
    echo "</tbody>";
    echo "</table>";
} else echo "No records Found";


?>