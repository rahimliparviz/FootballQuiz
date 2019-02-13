<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::group(['prefix' => LaravelLocalization::setLocale(),
   'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{

    Route::get('/logout', 'Auth\LoginController@logout', function () { return abort(404);})->name('logOut');



    Route::get('/','WelcomeController@index')->name('welcome');
    Route::get('/home','HomeController@index')->name('index');



    //quiz routes
//    Route::get('/quiz', 'QuizController@index')->name('quiz');
    Route::get('/map', 'MapController@index')->name('map');
    Route::get('/ajax', 'QuizController@ajax')->name('ajax');
    Route::get('/result', 'QuizController@result')->name('result');




    Route::get('/quiz/{id}/{level}', 'QuizController@index')->name('quiz');




	Route::get('{provider}/auth',[
		'uses'=>'SocialsController@auth',
		'as'=>'social.auth'
	]);

	Route::get('{provider}/redirect',[
		'uses'=>'SocialsController@auth_callback',
		'as'=>'social.callback'
	]);

    Route::get('/share',function(){
        return view('share');
    })->name('share');


    Route::get('/privacy',function(){
        return view('privacy');
    })->name('privacy');





    Route::get('/redirect', 'SocialsController@redirect');
    Route::get('/callback', 'SocialsController@callback');



    Route::get('/redirectg', 'SocialsController@redirectg');
    Route::get('/callbackg', 'SocialsController@callbackg');



    Auth::routes();

});




Route::group(['middleware' => 'admin','prefix' => LaravelLocalization::setLocale()], function () {
//Route::group(['prefix' => LaravelLocalization::setLocale()], function () {



    Route::get('/cpanel','AdminController@index')->name('admin.index');
    Route::get('/cpanel/questions','AdminController@questions')->name('all_questions');

    Route::post('/cpanel/users',"DtableController@users")->name('dataProcessing');
    Route::post('/cpanel/question',"DtableController@questions")->name('questions');


    Route::get('/cpanel/questions/create', [
        'uses' => 'QuestionController@create',
        'as' => 'create.question'
    ]);


    Route::post('/cpanel/questions/store', [
        'uses' => 'QuestionController@store',
        'as' => 'question.store'
    ]);

    Route::get('/cpanel/questions/edit/{id}', [
        'uses' => 'QuestionController@edit',
        'as' => 'question.edit'
    ]);


    Route::post('/cpanel/questions/{id}', [
        'uses' => 'QuestionController@update',
        'as' => 'question.update'
    ]);


    Route::get('/cpanel/questions/delete/{id}', [
        'uses' => 'QuestionController@destroy',
        'as' => 'question.delete'
    ]);



    Route::get('/cpanel/user/delete/{id}', [
        'uses' => 'UserController@destroy',
        'as' => 'user.delete'
    ]);


    Route::get('/cpanel/settings', [
        'uses' => 'SettingsController@index',
        'as' => 'settings'
    ]);



    Route::post('/cpanel/settings/edit', [
        'uses' => 'SettingsController@edit',
        'as' => 'settings.edit'
    ]);

});







