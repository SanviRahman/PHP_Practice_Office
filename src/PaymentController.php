<?php
namespace Code\App;

class PaymentController
{
    private $payamentGateway;

    public function __construct(PaymentInterface $payment)
    {
        $this->payamentGateway= $payment;
    }


    public function processPayment($amount)
    {
        $this->payamentGateway->processPayment($amount);
    }
}


?>