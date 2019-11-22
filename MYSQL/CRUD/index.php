<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 class="pull-left text-center">Employee Details</h2>
                        <a href="create.php" class="btn btn-success float-right mb-2">ADD NEW EMPLOYEE</a>
                    </div>
                    <?php

                        require_once('./includes/config.php');

                        //include_once('../3_create_table.php');
                        //include_once('../4_insert_records.php');
                        //include_once('../9_drop.php');
                        
                        //select all records from employee table
                        $sql = "SELECT * FROM Employee;";
                          if($result = $conn->query($sql)){
                              if($result->num_rows > 0){
                                  echo "<table class='table table-bordered table-striped'>";
                                  echo "<thead>";
                                      echo "<tr>";
                                          echo "<th>#</th>";
                                          echo "<th>Name</th>";
                                          echo "<th>Address</th>";
                                          echo "<th>Salary</th>";
                                          echo "<th>Reg_Date</th>";
                                          echo "<th colspan='3'>Actions</th>";
                                      echo "</tr>";                                
                                  echo "</thead>";
                                  echo "<tbody>";
                                  while($row = $result->fetch_assoc()){
                                      echo "<tr>";
                                          echo "<td>".$row['id']."</td>";
                                          echo "<td>".$row['name']."</td>";
                                          echo "<td>".$row['address']."</td>";
                                          echo "<td>".$row['salary']."</td>";
                                          echo "<td>".$row['reg_date']."</td>";
                                          echo "<td><a class='btn btn-primary' href='read.php?id=".$row['id']."'title='View Record'>View</a></td>";
                                          echo "<td><a class='btn btn-info' href='update.php?id=".$row['id']."'title='Update Record'>Update</a></td>";
                                          echo "<td><a class='btn btn-danger' href='delete.php?id=".$row['id']."'title='Delete Record'>Delete</a></td>";

                                      echo"</tr>";
                                  }
                                  echo "</tbody>";
                                  echo "</table>";

                                  
                              }
                              else
                                  echo "<p class ='text-muted'><em>No records were found</em></p>";

                          }
                          else
                              echo "Error: Could not able to execute $sql.".$conn->error;
                        
                          $conn->close;



                    ?>
                </div>
            
            </div>
        
        </div>
    
    </div>
    
</body>
</html>