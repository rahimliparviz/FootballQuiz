<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable=['level','img'];

    public function options(){
       return $this->hasMany("App\Option","question_id");
    }



    public function question_tr(){
        return $this->hasMany("App\Question_tr","question_id");
    }


    public function tr(){

        $word = $this->question_tr()->where('locale',config('app.locale'))->first();

        if ($word == null){
            return "no translation";
        }else{
            return $word->question;
        }

    }


    public function tr_locale($lang ){

        return $title= $this->question_tr()->where('locale',$lang)->first()->question;
    }


    public static function editWithImage($request){
        $question=Question::find($request->id);

            if ($question->img  != null){
                $image_path = public_path().'/'.$question->img;
                unlink($image_path);

            }

            $features=$request->features;
            $features_new_name=time().$features->getClientOriginalName();
            $features->move('Uploads/',$features_new_name);
            $question->img="Uploads/".$features_new_name;
        $question->update();
        return $question;

    }


    public static function updateCorrectOptions($questionId,$corrects){

        foreach ($corrects as $locale =>$correct){
            $option =Option::where([['question_id','=',$questionId],['locale','=',$locale],['isTrue','=',1]])->first();
            $option->option =$correct;
            $option->update();

        }

    }


    public static function updateTranslation($questionId,$questions){

        foreach ($questions as $locale =>$question){
            $q =Question_tr::where([['question_id','=',$questionId],['locale','=',$locale]])->first();
            $q->question =$question;
            $q->update();

        }
    }


    public static function updateWrongOptions($questionId,$wrongs1,$wrongs2,$wrongs3){

        $wrongsEn = Option::where([['question_id','=',$questionId],['locale','=','en'],['isTrue','=',0]])->get();
        $wrongsAz = Option::where([['question_id','=',$questionId],['locale','=','az'],['isTrue','=',0]])->get();



        $wrongsEn[0]->option =$wrongs1['en'];
        $wrongsEn[1]->option =$wrongs2['en'];
        $wrongsEn[2]->option =$wrongs3['en'];

        $wrongsAz[0]->option =$wrongs1['az'];
        $wrongsAz[1]->option =$wrongs2['az'];
        $wrongsAz[2]->option =$wrongs3['az'];

        $wrongsEn[0]->update();
        $wrongsEn[1]->update();
        $wrongsEn[2]->update();
        $wrongsAz[0]->update();
        $wrongsAz[1]->update();
        $wrongsAz[2]->update();
    }




    public function questionYear($level){

        switch ($level) {
            case 1:
                return '1971-1974';
                break;
            case 2:
                return '1974-1977';
                break;
            case 3:
                return '1977-1980';
                break;
            case 4:
                return '1980-1983';
                break;
            case 5:
                return '1983-1986';
                break;
            case 6:
                return '1986-1989';
                break;
            case 7:
                return '1989-1992';
                break;
            case 8:
                return '1992-1995';
                break;
            case 9:
                return '1995-1998';
                break;
            case 10:
                return '1998-2001';
                break;
            case 11:
                return '2001-2004';
                break;
            case 12:
                return '2004-2007';
                break;
            case 13:
                return '2007-2011';
                break;
            case 14:
                return '2011-2014';
                break;
            case 15:
                return '2014-2018';
                break;

        }






    }





}
