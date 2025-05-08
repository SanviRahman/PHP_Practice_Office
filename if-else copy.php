<?php
    echo "Enter first numbers:";
    $a=trim(fgets(STDIN));
    echo "Enter second numbers:";
    $b=trim(fgets(STDIN));

    $sum = $a + $b;

    if ($sum<=50){
        echo "This is low number\n";
        echo "The number is: ". $sum;
    }
    else if ($sum>50 and $sum<80){
        echo "This is medium number\n";
        echo "The number is: ". $sum;
    }
    else{
        echo "This is large number\n";
        echo "The number is: ". $sum;
    }


?>