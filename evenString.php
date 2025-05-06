<?php

    echo "Enter the string:";
    $string=trim(fgets(STDIN));

    $length=strlen($string);
    $evenNumber="";

    for($i=0; $i<$length;$i++){
        $digit=intval($string[$i]);
        if($digit%2==0){
            $evenNumber .= $digit ;
        }
    }
    echo ("The even Number is: ". $evenNumber ."\n");
    
    echo ("Even number divisor are: ");
    for($i=1; $i<$evenNumber; $i++){
        if($evenNumber%$i==0){
            echo ($i)." ";
        }
    }
?>