@extends('layouts.app')
@section('content')

<div class="container custom-login" style="margin-bottom: 5%;" >
    <div class="row">
    <div class="col-sm-5 m-auto d-block col-sm-offset-3">
        <form method="POST" action="{{ route('login') }}"  style="background: rgb(255, 255, 255); padding:20px; border-radius:9px" >
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq9Ug8Q_LvssBm4JSFQUAGLxJhDRBB1bNRGycWeJBL8w&s" alt="hellos">
            @csrf
            <h1>Login Now</h1>
        <div class="mb-3">
        @csrf
        <label for="email" class="form-label">{{('Email Address') }}</label>
        <input type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >

        @error('email')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
      
    </div>
      <br>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">{{('Enter Password ') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus>
       
    @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
    @enderror
   
</div>
      <br>
      <button type="submit">{{'Login'}}</button>
    </form>
    
    </div>
    </div>
    </div >
@endsection
