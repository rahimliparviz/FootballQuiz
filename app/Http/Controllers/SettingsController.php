<?php

namespace App\Http\Controllers;

use App\Settings;
use App\User;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){
        return view('admin.settings');
    }

    public function edit(Request $r){

        $s =Settings::where('locale', config('app.locale'))->first();




        $rules=$r->app_title;
        $description=$r->description;


        $s->app_title = $rules;
        $s->app_description = $description;

        $s->save();



//admin password edition
       $admin = User::where('admin',1)->first();
       $admin->email = $r->email;

       if ($r->password != null){
           $admin->password= bcrypt($r->password);
       }

       $admin->save();

       return redirect()->back();

    }


}
