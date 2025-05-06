<?php

    echo "Enter the string:";
    $string=trim(fgets(STDIN));

    $length=strlen($string);

    for($i=0; $i<$length;$i++){
        $digit=intval($string[$i]);
        if($digit%2==0){
            echo ($digit)." ";
        }
    }
?>