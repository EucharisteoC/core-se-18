
@extends('layouts.app')
@section('content')

<div class="row mt-5">
    <div class="col-lg-12">
        <a href="{{ route('products') }}" class="btn btn-primary">Back</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col-lg-12">
        <h1>Product Details</h1>

        <table class="table">
            <tr>
                <th>Product Code</th>
                <td>{{ $product->product_code }}</td>
            </tr>
            <tr>
                <th>Product Name</th>
                <td>{{ $product->product_name }}</td>
            </tr>
            <tr>
                <th>Product Price</th>
                <td>Rp {{ number_format($product->product_price) }}</td>
            </tr>
            <tr>
                <th>Current Stock</th>
                <td>{{ $product->current_stock }}</td>
            </tr>
            <tr>
                <th>Selling Price</th>
                <td>Rp {{ number_format($product->price) }}</td>
            </tr>
        </table>
    </div>
</div>

@endsection
