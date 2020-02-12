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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::get('/register', 'ResultsController@index')->name('register');
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('/home', 'HomeController@index')->name('home');

//Voting routes
//Display All Votes
Route::get('/votes', function () {
    
    $votes = DB::table('votes')->get();
    
    //dd($votes);
    //return $votes;
    return view('votes.index', ['votes' => $votes]);
});
//Display specific Vote
Route::get('/votes/{id}', function ($id) {
    
    $vote = DB::table('votes')->find($id);
    
    return view('votes.show', ['vote' => $vote]);
});

//Show voting form
Route::get('/vote', 'VoteController@index')->name('votes.vote');
//Post form data
Route::post('/vote', 'VoteController@make')->name('votes.index');;