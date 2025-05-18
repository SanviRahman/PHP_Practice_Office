<?php
require 'vendor/autoload.php';

$bkash= new \Code\App\Getway\Bkash();
$nagad= new \Code\App\Getway\Nagad();

$paymentStatus= new \Code\App\PaymentController($bkash);
$paymentStatus->processPayment(100);

?>