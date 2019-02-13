<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
   protected $fillable=['locale','app_title','app_img','app_description'];
}
