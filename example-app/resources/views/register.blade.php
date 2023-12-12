@extends('layouts.main')
@section('main-section')
<h2>Register</h2>
<form action="{{url('/')}}/register}}" method="post">
    <div class="container">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="user_name" id=""  class="form-control" placeholder="Enter Name" aria-describedby="NameHelp"/>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="user_email" id=""  class="form-control" placeholder="Enter Email" aria-describedby="EmailHelp"/>
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="user_password" id=""  class="form-control" placeholder="Enter Password" aria-describedby="PasswordHelp"/>
    </div>
    <div class="form-group">
        <label for="">Phone</label>
        <input type="text" name="user_phone" id=""  class="form-control" placeholder="Enter Phone" aria-describedby="PhoneHelp"/>
    </div>
    <div class="form-group">
        <label for="">Country</label>
        <input type="text" name="user_country" id=""  class="form-control"  placeholder="Enter country" aria-describedby="Country"/>
    </div>
    <div class="form-group">
        <button  type="submit" class="btn btn-primary">Save</button>
    </div>
</div>
</form>
@endsection