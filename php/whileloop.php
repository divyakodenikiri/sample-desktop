<?php

    $family = array("Jack", "Ellen", "Jackson", "John");

    $i = 0;

    while($i < sizeof($family)) {
        echo $family[$i] . "<br>";
        $i++;
    }//end while
    
    echo "<hr>";


    $i = 1;
    while($i <= 10) {
     $j = $i * 5;
     echo $j . "<br>";
        $i++;
    }

    
    echo "<hr>";

    $i = 0;
    while($i <= 20) {
     echo $i . "<br>";
     $i += 2;
    }

?>