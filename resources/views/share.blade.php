

{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head prefix="og: http://ogp.me/ns#">--}}
    {{--<meta charset="utf-8" />--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<title>Score</title>--}}

    {{--<link rel="shortcut icon" type="image/png" href="https://secure.webtoolhub.com/static/resources/icons/set113/e8eccabf.png"/>--}}
    {{--<meta property="og:title" content="Footbal quiz - Gücün çatar ?" />--}}
    {{--<meta property="og:type" content="website" />--}}
    {{--<meta property="og:url" content="/" />--}}
    {{--<meta property="og:description" content="UEFA Avropa Liqası ilə bağlı biliklərini yoxla ?">--}}
    {{--<meta property="og:image" content="{{ asset('Uploads/Stadion.jpg')  }}" />--}}
    {{--<meta property="og:image:width" content="1200">--}}
    {{--<meta property="og:image:height" content="620">--}}
    {{--<meta property="twitter:image" content="{{ asset('Uploads/Stadion.jpg')  }}"/>--}}
    {{--<meta name="twitter:card" content="summary_large_image">--}}
    {{--<meta name="twitter:site" content="@Baku2019">--}}
    {{--<meta name="twitter:title" content="Footbal quiz - Gücün çatar ?">--}}
    {{--<meta name="twitter:description" content="UEFA Avropa Liqası ilə bağlı biliklərini yoxla !">--}}



    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<link rel="stylesheet" type="text/css" media="screen" href="{{asset("app/dist/index.css")}}" />--}}
    {{--<link rel="stylesheet" type="text/css" media="screen" href="{{asset("app/dist/share.css")}}" />--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" crossorigin="anonymous">--}}
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">--}}
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">--}}
    {{--<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>--}}
    {{--<script src="{{ asset('js/share.js') }}"></script>--}}
{{--</head>--}}
{{--<body>--}}


{{--<main>--}}
    {{--<div class="share-container">--}}

        {{--<h1 class="user-name">  {{ \App\User::find(\App\Quiz::find(request()->id)->user_id)->name  }}</h1>--}}
        {{--<div class="test-result">--}}
            {{--<span class="time">{{ substr(\App\Quiz::find(request()->id)->duration ,0,-3) }} minutes</span>--}}
            {{--<span class="result">{{ \App\Quiz::find(request()->id)->result  }}/{{ \App\Quiz::find(request()->id)->total  }}result</span>--}}
        {{--</div>--}}

        {{--<button  class="custom-btn-login" ><a href="{{ route('login') }}">{{ __('custom.begin') }}</a></button>--}}
    {{--</div>--}}
{{--</main>--}}
{{--</body>--}}
{{--</html>--}}
@extends('layouts.app')

@section('css')
    <link href="{{ asset('app/dist/share.css') }}" type="text/css" media="screen" rel="stylesheet">
@stop

@section('js')
    <script src="{{asset('app/dist/sharebundle.js')}}"></script>

@stop

@section('section')
    {{ __('custom.login') }}

@stop
@section('content')
    <div class="top-main-block">
        <div class="map"><a href="javascript:void(0);">{{ __('custom.map') }}</a></div>
        <div class="main-logo">

          @include('includes.logo')

        </div>
        <div class="logout">

            <a class="logout" href="{{route('logout')}}">
                <button>
                    @php
                        $logout="Logout";

                            if(isset($_COOKIE['locale'])) {
                                if ($_COOKIE['locale'] == "az"){
                                $logout = "Çıxış";
                                }
                            }

                    @endphp
                    {{  $logout}}
                </button></a>

            <a href="javascript:void(0);">{{ __('custom.logout') }}</a></div>
    </div>

    <div class="share-container">
        <div class="level-block">
            <h1>LEVEL 1</h1>
            <h2>1971-1974</h2>
        </div>

    <h1 class="user-name">  {{ \App\User::find(\App\Quiz::find(request()->id)->user_id)->name  }}</h1>
    <div class="test-result">
    <span class="time">{{ substr(\App\Quiz::find(request()->id)->duration ,0,-3) }} minutes</span>
    <span class="result">{{ \App\Quiz::find(request()->id)->result  }}/{{ \App\Quiz::find(request()->id)->total  }}result</span>
    </div>

    <button  class="custom-btn-login" ><a href="{{ route('login') }}">{{ __('custom.begin') }}</a></button>
    </div>
@stop