<?php

    include'./config.php';

    //select all users
    $sql = "SELECT * FROM USERS;";

    // select one particular user whose id = 2
    $sql = "SELECT username,email,reg_date FROM USER where id = 2;";

    //select more than one user not all
    $sql = "SELECT username,email,reg_date FROM USER Where id IN(1,3);";

    //select a range of ursers from users table
    $sql = "SELECT username,email,reg_date FROM USER Where id BETWEEN 1 AND 3;";

    //select first 2 starting from first record
    $sql = "SELECT * FROM USER LIMIT 2;";
    
    //after 2 users after first 1 record 
    $sql = "SELECT * FROM USER LIMIT 2 OFFSET 1;";

    //select non-duplicate username
    $sql = "SELECT DISTINCT username FROM USER;";

    //select the user whose id matches 2 or username matches KAITO
    $sql = "SELECT * FROM USER WHERE id = 2 OR username = 'KAITO';";

    //select the users whose id matchies 2 and also username matches KOUDAI
    $sql = "SELECT * FROM USER WHERE id = 2 AND username = 'KOUDAI';";

    //select the users whose username not matches KAITO
    $sql = "SELECT * FROM USER WHERE NOT USERNAME = 'KAITO';";

    //select the users whose username starts with letter k
    $sql = "SELECT * FROM USER WHERE username LIKE 'k%';";

    //select the users whose username ends with letter '0'
    $sql = "SELECT * FROM USER WHERE USERNAME LIKE '%O';";

    //select the users whose username second letter is a
    $sql = "SELECT * FROM USER WHERE USERNAME LIKE '_a%';";

    //select the users whose username has 'he' in between
    $sql = "SELECT * FROM USER WHERE USERNAME LIKE '%it%';";

    //select the users whose username starts with letter not k
    $sql = "SELECT * FROM USER WHERE username NOT LIKE 'k%';";

    //select the users whose username not ends with letter '0'
    $sql = "SELECT * FROM USER WHERE USERNAME NOT LIKE '%O';";

    //select the users whose username second letter is not a
    $sql = "SELECT * FROM USER WHERE USERNAME NOT LIKE '_a%';";

    //select the users whose username don't have 'he' in between
    $sql = "SELECT * FROM USER WHERE USERNAME NOT LIKE '%it%';";

    // 更新用
    $sql = "SELECT * FROM USERS;";

    $result = $conn->query($sql);
    if($result->num_rows > 0){ 
        echo "<table border='3' style='border-collapse: collapse'";
        echo "<thead>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Username</th>";
                echo "<th>Password</th>";
                echo "<th>Email</th>";
                echo "<th>Registration Date</th>";
            echo "</tr>";
        echo"</thead>";
        echo"<tbody>";
            while($row = $result->fetch_assoc()){
            //nbsp -HTML charactee entity
            echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["username"]."</td>";
                echo "<td>".$row["password"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["reg_date"]."</td>";
            echo"</tr>";
            /* echo $row["id"]."&nbsp &nbsp &nbsp" .$row["username"]."&nbsp &nbsp &nbsp" .$row["email"]."&nbsp &nbsp &nbsp" .$row["reg_date"]."<br>";*/
            }
        echo "</tbody>";
        echo "</table>";
    } else echo "No records Found";



?>