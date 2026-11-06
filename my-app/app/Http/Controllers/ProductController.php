<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create([
            "product_code" => $request->product_code,
            "product_name" => $request->product_name,
            "product_price" => $request->product_price,
            "current_stock" => $request->current_stock,
            "price" => $request->price
        ]);

        return redirect()->route("products");
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update([
            "product_code" => $request->product_code,
            "product_name" => $request->product_name,
            "product_price" => $request->product_price,
            "current_stock" => $request->current_stock,
            "price" => $request->price
        ]);

        return redirect()->route("products");
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route("products")
            ->with("success", "Product deleted successfully.");
    }
}
