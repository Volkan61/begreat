<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tournament;
use App\User;


use Illuminate\Support\Facades\Auth;
use App\Profile;

class RegistrationController extends Controller
{


    public function index($id)
    {

        echo $id;


        $tournament = Tournament::find($id);
        $tournament->registrations()->get();
     //   echo json_encode($tournament->registrations()->get()[0]->user);
        $registered_users = $tournament->registrations()->get();
        $tournaments ="";

        return view('registrations.index',['users' => $registered_users]);
    }





    public function add_prepare($id)
    {
        return view('registrations.add',['tournament_id' => $id]);
        // methoden parameter request apramter
    }



    public function add($id)
    {


        // Es würede auch Funktionieren wenn ich ein Turnier erstelle und diesem Benutzer hinzufüge.. (bessere Lösung)..
        $userid = Auth::user()->id;
        $registration=  new Registration();
        $registration->tournament()->associate(Tournament::find($id));
        $registration->user()->associate(User::find($userid));
        $registration->save();
        return $this->index($id);
        // methoden parameter request apramter
    }





}
