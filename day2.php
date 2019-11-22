<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>DFAY2-PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Operators</h1>
    <?php
        $x = 10;
        $y = 6;

        echo "<h3>Arithmetic Operators</h3>";
        echo "Addition:",$x + $y."<br>";
        echo "Subtraction:",$x -$y."<br>";
        echo "Multiplication:",$x * $y."<br>";
        echo "Division:",$x / $y."<br>";
        echo "Modulus:",$x % $y."<br>";

        echo "<h3>Assignment Operators</h3>";
        $x = 12; 
        echo $x."<br>";

        $x += 10; // $x = $x + 10
        echo $x."<br>";

        $x -= 10; // $x = $x - 10
        echo $x."<br>";

        $x *= 10; // $x = $x * 10
        echo $x."<br>";

        $x /= 10; // $x = $x / 10
        echo $x."<br>";

        $x %= 10; // $x = $x % 10
        echo $x."<br>";

        echo "<h3>Comparision Operators</h3>";
        $x = 100;
        $y = "100";

        var_dump($x == $y);
        echo "return true because values are equal.<br>";

        var_dump($x === $y);
        echo "return false because datatype are not equal.<br>";

        var_dump($x != $y);
        echo "return true because values are equal.<br>";

        var_dump($x !== $y);
        echo "return true because datatype are not equal.<br>";

        var_dump($x > $y);
        echo "return false because values are equal.<br>";

        var_dump($x < $y);
        echo "return false because values are equal.<br>";

        var_dump($x >= $y);
        echo "return true because values are equal.<br>";

        var_dump($x <= $y);
        echo "return true because values are equal.<br>";

        echo"<h3>Increment and Decrement Operators</h3>";
        $x = 10;

        echo "Pre-increment: ".++$x."<br>";
        echo "Post-increment: ".$x++."<br>";

        echo "Pre-decrement: ".--$x."<br>";
        echo "Post-decrement: ".$x--."<br>";

        echo"<h3>Logical Operators</h3>";
        $x = 100;
        $y = 50;

        var_dump($x == 100 && $y == 50);
        echo "return true because both are equal.<br>";

        var_dump($x == 100 || $y == 60);
        echo "return true because either of one condition is true.<br>";

        var_dump($x != 90);
        echo "return true because condition is true.<br>";

        var_dump($x == 100 and $y == 50);
        echo "return true because both are equal.<br>";

        var_dump($x == 101 or $y == 50);
        echo "return true because either of one condition is true.<br>";

        var_dump($x == 101 xor $y == 50);
        echo "return true because either of one condition is false.<br>";

        var_dump($x == 100 xor $y == 50);
        echo "return false because both are equal.<br>";

        var_dump($x == 100 xor $y == 40);
        echo "return true because either of one condition is false.<br>";

        echo "<h3>Concatation(String) Operators</h3>";
        $txt1 = "Hello";
        $txt2 = "PHP!";

        echo $txt1 . $txt2. "<br>";

        $txt1 .=$txt2;
        echo $txt1."<br>";

        echo "<h3>Ternary Operator</h3>";
        $fuel = 1;
        echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";
        echo "<br>";
        echo $fuel < 1 ? "Fill tank now" : "There's enough fuel";
    ?>

    <h1 class="text-center">Conditional Construct</h1>"

    <?php
        $a = 10;
        $b = 5;

        echo "<h3>IF STATEMENT</h3>";
        if ($a > $b) {
            echo "a is greater than b<br>";
        }
        
        //swapping
        if($a > $b){
            echo $a." is greater than ".$b."<br>";
            $c = $a; //$c = 10
            $a = $b; //$b = 5
            $b = $c; //$b = 10
            echo 'a='.$a.',b='.$b.',c='.$c."<br>";
        }

        echo "<h3>IF-ELSE STATEMENT</h3>";
        if ($a%2 == 0) {
            echo $a." is even<br>";
        }else{
            echo $a." is odd<br>";
        }

        echo "<h3>IF-ELSE=IF STATEMENT</h3>";
        if ($a%2 == 0) {
            echo $a." is even<br>";
        }elseif($b%2 == 0){
            echo $b." is even<br>";
        }else{
            echo $a." and ".$b." are odd<br>";
        }
        
        echo "<h3>SWITCH-CASE CONDITIONAL</h3>";
        $color = "Blue";
        switch($color){
            case "Red":
                echo "You selected Red";
                break;
            case "Blue":
                echo "You selected Blue";
                break;
            case "Yellow":
                echo "You selected Yellow";
                break;
            default:
                echo"Invalid color";
        }

        echo "<br>";

        $week = "Sunday";
        switch ($week){
            case "Monday":
                echo "It's 1st day of the week";
                break;
            case "Tuesday":
                echo "It's 2nd day of the week";
                break;
            case "Wednesday":
                echo "It's 3rd day of the week";
                break;
            case "Thursday":
                echo "It's 4th day of the week";
                break;
            case "Friday":
                echo "It's 5th day of the week";
                break;
            default:
                echo "It's a weekend";
        }

    ?>

</body>
</html>
