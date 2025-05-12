<?php
namespace Code\App\Getway;

use Code\App\PaymentInterface;

class Nagad implements PaymentInterface
{
    public function processPayment($amount)
    {
        echo "You are paying using Nagad, amount $amount";
    }
}
?>