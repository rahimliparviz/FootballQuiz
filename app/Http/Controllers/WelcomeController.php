<?php

namespace App\Http\Controllers;

use AdamWathan\EloquentOAuth\Session;
use App\Quiz;
use App\Settings;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{





    public function index()
    {
        setcookie("locale", config("app.locale"));

        function index($new,$old){
            foreach (  $old as $q){
                array_push($new,$q);
            }
        }

        $feb_ = Quiz::whereMonth('created_at', '02')->orderBy('success', 'desc')->orderBy('duration', 'desc')->take(50)->get()->unique('user_id');
        $mar_ = Quiz::whereMonth('created_at', '03')->orderBy('success', 'desc')->orderBy('duration', 'desc')->take(50)->get()->unique('user_id');
        $apr_ = Quiz::whereMonth('created_at', '04')->orderBy('success', 'desc')->orderBy('duration', 'desc')->take(50)->get()->unique('user_id');
        $may_= Quiz::whereMonth('created_at', '05')->orderBy('success', 'desc')->orderBy('duration', 'desc')->take(50)->get()->unique('user_id');

        $jan_ = Quiz::whereMonth('created_at', '01')->orderBy('success', 'desc')->orderBy('duration', 'desc')->take(50)->get()->unique('user_id');
        $jan = array();  foreach (  $jan_ as $q){ array_push($jan,$q); }


        $feb = array();  foreach (  $feb_ as $q){ array_push($feb,$q); }
        $mar = array();  foreach (  $mar_ as $q){ array_push($mar,$q); }
        $apr = array();  foreach (  $apr_ as $q){ array_push($apr,$q); }
        $may = array();  foreach (  $may_ as $q){ array_push($may,$q); }


        $text = Settings::where('locale',config('app.locale'))->first()->app_description;

        return view('welcome')
            ->with("feb", $feb)
            ->with('jan',$jan)
            ->with("mar", $mar)
            ->with("apr", $apr)
            ->with("may", $may)
            ->with('text',$text);
            


    }
}
