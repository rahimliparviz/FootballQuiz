
@extends('layouts.app')

@section('css')
    <link href="{{ asset('app/dist/signup.css') }}" type="text/css" media="screen" rel="stylesheet">
@stop

@section('js')
    <script src="{{asset('app/dist/signupbundle.js')}}"></script>

@stop

@section('section')
    {{ __('custom.login') }}

@stop
@section('content')


    <div class="alpha-centauri"
         style="background: url({{ asset('app/assets/group.png') }}) no-repeat center;background-size: cover;"></div>

    <div class="create_accaunt">
        <div class="home-page">
        @include('includes.logo')
        </div>
        <!-- language bar -->
        <div id="lang-menu" class="lang-menu hide-desktop">
            <div><span>{{strtoupper(config('app.locale'))}}</span></div>
            <ul>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    @if(strtoupper(config('app.locale')) !=   $properties['name'] )
                        <li>
                            <a rel="alternate" class="locale" data-locale="{{ $localeCode }}" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['name'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
        <script>
            $('.locale').click(function(){
                document.cookie = `locale=${$(this).data('locale')}`;
            })
        </script>
        <!-- language bar END -->





        <h1 class="create-title">{{ __('custom.user') }}</h1>
        <div class="mobile-logo">
          @include('includes.logo')
        </div>
        <a href="javascript:void(0);">
            @include('includes.appName')
        <div class="login-btn">
            <span id="login" class="custom-btn-login">{{ __('custom.login') }}</span>
            <span class="custom-btn">{{ __('custom.create_account') }}</span>


            <a href="{{ route('login') }}" class="custom-btn-login-desktop">{{ __('custom.login') }}</a>


        </div>

        {{--<div class="or_custom">--}}
            {{--<span class="or">{{ __('custom.or') }}</span>--}}
            {{--<div class="line-border"></div>--}}
        {{--</div>--}}


        {{--<div class="or_custom">--}}
            {{--<span class="or">{{ __('custom.or') }}</span>--}}
            {{--<div class="line-border"></div>--}}
        {{--</div>--}}
        {{--<div class="socials-block">--}}
            {{--<h5>{{ __('custom.login_with') }}</h5>--}}
            {{--<ul>--}}
                {{--<li>  <a href="{{ url('/redirect') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
                {{--<li>  <a href="{{ url('/redirectg') }}"><i class="fa fa-google" aria-hidden="true"></i></a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}

    </div>
    <div id="sidebar" class="login">
        <!-- language bar -->

        @include('includes.languages')

    <!-- language bar END -->


        <form method="POST"  action="{{ route('register') }}">

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

    </div>




    <div id="signin-container">
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



@stop