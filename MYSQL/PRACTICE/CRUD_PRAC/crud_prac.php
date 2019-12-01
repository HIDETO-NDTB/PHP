<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD-PRAC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class ="wrapper">
        <div class ="container">
            <div class ="row">
                <div class ="col-md-12">
                    <div class = "page-header">
                        <h2 class ="pull-left text-center">Employee Detales</h2>
                        <a href="create_prac.php" class="btn btn-success float-right mb-2">ADD NEW EMPLOYEE</a>
                    </div>
                    <?php
                        require_once './includes/config.php';
                        $sql = "SELECT * FROM employee";

                        if($result=$conn->query($sql)){
                            if($result->num_rows > 0){
                                echo "<table class='table-borderd table-striped'>";
                                    echo "<thead>";
                                        echo "<tr>";
                                            echo "<th>NO</th>";
                                            echo "<th>Name</th>";
                                            echo "<th>Gender</th>";
                                            echo "<th>Age</th>";
                                            echo "<th>Salary</th>";
                                            echo "<th>Reg_date</th>";
                                            echo "<th colspan='3'>Actions</th>";
                                        echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                        while($row = $result->fetch_assoc()){
                                            echo "<tr>";
                                                echo "<td>".$row["id"]."</td>";
                                                echo "<td>".$row["name"]."</td>";
                                                echo "<td>".$row["gender"]."</td>";
                                                echo "<td>".$row["age"]."</td>";
                                                echo "<td>".$row["salary"]."</td>";
                                                echo "<td>".$row["reg_date"]."</td>";
                                                echo "<td><a class='btn btn-primary' href='read_prac.php?id=".$row['id']."' title='View Record'>View</a></td>";
                                                echo "<td><a class='btn btn-info' href='update.php?id=".$row['id']."' title='Update Record'>Update</a></td>";
                                                echo "<td><a class='btn btn-danger' href='delete_prac.php?id=".$row['id']."' title='Delete Record'>Delete</a></td>";
                                            echo "</tr>";
                                        }
                                    echo "</tbody>";
                                echo "</table>";

                            } else echo "Data Not found";

                        } else "Error";

                        $conn->close;


                    ?>
                    
                
                </div>
            </div>
        </div>
    </div>
</body>
</html>