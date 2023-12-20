@extends('layouts.main')
@section('main-section')

<div class="container">
    <h2>View Customers</h2>   
    <a href="{{url('/register')}}">
        <button class="btn btn-primary">Add</button>
    </a>
<table class="table">
    <tr>
        <th>SNo.</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    @foreach($customers as $customer)
    @php
    $file_path = '/storage/app/uploads/'.$customer->image;
    echo $file_path;
    @endphp
    <tr>
        <td>{{$customer->customer_id}}</td>
        <td><img src="{{$file_path}}" width="40" height="40" alt="{{$customer->name}}"/></td>
        <td>{{$customer->name}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->phone}}</td>
        <td>
            <a href="{{route('customer.delete',['id' => $customer->customer_id])}}">
                <button class="btn btn-danger">Delete</button>
            </a>
            <a href="{{route('customer.edit',['id' => $customer->customer_id])}}">
                <button class="btn btn-primary">Edit</button>
            </a>
         </td>
    </tr>
    @endforeach
</table>
<div class="row">
    {{$customers->links()}}
</div>
</div>
@endsection