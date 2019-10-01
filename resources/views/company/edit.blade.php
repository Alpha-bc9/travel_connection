@extends('template')

@section('style')

<style type="text/css">
  
  .logo{

    /*background-color: red;*/
    
  }

  .logo img{

    width: 150px;
    height: 150px;
    top: -80px;
    /*border: 2px #19B27B solid;*/
    right: 10px;
  }

  .editicon{
    position: relative;
    top: -55px;
    left: 70px;
  }

</style>

@endsection

@section('content')

<div class="container-fluid mt-lg-5">
  <div class="card col-5 offset-3 mb-4">
    <form action="{{route('company.update',$companies->id)}}" method="post" id="" enctype="multipart/form-data">
      @csrf
      @method('PUT')

    <div class="logo col-4 offset-4 mt-5">
      <input type="hidden" name="oldlogo" value="{{$companies->logo}}">
      <img src="{{$companies->logo}}" class="rounded-circle viewlogo" id="Picture">
    </div>
    <div class="col-4 offset-5 mt-3 editicon">
      <label for="edit">
        <i class="fas fa-camera bg-secondary text-white p-2 rounded-circle"></i>
      </label>
      <input type="file"  class="d-none logochg" value="" id="edit">
    </div>

    <div class=" mx-sm-3 mb-2 mt-2">
    
    <input type="text" class="form-control col-8 offset-2" id="inputPassword2" value="{{$companies->name}}" name="name">
    </div>

    <div class=" mx-sm-3 mb-2 mt-4">
    
    <input type="text" class="form-control col-8 offset-2" id="inputPassword2" value="{{$companies->email}}" name="email">
    </div>

    <div class=" mx-sm-3 mb-2 mt-4">
    
    <input type="password" class="form-control col-8 offset-2" id="inputPassword2" value="{{$companies->password}}" name="password">
    </div>

    <div class=" mx-sm-3 mb-2 mt-4">
    
    <input type="text" class="form-control col-8 offset-2" id="inputPassword2" value="{{$companies->phone}}"name="phone">
    </div>

    <div class=" mx-sm-3 mb-2 mt-4">
    
    <input type="text" class="form-control col-8 offset-2" id="inputPassword2" value="{{$companies->website}}" name="website">
    </div>

    <div class=" mx-sm-3 mb-2 mt-4">
    
    <input type="text" class="form-control col-8 offset-2" id="inputPassword2" value="{{$companies->address}}" name="address">
    </div>

    <div>
      <button class="btn btn-success offset-4 mt-3 px-5">Update</button>  
    </div>

  </form>
  </div>
</div> 


@endsection

@section('script')
<script type="text/javascript">
  
  $(document).ready(function(){ 

    $('.logochg').change(function(){


      var currentSrc = $('#Picture').attr('src');

      console.log(currentSrc);
    if(currentSrc==null || currentSrc==""){
    $('#Picture').attr('src','default.png');
    }


    })

  })

</script>

@endsection