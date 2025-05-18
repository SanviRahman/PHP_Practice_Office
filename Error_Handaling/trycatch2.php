<?php

function ageCalculator($age)
{
    if ($age>=18)
    {
        return true;
        
    }
    throw new Exception("Tumar age must be 18 hote hobe");
}
try
{
    ageCalculator(17);
    echo "Tumi vutar hoiso.\n";
}
catch(Exception $exp)
{
    echo $exp->getMessage();

}

?>