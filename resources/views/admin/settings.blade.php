@extends('layouts.admin')


@section('content')

    <h2 align="center">Settings</h2>

<div class="row">

    <div id="lang-menu" style="margin-left: 20px" class="lang-menu">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a @if(config('app.locale') == $localeCode ) style="color: green"  @else style="color: black"  @endif  rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['name'] }}
                    </a>
            @endforeach
    </div>

</div>

    <form action="{{ route('settings.edit')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

     <div class="row">

         <div class="col-md-6">
             <div class="form-group">
                 <label for="content">App description</label>
                 <textarea name="description"  cols="6" rows="5" class="form-control">
                     {{ \App\Settings::where('locale',config('app.locale'))->first()->app_description }}
                 </textarea>
                 @if ($errors->has('description'))
                     <span class="help-block text-danger">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                 @endif
             </div>
         </div>



         <div class="col-md-6">
             <div class="form-group">
                 <label  for="app_title">Quiz rules</label>
                 <textarea name='app_title'  cols="6" rows="5" class="form-control">{{ \App\Settings::where('locale',config('app.locale'))->first()->app_title }}</textarea>
                 @if ($errors->has('app_title'))
                     <span class="help-block text-danger">
                            <strong>{{ $errors->first('app_title') }}</strong>
                        </span>
                 @endif
             </div>
         </div>

     </div>


        <div class="row">


            <div class="col-md-6">
                <div class="form-group">
                    <label  for="email">Admin email</label>
                    <input type="email" name='email' class="form-control"
                           value="{{ \App\User::where('admin',1)->first()->email  }}" >


                    @if ($errors->has('email'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Admin password</label>
                    <input type="password" name='password' class="form-control"
                    >


                    @if ($errors->has('password'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

        </div>
        <div class="row">

        </div>

        <div class="row">


            <div class="col-md-12">
                <div class="form-group">

                    <button class="btn btn-success" type="submit">Submit</button>
                </div>


            </div>


        </div>

    </form>


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>



@stop