
@extends('layouts.app')
@section('content')
    <h1>Consumer Data</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">City</th>
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
                </tr>
                @php $no++; @endphp
            @endforeach
        </tbody>
    </table>
@endsection