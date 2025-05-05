<?php

    echo "Enter the Number:";
    $number=trim(fgets(STDIN));
    $length= strlen((string)($number));

    $evenSum="";
    $digit=0;
    $i=0;
    while($i<$length){
        $digit = $number[$i];
        
        if (is_numeric($digit) && ($digit % 2 == 0)) {
            $evenSum .= $digit;
        }
        $i++;
    }
    echo ($evenSum);

?>