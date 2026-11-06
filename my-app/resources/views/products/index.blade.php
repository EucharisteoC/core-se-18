
@extends('layouts.app')
@section('content')

<div class="row mt-5">
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            Add Product
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <h1>Product Data</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Current Stock</th>
                    <th>Selling Price</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $product->product_code }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>Rp {{ number_format($product->product_price) }}</td>
                        <td>{{ $product->current_stock }}</td>
                        <td>Rp {{ number_format($product->price) }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">
                                Detail
                            </a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">
                                Edit
                            </a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
