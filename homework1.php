<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOMEWORK1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h4 class="text-center">PHP BASICS</h4>

<?php
    echo "●"." Write a PHP script to get the PHP version and configuration information."."<br>";
    //echo "PHP Version 7.3.8"."<br>";
    echo phpinfo();
    echo "<br>";

    echo "●"." $"."var='PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document."."<br>";
    echo "<br>";
    $var = 'PHP Tutorial';

    echo "<h3> $var </h3>";

?>
    <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
    <p><a href="">Go to the <?php echo $var; ?></a></p>

<?php
    echo "<br>";

    echo "●"." Arithmetic operations on character variables : $"."d = 'A00'. Using this variable print the following numbers."."<br>";
    echo "<br>";

    $d = A00;
    echo ++$d."<br>";
    echo ++$d."<br>";
    echo ++$d."<br>";
    echo ++$d."<br>";
    echo ++$d."<br>";
    echo "<br>";

    echo"●"." Write a PHP program to compute and return the square root of a given number."."<br>";
    echo "<br>";

    $num = 16;
    echo sqrt($num)."<br>";
    echo "<br>";

    echo"●"." Write a PHP program to find the length of the last word in a string.". "<br>";
    echo "<br>";

    


    echo "●"." Write a PHP script to redirect a user to a different page."."<br>";
    echo "<br>";

    header('Location: https://en.wikipedia.org/wiki/Japan');

    echo "●"." Write a PHP program to find whether the given number is odd or even by using ternary operator"."<br>";
    echo "<br>";

    $num3 = 5;
    echo $num3 %2 == 0 ? "even" : "odd"."<br>";
    echo "<br>";

    echo "●"." Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator."."<br>";
    echo "<br>";

    $num4 = 28;
    if ($num4 > 30) {
        echo $num4." is greater than 30";
    } elseif ($num4 > 20) {
        echo $num4." is greater than 20";
    } elseif ($num4 > 10) {
        echo $num4." is greater than 10";
    } else {
        echo $num4." is smaller than 10";
    }
    echo "<br>";
    echo "<br>";

    echo "●"." Write a PHP program to swap two variables."."<br>";
    echo "<br>";

    $numA = 50;
    $numB = 100;
    echo '$numA '.$numA."<br>";
    echo '$numB '.$numB."<br>";
    $numC = $numA; //C==50
    $numA = $numB; //A==100
    $numB = $numC; //B==50
    echo '$numA '.$numA."<br>";
    echo '$nunB '.$numB."<br>";
    echo "<br>";

    echo "●"." Write a PHP program to compute the sum of the prime numbers less than 100.<br>";
    echo "<br>";

    //$x = 3; //3の場合
    //$x % 1 == 0
    //$x % 2 == 1
    //$x % 3 == 0
    //$z = 0;
    //for ($x = 1; $x < 100; $x++){
        //for ($y = 1; $y <= $x; $y++) {
            //if ($x % $y = 0) {
                //$z++;
            //}
            //if ($z == 2) {
                //echo $x."<br>";
            //}
        //}
    //}
    $primes = array();
    $is_prime_no = false;
    for ($i = 2; $i<100; $i++) {
        $is_prime_no = true; 
        for ($j = 2; $j<=($i/2); $j++) {
            if ($i%$j==0) {
                $is_prime_no = false;
                break;
            }
        }
        if ($is_prime_no) {
            array_push($primes,$i);
        }
        if (count($primes)==100) {
            break;
        }
    }
    
    echo array_sum($primes)."<br>";

    for($n=2; $n<100; $n++) {
        for ($i=floor($n/2); $n%$i!=0; $i--);
        if ($i==1) {
            print($n."<br>");
        }
    }

    echo "●"." Write a PHP program to compute the sum of the digits of a number.<br>";
    echo "<br>";

    //$x = 12345; function digitsSum($x)
    //何桁か調べる　→　5桁 strlen($x);
    //桁数分を抜き出す for($y=1;$y<=strlen($x);$y++){
                    //substr($x,$y,1)
                    //}
    //それらを合計

    $x = 6789;
    echo strlen($x)."<br>";
    for($y=1;$y<=strlen($x);$y++){
        echo $y."<br>";
        echo substr($x,$y,1)."<br>";
    }



    echo "●"." $"."color = array('white', 'green', 'red', 'blue', 'black');
    Write a script which will display the following string <br>";
    echo "<br>";

    $color = array('white','green','red','blue','black');
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M.Nixon<br>";

    echo "<br>";

    echo "●"." $"."color = array(4 => 'white', 6 => 'green', 11=> 'red');<br>";
    echo "<br>";

    $color = array(4 => 'white',6 => 'green',11 => 'red');
    echo $color[4]."<br>";

    echo "<br>";


    echo "●"." Create a PHP script which displays the capital and country name from the above array $"."ceu. Sort the list by the capital of the country. <br>";
    echo "<br>";

    $ceu = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
    ksort($ceu);
    echo "<pre>";
    print_r($ceu);
    echo "</pre>";
    echo "<br>";

    asort($ceu);
    echo "<pre>";
    print_r($ceu);
    echo "</pre>";
    echo "<br>";

    echo "The capital of Netherlands is ".$ceu["Netherlands"]."<br>";
    echo "The capital of Greece is ".$ceu["Greece"]."<br>";
    echo "The capital of Germany is ".$ceu["Germany"]."<br>";

    echo "<br>";

    echo "●"." Write a PHP script to sort the following associative array :<br>";
    echo "<br>";

    $staff = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

    echo "<p>a) ascending order sort by value</p>";
    asort($staff);
    echo "<pre>";
    print_r($staff);
    echo"</pre>";
    echo "<br>";

    echo "<p>b) ascending order sort by Key</p>";
    ksort($staff);
    echo "<pre>";
    print_r($staff);
    echo "</pre>";
    echo "<br>";

    echo "<p>c) descending order sorting by Value</p>";
    arsort($staff);
    echo "<pre>";
    print_r($staff);
    echo "</pre>";
    echo "<br>";

    echo "<p>d) descending order sorting by Key</p>";
    krsort($staff);
    echo "<pre>";
    print_r($staff);
    echo "</pre>";
    echo "<br>";

    echo "●"." Write a simple PHP class which displays the following string.<br>";
    echo "<br>";

    class Myclass{
        public function __construct(){
            echo "MyClass class has initialized !<br>";
        }
    }
    $userclass = new Myclass;
    echo "<br>";

    echo "●"." Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.<br>";
    echo "<br>";

    class MyCalculator {

        var $x ;
        var $y ;

        public function __construct($x,$y){
            $this->x = $x;
            $this->y = $y;
        }

        function add(){
            return $this->x + $this->y."<br>"; 
        }

        function subtract(){
            return $this->x - $this->y."<br>";
        }

        function multiply(){
            return $this->x * $this->y."<br>";
        }

        function divide(){
            return $this->x / $thi->y."<br>";
        }
    }

    $mycalc =new MyCalculator(12,6);
    echo $mycalc->add();
    echo $mycalc->multiply();
    echo "<br>";

    echo "●"." Write a PHP class that sorts an ordered integer array with the help of Sort() function.<br>";
    echo "<br>";

    class Array_sort {
        var $asort;

        public function __construct($asort){
            $this->asort = $asort;
        }

        public function dosort(){
            $asort = $this->asort;
            sort($asort);
            return $asort;
        }
    }

    $sortarray = new Array_sort(array(11, -2, 4, 35, 0, 8, -9));
    print_r($sortarray->dosort());
    echo "<br>";
    echo "<br>";

    echo "●"." Write a simple PHP class which displays an introductory message like Hello All, I am Scott, where Scott is an argument value of the method within the class.<br>";
    echo "<br>";

    class Hello {

        var $name;

        public function __construct($name){
            $this->name = $name;
        }

        public function greeting(){
            echo "Hello All, I am ".$name=$this->name;
        }
    }

    $member = new Hello(Scott);
    $member->greeting();
    echo "<br>";
    echo "<br>";

    echo "●"." Calculate the difference between two dates using PHP OOP approach.<br>";
    echo "<br>";


    echo "●"."  Write a PHP class that calculates the factorial of an integer.<br>";

    class Calculator_2 {

        var $i;

        public function __construct($i){
            $this->i=$i;
        }

        public function factorial(){
            return ($i=$this->i) * ($i=$this->i);
        }
    }

    $number = new Calculator_2(8);
    echo $number->factorial();
    echo "<br>";

    echo "●"."  Create a script to construct the following pattern, using nested for loop.<br>";
    echo "<br>";

    function pattern($n){
        for ($i=0; $i<$n; $i++){
            for ($j=0; $j<=$i; $j++){
                echo "* ";
            }
            echo "<br>";
        }
    }

    pattern(5);
    echo "<br>";

    echo "●"."  Create a script to construct the following pattern, using nested for loop.<br>";
    echo "<br>";

    function pattern_2($n) {
        for ($i=$n; $i>=0; $i--) {
            for ($j=1; $j<=$i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }

    pattern_2(5);
    echo "<br>";

    echo "●"."  Create a script to construct the following pattern, using nested for loop.<br>";
    echo "<br>";

    function pattern_3($n){
        $num = 1 ;
        for ($i=0; $i<$n; $i++){
            for ($j=0; $j<=$i; $j++){
                echo $num." ";
                $num = ++$num;
            }
            echo "<br>";
        }
    }

    pattern_3(4);
    echo "<br>";

    echo "●"."  Create a script to construct the following pattern, using nested for loop.<br>";
    echo "<br>";

    function pattern_4($n) {
        $num = 5 ;
        for ($i=$n; $i>=0; $i--) {
            for ($j=1; $j<=$i; $j++) {
                echo $num." ";
            }
            echo "<br>";
            $num = --$num;
        }
    }

    pattern_4(5);
    echo "<br>";

    echo "●"."  Create a script to construct the following pattern, using nested for loop.<br>";
    echo "<br>";


    echo "●"."  Create a simple HTML form and accept the user name and display the name through PHP echo statement.<br>";
    echo "<br>";
    
    


    



?>
    
</body>
</html>