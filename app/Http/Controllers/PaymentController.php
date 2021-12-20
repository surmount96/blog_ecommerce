<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Consultancy;
use App\Models\Payment;
use App\Models\Order;
use App\Models\User;

class PaymentController extends Controller
{
    public function redirectToGateway()
    {
        return paystack()->getAuthorizationUrl()->redirectNow();
    }

    public function handleGatewayCallback()
    {
        $paymentDetails = paystack()->getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function pay()
    {
        
        $data = [
            'tx_ref' => now(),
            'amount' => 1000,
            'currency' => 'NGN',
            'payment_options' => 'card',
            'customer' => [
                'name' => request()->name,
                'email' => request()->email,
               
            ],
            'redirect_url' => env('APP_URL').'/dashboard/consultancy',
            'customizations' => [
                'title' => 'Medical Consultant',
                'description' => 'Payment for consultant session',
                'logo' => 'https://fummedicare.com/images/logo/logo3.png'
            ]
        ];
        $response = Http::withToken(env('MIX_FLUTTERWAVE_SEC_KEY'))->post('https://api.flutterwave.com/v3/payments',$data);
        return $response;
    }

    public function callback(Request $request)
    {
        $response = Http::withToken(env('MIX_FLUTTERWAVE_SEC_KEY'))->get("https://api.flutterwave.com/v3/transactions/$request->transaction_id/verify");
        $i = json_decode($response->body());
        if($i->status == 'success'){
            if($i->data->status == 'successful' && $i->data->tx_ref == $request->tx_ref ){
                // return $response;
                $user = User::where('email',$i->data->customer->email)->first();
                // return $user;
                $consult = new Consultancy();
                $consult->tx_ref = $i->data->tx_ref;
                $consult->payment_status = $i->data->status;
                $consult->transaction_id = $i->data->id;
                $consult->user_id = $user->id;
                $consult->save();
                return response()->json(['status'=> 200, 'url' => env('APP_URL').'/dashboard/consultancy']);
            }else{
                return abort(404);
            }
        }
    
    }

    public function getSession()
    {
        $consult = Consultancy::where('user_id',request()->id)->latest()->first();
        return $consult;
    }

    public function checkout()
    {
        
        $data = [
            'tx_ref' => now(),
            'amount' => 1000,
            'currency' => 'NGN',
            'payment_options' => 'card',
            'customer' => [
                'name' => request()->name,
                'email' => request()->email,
               
            ],
            'redirect_url' => env('APP_URL').'/checkout',
            'customizations' => [
                'title' => 'Product purchase',
                'description' => 'Payment for items',
                'logo' => 'https://fummedicare.com/images/logo/logo3.png'
            ]
        ];
        $response = Http::withToken(env('MIX_FLUTTERWAVE_SEC_KEY'))->post('https://api.flutterwave.com/v3/payments',$data);
        return $response;
    }

    public function checkoutCallback(Request $request)
    {
        $transact = $request['query']['transaction_id'];
        $response = Http::withToken(env('MIX_FLUTTERWAVE_SEC_KEY'))->get("https://api.flutterwave.com/v3/transactions/$transact/verify");
        $i = json_decode($response->body());

        $verifyTx = Payment::where('transaction_id',$i->data->id)->first();
       
        if(!$verifyTx && $i->status == 'success'){
            if($i->data->status == 'successful' && $i->data->tx_ref == $request['query']['tx_ref'] ){
                // return $response;
                $user = User::where('email',$i->data->customer->email)->first();
                foreach($request['items'] as $item){
                    // return $item['product'];
                    $product = new Order();
                    $product->name = $item['product']['product_name'];
                    $product->quantity = $item['quantity'];
                    $product->price = $item['price'];
                    $product->user_id = $user->id;
                    $product->isPending = 1;
                    $product->save();
                    // return $product['id'];

                    $payment = new Payment();
                    $payment->tx_ref = $i->data->tx_ref;
                    $payment->status = $i->data->status;
                    $payment->transaction_id = $i->data->id;
                    $payment->order_id = $product['id'];;
                    $payment->save();

                }
             
                return response()->json(['status'=> 200, 'url' => env('APP_URL').'/checkout']);
            }else{
                return abort(404);
            }
        }
        else{
            return abort(404);
        }
    
    }

}
