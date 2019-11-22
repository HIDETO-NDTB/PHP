<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOMEWORK3 - PHP</title>
</head>
<body>
<?php

    echo "●"." Write a PHP script to get the PHP version and configuration information."."<br>";

    echo phpinfo();
    echo "<br>";

    echo "●"." $"."var='PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document."."<br>";
    echo "<br>";

    $var = 'PHP Tutorial';
    echo "<h3>$var</h3>";
?>
    <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
    <p><a href "">Go to the <?php echo $var ?></a></p>

<?php

    echo "●"." Arithmetic operations on character variables : $"."d = 'A00'. Using this variable print the following numbers."."<br>";
    echo "<br>";

    $d ='A00';
    for ($d=A01;$d<=A05;$d++){
        echo $d."<br>";
    }
    echo "<br>";

    echo"●"." Write a PHP program to compute and return the square root of a given number."."<br>";
    echo "<br>";

    echo sqrt(16)."<br>";
    echo "<br>";

    echo"●"." Write a PHP program to find the length of the last word in a string.". "<br>";
    echo "<br>";

    function length_lw($string) {
        $pos = strpos($string,' ');

        if (!$pos) {
            $pos = 0;
        }
        else {
            $pos++;
        }

        $lastWord = substr($string,$pos);
        echo strlen ($lastWord)."<br>";
    }

    length_lw("PHP Exercises");
    echo "<br>";


    echo "●"." Write a PHP script to redirect a user to a different page."."<br>";
    echo "<br>";

    header ('location: https://www.google.com/');

    echo "●"." Write a PHP program to find whether the given number is odd or even by using ternary operator"."<br>";
    echo "<br>";

    $num = 5;
    echo "Nunber is $num<br>";
    if ($num%2==0){
        echo $num." is even number.<br>";
    }
    else {
        echo $num." is odd number.<br>";
    }
    echo "<br>";

    echo "●"." Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator."."<br>";
    echo "<br>";

    function great($i) {
        if ($i > 30 ) {
            echo $i." is greater than 30<br>";
        }
        elseif ($i > 20 ) {
            echo $i." is greater than 20<br>";
        }
        elseif ($i > 10 ) {
            echo $i." is greater than 10<br>";
        }
        else {
            echo $i." is smaller than 10<br>";
        }
    }

    great(28);
    echo "<br>";

    echo "●"." Write a PHP program to swap two variables."."<br>";
    echo "<br>";

    echo '$a is 50, $b is 100<br>';
    function swap($a,$b){
        $c = $a; //a=5,c=5
        $a = $b; //a=7,b=7
        $b = $c; //b=7,c=7
        echo '$a is '.$a .', $b is '.$b.'<br>';
    }
    swap(50,100);
    echo "<br>";

    echo "●"." Write a PHP program to compute the sum of the prime numbers less than 100.<br>";
    echo "<br>";
    
    $prime = array();

    for ($x=2;$x<=100;$x++) {
        $n = 0;
        for ($y=1;$y<=$x;$y++) {
            if ($x % $y ==0) {
                $n++;
            }
        }
        if ($n == 2) {
            array_push($prime,$x);
        }
    }

    echo "<pre>";
    print_r($prime);
    echo "</pre>";
    echo "<br>";

    echo array_sum($prime)."<br>";
    echo "<br>";

    echo "●"." Write a PHP program to compute the sum of the digits of a number.<br>";
    echo "<br>";

    function sum_digits($num){
        $array1 = array();
        $d = strlen($num);
        for ($i=0;$i<=$d;$i++) {
            $j = substr($num,$i,1);
            array_push($array1,$j);
        }
        echo array_sum($array1)."<br>";
    }
    
    echo 'sum_digits of 98765 is ',sum_digits(98765);
    echo "<br>";

    echo "●"." Write a PHP program to check if a given positive integer is a power of two.<br>";
    echo "<br>";

    function check($x){
        if(sqrt($x)==2){
            echo "$x is power of 2<br>";
        }
        else {
            echo "$x is not a given positive integer<br>";
        }
    }
    
    check(4);
    echo "<br>";

    echo "●"." Write a PHP program to print the number of prime numbers which are less than or equal to a given integer.<br>";
    echo "<br>";

    echo "I can't answer it<br>";
    echo "<br>";

    $prime = array();

    function primeCount($num) {
        for ($x=2;$x<=$num;$x++) {
            $n = 0;
            for ($y=1;$y<=$x;$y++) {
                if ($x % $y ==0) {
                    $n++;
                }
            }
            if ($n == 2) {
                array_push($prime,$x);
            }
        }
        echo count($prime);
    }

    primeCount(100);
    echo "<br>";

    echo "●"." Write a PHP program to convert word to digit.<br>";
    echo "<br>";

    

    echo "●"." Write a PHP program to replace a string Python with PHP and Python with PHP in a given string.<br>";
    echo "<br>";
    
    $sub_1 = "PHP";
    $sub_2 = "python";
    echo $sub_1." is popular than ".$sub_2."<br>";
    function swap_2($sub_1,$sub_2){
        $sub_3 = $sub_1;
        $sub_1 = $sub_2;
        $sub_2 = $sub_3;
        echo $sub_1." is popular than ".$sub_2."<br>";
    }
    swap_2("PHP","Python");
    echo "<br>";

    echo "●"." Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24.<br>";
    echo "<br>";

    echo "I can't answer it<br>";
    echo "<br>";
    
    $factrials = array();
    function factorial($x){
        for ($y=$x;$y>=1;$y--) {
            array_push($factrials,$x*$y);
        }
        array_product($factrials);
    }

    factorial(4);
    echo "<br>";

    echo "●"." $"."color = array('white', 'green', 'red', 'blue', 'black');
    Write a script which will display the following string <br>";
    echo "<br>";

    $color = ['white','green','red','blue','black'];
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon<br>";
    echo "<br>";

    echo "●"." $"."color = array(4 => 'white', 6 => 'green', 11=> 'red');Write a PHP script to get the first element of the above array.<br>";
    echo "<br>";

    $color = [4=>'white',6=>'green',11=>'red'];
    echo $color[4]."<br>";
    echo "<br>";

    echo "●"." Create a PHP script which displays the capital and country name from the above array $"."ceu. Sort the list by the capital of the country. <br>";
    echo "<br>";

    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

    echo "<pre>";
    asort ($ceu);
    print_r($ceu);
    echo "</pre>";
    echo "<br>";

    echo "The capital of Netherlands is ".$ceu["Netherlands"]."<br>";
    echo "The capital of Greece is ".$ceu["Greece"]."<br>";
    echo "The capital of Germany is ".$ceu["Germany"]."<br>";
    echo "<br>";

    echo "●"." Write a PHP script to sort the following associative array :<br>";
    echo "<br>";

    $staff = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];

    echo "a) ascending order sort by value<br>";
    echo "<pre>";
    asort($staff);
    print_r($staff);
    echo "</pre>";

    echo "b) ascending order sort by Key<br>";
    echo "<pre>";
    ksort($staff);
    print_r($staff);
    echo "</pre>";

    echo "c) descending order sorting by Value<br>";
    echo "<pre>";
    arsort($staff);
    print_r($staff);
    echo "</pre>";

    echo "d) descending order sorting by Key<br>";
    echo "<pre>";
    krsort($staff);
    print_r($staff);
    echo "</pre>";

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

        var $x;
        var $y;

        public function __construct($x,$y){
            $this->x = $x;
            $this->y = $y;
        }

        function add (){
            return $x=$this->x + $y=$this->y;
        }
        function subtract (){
            return $x=$this->x - $y=$this->y;
        }
        function multiply (){
            return $x=$this->x * $y=$this->y;
        }
        function divide (){
            return $x=$this->x / $y=$this->y;
        }
    }

    $mycalc = new MyCalculator(12,6);
    echo $mycalc-> add()."<br>";
    echo $mycalc-> multiply()."<br>";
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

        function greeting (){
            echo "Hello All, I am ".$name = $this->name."<br>";
        }
    }

    $staff = new Hello(Scott);
    $staff->greeting();
    echo "<br>";

    echo "●"." Calculate the difference between two dates using PHP OOP approach.<br>";
    echo "<br>";
    
    echo "●"."  Write a PHP class that calculates the factorial of an integer.<br>";
    echo "<br>";

    echo "●"."  Create a script to construct the following pattern, using nested for loop.<br>";
    echo "<br>";

    function pattern($n){
        for ($x=1;$x<=$n;$x++){
            for ($y=1;$y<=$x;$y++){
                echo "* ";    
            }
            echo "<br>";
        }
    }

    pattern(5);
    echo "<br>";

    echo "●"."  Create a script to construct the following pattern, using nested for loop.<br>";
    echo "<br>";

    function pattern2($n){
        for ($x=$n;$x>=1;$x--){
            for ($y=1;$y<=$x;$y++){
                echo "* ";    
            }
            echo "<br>";
        }
    }

    pattern2(5);
    echo "<br>";

    echo "●"."  Create a script to construct the following pattern, using nested for loop.<br>";
    echo "<br>";

    
    function pattern3($n){
        $z = 1;
        for ($x=1;$x<=$n;$x++){
            for ($y=1;$y<=$x;$y++){
                echo "$z "; 
                $z++; 
            }
            echo "<br>";
        }
    }

    pattern3(4);
    echo "<br>";

    echo "●"."  Create a script to construct the following pattern, using nested for loop.<br>";
    echo "<br>";

    function pattern4($n){
        $z = $n;
        for ($x=$n;$x>=1;$x--){
            for ($y=1;$y<=$x;$y++){
                echo "$z ";    
            }
            echo "<br>";
            $z--;
        }
    }

    pattern4(5);
    echo "<br>";

    echo "●"."  Create a script to construct the following pattern, using nested for loop.<br>";
    echo "<br>";

    echo "I have no idea <br>";
    echo "<br>";

    echo "●"."  Create a simple HTML form and accept the user name and display the name through PHP echo statement.<br>";
    echo "<br>";

?>

    <h3>Please input your name:</h3>
    <input>
    <input type ="submit" value ="Submit Name">
    <H4>Hello</H4>

    
</body>
</html>