@extends('layouts.auth_layout')

@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Take this cute dog for a date!</h1>
    </div>
    <form method="POST" action="{{ route('login') }}" class="user">
        @csrf 
        <div class="form-group">
            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                id="exampleInputEmail" aria-describedby="emailHelp"
                placeholder="Enter Email Address..."
                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
            <input type="password"
                id="exampleInputPassword" placeholder="Password" 
                class="form-control form-control-user @error('password') is-invalid @enderror" 
                name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <input class="custom-control-input" id="customCheck" type="checkbox" 
                name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="custom-control-label" for="customCheck" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
       
        <button type="submit" class="btn btn-primary btn-user btn-block">
            {{ __('Login') }}
        </button>
        <hr>
        <a href="#" class="btn btn-google btn-user btn-block">
            <i class="fab fa-google fa-fw"></i> Login with Google
        </a>
        <a href="#" class="btn btn-facebook btn-user btn-block">
            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
        </a>
    </form>
    <hr>
    <div class="text-center">
        @if (Route::has('password.request'))
            <a class="small" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </div>
    <div class="text-center">
        <a class="small" href="{{ url('register')}}">Create an Account!</a>
    </div>
</div>
@endsection