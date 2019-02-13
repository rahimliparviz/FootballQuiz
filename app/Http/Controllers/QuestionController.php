<?php

namespace App\Http\Controllers;

use App\Option;
use App\Question;
use App\Question_tr;
use Session;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(){

        return view('questions.create');

    }


    public function edit(Request $r){

        //question
        $question= Question::find($r->id);

        //correct answers
        $correct = $question->options()->where('isTrue',1)->get();

        //wrong answers in Eng
        $wrongsEn = $question->options()->where([['isTrue','=',0],['locale','=','en'] ])->get();

        //wrong answers in Aze
        $wrongsAz = $question->options()->where([ ['isTrue','=',0],['locale','=','az']])->get();



        return view('questions.edit')
            ->with("question",$question)
            ->with('correct',$correct)
            ->with('wrongEn',$wrongsEn)
            ->with('wrongAz',$wrongsAz);
    }


    public function update(Request $request)
    {


        $this->validate($request,[
            'question.*'=>'required|max:255',
            'correct.*'=>'required',
            'wrong1.*' =>'required',
            'wrong2.*' =>'required',
            'wrong3.*' =>'required'
        ]);


        $question=Question::find($request->id);

        if ($request->hasFile('features')){

            $this->validate($request,[
                'features'=>'required|mimes:jpeg,bmp,png',
            ]);

            $question = Question::editWithImage($request);
        };

        Question::updateCorrectOptions($question->id,$request->correct);
        Question::updateTranslation($question->id,$request->question);

        Question::updateWrongOptions($question->id,$request->wrong1,$request->wrong2,$request->wrong3);


        Session::flash('success','You succesfully updated the question');

         return redirect()->back();

    }






    public function destroy(Request $r){

        $q= Question::find($r->id);

        $options= $q->options()->get();
        $question_tr= $q->question_tr()->get();

        foreach ($options as $option){$option->delete();}
        foreach ($question_tr as $question){$question->delete();}


        if ($q->img != null){
            $image_path = public_path().'/'.$q->img;
            unlink($image_path);
        }


        $q->delete();

        Session::flash('success','Question deleted');
        return redirect()->route('all_questions');

    }
    public function store(Request $request)
    {

        $this->validate($request,[
            'question.*'=>'required|max:255',
            'correct.*'=>'required',
            'wrong1.*' =>'required',
            'wrong2.*' =>'required',
            'wrong3.*' =>'required',
        ]);

        $options=array();


        foreach ($request->correct as $k=>$o){
            array_push($options,"##".$k.$o);

        }
        foreach ($request->wrong1 as $k=>$o){
            array_push($options,$k.$o);

        }
        foreach ($request->wrong2 as $k=>$o){
            array_push($options,$k.$o);

        }
        foreach ($request->wrong3 as $k=>$o){
            array_push($options,$k.$o);

        }


        shuffle($options);

        $q=Question::create([
            'level'=>$request->level,
        ]);

        if ($request->hasFile('features')) {
            $features = $request->features;
            $features_new_name = time() . $features->getClientOriginalName();
            $features->move('Uploads', $features_new_name);
            $q->img= 'Uploads/'.$features_new_name;
            $q->save();
        }

        foreach ($request->question as $k=>$question){
            Question_tr::create([
                'question_id'=>$q->id,
                'locale'=>$k,
                'question'=>$question
            ]);

        }



        foreach ($options as $o){


            if (substr($o, 0, 2) == "##"){


                Option::create([
                    'locale'=>substr($o, 2, 2),
                    'option'=>substr($o, 4),
                    'question_id'=>$q->id,
                    'isTrue'=>1
                ]);
            }
            else{
                Option::create([
                    'locale'=>substr($o, 0, 2),
                    'option'=>substr($o, 2),
                    'question_id'=>$q->id,
                    'isTrue'=>0
                ]);
            }


        }

        Session::flash('success','Question created successfully');
        return redirect()->back();

    }

}
