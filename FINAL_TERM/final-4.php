<?php

    include "rational.php";
        
    $a = new Rational(1, 3);
    $b = new Rational(1, 2);

    $c = $a->add($b);
    $d = $b->add($b);

    print_r($c) . "\n";
    print_r($d) . "\n";

?>