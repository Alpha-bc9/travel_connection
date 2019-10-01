@extends('template')

@section('content')
<div class="container-fluid">
  
  <div class="card col-5">
    <form action="{{route('companyregister')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1>Company Register</h1>

    <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1"  placeholder="name" name="name">
    @error('name')
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
    <label for="exampleFormControlInput1">Phone</label>
    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Phone Number" name="phone">
    @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Website</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="website" name="website">

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

  <div class="from-group row">
    <label for="inputProfile">
    Logo   
    </label>
    <input type="file" class="form-control @error('logo') is-invalid @enderror" id="inputProfile" name="logo" placeholder="Logo">
    @error('logo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
    @enderror
  </div><br>

  

  <div>
    <input class="btn btn-success" type="submit" value="Save">
  </div>

</form>
  </div>
  

</div>
  

@endsection