
@extends('layouts.app')
@section('content')

<div class="row mt-5">
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="{{ route('products') }}" class="btn btn-primary">Back</a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <h1>Input Product Data</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="product_code" class="form-label">Product Code</label>
                <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Product Code">
            </div>

            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
            </div>

            <div class="mb-3">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="number" class="form-control" id="product_price" name="product_price" placeholder="Product Price">
            </div>

            <div class="mb-3">
                <label for="current_stock" class="form-label">Current Stock</label>
                <input type="number" class="form-control" id="current_stock" name="current_stock" placeholder="Current Stock">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Selling Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Selling Price">
            </div>

            <div class="mb-3 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Save Product Data</button>
            </div>

        </form>
    </div>
</div>

@endsection
