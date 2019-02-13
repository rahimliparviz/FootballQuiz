<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use SocialAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class SocialsController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function callback()
    {
        try {

            $googleUser = Socialite::driver('facebook')->user();
            $existUser = User::where('email',$googleUser->email)->first();


            if ($googleUser->email == null){

                return redirect()->route('register')
                    ->with('data',$googleUser);
            }

            elseif($existUser) {
              Auth::loginUsingId($existUser->id);

            }
            else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->route('index');
        }
        catch (Exception $e) {
            return 'error';
        }
    }
    public function redirectg()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callbackg()
    {
        try {

            $googleUser = Socialite::driver('google')->user();
            $existUser = User::where('email',$googleUser->email)->first();



            if($existUser) {

               Auth::loginUsingId($existUser->id);

            }
            else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->route('index');
        }
        catch (Exception $e) {
            return 'error';
        }
    }


















//    public function auth($provider)
//    {
//      return  SocialAuth::authorize($provider);
//    }
//
//
//    public function auth_callback($provider){
//        SocialAuth::login($provider,function($user,$info){
//
//
//            $existUser = User::where('email',$user->email)->first();
//
//            dd($user);
//
//            if($existUser) {
//                Auth::loginUsingId($existUser->id);
//            }
//            else{
//
//                $user->name =$info->full_name;
//                $user->email =$info->email;
//
//                $user->save();
//                Auth::loginUsingId($user->id);
//
//            }
//
//        });
//
//        return redirect()->route('home');
//    }
}
