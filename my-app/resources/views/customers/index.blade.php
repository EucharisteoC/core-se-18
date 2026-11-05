
@extends('layouts.app')
@section('content')

<div class = "row mt-5">
    <div class = "col-lg-12 d-flex justify-content-end">
        <a href="{{ route('customers.create') }}" class="btn btn-primary">Tambah Customer</a>
    </div>
</div>

        <div class = "row">
            <div class = "col-lg-12">
                <h1>Consumer Data</h1>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">City</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                            @php $no = 1; @endphp
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$customer["name"]}}</td>
                                <td>{{$customer["email"]}}</td>
                                <td>{{$customer["city"]}}</td>
                                <td><a href="{{route('customers.show', $customer['id'])}}" class="btn btn-primary">View Detail</a></td>
                                <td><a href="{{route('customers.edit', $customer['id'])}}" class="btn btn-primary">Edit Data</a></td>
                                <td>
                                    <form action="{{ route('customers.destroy', $customer->id) }}" style="display: inline-block;" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @php $no++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection