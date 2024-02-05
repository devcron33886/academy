<?php

namespace App\Http\Controllers;

use KingFlamez\Rave\Facades\Rave as Flutterwave;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('payment.index');
    }

   public function initiate()
    {
        $reference= Flutterwave::generateReference();

        $data=[
            'payment_options' => 'card,mobilemoney,banktransfer',
            'amount' => 100,
            'email' => request()->email,
            'reference' => $reference,
            'currency' => 'USD',
            'redirect_url' => route('payment.callback'),
            'customer' => [
                'email' => auth()->user()->email,
                'name' => auth()->user()->name,
                'reference' => $reference,
                'amount'=> 100,
                'currency' => 'USD',
                'phone_number' => auth()->user()->phone,
                'team_id' => auth()->user()->id,
                'status' => 'active'
            ]   
        ];
        $payment = Flutterwave::initializePayment($data);
        dd($payment);
    }
}
