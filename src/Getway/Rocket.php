<?php
namespace Code\App\Getway;

use Code\App\PaymentInterface;

class Rocket implements PaymentInterface
{
    public function processPayment($amount)
    {
        echo "You are paying using Rocket, amount $amount";
    }
    
}
?>