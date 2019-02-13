@extends('layouts.app')

@section('css')
    <link href="{{ asset('app/dist/login.css') }}" type="text/css" media="screen" rel="stylesheet">
    <link href="{{ asset('app/dist/signin.css') }}" type="text/css" media="screen" rel="stylesheet">
    {{--<link href="{{ asset('app/dist/newpassword.css') }}" type="text/css" media="screen" rel="stylesheet">--}}
@stop

@section('js')
    <script src="{{asset('app/dist/loginbundle.js')}}"></script>

@stop

@section('section')
    {{ __('custom.login') }}

@stop
@section('content')

    {{--@include('includes.createAccount')--}}

    {{--<div class="alpha-centauri" style="background: url({{ asset('app/assets/Group-1.png') }}) no-repeat center;background-size: cover;"></div>--}}
    <div class="create_accaunt">

        <div class="home-page">
            @include('includes.logo')
        </div>

        @include('includes.languages')

        <h1 class="create-title">{{ __('custom.not_user') }}</h1>
        <a href="javascript:void(0);">
            @include('includes.appName')
        <div class="login-btn">
            {{--<a id="login" class="custom-btn-login" href="javascript:void(0);">{{ __('custom.login') }}</a>--}}
            {{--<a class="custom-btn" href="javascript:void(0);">    {{ __('custom.create_account') }}</a>--}}

        <span id="login" class="custom-btn-login" >
          {{ __('custom.login') }}
        </span>

            <span class="custom-btn" id="signup-btn">
            {{ __('custom.create_account') }}
        </span>


            {{--<a class="custom-btn-desktop" href="javascript:void(0);">CREATE ACCAUNT</a>--}}


            <a class="custom-btn-desktop" href="{{route('register')}}">{{ __('custom.create_account') }}</a>
        </div>

        <div class="or_custom">
            <span   class="or">{{ __('custom.or') }}</span>
            <div class="line-border"></div>
        </div>
        <div class="socials-block">
            <h5>{{ __('custom.login_with') }}</h5>
            <ul>
                <li>  <a href="{{ url('/redirect') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li>  <a href="{{ url('/redirectg') }}"><i class="fa fa-google" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>






    <div id="sidebar" class="login">
        {{--<form action="" id="signin" method="post">--}}
            {{--<div class="flex-container">--}}
                {{--<h1 class="form-title">LOG IN</h1>--}}
                {{--<div id="mobile-close-login">X</div>--}}
            {{--</div>--}}
            {{--<div class="input">--}}
                {{--<input type="email" placeholder="Email">--}}
            {{--</div>--}}
            {{--<div class="input">--}}
                {{--<input type="password" placeholder="Password">--}}
            {{--</div>--}}
            {{--<div class="forgot-password">--}}
                {{--<a href="javascript:void(0);">--}}
                    {{--Forgot Password--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="buttons-password">--}}
                {{--<input type="submit" value="LOGIN">--}}
            {{--</div>--}}

        {{--</form>--}}

        <form  method="POST" id="signin" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="flex-container">
            <h1 class="form-title">{{ __('custom.login') }}</h1>
            <div id="mobile-close-login">X</div>
            </div>
            <div class="input">
            <input type="email" id="email" placeholder="{{ __('custom.email') }}"  name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
            <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
            </div>
            <div class="input">
            <input id="password" type="password" name="password" required placeholder="{{ __('custom.password_p') }}">
            @if ($errors->has('password'))
            <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            </div>
            <div class="forgot-password">
            <a href="{{ route('password.request') }}">
            {{ __('custom.forgot_p') }}
            </a>
            </div>

            <div class="buttons-password">
            <input type="submit" value="{{ __('custom.login') }}">
            </div>

        </form>
    </div>

    <div id="sign-up-container">

        <form method="POST" id="signup" action="{{ route('register') }}">

        {{ csrf_field() }}

        <div class="flex-container">
        <h1 class="form-title">{{ __('custom.signup') }}</h1>
        <div id="mobile-close">X</div>
        </div>

        <div class="input">
        <input type="text" name="name" placeholder="{{ __('custom.fullName') }}" value="{{ old('name') }}" required>

        @if ($errors->has('name'))
        <span class="help-block text-danger">
        <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
        </div>
        <div class="input">
        <input type="number" name="number" id="number" placeholder="{{ __('custom.number') }}" value="{{ old('number') }}" required>
        @if ($errors->has('number'))
        <span class="help-block text-danger">
        <strong>{{ $errors->first('number') }}</strong>
        </span>
        @endif

        </div>
        <div class="input">
        <input type="Email" name="email" placeholder="{{ __('custom.email') }}" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
        <span class="help-block text-danger">
        <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif

        </div>
        <div class="input">
        <input type="password" name="password" placeholder="{{ __('custom.password_p') }}" required>
        @if ($errors->has('password'))
        <span class="help-block text-danger">
        <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif

        </div>


        <div class="terms">
        <input type="checkbox" name="agree" id="check" >
        <label @if ($errors->has('agree')) class="text-danger" @endif for="check">{{ __('custom.terms') }} <a href="{{route("privacy")}}" class="blue">{{ __('custom.termsLink') }}</a></label>

        @if ($errors->has('agree'))
        <span class="help-block text-danger">
        <strong>*</strong>
        </span>
        @endif
        </div>

        <div class="buttons-password">
        <input type="submit" value="{{ __('custom.signup') }}">
        </div>

        </form>






        {{--<form action="" id="signup" method="post">--}}
        {{--<div class="flex-container">--}}
        {{--<h1 class="form-title">SIGN UP</h1>--}}
        {{--<div id="mobile-close">X</div>--}}
        {{--</div>--}}

        {{--<div class="input">--}}
        {{--<input type="text" placeholder="Full Name">--}}
        {{--</div>--}}
        {{--<div class="input">--}}
        {{--<input type="number" id="number" placeholder="Number">--}}
        {{--</div>--}}
        {{--<div class="input">--}}
        {{--<input type="Email" placeholder="Your email">--}}
        {{--</div>--}}
        {{--<div class="input">--}}
        {{--<input type="password" placeholder="Password">--}}
        {{--</div>--}}


        {{--<div class="terms">--}}
        {{--<input type="checkbox" id="check">--}}
        {{--<label for="check">By click on create account button, You agree to the  <a href="javascript:void(0);" class="blue">Terms&Policies</a></label>--}}
        {{--</div>--}}

        {{--<div class="buttons-password">--}}
        {{--<input type="submit" value="SIGN UP">--}}
        {{--</div>--}}

        {{--</form>--}}
        {{----}}




        {{--<form action="" id="signup" method="post">--}}
            {{--<div class="flex-container">--}}
                {{--<h1 class="form-title">SIGN UP</h1>--}}
                {{--<div id="mobile-close">X</div>--}}
            {{--</div>--}}

            {{--<div class="input">--}}
                {{--<input type="text" placeholder="Full Name">--}}
            {{--</div>--}}
            {{--<div class="input">--}}
                {{--<input type="number" id="number" placeholder="Number">--}}
            {{--</div>--}}
            {{--<div class="input">--}}
                {{--<input type="Email" placeholder="Your email">--}}
            {{--</div>--}}
            {{--<div class="input">--}}
                {{--<input type="password" placeholder="Password">--}}
            {{--</div>--}}


            {{--<div class="terms">--}}
                {{--<input type="checkbox" id="check">--}}
                {{--<label for="check">By click on create account button, You agree to the  <a href="javascript:void(0);" class="blue">Terms&Policies</a></label>--}}
            {{--</div>--}}

            {{--<div class="buttons-password">--}}
                {{--<input type="submit" value="SIGN UP">--}}
            {{--</div>--}}

        {{--</form>--}}
    </div>



    {{--<div id="sidebar" class="login">--}}
        {{--<form  method="POST" action="{{ route('login') }}">--}}
         {{--{{ csrf_field() }}--}}
            {{--<div class="flex-container">--}}
                {{--<h1 class="form-title">{{ __('custom.login') }}</h1>--}}
                {{--<div id="mobile-close">X</div>--}}
            {{--</div>--}}
            {{--<div class="input">--}}
                {{--<input type="email" id="email" placeholder="{{ __('custom.email') }}"  name="email" value="{{ old('email') }}" required autofocus>--}}
                {{--@if ($errors->has('email'))--}}
                {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('email') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}
            {{--<div class="input">--}}
                {{--<input id="password" type="password" name="password" required placeholder="{{ __('custom.password_p') }}">--}}
                {{--@if ($errors->has('password'))--}}
                {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('password') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}
            {{--<div class="forgot-password">--}}
                {{--<a href="{{ route('password.request') }}">--}}
                    {{--{{ __('custom.forgot_p') }}--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="buttons-password">--}}
                {{--<input type="submit" value="{{ __('custom.login') }}">--}}
            {{--</div>--}}

        {{--</form>--}}

    {{--</div>--}}



    {{--<div id="sign-up-container">--}}
        {{--<form action="" id="signup" method="post">--}}
            {{--<div class="flex-container">--}}
                {{--<h1 class="form-title">SIGN UP</h1>--}}
                {{--<div id="mobile-close">X</div>--}}
            {{--</div>--}}

            {{--<div class="input">--}}
                {{--<input type="text" placeholder="Full Name">--}}
            {{--</div>--}}
            {{--<div class="input">--}}
                {{--<input type="number" id="number" placeholder="Number">--}}
            {{--</div>--}}
            {{--<div class="input">--}}
                {{--<input type="Email" placeholder="Your email">--}}
            {{--</div>--}}
            {{--<div class="input">--}}
                {{--<input type="password" placeholder="Password">--}}
            {{--</div>--}}


            {{--<div class="terms">--}}
                {{--<input type="checkbox" id="check">--}}
                {{--<label for="check">By click on create account button, You agree to the  <a href="javascript:void(0);" class="blue">Terms&Policies</a></label>--}}
            {{--</div>--}}

            {{--<div class="buttons-password">--}}
                {{--<input type="submit" value="SIGN UP">--}}
            {{--</div>--}}

        {{--</form>--}}
    {{--</div>--}}


    {{--<form method="POST" action="{{ route('register') }}">--}}

        {{--{{ csrf_field() }}--}}

        {{--<div class="flex-container">--}}
            {{--<h1 class="form-title">{{ __('custom.signup') }}</h1>--}}
            {{--<div id="mobile-close">X</div>--}}
        {{--</div>--}}

        {{--<div class="input">--}}
            {{--<input type="text" name="name" placeholder="{{ __('custom.fullName') }}" value="{{ old('name') }}" required>--}}

            {{--@if ($errors->has('name'))--}}
                {{--<span class="help-block text-danger">--}}
                            {{--<strong>{{ $errors->first('name') }}</strong>--}}
                        {{--</span>--}}
            {{--@endif--}}
        {{--</div>--}}
        {{--<div class="input">--}}
            {{--<input type="number" name="number" id="number" placeholder="{{ __('custom.number') }}" value="{{ old('number') }}" required>--}}
            {{--@if ($errors->has('number'))--}}
                {{--<span class="help-block text-danger">--}}
                            {{--<strong>{{ $errors->first('number') }}</strong>--}}
                        {{--</span>--}}
            {{--@endif--}}

        {{--</div>--}}
        {{--<div class="input">--}}
            {{--<input type="Email" name="email" placeholder="{{ __('custom.email') }}" value="{{ old('email') }}" required>--}}

            {{--@if ($errors->has('email'))--}}
                {{--<span class="help-block text-danger">--}}
                            {{--<strong>{{ $errors->first('email') }}</strong>--}}
                        {{--</span>--}}
            {{--@endif--}}

        {{--</div>--}}
        {{--<div class="input">--}}
            {{--<input type="password" name="password" placeholder="{{ __('custom.password_p') }}" required>--}}
            {{--@if ($errors->has('password'))--}}
                {{--<span class="help-block text-danger">--}}
                            {{--<strong>{{ $errors->first('password') }}</strong>--}}
                        {{--</span>--}}
            {{--@endif--}}

        {{--</div>--}}


        {{--<div class="terms">--}}
            {{--<input type="checkbox" name="agree" id="check" >--}}
            {{--<label @if ($errors->has('agree')) class="text-danger" @endif for="check">{{ __('custom.terms') }} <a href="{{route("privacy")}}" class="blue">{{ __('custom.termsLink') }}</a></label>--}}

            {{--@if ($errors->has('agree'))--}}
                {{--<span class="help-block text-danger">--}}
                    {{--<strong>*</strong>--}}
                    {{--</span>--}}
            {{--@endif--}}
        {{--</div>--}}

        {{--<div class="buttons-password">--}}
            {{--<input type="submit" value="{{ __('custom.signup') }}">--}}
        {{--</div>--}}

    {{--</form>--}}




@stop