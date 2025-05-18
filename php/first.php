<?php

    $myFile = fopen("example.txt", "w");
    fwrite($myFile, "Hello, PHP!");
    fclose($myFile);

?>