
@extends('layouts.app')
@section('content')

<div class="row mt-5">
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="{{ route('products') }}" class="btn btn-primary">Back</a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <h1>Edit Product Data</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" class="form-control" name="product_code"
                    value="{{ $product->product_code }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" name="product_name"
                    value="{{ $product->product_name }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Product Price</label>
                <input type="number" class="form-control" name="product_price"
                    value="{{ $product->product_price }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Current Stock</label>
                <input type="number" class="form-control" name="current_stock"
                    value="{{ $product->current_stock }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Selling Price</label>
                <input type="number" class="form-control" name="price"
                    value="{{ $product->price }}">
            </div>

            <div class="mb-3 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">
                    Update Product Data
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
