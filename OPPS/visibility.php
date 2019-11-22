<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOPS - PHP</title>
</head>
<body>
    <?php

    echo "<h3>Visibility</h3>";
    //class definition
    class Books{
        //properties
        var $title;
        protected $price;//変更

        //Member function(methods)
        public function setTitle($title){
            $this->title = $title;
        }

        public function setPrice($price){
            $this->price = $price;
        }

        public function getTitle(){
            echo $this->title."<br>";
        }

        public function getPrice(){
            echo $this->price."<br>";
        }
    }

    //creating object
    $physics = new Books();
    $maths = new Books();
    $chemistry = new Books();

    $physics->setTitle("physics for High School");
    $physics->setPrice("100");

    $chemistry->setTitle("Molecular chemistry");
    $chemistry->setPrice("200");

    $maths->setTitle("Algebra");
    $maths->setPrice("300");

    echo "<h5>Parent class properties</h5><br>";
    echo "Physics Title: ",$physics->getTitle();
    echo "Physics Price: ",$physics->getPrice();

    echo "Chemistry Title: ",$chemistry->getTitle();
    echo "Chemistry Price: ",$chemistry->getPrice();

    echo "Maths Title: ",$maths->getTitle();
    echo "maths Price: ",$maths->getPrice();

    class ComicBook extends Books{
        private $booktype;//変更

        function setType($par){
            $this->booktype = $par;
        }

        function getType(){
            echo $this->booktype."<br>";
        }
    }

    $comic = new ComicBook();

    $comic->setTitle("Will Eisner");
    $comic->setPrice(100);
    $comic->setType("Comic Book");

    //child class property
    echo "<h5>Child class can access the parent class public property</h5>";
    $comic->getTitle();
    $comic->getPrice();
    $comic->getType();

    //public access specifier
    echo"<h3>Public visibility- By default all the properties are public</h3>";
    echo "<h5>Public properties can be accessed by the child class</h5>";
    $comic->getTitle();

    echo "<h5>Public properties can be accessed within the same class</h5>";
    $maths->getTitle();

    echo "<h5>Public properties can be accessed outside the class</h5>";
    $maths->getTitle();

    echo"<h3>Private visibility</h3>";
    echo "<h5>Private properties can be accessed within the same class</h5>";
    $comic->getType();

    echo"<h3>Protected visibility- By default all the properties are public</h3>";
    echo "<h5>Protected properties can be accessed within the same class</h5>";
    $physics->getPrice();
    $maths->getPrice();
    $chemistry->getPrice();

    echo "<h5>Protected properties can be accessed by the child class</h5>";
    $comic->getPrice();
    



    ?>
    
</body>
</html>