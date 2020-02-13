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
    return view('votes.create');
});

Auth::routes();
// Route::get('/register', 'ResultsController@index')->name('register');
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

//Route::get('/votes', 'HomeController@index')->name('home');



//Voting routes
//Show voting form
Route::get('/votes/create', 'VoteController@index')->name('votes.create');
//Post form data
Route::post('/votes/create', 'VoteController@store')->name('votes.index');

//Display All Votes
Route::get('/votes/show', function () {
    
    $votes = DB::table('votes')->get();
    
    //dd($votes);
    //return $votes;
    return view('votes.index', ['votes' => $votes]);
});
//Display specific Vote
Route::get('/votes/show/{id}', function ($id) {
    
    $vote = DB::table('votes')->find($id);
    
    return view('votes.show', ['vote' => $vote]);
});

