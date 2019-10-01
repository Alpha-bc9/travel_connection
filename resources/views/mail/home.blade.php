@extends('template')

@section('content')


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-light"> Email</div>

                <div class="card-body">
                
                <form method="POST" action="{{url('send/email')}}">
               @csrf

               @if(Session::has("success"))
               <div class="alert alert-success">
                 <b>Successful</b>,your email sent!
               </div>
               @endif

                        <div class="form-group row">
                            <label for="subject" class="col-md-4 col-form-label text-md-right">Subject</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}" >

                            
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right ">Message</label>

                            <div class="col-md-6">
                                <textarea name="message" class="form-control" id="" cols="30" rows="5"></textarea>

                               
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-success">Send Email</button>
                          </div>
                        </div>
                       
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


  

@endsection