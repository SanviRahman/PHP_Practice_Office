<?php

    echo "Enter the number: ";
    $num=trim(fgets(STDIN));

    for($i=0; $i<=$num; $i++){
        echo($i);
        echo(" ");
    }
?>