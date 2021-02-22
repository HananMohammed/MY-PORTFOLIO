<?php


namespace App\Interfaces;


use App\Http\Requests\Front\PaymentRequest;
use App\Models\Front\Payment;

interface PaymentInterface
{
    public function completePayment(PaymentRequest $request, Payment $model);
    public function getPaymentStatus(PaymentRequest $request);

}
