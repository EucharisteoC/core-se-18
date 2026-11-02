<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                "name" => "Nadia Putri",
                "email" => "nadia@example.com",
                "city" => "Palembang"
            ],
            [
                "name" => "Bima Pratama",
                "email" => "bima@example.com",
                "city" => "Bandung"
            ],
            [
                "name" => "Salsa",
                "email" => "salsa@example.com",
                "city" => "Jakarta"
            ]
        ];
        return view("customers.index", ["customers" => $customers]);
    }
}
