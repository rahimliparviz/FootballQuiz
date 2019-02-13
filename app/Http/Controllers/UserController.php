<?php

namespace App\Http\Controllers;

use Session;
use App\Level;
use App\Quiz;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function destroy($id)
    {

        $quizzes = Quiz::where("user_id",$id)->get();





        foreach ($quizzes as $q){
            $q->delete();
        }


        $user=User::find($id);

        if ($user->admin == 1){

            Session::flash('success','You cannot delete an admin');
            return redirect()->back();
        }


        //        delete foreing keys
        $levels = Level::where('user_id',$user->id)->get();


        foreach ($levels as $level){
            $level->delete();
        }
//      delete foreing keys


        $user->delete();
        Session::flash('success','User deleted succesfully');
        return redirect()->back();
    }
}
