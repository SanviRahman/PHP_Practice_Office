<?php

    echo "Enter the number: ";
    $num=trim(fgets(STDIN));

    $i=0;
    while ($i<=$num){
        echo ($i. " ");
        $i++;
    }
?>