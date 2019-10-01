@extends('template')

@section('content')

<div class="card col-5 offset-3">
    <h3 class="pb-3 pt-3 pl-3">Company Login</h3>
    <form>
  <div class="form-group row">
    <div class="col-md-2">
        <i class="fas fa-user pt-1 pl-3 pr-0" style="color: blue" ></i>
    </div>
    <div class="col-8">
      <input type="email" class="form-control" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-md-2">
        <i class="fas fa-unlock-alt pt-1 pl-3 pr-0" style="color: blue"></i>
    </div>
    <div class="col-8">
      <input type="password" class="form-control" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="pl-4">
      <button type="submit" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
</div>










@endsection
