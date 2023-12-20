@extends('layouts.main')
@section('main-section')
<h2>{{$title}}</h2>
<form action="{{$url}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="user_name" id="" class="form-control" placeholder="Enter Name" aria-describedby="NameHelp"/>
            <span class="text-danger">
                @error('user_name')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="user_email" id="" class="form-control" placeholder="Enter Email" aria-describedby="EmailHelp"/>
            <span class="text-danger">
                @error('user_email')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="user_password" id="" class="form-control" placeholder="Enter Password" aria-describedby="PasswordHelp"/>
            <span class="text-danger">
                @error('user_password')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" name="user_phone" id="" maxlength="10" class="form-control" placeholder="Enter Phone" aria-describedby="PhoneHelp"/>
            <span class="text-danger">
                @error('user_phone')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Country</label>
            <input type="text" name="user_country" id=""  class="form-control" placeholder="Enter country" aria-describedby="Country"/>
            <span class="text-danger">
                @error('user_country')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="user_image" id=""  class="form-control" placeholder="Upload Image" aria-describedby="Image"/>           
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save"/>
        </div>
    </div>
</form>
@endsection