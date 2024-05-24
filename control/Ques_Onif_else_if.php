<?php

    $n1 = 20;
    $n2 = 10;
    $choice = 3;
    $random = 19;

    if($choice == 1){
        $sum = $n1 + $n2;
        echo " Addition of $n1 and $n2 is: $sum";
    } else if($choice == 2){
        $diff = $n2 - $n1;
        echo " Sub of $n1 and $n2 is: $diff";
    } else if($choice == 3){
        $mul = $n1 * $n2;
        echo " Multiplication of $n1 and $n2 is: $mul";
    } else if($choice == 4){
        $div = $n2 / $n1;
        echo " Division of $n1 and $n2 is: $div";
    }  else if($choice == 5){
        if($random % 2 == 0){
            echo " $random is even.";
        } else{
            echo " $random is odd.";
        }
    } else if($choice == 6){
        echo " $choice :: wrong input";
    }

?>