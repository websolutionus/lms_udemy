<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Service\OrderService;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaymentController extends Controller
{

    function orderSuccess () {
        return view('frontend.pages.order-success');
    }


    function orderFailed () {
        return view('frontend.pages.order-failed');
    }

    function payWithPaypal()
    {
        $provider = new PayPalClient();
        $provider->getAccessToken();

        $payableAmount = cartTotal();

        $response = $provider->createOrder([
            'intent' => 'CAPTURE',
            'application_context' => [
                'return_url' => route('paypal.success'),
                'cancel_url' => route('paypal.cancel')
            ],
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => config('paypal.currency'),
                        'value' => $payableAmount
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != NULL) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] == 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }
    }

    function paypalSuccess(Request $request)
    {

        $provider = new PayPalClient();
        $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request->token);

        if (isset($response['status']) && $response['status'] === 'COMPLETED') {
            $capture = $response['purchase_units'][0]['payments']['captures'][0];

            $transactionId = $capture['id'];
            $paidAmount = $capture['amount']['value'];
            $currency = $capture['amount']['currency_code'];

            try {
                OrderService::storeOrder(
                    $transactionId,
                    auth()->user()->id,
                    'approved',
                    $paidAmount,
                    $paidAmount,
                    $currency,
                    'paypal',
                );

                return redirect()->route('order.success');

            } catch (\Throwable $th) {
                throw $th;
            }
        }

        return redirect()->route('order.failed');
    }
}
