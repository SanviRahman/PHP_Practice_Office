<?php
//Polymorphism
class Sum{
    function addSum($a,$b,$c=5)
    {
        $sum=0;
        $avg=0;
        $sum=$a+$b+$c;

        $avg=intval($sum/3);

        return $avg;
    }
}
    
$add=new Sum();
echo $add->addSum(12,5,). PHP_EOL;
echo $add->addSum(21,5,7). PHP_EOL;
echo $add->addSum(2,14,6). PHP_EOL;

?>