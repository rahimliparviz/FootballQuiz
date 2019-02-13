<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question_tr extends Model
{

    protected $fillable=['locale','question','question_id'];


    protected $table = 'question_tr';

    public function question()
    {
        return $this->belongsTo('App\Question');
    }

  
}
