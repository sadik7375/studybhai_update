{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"--}}
{{--           value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--    @error('email')--}}
{{--    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--    @enderror--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="row mb-3">--}}
{{--    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--    <div class="col-md-6">--}}
{{--        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"--}}
{{--               name="password" required autocomplete="current-password">--}}

{{--        @error('password')--}}
{{--        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--        @enderror--}}
{{--    </div>--}}
{{--</div>--}}


{{--<div class="row mb-3">--}}
{{--    <div class="col-md-6 offset-md-4">--}}
{{--        <div class="form-check">--}}
{{--            <input class="form-check-input" type="checkbox" name="remember"--}}
{{--                   id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--            <label class="form-check-label" for="remember">--}}
{{--                {{ __('Remember Me') }}--}}
{{--            </label>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('login-assets/style.css') }}"/>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
</head>

<body>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Create Free Account</h1>
            <!-- <div class="social-container">
              <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
              <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div> -->
            <!-- <span>or use your email for registration</span> -->
            <span><br/></span>
            <input type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name"
                   value="{{ old('name') }}" required autocomplete="name" autofocus/>
            @error('name')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}" required autocomplete="email"/>

            @error('email')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror"
                   name="password" required autocomplete="new-password"/>
            @error('password')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation"
                   required autocomplete="new-password"/>


            <span><br></span>
            <button>Sign Up</button>
            <div class="new-here">
                Already have an account?
                <a class="sign-up-link" id="signInLink">Sign In</a>
            </div>
        </form>
    </div>

    <!--Sign in-->
    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Sign in to your account</h1>
            <!-- <div class="social-container">
              <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
              <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div> -->
            <span><br/></span>

            <input type="email" placeholder="Email" name="email" @error('email') is-invalid
                   @enderror value="{{ old('email') }}" required autocomplete="email" autofocus/>

            @error('email')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="password" placeholder="Password" name="password"
                   class="form-control @error('password') is-invalid @enderror"
                   required autocomplete="current-password"/>

            @error('password')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div style="display: flex">
                <div><input type="checkbox" type="checkbox" name="remember"
                            id="remember" {{ old('remember') ? 'checked' : '' }}></div>
                <div><p style="margin-top: 5px; margin-left: 5px !important;">Remember Me</p></div>
            </div>

            <a href="#">Forgot your password?</a>
            <button>Sign In</button>

            <div class="new-here">
                New here?
                <a class="sign-up-link" id="signUpLink">Sign up</a>
            </div>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>One of Us?</h1>
                <p>If you already have an account, just sign in</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>

            <div class="overlay-panel overlay-right">
                <h1>New Here</h1>
                <p>Sign up and start learning</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('login-assets/script.js') }}"></script>
</html>

