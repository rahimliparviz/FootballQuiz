<?php

namespace App\Http\Controllers;


use App\Level;
use App\Option;
use App\Question;
use App\Quiz;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *
     *
     *
     */

    public $ql;



    public function __construct()
    {
       //$this->middleware('auth');

//        $this->ql;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $q = Question::with('options','question_tr')->inRandomOrder()->take(7)->get();
//
//        Session::put('q',  $q);
//        return view('quiz')
//            ->with("q",$q);
//
//    }



    public function index(Request $request)
    {


        $this->ql = 5;

        $level = Level::where([['user_id',$request->id],['level',$request->level]])->first();

            if($level == null){
                return redirect()->route('map');
            }
            elseif($level->count == 2){
                return redirect()->route('map');
            }else{
                $questions = Question::with('options','question_tr')->where('level',$request->level)->get();

                $half = ceil($questions->count() / 2);
                $chunks = $questions->chunk($half);

                $q= $chunks[$level->count]->shuffle()->take(7);
                $level->count = $level->count + 1;
                $level->update();

                Session::put('q',  $q);
                return view('quiz')
                    ->with("q",$q);
            }
    }


    public function ajax(Request $r)
    {

        if(!$r->ajax()){
            return redirect()->route('welcome');
        }else{


            $locale = config('app.locale');

            if(isset($_COOKIE['locale'])){

                $locale =$_COOKIE['locale'];
            }else{
                $locale = config('app.locale');
            }




            $q = Question::with("options")->find($r->question);
            $questionYear = $q->questionYear(1);

            $correct = $q->options()->where("isTrue",1)->first();


            if( count(Session::get('q')) == $r->next && $correct == Option::find($r->option)){
                return response()->json(['finished' => true ,'level'=>$q->level,'year'=>$questionYear,'status'=>200, 'locale'=>$locale], 200);
            }

            elseif(count(Session::get('q')) == $r->next && $correct != Option::find($r->option)){

                return response()->json(['finished' => true,'level'=>$q->level,'year'=>$questionYear,'status'=>400,'locale'=>$locale], 200);

            }

            elseif ($correct == Option::find($r->option)){

                return response()->json(['qs' => Session::get('q')[$r->next],'level'=>$q->level ,'year'=>$questionYear,
                    "next"=> $r->next +1, 'status'=>200, 'locale'=>$locale,
                    'levelTr'=> __('custom.level'),
                    'minute' =>  __('custom.minute'),
                    'result'=> __('custom.result'),
                    'logout'=>  __('custom.logout'),
                    'map'=> __('custom.map'),
                    'share'=> __('custom.share')

                ], 200);

            }else{
                return response()->json(['qs' => Session::get('q')[$r->next],'level'=>$q->level,'year'=>$questionYear,
                    "next"=> $r->next +1,'status'=>400, 'locale'=>$locale,
                    'levelTr'=> __('custom.level'),
                    'minute' =>  __('custom.minute'),
                    'result'=> __('custom.result'),
                    'logout'=>  __('custom.logout'),
                    'map'=> __('custom.map'),
                    'share'=> __('custom.share')

                ], 200);
            }

        }
    }



    public function result(Request $r)
    {

        if(!$r->ajax()){
            return redirect()->route('welcome');
        }else{
            $quiz = Quiz::create(
                [   'duration' => $r->time,
                    'result'=> $r->count,
                    'total'=>7,
                    'success'=>$r->count/7,
                    'user_id'=>Auth::id(),
                    'quiz_date'=>Carbon::now()

                ]);
            return response()->json(['quiz_id'=>$quiz->id,'total'=>count(Session::get('q')), 'user'=>Auth::user()->name], 200);

        }



    }
}
