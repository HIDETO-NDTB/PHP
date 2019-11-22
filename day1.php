<?php
    echo "Welcome to php tutorial<br>";

    echo "Welcome";
    echo '<br>';

    echo "Hello "." World!<br>";

    echo "This ","string ","was ","made ","with multiple paramenters<br>";

    print"Hello World<br>";
    print "<h2>Welcome to PHP</h2>";

    //echo is faster than print function

    //datatypes
    $txt = "PHP WORLD!";
    $x = 5;
    $y = 10.5;
    $z = true;

    echo $x + $y;
    echo '<br>';

    var_dump($x); //integer
    echo "<br>";
    var_dump($y); //float
    echo "<br>";
    var_dump($z);//boolean
    echo "<br>";
    var_dump($txt);// string
    echo "<br>";

    echo "<h1>STRING FUNCTION</h1>";
    echo strlen($txt)."<br>";
    echo str_word_count($txt)."<br>";
    echo strrev($txt)."<br>";
    echo strpos($txt,"WORLD")."<br>";
    echo substr($txt,6)."<br>";
    echo strtolower($txt)."<br>";
    echo strtoupper($txt)."<br>";
    echo str_replace("WORLD","programming language",$txt)."<br>";
    echo str_ireplace("World","programming language",$txt)."<br>";

    echo"<pre>";
        $split = str_split($txt);
        print_r($split);
    echo "</pre>";

    echo "<h1>CONSTRANTS</h1>";
    define("PI","3.14");
    echo "<br>";

    define("GREETINGS","Welcome to PHP!", true);
    echo greetings;
    echo "<br>";

    echo "This is a line".__LINE__." of file ".__FILE__;  // line_number | FileName

?>
