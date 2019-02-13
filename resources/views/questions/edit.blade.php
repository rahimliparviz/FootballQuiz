@extends('layouts.admin')


@section('content')

    <h2 align="center">Edit</h2>

    <form action="{{ route('question.update',['id'=>$question->id])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="row">

            <div class="col-md-6">

                <div class="form-group">

                    <label for="content">Question in ENG</label>

                    <textarea name="question[en]" id="summernote" cols="5" rows="5" class="form-control">{{$question->tr_locale('en')}}</textarea>



                    @if ($errors->has('question.en'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('question.en') }}</strong>
                        </span>
                    @endif

                </div>
            </div>

            <div class="col-md-6">

                <div class="form-group">

                    <label for="content">Question in AZE</label>

                    <textarea name="question[az]" id="summernote" cols="5" rows="5" class="form-control">{{$question->tr_locale('az')}}</textarea>


                    @if ($errors->has('question.az'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('question.az') }}</strong>
                        </span>
                    @endif

                </div>
            </div>
        </div>



        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="features">Question image</label>
                    <input type="file" name='features' class="form-control">


                    @if ($errors->has('features'))
                        <span class="help-block text-danger">
                            <strong>{{ 'Please use correct format' }}</strong>
                        </span>
                    @endif

                </div>
            </div>

            <div class="col-md-6">
                Level of question

                <div class="form-group">

                    @for($i=1;$i<16;$i++)
                        <label class="radio-inline">
                            <input type="radio" value="{{$i}}" name="level" @if($i == $question->level) checked @endif >{{$i}}
                        </label>
                    @endfor

                </div>
            </div>

        </div>


        <div class="row">
            <div  class="col-md-12">
                ENG
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label style="color: green;" for="correct">Correct Answer</label>
                    <input type="correct" name='correct[en]' class="form-control" value="{{ $correct->where('locale','en')->first()->option }}">

                    @if ($errors->has('correct.en'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('correct.en') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label style="color: red;" for="wrong1[en]">Wrong option1</label>
                    <input type="correct" name='wrong1[en]' class="form-control" value="{{ $wrongEn[0]->option}}">

                    @if ($errors->has('wrong1.en'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('wrong1.en') }}</strong>
                        </span>
                    @endif

                </div>
            </div>

        </div>


        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label style="color: red;" for="wrong2[en]">Wrong option2</label>
                    <input type="correct" name='wrong2[en]' class="form-control" value="{{ $wrongEn[1]->option}}">


                    @if ($errors->has('wrong2.en'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('wrong2.en') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label style="color: red;" for="wrong3[en]">Wrong option3</label>
                    <input type="correct" name='wrong3[en]' class="form-control" value="{{ $wrongEn[2]->option}}" >

                    @if ($errors->has('wrong2.en'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('wrong3.en') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>







        <div class="row">
            <div  class="col-md-12">
                AZE
            </div>
        </div>


        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label style="color: green;" for="correct">Correct Answer</label>
                    <input type="correct" name='correct[az]' class="form-control" value="{{ $correct->where('locale','az')->first()->option }}">

                    @if ($errors->has('correct.az'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('correct.az') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label style="color: red;" for="wrong1">Wrong option 1</label>
                    <input type="text" name='wrong1[az]' class="form-control" value="{{ $wrongAz[0]->option}}">


                    @if ($errors->has('wrong1.az'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('wrong1.az') }}</strong>
                        </span>
                    @endif

                </div>
            </div>


        </div>



        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label style="color: red;" for="wrong2[az]">Wrong option 2</label>
                    <input type="correct" name='wrong2[az]' class="form-control" value="{{ $wrongAz[1]->option}}" >


                    @if ($errors->has('wrong2.az'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('wrong2.az') }}</strong>
                        </span>
                    @endif
                </div>
            </div>



            <div class="col-md-6">
                <div class="form-group">
                    <label style="color: red;" for="wrong3[az]">Wrong option 3</label>
                    <input type="correct" name='wrong3[az]' class="form-control" value="{{ $wrongAz[2]->option}}">
                    @if ($errors->has('wrong3.az'))
                        <span class="help-block text-danger">
                             <strong>{{ $errors->first('wrong3.az') }}</strong>
                         </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Save edition</button>
                </div>
            </div>
        </div>

    </form>


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


@stop