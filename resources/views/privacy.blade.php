@extends('layouts.app')

@section('css')
    <link href="{{ asset('app/dist/index.css') }}" type="text/css" media="screen" rel="stylesheet">
@endsection

@section('js')
    {{--<script src="{{asset('app/dist/indexbundle.js')}}"></script>--}}
@endsection

@section('content')

    <div id="main-content" style="height: 100%;">

       
  <div class="main-txt">

        @if(config('app.locale') == 'az')
          Əgər internet tətbiqetməsindən istifadə zamanı şəxsi və ya biznes məlumatlarınızın yazılması (elektron poçt, ad, poçt indeksi və s.) tələb olunursa, qeydiyyat prosesində bu cür məlumatlar yalnız istifadəçinin özü tərəfindən, şəxsi təşəbbüsü və razılığı ilə ötürülür. Bu sayt şəxsi məlumatlarınızı abunə olmadığınız elektron poçt sistemlərində istifadə etməyəcək.
        @else
          If within the framework of the internet offer, there is an occasion to personal or business information (email addresses, names, postal addresses), then such registration is carried out by the user himself and solely on personal initiative. Your personal information will be provided only on your own initiative and request. This site will not use your personal informations in mailing systems to which you do not subscribe.
        @endif


        </div>
        <button style="padding:0;
        outline: none;
    background: #fff;
    color: #000;
    text-decoration: none;
    border-radius: 50rem;
    font-size: 17px;
    letter-spacing: .17px;
    margin-bottom: 40px;
border: none;"  id="start-btn"><a style="padding: 10px 40px;display: block; color: black" href="{{ route('register') }}">{{ __('custom.back') }}</a></button>
      
    </div>

    @endsection
   
