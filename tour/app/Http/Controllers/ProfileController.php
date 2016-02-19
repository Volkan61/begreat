<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class ProfileController extends Controller
{




    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }




    public function getProfile() {

       // $email = Auth::user()->name;
        $profile  = User::find(Auth::user()->id)->profile;
        return view('profile',['profile' =>$profile]);

    }


    public function editProfile(Request $request) {

        // $email = Auth::user()->name;
        $profile  = User::find(Auth::user()->id)->profile;

        return view('edit_profile',['profile' =>$profile]);

    }


    public function update() {


        $profile  = Profile::where('user_id',Auth::user()->id)->first();
        $profile->fill(Input::all());
        $profile->save();

        return Redirect::to("/edit_profile");







    }







    /**
     * Create a new profile instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Profile::create([
            'first_name' => $data['firstname'],
            'last_name' => $data['lastname'],
            'adress' => $data['adress'],
            'gender' => $data['gender'],
            'bio' => $data['bio'],
        ]);
    }




}
