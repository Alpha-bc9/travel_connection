@extends('template')

@section('style')

<style type="text/css">
  
  .logo{

    /*background-color: red;*/
    position: absolute;
  }

  .logo img{

    width: 150px;
    height: 150px;
    position: relative;
    top: -80px;
    /*border: 2px #19B27B solid;*/
    right: 10px;
  }

</style>

@endsection


@section('content')




<div class="container-fluid" style="margin-top: 100px;">
  
  <div class="card col-5 offset-3 ">

    <div class="logo col-4 offset-4">
      <img src="{{$companies->logo}}" class="rounded-circle ">
    </div>
    <div style="height: 100px;">
      
    </div>
    <div class="offset-2"> 
        <h4>{{$companies->name}}</h4>

    </div>
        

    <div class="mt-5 cmpinfo">
          <i class="fas fa-envelope-open-text text-success shadow p-3 rounded-circle offset-2" ></i>
          <span>&nbsp;&nbsp;{{$companies->email}}</span>
    </div>

    <div class="mt-5 cmpinfo">
          <i class="fas fa-phone-volume text-success shadow p-3 rounded-circle offset-2"></i>
          <span>&nbsp;&nbsp;{{$companies->phone}}</span>
    </div>

    <div class="mt-5 cmpinfo">
          <i class="fab fa-internet-explorer text-success shadow p-3 rounded-circle offset-2"></i>
          <span>&nbsp;&nbsp;{{$companies->website}}</span>
    </div>


    <div class="mt-5 cmpinfo">
          <i class="fas fa-map-marked-alt text-success shadow p-3 rounded-circle offset-2"></i>
          <span>&nbsp;&nbsp;{{$companies->address}}</span>
    </div>

    <div class="mt-4"> 

      <a href="{{route('company.edit',$companies->id)}}" class="btn btn-success mb-4 offset-4 px-5"><i class="fas fa-user-edit mr-1"></i>Edit</a>
    </div>
  </div>

</div>




    



    






@endsection