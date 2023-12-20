@extends('layouts.main')
@section('main-section')

<div class="container">
    <h2>View Trash Customers</h2>
    <a href="{{url('/register')}}">
        <button class="btn btn-primary">Add</button>
    </a>
<table class="table">
    <tr>
        <th>SNo.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    @foreach($customers as $customer)
    <tr>

        <td>{{$customer->customer_id}}</td>
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
</div>
@endsection