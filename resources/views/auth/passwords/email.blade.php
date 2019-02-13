
@extends('layouts.app')

@section('css')
    {{--<link href="{{ asset('app/dist/login.css') }}" type="text/css" media="screen" rel="stylesheet">--}}
    <link href="{{ asset('app/dist/newpassword.css') }}" type="text/css" media="screen" rel="stylesheet">
@stop

@section('js')
    <script src="{{asset('app/dist/newpasswordbundle.js')}}"></script>

@stop

@section('section')
   {{ __('custom.forgot_p') }}
@stop
@section('content')





    {{--<div class="alpha-centauri"     style="background: url({{ asset('app/assets/top.png') }}) no-repeat center;background-size: cover;"></div>--}}

    <div class="create_accaunt">


        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif



        <div class="home-page">
            @include('includes.logo')
        </div>

        @include('includes.languages')

        <h1 class="create-title">{{ __('custom.not_user') }}</h1>


        <a class="desktop-btn" href="{{route('register')}}">{{ __('custom.create_account') }}</a>

        <a href="javascript:void(0);">
            @include('includes.appName')
        </a>


        <div class="login-btn">
            <span id="login" class="custom-btn-login" >{{ __('custom.forgot_p') }}</span>
            <span class="custom-btn" id="signup-btn">{{ __('custom.create_account') }}</span>
            {{--<span class="custom-btn" id="signup-btn">{{ __('custom.create_account') }}</span>--}}

            {{--<span class="custom-btn" id="signup-btn">CREATE ACCAUNT</span>--}}
        </div>

        <div class="or_custom">
            <span  class="or">{{ __('custom.or') }}</span>
            <div class="line-border"></div>
        </div>


        <div class="socials-block">

            <ul>
                <li><h5>{{ __('custom.login_with') }}</h5></li>
                <li>  <a href="{{ url('/redirect') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li>  <a href="{{ url('/redirectg') }}"><i class="fa fa-google" aria-hidden="true"></i></a></li>
            </ul>
        </div>

    </div>


    <div id="sidebar" class="login">
        <form  method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div class="flex-container">
                <h1 class="form-title">{{ __('custom.forgot_p') }}</h1>
                <div id="mobile-close">X</div>
            </div>

            <div class="input">
                <input id="email" type="email" placeholder="{{ __('custom.email') }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block text-danger">
                 <strong>{{ $errors->first('email') }}</strong>
                     </span>
                @endif
            </div>


            <div class="buttons-password">
                <input type="submit" value="{{ __('custom.reset') }}">
            </div>
        </form>

    </div>



    <div id="sign-up-container">

    <form method="POST" id="signup" action="{{ route('register') }}">

    {{ csrf_field() }}

    <div class="flex-container">
    <h1 class="form-title">{{ __('custom.signup') }}</h1>
    <div id="mobile-close-login">X</div>
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

    </div>

@stop