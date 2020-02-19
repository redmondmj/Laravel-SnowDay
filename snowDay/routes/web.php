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

    $data['votes'] = DB::table('votes')->get();
    $data['yesVotes'] = DB::table('votes')->where('vote', 1)->count('vote');
    $data['noVotes'] = DB::table('votes')->where('vote', 0)->count('vote');

    //dd($yesVotes);
    //return $votes;
    return view('votes.index', ['data' => $data]);
});
//Display specific Vote
Route::get('/votes/show/{id}', function ($id) {

    $vote = DB::table('votes')->find($id);

    return view('votes.show', ['vote' => $vote]);
});

//Route::resource('/admin/users', 'Admin\UserController', ['except'=>['show', 'create', 'store']]);

//Route without manage-users gate
//Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
// Route with manage-users gate check
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function() { //applies to all routes in the /admin  namespace and prefixes admin. to the url
    Route::resource('/users', 'UserController', ['except'=>['show', 'create', 'store']]); // adds routes for user management
});
