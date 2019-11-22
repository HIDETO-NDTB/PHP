<?php

    $primes =array();
    $n=0;
    for ($x=2;$x<=100;$x++) {
        for ($y=1;$y<=$x;$y++) {
            if ($x%$y==0) {
                $n++;
            }
        }
        if ($n==2) {
            array_push($primes, $x);
        }
    }
    print_r($primes);

?>
