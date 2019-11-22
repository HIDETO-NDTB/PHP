<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DAY3 - PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Looping Construct</h1>
    <?php
        echo "<h3>For Loop</h3>";
        for($x=1; $x<10; $x++){
            echo "The number is $x <br>";
        }
        echo "<h3>For Loop: Sample</h3>";
        for($count=1; $count <=12; $count++){
            echo "$count times 12 is ".$count * 12;
            echo "<br>";
        }

        echo "<h3>While Loop</h3>";
        $x=1;
        while($x <= 5){
            echo "The number is $x <br>";
            $x++;
        }

        echo "<h3>While Loop: Sample</h3>";
        $fuel =1;
        while($fuel > 0){
            //Keep driving
            echo "$fuel There's enough fuel<br>";
            $fuel--;
        }

        echo "<h3>Do-While Loop</h3>";
        $x = 1;
        do{
            echo "The number is $x <br>";
            $x++;
        }while($x <= 5);

        echo "<h3>Do-While Loop: Sample</h3>";
        $x=10;
        do{
            echo "The number is $x <br>";
        }while($x <= 5);

        echo "<h3>Looping Control Statements : Break</h3>";
        $i = 0;
        while(++$i){
            switch($i){
                case 5:
                    echo "At 5<br>";
                    break 1;
                case 10:
                    echo "At 10;Exit while<br>";
                    break 2;
                default:
                break;
            }
        }

        echo "<h3>Break: Sample</h3>";
        $x = 1;
        while($x <=  5){
            echo "The number is $x <br>";
            if($x == 3){
                break;//control goes out of the loop
            }
            $x++;
        }

        echo"<h3>Looping Control Statements : Continue</h3>";
        $j = 5;
        while($j > -1){
            $j--;
            echo $j."<br>";
            if($j == 0){
                continue;  //control continue the loop skipping the next statements
                    echo (10/$j)."<br>";
            }
        }

        echo"<h3>Looping Control Statements : Continue 2</h3>";
        $i = 0;
        while($i < 10){
            $i++;
            if($i %3 ==0){
                continue;
            }
            echo $i." is not 3 times number.<br>";
        }
    ?>

    <h1 class="text-center">Arrays</h1>
    <?php
        echo "<h3>Indexed Array</h3>";
        $cars = ["Audi" , "Benz" , "BMW" , "VW"];
        echo "I like ".$cars[0].",".$cars[1]." and ".$cars[2].".";
        echo "<br>";

        echo "<h3>Looping through the array</h3>";
        for($x=0; $x < count($cars); $x++){
            echo "I like ".$cars[$x]."<br>";
        }

        echo "<h3>Foreach Loop</h3>";
        foreach($cars as $car){
            echo $car."<br>";
        }

        echo "<h3>Print_r function</h3>";
        echo "<pre>";
        print_r($cars);
        echo "</pre>";

        echo"<h3>Associative Array</h3>";
        $age = ['Peter'=>32,'Ben'=>37,'Joe'=>43,'John'=>45];
        echo "Peter is ".$age['Peter']." years old.<br>";
        echo "Ben is ".$age['Ben']." years old.<br>";
        echo "Joe is ".$age['Joe']." years old.<br>";

        echo"<h3>Looping through associative array</h3>";
        foreach($age as $key => $value){
            echo "Name: ".$key."&nbsp"."Age: ".$value."<br>";
        }

        echo "<h3>Associative Array: Sample</h3>";
        $paper = array(
            "copier" => "Copier & Multipurpose",
            "Inkjet" => "Inkjet Printer",
            "Laser" => "Laser Printer",
            "photo" => "Photographic Paper"
        );

        echo "P1 element is ".$paper["copier"]."<br>";

        echo"<h3>Associative Array: Sample2</h3>";
        foreach($paper as $item => $desc){
            echo $item." is ".$desc."."."<br>";
        }

        echo "<h3>Multidimentional Array</h3>";

        $cars = [    array("Volvo", 22, 18), //["Volvo", 22, 18] is also OK
                     ["BMW", 15, 13],
                     array("Saab", 50, 20),
                     array("Land Rover", 17, 15)
                 ];
        echo $cars[0][0].": In stock: ".$cars[0][1].".Sold:".$cars[0][2]."<br>";
        echo $cars[1][0].": In stock: ".$cars[1][1].".Sold:".$cars[1][2]."<br>";
        echo $cars[2][0].": In stock: ".$cars[2][1].".Sold:".$cars[2][2]."<br>";
        echo $cars[3][0].": In stock: ".$cars[3][1].".Sold:".$cars[3][2]."<br>";

        echo "<h3>Looping through the multidimental array: Nested for loop</h3>";
        for($row = 0; $row < 4; $row++){
            echo "<b>Row Number: $row</b>";
            echo "<ul>";
            for($col = 0; $col < 3; $col++){
                echo "<li>".$cars[$row][$col]."</li>";
            }
            echo "</ul>";
        }

    ?>

    
</body>
</html>