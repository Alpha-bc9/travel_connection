@extends('template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>

                <div class="card-body">
                @isset($url)
                <form method="POST" action='{{ url("login/$url") }}' aria-label="{{_('Login')}}">
                @else
                <form method="POST" action="{{ route('login') }}" aria-label="{{_('Login')}}">
            
               @endisset
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="card col-5 offset-3">
    <h3 class="pb-3 pt-3 pl-3">User Login</h3>
    <form method="POST" action="{{ route('login') }}">
    @csrf
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

 -->








@endsection
