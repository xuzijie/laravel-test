<?php
namespace GreatPay\GreatPayment\Facades;

use Illuminate\Support\Facades\Facade;

class GreatPayment extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'greatpayment';
    }
}