@extends('layouts.main')
@section('main-section')
<h2>Home page</h2>
@if(session()->has('user_name'))
    {{session()->get('user_name')}}
@else
    Guest
@endif
@endsection