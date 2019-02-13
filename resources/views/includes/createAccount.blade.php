<div class="alpha-centauri" style="background: url({{ asset('app/assets/Group-1.png') }}) no-repeat center;background-size: cover;"></div>
<div class="create_accaunt">

    <div class="home-page">
        @include('includes.logo')
    </div>

    @include('includes.languages')

    <h1 class="create-title">{{ __('custom.not_user') }}</h1>

    {{--<a class="desktop-btn" href="{{route('register')}}">{{ __('custom.create_account') }}</a>--}}

    <a href="javascript:void(0);">
        @include('includes.appName')
    <div class="login-btn">
        <span id="login" class="custom-btn-login" >
          {{ __('custom.login') }}
        </span>

        <span class="custom-btn">
            {{ __('custom.create_account') }}
        </span>
        {{--<a class="custom-btn" href="{{route('register')}}">{{ __('custom.create_account') }}</a>--}}
    </div>

    <div @if(config('app.locale') == "az") style = "width:70px !important;" @endif class="or_custom">
        <span class="or">{{ __('custom.or') }}</span>
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