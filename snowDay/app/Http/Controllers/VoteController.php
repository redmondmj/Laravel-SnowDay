<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');

    // }
    // public function index()
    // {
    //     $games = Vote::all();
    //     return view('votes.index', ['votes' => $votes]);
    // }
        /**
     * Get a validator for an incoming vote request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'vote' => ['required', 'integer', 'digits_between:0,3'],
            'guest_name' => ['string', 'max:255', 'unique:users'],
            'guest_school' => ['string', 'max:255'],
        ]);
    }

    /**
     * Create a new vote instance after a valid request.
     *
     * @param  array  $data
     * @return \App\Vote
     */
    protected function create(array $data)
    {
        return Vote::create([
            'user_id' => $data['user_id'],
            'vote' => $data['vote'],
            'guest_name' => $data['guest_name'],
            'guest_school' => $data['guest_school'],
            'school' => $data['school'],
            'vote' => $data['vote'],
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('votes.vote');
        // return view('results');
    }
}
