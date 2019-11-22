<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DAY4-PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Array Operations</h1>
    <?php
        echo "<h3>Sorting Array - Indexed</h3>";
        $fruits=['apple','mango','banana','grapes'];
        $numbers=[7,6,4,2,8];

        echo "<h5>Ascending/Alphabetical Order[A - Z]</h5>";
        sort($fruits);
        print_r($fruits);
        echo "<br>";

        sort($numbers);
        print_r($numbers);
        echo "<br>";

        echo "<h5>Descending Order[Z - A]</h5>";
        rsort($fruits);
        print_r($fruits);
        echo "<br>";

        rsort($numbers);
        print_r($numbers);
        echo "<br>";

        echo "<h3>Sorting Associative Arrays</h3>";
        $age = ["peter"=>40,"Ben"=>37,"Joe"=>43];

        echo "<h5>Sorting in ascending Order(Sort by value)</h5>";
        asort($age);
        echo "<pre>";
        print_r($age);
        echo "</pre>";

        echo "<h5>Sorting in ascending Order(Sort by key)</h5>";
        ksort($age);
        echo "<pre>";
        print_r($age);
        echo "</pre>";

        echo "<h5>Sorting in decending Order(Sort by value)</h5>";
        arsort($age);
        echo "<pre>";
        print_r($age);
        echo "</pre>";

        echo "<h5>Sorting in decending Order(Sort by key)</h5>";
        krsort($age);
        echo "<pre>";
        print_r($age);
        echo "</pre>";

        echo "<h3>Seaching Array</h3>";
        $a = array("a" => "red","b" => "green","c" =>"blue");
        echo array_search("red",$a);
        echo "<br>";

        echo "<h3>Seaching Array2</h3>";
        $color = array("1" => "red","2" => "green","3" =>"blue");
        echo array_search("blue",$color);
        echo "<br>";

        echo "<h3>Seaching Array3</h3>";
        $a = ["a" => "5","b" =>5, "c" =>"5"];
        echo array_search(5,$a,true);

        echo "<h3>Insert into array using index</h3>";
        $fruits = ['banana','apple','mango','orange'];
        $fruits[] = 'grapes';
        echo "<pre>";
        print_r($fruits);
        echo "</pre>";

        echo "<h3>Insert into array using array_push</h3>";
        $colors = array('red','green');
        array_push($colors,'blue','yellow','white');
        echo "<pre>";
        print_r($colors);
        echo "</pre>";

        echo "<h3>Delete elements into array using array_pop</h3>";
        $array = ['red','green','blue'];
        array_pop($array);
        echo "<pre>";
        print_r($array);
        echo "</pre>";







    ?>
    
</body>
</html>