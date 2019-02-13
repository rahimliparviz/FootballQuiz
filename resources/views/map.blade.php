@extends('layouts.app')

{{--{{ \App\Quiz::isDatePast('2019-01-18') }}--}}

@section('css')
    <link href="{{ asset('app/dist/map.css') }}" type="text/css" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@endsection

@section('js')
    <script src="{{asset('app/dist/mapbundle.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


@endsection

@section('content')


@include('includes.liderboard')



@php
    $id = Auth::user()->id;
    $canPlay =\App\Quiz::canPlay($id,1);


            $dates =
                 ['2019-02-17',
                 '2019-02-17',
                 '2019-02-25',
                 '2019-02-25',
                 '2019-03-04',
                 '2019-03-11',
                 '2019-03-18',
                 '2019-03-25',
                 '2019-04-01',
                 '2019-04-08',
                 '2019-04-15',
                 '2019-04-22',
                 '2019-04-29',
                 '2019-05-06',
                 '2019-05-13'
                 ];




     $popupDates =
                 ['17/02/2019',
                 '17/02/2019',
                 '25/02/2019',
                 '25/02/2019',
                 '04/03/2019',
                 '11/03/2019',
                 '18/03/2019',
                 '25/03/2019',
                 '01/04/2019',
                 '08/04/2019',
                 '15/04/2019',
                 '22/04/2019',
                 '29/04/2019',
                 '06/05/2019',
                 '13/05/2019'
        ]


@endphp

<div id="map">



    <div class="bottom-levels">

        <div id="line-3">
            <!-- IF NEED TO SHOW MODAL JUST ADD DATA MODAL  AND DATA TARGET ATTRIBUTE TO BALL'S WITH ID EL -->
            <a
                    @if(!\App\Quiz::canPlay($id,1))
                    href="javascript:void(0)" class="active"

                    @else

                    @if(\App\Quiz::isDatePast($dates[0]))
                    class="active" href="{{ route('quiz',['id'=>$id,'level'=>1]) }}"
                    @else

                    href="javascript:void(0)"
                    @endif

                    @endif

            >
                <img
                        @if(!\App\Quiz::isDatePast($dates[0]))
                          data-toggle="modal"
                          data-target="#exampleModal1"
                          data-whatever="@mdo"
                      @endif
                      @if(!$canPlay)
                          data-toggle="modal" data-target="#exampleModal"
                      @endif

                        src="{{ asset('app/assets/active-ball.png') }}"
                        alt=""
                        id="el1"
                >
            </a>
            <a
                    @if(!\App\Quiz::canPlay($id,2))
                    href="javascript:void(0)" class="active"

                    @else

                    @if(\App\Quiz::isDatePast($dates[1]))
                    class="active" href="{{ route('quiz',['id'=>5,'level'=>2]) }}"
                    @else
                    href="javascript:void(0)"
                    @endif


                    @endif
            >
                <img id="el2" src="{{ asset('app/assets/ball.png') }}" alt=""

                     @if(!\App\Quiz::canPlay($id,2))
                        data-toggle="modal" data-target="#exampleModal"
                     @endif

                     @if(!\App\Quiz::isDatePast($dates[1]))
                         data-toggle="modal"
                         data-target="#exampleModal2"
                         data-whatever="@mdo"
                     @endif

                >
            </a>

        </div>


    <div id="line-4">
            <a

                    @if(!\App\Quiz::canPlay($id,3))
                    href="javascript:void(0)" class="active"

                    @else


                    @if(\App\Quiz::isDatePast($dates[2]))
                href="{{ route('quiz',['id'=>$id,'level'=>3]) }}"
            @else
              href="javascript:void(0)"
            @endif

                    @endif
            >
                <img id="el4"  src="{{ asset('app/assets/ball.png') }}" alt=""
                     @if(\App\Quiz::isDatePast($dates[2]))
                        class="active"
                     @endif


                     @if(!\App\Quiz::canPlay($id,3))
                     data-toggle="modal" data-target="#exampleModal"
                     @endif

                     @if(!\App\Quiz::isDatePast($dates[2]))
                     data-toggle="modal"
                     data-target="#exampleModal3"
                     data-whatever="@mdo"
                        @endif
                >
            </a>

        </div>
        <div id="line-5">
            <a

                    @if(!\App\Quiz::canPlay($id,4))
                    href="javascript:void(0)" class="active"

                    @else


                    @if(\App\Quiz::isDatePast($dates[3]))
                    href="{{ route('quiz',['id'=>$id,'level'=>4]) }}"
                    @else
                    href="javascript:void(0)"
                    @endif

                    @endif
            >
                <img id="el5"  src="{{ asset('app/assets/ball.png') }}" alt=""
                     @if(\App\Quiz::isDatePast($dates[3]))
                     class="active"
                        @endif


                     @if(!\App\Quiz::canPlay($id,4))
                     data-toggle="modal" data-target="#exampleModal"
                     @endif

                     @if(!\App\Quiz::isDatePast($dates[3]))
                     data-toggle="modal"
                     data-target="#exampleModal4"
                     data-whatever="@mdo"
                        @endif
                >
            </a>

        </div>
        <div id="line-6">
            <a
                    @if(!\App\Quiz::canPlay($id,5))
                    href="javascript:void(0)" class="active"

                    @else


                    @if(\App\Quiz::isDatePast($dates[4]))
                    href="{{ route('quiz',['id'=>$id,'level'=>5]) }}"
                    @else
                    href="javascript:void(0)"
                    @endif

                    @endif
            >
                <img id="el6"  src="{{ asset('app/assets/ball.png') }}" alt=""
                     @if(\App\Quiz::isDatePast($dates[4]))
                     class="active"
                        @endif


                     @if(!\App\Quiz::canPlay($id,5))
                     data-toggle="modal" data-target="#exampleModal"
                     @endif

                     @if(!\App\Quiz::isDatePast($dates[4]))
                     data-toggle="modal"
                     data-target="#exampleModal5"
                     data-whatever="@mdo"
                        @endif
                >
            </a>
        </div>
        <div id="line-7">
            <a
                    @if(!\App\Quiz::canPlay($id,6))
                    href="javascript:void(0)" class="active"

                    @else


                    @if(\App\Quiz::isDatePast($dates[5]))
                    href="{{ route('quiz',['id'=>$id,'level'=>6]) }}"
                    @else
                    href="javascript:void(0)"
                    @endif

                    @endif
            >
                <img id="el7"  src="{{ asset('app/assets/ball.png') }}" alt=""
                     @if(\App\Quiz::isDatePast($dates[5]))
                     class="active"
                        @endif


                     @if(!\App\Quiz::canPlay($id,6))
                     data-toggle="modal" data-target="#exampleModal"
                     @endif

                     @if(!\App\Quiz::isDatePast($dates[5]))
                     data-toggle="modal"
                     data-target="#exampleModal6"
                     data-whatever="@mdo"
                        @endif
                >
            </a>
        </div>
        <div id="line-8">
            <a
                    @if(!\App\Quiz::canPlay($id,7))
                    href="javascript:void(0)" class="active"

                    @else


                    @if(\App\Quiz::isDatePast($dates[6]))
                    href="{{ route('quiz',['id'=>$id,'level'=>7]) }}"
                    @else
                    href="javascript:void(0)"
                    @endif

                    @endif
            >
                <img id="el8"  src="{{ asset('app/assets/ball.png') }}" alt=""
                     @if(\App\Quiz::isDatePast($dates[6]))
                     class="active"
                        @endif


                     @if(!\App\Quiz::canPlay($id,7))
                     data-toggle="modal" data-target="#exampleModal"
                     @endif

                     @if(!\App\Quiz::isDatePast($dates[6]))
                     data-toggle="modal"
                     data-target="#exampleModal7"
                     data-whatever="@mdo"
                        @endif
                >
            </a>
        </div>
        <div id="line-9">
            <a

                    @if(!\App\Quiz::canPlay($id,8))
                    href="javascript:void(0)" class="active"

                    @else


                    @if(\App\Quiz::isDatePast($dates[7]))
                    href="{{ route('quiz',['id'=>$id,'level'=>8]) }}"
                    @else
                    href="javascript:void(0)"
                    @endif

                    @endif
            >
                <img id="el9"  src="{{ asset('app/assets/ball.png') }}" alt=""
                     @if(\App\Quiz::isDatePast($dates[7]))
                     class="active"
                        @endif


                     @if(!\App\Quiz::canPlay($id,8))
                     data-toggle="modal" data-target="#exampleModal"
                     @endif

                     @if(!\App\Quiz::isDatePast($dates[7]))
                     data-toggle="modal"
                     data-target="#exampleModal8"
                     data-whatever="@mdo"
                        @endif
                >
            </a>
        </div>



        <div id="line-10">
            <a
                    @if(!\App\Quiz::canPlay($id,9))
                        href="javascript:void(0)" class="active"
                    @else
                        @if(\App\Quiz::isDatePast($dates[8]))
                                href="{{ route('quiz',['id'=>$id,'level'=>9]) }}"
                            @else
                                 href="javascript:void(0)"
                        @endif
                    @endif
            >
                <img id="el10"  src="{{ asset('app/assets/ball.png') }}" alt=""
                     @if(\App\Quiz::isDatePast($dates[8]))
                     class="active"
                        @endif


                     @if(!\App\Quiz::canPlay($id,9))
                     data-toggle="modal" data-target="#exampleModal"
                     @endif

                     @if(!\App\Quiz::isDatePast($dates[8]))
                     data-toggle="modal"
                     data-target="#exampleModal9"
                     data-whatever="@mdo"
                        @endif
                >
            </a>
        </div>








        <div id="line-11">
            <a

                    @if(!\App\Quiz::canPlay($id,10))
                    href="javascript:void(0)" class="active"

                    @else

                    @if(\App\Quiz::isDatePast($dates[9]))
                    href="{{ route('quiz',['id'=>$id,'level'=>10]) }}"
                    @else
                    href="javascript:void(0)"
                    @endif

                    @endif
            >
                <img id="el11"  src="{{ asset('app/assets/ball.png') }}" alt=""
                     @if(\App\Quiz::isDatePast($dates[9]))
                     class="active"
                        @endif

                     @if(!\App\Quiz::canPlay($id,10))
                     data-toggle="modal" data-target="#exampleModal"
                     @endif

                     @if(!\App\Quiz::isDatePast($dates[9]))
                     data-toggle="modal"
                     data-target="#exampleModal10"
                     data-whatever="@mdo"
                        @endif
                >
            </a>
        </div>

        <div id="line-12">
            <a
                    @if(!\App\Quiz::canPlay($id,11))
                    href="javascript:void(0)" class="active"

                    @else



                    @if(\App\Quiz::isDatePast($dates[10]))
                    href="{{ route('quiz',['id'=>$id,'level'=>11]) }}"
                    @else
                    href="javascript:void(0)"
                    @endif

                    @endif
            >
                <img id="el12"  src="{{ asset('app/assets/ball.png') }}" alt=""
                     @if(\App\Quiz::isDatePast($dates[10]))
                     class="active"
                        @endif

                     @if(!\App\Quiz::canPlay($id,11))
                     data-toggle="modal" data-target="#exampleModal"
                     @endif

                     @if(!\App\Quiz::isDatePast($dates[10]))
                     data-toggle="modal"
                     data-target="#exampleModal11"
                     data-whatever="@mdo"
                        @endif
                >
            </a>
        </div>

        <div id="line-13">
            <a

                    @if(!\App\Quiz::canPlay($id,12))
                    href="javascript:void(0)" class="active"

                    @else


                    @if(\App\Quiz::isDatePast($dates[11]))
                    href="{{ route('quiz',['id'=>$id,'level'=>12]) }}"
                    @else
                    href="javascript:void(0)"
                    @endif

                    @endif
            >
                <img id="el13"  src="{{ asset('app/assets/ball.png') }}" alt=""
                     @if(\App\Quiz::isDatePast($dates[11]))
                     class="active"
                        @endif


                     @if(!\App\Quiz::canPlay($id,12))
                     data-toggle="modal" data-target="#exampleModal"
                     @endif

                     @if(!\App\Quiz::isDatePast($dates[11]))
                     data-toggle="modal"
                     data-target="#exampleModal12"
                     data-whatever="@mdo"
                        @endif
                >
            </a>

        </div>
        <div id="line-14">
            <a
                    @if(!\App\Quiz::canPlay($id,13))
                    href="javascript:void(0)" class="active"

                    @else



                    @if(\App\Quiz::isDatePast($dates[12]))
                    href="{{ route('quiz',['id'=>$id,'level'=>13]) }}"
                    @else
                    href="javascript:void(0)"
                    @endif

                    @endif
            >
                <img id="el14"  src="{{ asset('app/assets/ball.png') }}" alt=""
                     @if(\App\Quiz::isDatePast($dates[12]))
                     class="active"
                        @endif


                     @if(!\App\Quiz::canPlay($id,13))
                     data-toggle="modal" data-target="#exampleModal"
                     @endif

                     @if(!\App\Quiz::isDatePast($dates[12]))
                     data-toggle="modal"
                     data-target="#exampleModal13"
                     data-whatever="@mdo"
                        @endif
                >
            </a>
        </div>
        <div id="line-15">
            <a
                    @if(!\App\Quiz::canPlay($id,14))
                    href="javascript:void(0)" class="active"

                    @else



                    @if(\App\Quiz::isDatePast($dates[13]))
                    href="{{ route('quiz',['id'=>$id,'level'=>14]) }}"
                    @else
                    href="javascript:void(0)"
                    @endif

                    @endif
            >
                <img id="el15"  src="{{ asset('app/assets/ball.png') }}" alt=""
                     @if(\App\Quiz::isDatePast($dates[13]))
                     class="active"
                        @endif

                     @if(!\App\Quiz::canPlay($id,14))
                     data-toggle="modal" data-target="#exampleModal"
                     @endif

                     @if(!\App\Quiz::isDatePast($dates[13]))
                     data-toggle="modal"
                     data-target="#exampleModal14"
                     data-whatever="@mdo"
                        @endif
                >
            </a>

        </div>
        <div id="line-16">
            <a
                    @if(!\App\Quiz::canPlay($id,15))
                        href="javascript:void(0)" class="active"
                    @else
                    @if(\App\Quiz::isDatePast($dates[14]))
                    href="{{ route('quiz',['id'=>$id,'level'=>15]) }}"
                    @else
                    href="javascript:void(0)"
                    @endif

                    @endif
            >
                <img id="el16"  src="{{ asset('app/assets/ball.png') }}" alt=""
                     @if(\App\Quiz::isDatePast($dates[14]))
                     class="active"
                        @endif


                     @if(!\App\Quiz::canPlay($id,15))
                     data-toggle="modal" data-target="#exampleModal"
                     @endif

                     @if(!\App\Quiz::isDatePast($dates[14]))
                     data-toggle="modal"
                     data-target="#exampleModal15"
                     data-whatever="@mdo"
                        @endif
                >
            </a>
        </div>




        <!-- LINES  -->
        <!-- IMAGE BLOCKS START -->
        <div class="image-block" id="div7">
            <span class="faq"  data-toggle="modal" data-target="#rulesModal" >
                @if(config('app.locale') == 'en')
                    FAQ
                    @else
                    TTS
                @endif

            </span>
            <div class="text-div6">{{ __('custom.level') }} 5 <br>1983-1986</div>
            <img class="eleventh" src="{{ asset('app/assets/quiz/level-11.jpg') }}">
        </div>
        <div class="image-block" id="div3">
            <div class="text-div7">{{ __('custom.level') }} 6 <br>1986-1989</div>
            <img class="twelve" src="{{ asset('app/assets/quiz/level-12.jpg') }}">

        </div>
        <div class="image-block" id="div2">
            <div class="text-div8">{{ __('custom.level') }} 7 <br>1989-1992</div>
            <img class="thirteen"  src="{{ asset('app/assets/quiz/level-13.jpg') }}">
        </div>

        <div class="image-block" id="div11">
            <div class="text-div12">{{ __('custom.level') }} 11 <br>2001-2004</div>
            <img class="fourteen" src="{{ asset('app/assets/quiz/level-14.jpg') }}">
        </div>

        <div class="image-block" id="div12">
            <a class="logout" href="{{ route('logout') }}">{{ __('custom.logout') }}</a>
            <div class="text-div13">{{ __('custom.level') }} 12 <br>2004-2007</div>
            <img class="fiveteen" src="{{ asset('app/assets/quiz/level-15.jpg') }}">
        </div>

        <div class="image-block" id="div6">
            <div class="text-div4">{{ __('custom.level') }} 3 <br>1977-1980</div>
            <img class="sixth" src="{{ asset('app/assets/quiz/level-6.jpg') }}">
        </div>

        <div class="image-block" id="div1">
            <div class="text-div11">{{ __('custom.level') }} 4 <br>1980-1983</div>
            <img class="seventh"  src="{{ asset('app/assets/quiz/level-7.jpg') }}">
        </div>

        <div class="image-block" id="div8">
            <div class="text-div5">{{ __('custom.level') }} 8 <br>1992-1998</div>
            <img class="eighth" src="{{ asset('app/assets/quiz/level-8.jpg') }}">
        </div>

        <div class="image-block" id="div10">
            <div class="text-div9">{{ __('custom.level') }} 10 <br>1998-2001</div>
            <img class="nineth" src="{{ asset('app/assets/quiz/level-9.jpg') }}">
        </div>
        <div class="image-block" id="div13">
            <div class="text-div14">{{ __('custom.level') }} 13 <br>2007-2011</div>
            <img class="tenth" src="{{ asset('app/assets/quiz/level-10.jpg') }}">
        </div>
        <div id="div4" class="image-block   @if(\App\Quiz::isDatePast($dates[0])) active @endif">
            <div class="text-div2">{{ __('custom.level') }} 1 <br>1971-1974</div>
            <img class="first" src="{{ asset('app/assets/quiz/level-1.jpg') }}">
        </div>
        <div id="div5" class="image-block">
            <div class="text-div3">{{ __('custom.level') }} 2 <br>1971-1974</div>
            <img class="second" src="{{ asset('app/assets/quiz/level-2.jpg') }}">
        </div>

        <div class="image-block" id="div9">
            <div class="text-div10">{{ __('custom.level') }} 9 <br>1995-1998</div>
            <img class="third"  src="{{ asset('app/assets/quiz/level-3.jpg') }}">
        </div>

        <div class="image-block" id="div14">
            <div class="text-div15">{{ __('custom.level') }} 14 <br>2011-2014</div>
            <img class="fourth" src="{{ asset('app/assets/quiz/level-4.jpg') }}">
            <!-- <div class="ball">
                <img src="../assets/ball.png" alt="ball">
            </div> -->
        </div>
        <div class="image-block" id="div15">
            <div class="text-div16">{{ __('custom.level') }} 15 <br>2014-2018</div>
            <img class="fifth" src="{{ asset('app/assets/quiz/level-5.jpg') }}">

        </div>


    </div>
    <div class="mobile-container">
        <a data-toggle="modal" data-target="#rulesModal" href="javacript:void(0);">
            @if(config('app.locale') == 'en')
                FAQ
            @else
                TTS
            @endif

        </a>
        <a href="{{ route('logout') }}">{{ __('custom.logout') }}</a>
    </div>
    <div class="mobile-level">

        <div class="left-handside">
            <div class="ball-container">
                <span>{{ __('custom.level') }} 15 <br> 2014 - 2018</span>


                    @if(\App\Quiz::isDatePast($dates[14]))
                        <a
                                @if(!\App\Quiz::canPlay($id,15))
                                href="javascript:void(0)" class="active"
                                @else
                                @if(\App\Quiz::isDatePast($dates[14]))
                                href="{{ route('quiz',['id'=>$id,'level'=>15]) }}"
                                @else
                                href="javascript:void(0)" style="cursor:not-allowed;"
                                @endif
                                @endif

                        >
                            <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-15" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                        </a>
                    @else
                        <img id="lvl-15" src="{{ asset('app/assets/ball.png') }}" alt=""
                             data-toggle="modal"
                             data-target="#exampleModal15"
                             data-whatever="@mdo"
                        >
                    @endif


            </div>

            <div class="ball-container">
                <span>{{ __('custom.level') }} 13 <br> 2007 - 2011</span>

                @if(\App\Quiz::isDatePast($dates[12]))
                    <a
                            @if(!\App\Quiz::canPlay($id,13))
                            href="javascript:void(0)" class="active"
                            @else
                            @if(\App\Quiz::isDatePast($dates[12]))
                            href="{{ route('quiz',['id'=>$id,'level'=>13]) }}"
                            @else
                            href="javascript:void(0)" style="cursor:not-allowed;"
                            @endif
                            @endif
                    >
                        <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-13" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                    </a>
                @else
                    <img id="lvl-13" src="{{ asset('app/assets/ball.png') }}" alt=""
                         data-toggle="modal"
                         data-target="#exampleModal13"
                         data-whatever="@mdo"
                    >
                @endif


            </div>


            <div class="ball-container">
                <span>{{ __('custom.level') }} 11 <br> 2001 - 2004</span>
                @if(\App\Quiz::isDatePast($dates[10]))
                    <a   @if(!\App\Quiz::canPlay($id,11))
                         href="javascript:void(0)" class="active"
                         @else
                         @if(\App\Quiz::isDatePast($dates[10]))
                         href="{{ route('quiz',['id'=>$id,'level'=>11]) }}"
                         @else
                         href="javascript:void(0)" style="cursor:not-allowed;"
                            @endif
                            @endif>
                        <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-11" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                    </a>
                @else
                    <img id="lvl-11" src="{{ asset('app/assets/ball.png') }}" alt=""
                         data-toggle="modal"
                         data-target="#exampleModal11"
                         data-whatever="@mdo"
                    >
                @endif
            </div>




            <div class="ball-container">
                <span>{{ __('custom.level') }} 9 <br> 1995 - 1998</span>
                @if(\App\Quiz::isDatePast($dates[8]))
                    <a   @if(!\App\Quiz::canPlay($id,9))
                         href="javascript:void(0)" class="active"
                         @else
                         @if(\App\Quiz::isDatePast($dates[8]))
                         href="{{ route('quiz',['id'=>$id,'level'=>9]) }}"
                         @else
                         href="javascript:void(0)" style="cursor:not-allowed;"
                            @endif
                            @endif>
                        <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-9" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                    </a>
                @else
                    <img id="lvl-9" src="{{ asset('app/assets/ball.png') }}" alt=""
                         data-toggle="modal"
                         data-target="#exampleModal9"
                         data-whatever="@mdo"
                    >
                @endif            </div>
            <div class="ball-container">
                <span>{{ __('custom.level') }} 7 <br> 1989 - 1992</span>
                @if(\App\Quiz::isDatePast($dates[6]))
                    <a   @if(!\App\Quiz::canPlay($id,7))
                         href="javascript:void(0)" class="active"
                         @else
                         @if(\App\Quiz::isDatePast($dates[6]))
                         href="{{ route('quiz',['id'=>$id,'level'=>7]) }}"
                         @else
                         href="javascript:void(0)" style="cursor:not-allowed;"
                            @endif
                            @endif>
                        <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-7" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                    </a>
                @else
                    <img id="lvl-7" src="{{ asset('app/assets/ball.png') }}" alt=""
                         data-toggle="modal"
                         data-target="#exampleModal7"
                         data-whatever="@mdo"
                    >
                @endif            </div>
            <div class="ball-container">
                <span>{{ __('custom.level') }} 5 <br> 1983 - 1986</span>
                @if(\App\Quiz::isDatePast($dates[4]))
                    <a   @if(!\App\Quiz::canPlay($id,5))
                         href="javascript:void(0)" class="active"
                         @else
                         @if(\App\Quiz::isDatePast($dates[4]))
                         href="{{ route('quiz',['id'=>$id,'level'=>5]) }}"
                         @else
                         href="javascript:void(0)" style="cursor:not-allowed;"
                            @endif
                            @endif>
                        <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-5" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                    </a>
                @else
                    <img id="lvl-5" src="{{ asset('app/assets/ball.png') }}" alt=""
                         data-toggle="modal"
                         data-target="#exampleModal5"
                         data-whatever="@mdo"
                    >
                @endif
            </div>
            <div class="ball-container">
                <span>{{ __('custom.level') }} 3 <br> 1977 - 1980</span>
                @if(\App\Quiz::isDatePast($dates[2]))
                    <a   @if(!\App\Quiz::canPlay($id,3))
                         href="javascript:void(0)" class="active"
                         @else
                         @if(\App\Quiz::isDatePast($dates[2]))
                         href="{{ route('quiz',['id'=>$id,'level'=>3]) }}"
                         @else
                         href="javascript:void(0)" style="cursor:not-allowed;"
                            @endif
                            @endif>
                        <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-3" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                    </a>
                @else
                    <img id="lvl-3" src="{{ asset('app/assets/ball.png') }}" alt=""
                         data-toggle="modal"
                         data-target="#exampleModal3"
                         data-whatever="@mdo"
                    >
                @endif
            </div>
            <div class="ball-container" style="margin-bottom: 20px">
                <span>{{ __('custom.level') }} 1 <br> 1971 - 1974</span>
                @if(\App\Quiz::isDatePast($dates[0]))
                    <a
                            @if(!\App\Quiz::canPlay($id,1))
                          href="javascript:void(0)" class="active"
                          @else
                          @if(\App\Quiz::isDatePast($dates[0]))
                          href="{{ route('quiz',['id'=>$id,'level'=>1]) }}"
                          @else
                          href="javascript:void(0)" style="cursor:not-allowed;"
                            @endif
                        @endif
                    >
                        <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-1" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                    </a>
                   @else
                    <img id="lvl-1" src="{{ asset('app/assets/ball.png') }}" alt=""
                         data-toggle="modal"
                         data-target="#exampleModal1"
                         data-whatever="@mdo"
                    >
                @endif
            </div>
        </div>
        <div class="right-handside">
            <div class="ball-container">
                <span>{{ __('custom.level') }} 14<br> 2011 - 2014</span>
                @if(\App\Quiz::isDatePast($dates[13]))
                    <a   @if(!\App\Quiz::canPlay($id,14))
                         href="javascript:void(0)" class="active"
                         @else
                         @if(\App\Quiz::isDatePast($dates[13]))
                         href="{{ route('quiz',['id'=>$id,'level'=>14]) }}"
                         @else
                         href="javascript:void(0)" style="cursor:not-allowed;"
                            @endif
                            @endif>
                        <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-14" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                    </a>
                @else
                    <img id="lvl-14" src="{{ asset('app/assets/ball.png') }}" alt=""
                         data-toggle="modal"
                         data-target="#exampleModal14"
                         data-whatever="@mdo"
                    >
                @endif              </div>
            <div class="ball-container">
                <span>{{ __('custom.level') }} 12 <br> 2004 - 2007</span>
                @if(\App\Quiz::isDatePast($dates[11]))
                    <a   @if(!\App\Quiz::canPlay($id,12))
                         href="javascript:void(0)" class="active"
                         @else
                         @if(\App\Quiz::isDatePast($dates[11]))
                         href="{{ route('quiz',['id'=>$id,'level'=>12]) }}"
                         @else
                         href="javascript:void(0)" style="cursor:not-allowed;"
                            @endif
                            @endif>
                        <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-12" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                    </a>
                @else
                    <img id="lvl-12" src="{{ asset('app/assets/ball.png') }}" alt=""
                         data-toggle="modal"
                         data-target="#exampleModal12"
                         data-whatever="@mdo"
                    >
                @endif              </div>
            <div class="ball-container">
                <span>{{ __('custom.level') }} 10 <br> 1992 - 2001</span>
                @if(\App\Quiz::isDatePast($dates[9]))
                    <a   @if(!\App\Quiz::canPlay($id,10))
                         href="javascript:void(0)" class="active"
                         @else
                         @if(\App\Quiz::isDatePast($dates[9]))
                         href="{{ route('quiz',['id'=>$id,'level'=>10]) }}"
                         @else
                         href="javascript:void(0)" style="cursor:not-allowed;"
                            @endif
                            @endif>
                        <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-10" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                    </a>
                @else
                    <img id="lvl-10" src="{{ asset('app/assets/ball.png') }}" alt=""
                         data-toggle="modal"
                         data-target="#exampleModal10"
                         data-whatever="@mdo"
                    >
                @endif              </div>
            <div class="ball-container">
                <span>{{ __('custom.level') }} 8 <br> 1992 - 1995</span>
                @if(\App\Quiz::isDatePast($dates[7]))
                    <a   @if(!\App\Quiz::canPlay($id,8))
                         href="javascript:void(0)" class="active"
                         @else
                         @if(\App\Quiz::isDatePast($dates[7]))
                         href="{{ route('quiz',['id'=>$id,'level'=>8]) }}"
                         @else
                         href="javascript:void(0)" style="cursor:not-allowed;"
                            @endif
                            @endif>
                        <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-8" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                    </a>
                @else
                    <img id="lvl-8" src="{{ asset('app/assets/ball.png') }}" alt=""
                         data-toggle="modal"
                         data-target="#exampleModal8"
                         data-whatever="@mdo"
                    >
                @endif
            </div>
            <div class="ball-container">
                <span>{{ __('custom.level') }} 6 <br> 1986 - 1989</span>
                @if(\App\Quiz::isDatePast($dates[5]))
                    <a   @if(!\App\Quiz::canPlay($id,6))
                         href="javascript:void(0)" class="active"
                         @else
                         @if(\App\Quiz::isDatePast($dates[5]))
                         href="{{ route('quiz',['id'=>$id,'level'=>6]) }}"
                         @else
                         href="javascript:void(0)" style="cursor:not-allowed;"
                            @endif
                            @endif>
                        <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-6" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                    </a>
                @else
                    <img id="lvl-6" src="{{ asset('app/assets/ball.png') }}" alt=""
                         data-toggle="modal"
                         data-target="#exampleModal6"
                         data-whatever="@mdo"
                    >
                @endif            </div>
            <div class="ball-container">
                <span>{{ __('custom.level') }} 4 <br> 1980 - 1983</span>
                @if(\App\Quiz::isDatePast($dates[3]))
                    <a   @if(!\App\Quiz::canPlay($id,4))
                         href="javascript:void(0)" class="active"
                         @else
                         @if(\App\Quiz::isDatePast($dates[3]))
                         href="{{ route('quiz',['id'=>$id,'level'=>4]) }}"
                         @else
                         href="javascript:void(0)" style="cursor:not-allowed;"
                            @endif
                            @endif>
                        <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-4" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                    </a>
                @else
                    <img id="lvl-4" src="{{ asset('app/assets/ball.png') }}" alt=""
                         data-toggle="modal"
                         data-target="#exampleModal4"
                         data-whatever="@mdo"
                    >
                @endif            </div>
            <div class="ball-container">
                <span>{{ __('custom.level') }} 2 <br> 1974 - 1977</span>
                @if(\App\Quiz::isDatePast($dates[1]))
                    <a   @if(!\App\Quiz::canPlay($id,2))
                         href="javascript:void(0)" class="active"
                         @else
                         @if(\App\Quiz::isDatePast($dates[1]))
                         href="{{ route('quiz',['id'=>$id,'level'=>2]) }}"
                         @else
                         href="javascript:void(0)" style="cursor:not-allowed;"
                            @endif
                            @endif>
                        <img data-toggle="modal" data-target="#exampleModal" class="active" id="lvl-2" src="{{ asset('app/assets/active-ball.png') }}" alt="">
                    </a>
                @else
                    <img id="lvl-2" src="{{ asset('app/assets/ball.png') }}" alt=""
                         data-toggle="modal"
                         data-target="#exampleModal2"
                         data-whatever="@mdo"
                    >
                @endif
            </div>
        </div>
        <!-- MOBILE LINE'S -->
        <div id="mobile-line-1" class="mobile-line"></div>
        <div id="mobile-line-2" class="mobile-line"></div>
        <div id="mobile-line-3" class="mobile-line"></div>
        <div id="mobile-line-4" class="mobile-line"></div>
        <div id="mobile-line-5" class="mobile-line"></div>
        <div id="mobile-line-6" class="mobile-line"></div>
        <div id="mobile-line-7" class="mobile-line"></div>
        <div id="mobile-line-8" class="mobile-line"></div>
        <div id="mobile-line-9" class="mobile-line"></div>
        <div id="mobile-line-10" class="mobile-line"></div>
        <div id="mobile-line-11" class="mobile-line"></div>
        <div id="mobile-line-12" class="mobile-line"></div>
        <div id="mobile-line-13" class="mobile-line"></div>
        <div id="mobile-line-14" class="mobile-line"></div>
    </div>
</div>


{{--{{ dd($dates[0]) }}--}}

{{--RealiseModals--}}
@for($i = 1; $i < 16; $i ++)
    <!-- Modal {{$i}} Ball-->
    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" style="outline: none" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    @if(config('app.locale') == 'en')
                        <p>This level will be unlocked on {{$popupDates[$i - 1]}}</p>
                        @else
                        <p> Bu tur {{$popupDates[$i-1]}} tarixində açılacaq</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endfor

{{--RealiseModals end--}}




    <!-- Modal -->
    <div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @if(config('app.locale') == "en")
                        You have already exceeded the 2 attempt limits!

                    @else
                        Siz artıq 2 cəhd limitini doldurmusunuz!

                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('custom.close') }}</button>
                </div>
            </div>
        </div>
    </div>



<!-- Modal RULES-->
<div class="modal fade" id="rulesModal" tabindex="-1" aria-labelledby="rulesModalLabel" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rulesModalLabel">{{__('custom.faq')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" >

                @if(config('app.locale') == "en")

                    <ul class="quiz-faq" style="list-style-type:decimal;">

                        <li>Q: Why can’t I play the level again?<br>A: 1 level can be played no more than two times.</li>
                        <li>Q: How can I unlock the next level? <br>A: The levels are going to be unlocked weekly, by us.</li>
                        <li>Q: How will you determine the winner? <br>A: The winner will be with most correct answers in the shortest time period. </li>
                        <li>Q: How to change password? <br>A: You can change password by clicking to forgot password. An email will be sent to you to change your password.</li>
                        <li>Q: How will the winner be determined? <br>A: We will contact the person who is leading on the leaderboard every month to give them free gift. </li>
                        <li>Q: Is the registration for Free? <br>A: Yes, it is for free.</li>
                        <li>Q: When will you determine the main winner? <br>A: The main winner will be determined on 20th of May, 2019. </li>
                        <li>Q: How to contact the customer service?<br>A: For any quarries you can contact us through info@baku2019.az .</li>
                    </ul>

                    @else

                    <ul class="quiz-faq" style="list-style-type:decimal;">

                        <li>S: Oyunun mərhələsini niyə yenidən oynaya bilmirəm? <br>C: Bir mərhələni iki dəfədən çox oynaya bilməzsiniz..</li>
                        <li>S: Növbəti mərhələni necə aktivləşdirə bilərəm? <br>C: Oyunun mərhələləri təşkilatçılar tərəfindən hər həftə ardıcıl şəkildə aktivləşdirilir.</li>
                        <li>S: Qalibləri necə müəyyənləşdirəcəksiniz?<br>C: Ən qısa müddətdə ən çox düzgün cavab verən iştirakçı qalib olacaq.</li>
                        <li>S: Şifrəni necə dəyişdirmək olar? <br>C: Şifrənizi dəyişmək üçün “Şifrəni unutmusunuz?” keçidinə klikləməlisiniz. Şifrəni dəyişmək üçün sizə e-mail
                            göndəriləcək. </li>
                        <li>S: Qalibə hədiyyələr necə təqdim olunacaq?<br>C: Oyunçular siyahısında birinci sırada olan hər ayın qalibi ilə əlaqə saxlanılacaq və hədiyyəsi təqdim olunacaq.</li>
                        <li>S: Qeydiyyat pulsuzdur? <br>C: Bəli, qeydiyyat pulsuzdur. </li>
                        <li>S: Əsas qalib nə zaman elan olunacaq?<br>C: Əsas qalib mayın 20-də elan olunacaq.</li>
                        <li>S: Müştəri xidmətləri ilə necə əlaqə saxlamaq olar?<br>C: Sual və təklifləriniz üçün info@baku2019.az elektron poçtuna yaza bilərsiniz.</li>
                    </ul>

                    @endif

            </div>
        </div>
    </div>
</div>




@endsection