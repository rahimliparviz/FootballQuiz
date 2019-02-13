<?php

namespace App\Console\Commands;

use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class cronEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send emails for notify';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //        Level 1

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-02-17');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 1 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 1 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }

        //        Level 2

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-02-17');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 2 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 2 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }

        //        Level 3

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-02-25');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 3 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 3 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }

        //        Level 4

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-02-25');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 4 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 4 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }


        //        Level 5

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-03-04');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 5 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 5 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }

        //        Level 6

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-03-11');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 6 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 6 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }

        //        Level 7

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-03-18');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 7 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 7 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }


        //        Level 8

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-03-25');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 8 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 8 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }


        //        Level 9

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-04-01');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 9 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 9 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }

        //        Level 10

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-04-08');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 10 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 10 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }


        //        Level 11

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-04-15');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 11 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 11 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }


        //        Level 12

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-04-22');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 12 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 12 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }


        //        Level 13

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-04-29');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 13 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 13 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }


        //        Level 14

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-05-06');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 14 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 14 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }


        //        Level 15

        $users = User::all();
        $l1 = Carbon::createFromFormat('Y-m-d', '2019-05-13');
        if($l1->isToday()){
            if(config('app.locale' == 'az')){
                $subject = "Futbola Səyahət";
                $content = "Tur 15 artıq aktivləşdirildi. Oyuna dəvam et və iştirakçılar siyahısında birinci ol! Dünyanın məşhur klublarının imzalı köynəyini və ya mayın 29-da Bakı Olimpiya Stadionunda keçiriləcək UEFA Avropa Liqasının finalına 2 bilet qazanmaq şansını əldə et! Uğurlar!";
            }else{
                $subject = "Football Tour";
                $content = "Level 15 is already activated. Play the game and be the fist on the leaderboard. Get a chance to win signed uniforms from world famous teams or a chance to win 2 tickets to UEFA Europa League final on 29th of May in Baku Olympic Stadium! Good Luck!";
            }
            foreach ($users as $user){

                Mail::raw($content, function ($message) use($user,$subject) {
                    $message->to($user->email);
                    $message->subject($subject);
                });
            }
        }




    }
}
