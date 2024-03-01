@extends('layouts.app')

@section('content')
<div class="container custom-login"  style="margin-bottom: 5%; margin-top:-3%;" >
    <div class="row">
    <div class="col-sm-5 m-auto d-block col-sm-offset-3">
        <form method="POST" action="{{ route('register') }}" style="padding:25px;" style="background-color:rgb(247, 242, 242);">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq9Ug8Q_LvssBm4JSFQUAGLxJhDRBB1bNRGycWeJBL8w&s" alt="hellos">
            @csrf
      <h1>sign Up</h1>
      <div class="mb-3">
        @csrf
        <label for="name" class="col-md-4 col-form-label " style="font-size: 19px; font-weight:600; padding-left:0.4%;">{{ __('Name') }}</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus 
        style="margin-bottom:-7%;">

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
      </div>
      <br>
      <div class="mb-3">
        <label for="email" class="col-md-4 col-form-label " style="font-size: 19px; font-weight:600; padding-left:0.4%;">{{ __('Email Address') }}</label>
        <input id="email" type="email"  style="margin-bottom:-7%;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
       
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
      </div>
      <br>
      <div class="mb-3">
        <label for="password" class="col-md-4 col-form-label " style="font-size: 19px; font-weight:600; padding-left:0.4%;">{{ __('Password') }}</label>
        <input id="password" type="password"  style="margin-bottom:-7%;" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror   
      </div>
      <br>
      <div class="mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label " style="font-size: 19px; font-weight:600; padding-left:0.4%;">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password"  style="margin-bottom:-2%;" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>
      <br>
      <button type="submit"> {{('Register') }}</button>
    </form>
    
    </div>
    </div>
    </div >
@endsection
