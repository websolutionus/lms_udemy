<?php

namespace App\Service;

use App\Models\Order;

class OrderService
{

    static function storeOrder(
        string $transaction_id,
        int $buyer_id,
        string $status,
        float $total_amount,
        float $paid_amount,
        string $currency,
        string $payment_method,
    )
    {
        $order = new Order();
        $order->invoice_id = uniqid();
        $order->buyer_id = $buyer_id;
        $order->status = $status;
        $order->total_amount = $total_amount;
        $order->paid_amount = $paid_amount;
        $order->currency = $currency;
        $order->payment_method = $payment_method;
        $order->transaction_id = $transaction_id;
        $order->save();
    }
}
