@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1>Product Data</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Quantity Available</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$product['product_name']}}</td>
                        <td>Rp {{number_format($product['product_price'])}}</td>
                        <td>{{$product['quantity']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection