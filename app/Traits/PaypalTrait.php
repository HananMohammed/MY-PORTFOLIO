<?php


namespace App\Traits;

use App\Http\Requests;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

trait PaypalTrait
{
    private $_api_context;

    public function __construct()
    {
        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['client_id'], $paypal_configuration['secret']));
        $this->_api_context->setConfig($paypal_configuration['settings']);
    }

    protected function paypalPayment($request)
    {
        $products=[];

        foreach ( session()->get('cart')->items as $items){
            array_push($products, $items["item"]->title);
        }

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName(implode(',' , $products))
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($request->get('amount') * env('USD_Average_Price'));


        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($request->get('amount') * env('USD_Average_Price') );

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Ostora Payment On Paypal After Convert EGP Pound To USD');
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('front.status'))
            ->setCancelUrl(URL::route('front.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

        try{
            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error','Connection timeout');
                return Redirect::route('front.checkout');
            } else {
                \Session::put('error','Some error occur, sorry for inconvenient');
                return redirect()->route('front.checkout');
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;
            }
        }

        Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {

           // return redirect()->away($redirect_url);
            return $redirect_url;
        }else{

            \Session::put('error','Unknown error occurred');
            return redirect()->route('front.checkout');
        }

    }

    public function paypalStatus($request)
    {
        $payment_id = Session::get('paypal_payment_id');

        Session::forget('paypal_payment_id');

        if (empty($request->input('PayerID')) || empty($request->input('token')))
        {
            return redirect(route('front.homepage'))->with('error',__('front.order-fail'));
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved')
        {
            $request->session()->forget('cart');

            return redirect(route('front.homepage'))->with('success',__("front.order-done"));
        }
        return redirect(route('front.homepage'))->with('error',__('front.order-fail'));
    }
}
