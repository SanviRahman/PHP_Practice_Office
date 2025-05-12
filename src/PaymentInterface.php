<?php
namespace Code\App;

interface PaymentInterface
{
    public function processPayment($amount);
}

?>