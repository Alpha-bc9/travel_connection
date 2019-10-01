@extends('template')

@section('content')
<div class="container-fluid">
  
  <div class="card col-5">
    <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
    @csrf
    <h1>User Register</h1>

    

    <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="name" name="name">
    @error('name')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>

  <div class="form-group">
      <label for="role">{{ __('Role') }}</label>

      
          <select class="c-select form-control" id="role" name="role">
      
              <option value="admin">admin</option>
              <option value="company">company</option>
              <option value="user" selected>user</option>
      
      </select>
          @error('role')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
     
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
    @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleFormControlInput1" placeholder="password" name="password">
    @error('password')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>  

  <div class="form-group">
    <label for="exampleFormControlInput1">Confirm Password</label>
    <input type="password" class="form-control @error('confirmpassword') is-invalid @enderror" id="exampleFormControlInput1" placeholder="confirm password" name="password_confirmation">
    @error('confirmpassword')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>  

  <div class="form-group">
    <label for="exampleFormControlInput1">Phone</label>
    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Phone Number" name="phone">
    @error('phone')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control @error('address') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
    @error('address')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>

  <div class="from-group">
    <label for="inputProfile">Profile</label>
    <input type="file" class="form-control @error('profile') is-invalid @enderror" id="inputProfile" name="profile" placeholder="Profile">
    @error('profile')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
    @enderror
  </div><br>

  <div>
    <button class="btn btn-success" type="submit">Save</button>
  </div>

</form>
  </div>
  

</div>
  

@endsection