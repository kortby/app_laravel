@extends('layouts.auth_layout')


@section('content')

<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
    </div>
    <form method="POST" action="{{ route('register') }}" class="user">
        @csrf
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="exampleFirstName"
                    placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="col-sm-6">
                <input type="email" class="form-control form-control-user  @error('email') is-invalid @enderror" id="exampleInputEmail"
                placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                    id="exampleInputPassword" placeholder="Password" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="col-sm-6">
                <input type="password" class="form-control form-control-user"
                    id="exampleRepeatPassword" placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            {{ __('Register Account') }}
        </button>
        <hr>
        <a href="#" class="btn btn-google btn-user btn-block">
            <i class="fab fa-google fa-fw"></i> Register with Google
        </a>
        <a href="#" class="btn btn-facebook btn-user btn-block">
            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
        </a>
    </form>
    <hr>
    <div class="text-center">
        <a class="small" href="{{ url('login') }}">Already have an account? Login!</a>
    </div>
</div>

@endsection