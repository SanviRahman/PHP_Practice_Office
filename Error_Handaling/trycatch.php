<?php

$num=4;

try
{
    if ($num==0)
    {
        throw new Exception("Provide valid number");
    }
    echo 8/$num;
}
catch (Exception $sass)
{
    echo $sass->getMessage();
}

?>