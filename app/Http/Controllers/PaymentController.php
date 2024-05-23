<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LiqPay;

class PaymentController extends Controller
{
    protected $liqpay;

    public function __construct(LiqPay $liqpay)
    {
        $this->liqpay = $liqpay;
    }

    public function index()
    {
        return view('pay.index');
    }

    public function pay(Request $request)
    {
        $params = [
            'action'         => 'pay',
            'amount'         => $request->amount,
            'currency'       => 'USD',
            'description'    => 'Payment description',
            'order_id'       => uniqid(),
            'version'        => '3',
            'result_url'     => route('payment.success'),
            'server_url'     => route('liqpay.callback'),
        ];

        $html = $this->liqpay->cnb_form($params);

        return view('liqpay', compact('html'));
    }

    public function callback(Request $request)
    {
        // Handle callback here
        $data = $request->input('data');
        $signature = $request->input('signature');

        // Validate the callback here
        $parsed_data = json_decode(base64_decode($data), true);
        $expected_signature = base64_encode(sha1(
            config('liqpay.private_key') . $data . config('liqpay.private_key'),
            true
        ));

        if ($signature !== $expected_signature) {
            // Invalid signature
            return response('Invalid signature', 400);
        }

        // Process the parsed data
        return response('Callback handled', 200);
    }

    public function success() {
        return view('pay.success');
    }
}
