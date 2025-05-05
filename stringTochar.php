<?php
    $greeding= "Sanvi Rahman";

    $length= strlen($greeding);

    $con= strtolower($greeding);

    for($i=0; $i<$length; $i++){
        if ($con[$i]=='n'){
            echo ("The character is: ". $con[$i]);
            break;
        }
    }
?>