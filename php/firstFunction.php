<?php

    function add($a,$b){
        $sum= $a+$b;
        return $sum;
    }
    echo "Enter the first number:";
    $a=trim(fgets(STDIN));
    echo "Enter the second number:";
    $b=trim(fgets(STDIN));

    echo $sum=add($a,$b);


?>