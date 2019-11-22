<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice</title>
</head>
<body>

<?php
    class Books {
        var $title;
        var $price;
        
        public function setTitle($title){
            $this->title = $title;
        }
        public function setPrice($price){
            $this->price =$price;
        }
        public function getTitle(){
            echo $this->title."<br>";
        }
        public function getPrice(){
            echo $this->price."<br>";
        }
    }

    $novel = new Books;
    $text = new Books;
    $magagine = new Books;

    $novel->setTitle("ノルウェーの森");
    $novel->setPrice("1200");
    $text->setTitle("英語");
    $text->setPrice("980");
    $magagine->setTitle("ワンピース");
    $magagine->setPrice("500");

    $novel->getTitle();
    $novel->getPrice();
    $text->getTitle();
    $text->getPrice();
    $magagine->getTitle();
    $magagine->getPrice();
    

    echo "<h3>practice 2</h3><br>";

    class Staff {
        var $name;
        var $age;
        var $gender;

        public function setName($name){
            $this->name = $name;
        }
        public function setAge($age){
            $this->age = $age;
        }
        public function setGender($gender){
            $this->gender = $gender;
        }
        public function getName(){
            echo $this->name;
        }
        public function getAge(){
            echo $this->age;
        }
        public function getGender(){
            echo $this->gender;
        }
    }

    $kitchen = new Staff();
    $hall = new Staff();
    $asistant = new Staff();

    $kitchen->setName("Tanaka");
    $kitchen->setAge(32);
    $kitchen->setGender("男性");
    $hall->setName("Mai");
    $hall->setAge(25);
    $hall->setGender("女性");
    $asistant->setName("Fujiko");
    $asistant->setAge(28);
    $asistant->setGender("女性");

    echo "キッチンは",$kitchen->getName()."で",$kitchen->getAge()."歳 , ",$kitchen->getGender()."です。<br>";
    echo "ホールは",$hall->getName()."で",$hall->getAge()."歳 , ",$hall->getGender()."です。<br>";
    echo "アシスタントは",$asistant->getName()."で",$asistant->getAge()."歳 , ",$asistant->getGender()."です。<br>";

    class StaffChild extends Staff {
        var $type ;

        function setType($type){
            $this->type = $type;
        }
        function getType(){
            echo $this->type;
        }
    }

    $clean = new StaffChild();

    $clean->setName("Hayashi");
    $clean->setAge(45);
    $clean->setGender("男性");
    $clean->setType("positive");

    echo "清掃員は",$clean->getName()." ",$clean->getAge()."歳 , ",$clean->getGender()."で性格は ",$clean->getType()."です。<br>";
    echo "キッチンは",$kitchen->getName()."で",$kitchen->getAge()."歳 , ",$kitchen->getGender()."です。<br>";

    $asistant = new StaffChild();

    $asistant->setType("positive");

    echo "アシスタントは",$asistant->getName()."で",$asistant->getAge()."歳 , ",$asistant->getGender()."で性格は　",$asistant->getType()." です。<br>";
    


    
?>
    
</body>
</html>