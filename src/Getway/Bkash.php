<?php
namespace Code\App\Getway;

use Code\App\PaymentInterface;

class Bkash implements PaymentInterface
{
    public function processPayment($amount)
    {
        echo "You are paying using Bkash, amount $amount";
    }
}
?>