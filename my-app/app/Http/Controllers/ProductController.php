<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                "product_name" => "Laptop",
                "product_price" => 15000000,
                "quantity" => 12
            ],
            [
                "product_name" => "Smartphone",
                "product_price" => 5000000,
                "quantity" => 30
            ],
            [
                "product_name" => "Headphones",
                "product_price" => 750000,
                "quantity" => 50
            ]
        ];

        return view('products.index', compact('products'));
    }
}