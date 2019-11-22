<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FUNCTION - PHP</title>
</head>
<body>
    <h1>FUNCTIONS IN PHP</h1>
    <?php
        echo "<h3>Types of functions</h3>";
        echo "<h4>Functions without argument and return type</h4>";
        function greeting(){
            echo "Hello PHP function<br>";
        }
        greeting();
        echo "<br>";
        
        echo "<h4>Functions with argument and return type</h4>";
        function cube($x){
            return $x * $x * $x;
        }
        echo cube(3);
        echo "<br>";

        echo "<h4>Functions with argument and without return type</h4>";
        function sayHello($name){
            echo "Hello $name<br>";
        }
        sayHello("Sonu");
        sayHello("Vimal");
        sayHello("John");
        echo "<br>";

        echo "<h4>Functions without argument and with return type</h4>";
        function square(){
            $x = 5;
            return $x * $x;
        }
        echo "Square of 5 is: ".square();
        echo "<br>";

        echo "<h4>Default argument function</h4>";
        function sayHelloo($name="Sonu"){
            echo "Hello $name<br>";
        }

        sayHelloo();
        sayHelloo("Vimal");
        sayHelloo("John");
        sayHelloo();
        echo "<br>";

        echo "<h4>Recursive function</h4>";
        function recursive($a){
            if($a < 20){
                echo "$a<br>";
                recursive($a + 2);
            }
        }

        recursive(10);
        echo "<br>";

        echo "<h4>Passing arrays to function</h4>";
        $input = [1,2,3,4,5]; 
        function fun_array($input){
            echo "$input[0] + $input[1] = ",$input[0]+$input[1];
        }
        fun_array($input);
        echo "<br>";

        echo"<h4>practice</h4>";

        function abc($i){
            if($i<=30 && $i%3==0){
                echo "$i<br>";
                abc($i + 1);
            }
        }

        abc(3);//再帰関数はforと違いfalseになった時点で終了


    ?>

    
</body>
</html>