<?php

    echo "Enter the string:";
    $string=trim(fgets(STDIN));

    $length=strlen($string);
    
    $evenNumber="";
    for($i=0; $i<$length;$i++){
        $char=($string[$i]);
        if($char=='0' || $char=='2' || $char=='4'
            || $char=='6' || $char=='8')
        {
            $evenNumber .= $char ;
        }
    }
    echo ("The even number is: ". $evenNumber ."\n");

    echo ("Even number divisor are: ");
    for($i=1; $i<$evenNumber; $i++){
        if($evenNumber%$i==0){
            echo ($i)." ";
        }
    }
?>