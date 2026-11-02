<?php

namespace App\Http\Controllers;

class OrderController extends Controller
{
    public function index()
    {
        $orders = [
            [
                'order_number' => 'ORD-001',
                'customer_name' => 'Nadia Putri',
                'total_price' => 15000000,
            ],
            [
                'order_number' => 'ORD-002',
                'customer_name' => 'Bima Pratama',
                'total_price' => 5000000,
            ],
            [
                'order_number' => 'ORD-003',
                'customer_name' => 'Salsa',
                'total_price' => 750000,
            ],
        ];

        return view('orders.index', ['orders' => $orders]);
    }
}