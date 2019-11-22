<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOPS-PHP</title>
</head>
<body>
    <h1>Object Oriented Programming Structure(OOPS)</h1>
    <?php
        echo "<h3>Class and Object</h3>";
        //class definition
        class Books{
            //properties
            var $title;
            var $price;

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

        echo "Physics Title: ",$physics->getTitle();
        echo "Physics Price: ",$physics->getPrice();

        echo "Chemistry Title: ",$chemistry->getTitle();
        echo "Chemistry Price: ",$chemistry->getPrice();

        echo "Maths Title: ",$maths->getTitle();
        echo "maths Price: ",$maths->getPrice();




    ?>
    
</body>
</html>