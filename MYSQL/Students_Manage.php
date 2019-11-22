<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students-Manage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page header">
                        <h2 class="pull-left text-center">Students Information</h2>
                    </div>
                    <?php

                        include'./config.php';

                        $sql = "SELECT prizes.id,Students.studentID,Students.username,Students.age,Students.gender,prizes.prize_type,prizes.given_date
                                FROM Students
                                LEFT JOIN prizes ON Students.studentID = prizes.studentID;";
                        $result = $conn->query($sql);
                        if($result->num_rows>0){
                            echo "<table class='table table-bordered table-striped'>";
                            echo "<thead>";
                                echo "<tr>";
                                    echo"<th>NO</th>";
                                    echo"<th>NAME</th>";
                                    echo"<th>Student NO</th>";
                                    echo"<th>Prize Type</th>";
                                    echo"<th>Age</th>";
                                    echo"<th>Gender</th>";
                                    echo"<th>Date</th>";
                                    echo "<th>Delete</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                    echo "<td>".$row['id']."</td>";
                                    echo "<td>".$row['username']."</td>";
                                    echo "<td>".$row['studentID']."</td>";
                                    echo "<td>".$row['prize_type']."</td>";
                                    echo "<td>".$row['age']."</td>";
                                    echo "<td>".$row['gender']."</td>";
                                    echo "<td>".$row['given_date']."</td>";
                                    echo "<td><a class='btn btn-danger' href='delete_hw.php?id=".$row['id']."'title='Delete Record'>Delete</a></td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo"</table>";
                        }
                        else
                            echo "Error";


                    ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>