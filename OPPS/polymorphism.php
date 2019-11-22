<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOPS - PHP</title>
</head>
<body>
<h1>Object Oriented Programming Structure - OOPS</h1>

    <?php
    echo "<h3>Class and Object</h3>";
    //class desinition
    class ParentClass{
        //properties
        var $x;
        var $y;

        //Member functions(methods)

        public function add($x){
            echo "<h5>Polymorphism: add() method definition in parent class</h5>";
            $x = $x + 1;
            echo $x;
        }
    }

    //creating Objects
    $addition = new ParentClass();
    echo "<h4>Parent class add() Result</h4>";
    $addition->add(5);

    class ChildClass extends ParentClass{

        //polymorphism - Method Overriding
        public function add($x){
            echo "<h5>Polymorphism: add() method overriding in child class</h5>";
            $x = $x + 2;
            echo $x;
        }
    }

    $childaddition = new ChildClass();
    echo "<h4>Child class add() Result</h4>";
    $childaddition->add(5);

    $practiceaddition = new ParentClass();
    $practiceaddition->add(9);


    ?>
    
</body>
</html>