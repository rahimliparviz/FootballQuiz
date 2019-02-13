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

    {{--<div class="alpha-centauri" style="background: url({{ asset('app/assets/top.png') }}) no-repeat center;background-size: cover;"></div>--}}

    <div class="create_accaunt">
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

        </div>

        <div class="or_custom">
            <span class="or">{{ __('custom.or') }}</span>
            <div class="line-border"></div>
        </div>


        <div class="socials-block">

            <ul>
                <li> <h5>{{ __('custom.login_with') }}</h5></li>
                <li>  <a href="{{ url('/redirect') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li>  <a href="{{ url('/redirectg') }}"><i class="fa fa-google" aria-hidden="true"></i></a></li>
            </ul>
        </div>

    </div>





<div id="sidebar" class="login">

    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="flex-container">
            <h1 class="form-title">{{ __('custom.forgot_p') }}</h1>
            <div id="mobile-close">X</div>
        </div>


        <div class="input">
        <input id="email" type="email" placeholder="{{__('custom.email')}}" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="help-block">  <strong>{{ $errors->first('email') }}</strong></span>
        @endif
        </div>

        <div class="input">
            <input id="password" placeholder="{{__('custom.password_p')}}" type="password" class="form-control" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block"><strong>{{ $errors->first('password') }}</strong>    </span>
            @endif
        </div>


        <div class="input">
            <input id="password-confirm"  placeholder="{{__('custom.password_c')}}" type="password" class="form-control" name="password_confirmation" required>

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                     <strong>{{ $errors->first('password_confirmation') }}</strong>
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
                <div id="mobile-closelogin">X</div>
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

    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Reset Password</div>--}}

                    {{--<div class="panel-body">--}}
                        {{--<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">--}}
                            {{--{{ csrf_field() }}--}}

                            {{--<input type="hidden" name="token" value="{{ $token }}">--}}

                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>--}}

                                    {{--@if ($errors->has('email'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                    {{--@if ($errors->has('password'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
                                {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}

                                    {{--@if ($errors->has('password_confirmation'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-6 col-md-offset-4">--}}
                                    {{--<button type="submit" class="btn btn-primary">--}}
                                        {{--Reset Password--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


@stop