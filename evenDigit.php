<?php

    echo "Enter the Number:";
    $number=trim(fgets(STDIN));
    $length= strlen((string)($number));

    $evenSum="";
    $digit=0;
    // $i=0;
    for($i=0; $i<$length; $i++){
        $digit = $number[$i];
        
        if (($digit % 2 == 0)) {
            $evenSum .= $digit;
        }
        //$i++;
    }
    echo ($evenSum);

?>