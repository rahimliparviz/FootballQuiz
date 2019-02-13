<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['user_id','duration','result','quiz_date','total','success'];


    public static function canPlay($userId,$questionLevel){



        $level = Level::where([['user_id',$userId],['level',$questionLevel]])->first();

        //dd($level);


        if ($level == null){

            $level = Level::create([
                'user_id'=>$userId,
                'level'=>$questionLevel,
                'count'=>0
            ]);
        }



        if ($level->count == 2){
            return false;
        }else{

//            $count = $level->count;
//
//            $level->count = $count + 1;

//            $level->update();
            return true;
        }

    }



    public static function isDatePast($date){
        $date = new Carbon($date);
        if ( $date->isPast()){ return true;}else{return false; }
    }
}
