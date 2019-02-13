<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable=['option','question_id','isTrue','locale'];



    public function word_tr(){
       return $this;
    }

}
