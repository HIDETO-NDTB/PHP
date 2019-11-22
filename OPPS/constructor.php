<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOPS - PHP</title>
</head>
<body>
<h1>Oblect Oriented Programming Structure - OOPS</h1>

    <?php
    echo "<h3>Constructor</h3>";
    //class definition
    class Books{
        //properties
        var $title;
        var $price;

        public function __construct($title,$price){
            echo "<h4>Initializing the object..</h4>";
            $this->title = $title;
            $this->price = $price;

        }

        public function getTitle(){
            echo $this->title."<br>";
        }

        public function getPrice(){
            echo $this->price."<br>";
        }
    }

    $maths = new Books("Trignometry","300");
    $maths->getTitle();
    $maths->getPrice();

    $physics = new Books("Physics","100");
    $physics->getTitle();
    $physics->getPrice();

    $chemistry = new Books("Molecular Chemistry","200");
    $chemistry->getTitle();
    $chemistry->getPrice();



    ?>
</body>
</html>