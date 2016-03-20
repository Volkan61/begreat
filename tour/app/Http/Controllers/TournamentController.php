<?php

namespace App\Http\Controllers;

use App\Tournament;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournaments  = Tournament::where('user_id',Auth::user()->id)->get();
       // $tournaments  = Tournament::all();
        return view('tournament.index',['tournaments' =>$tournaments]);
    }


    /**after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Profile::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'game' => $data['game'],
        ]);
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




      // $tournament = $this->create($request->all());


        $profile="";

        $tournament =  new Tournament($request->all()); // erstellt keinen eintrag in der datenbank

       // $tournament = new Tournament($request->all());


        $profile  = User::find(Auth::user()->id)->tournaments()->save($tournament);

// more than one foreign key

        //https://laravel.com/docs/5.1/eloquent-relationships

        //https://laravel.com/docs/5.1/eloquent-relationships  saving belong to association

        return $this->index();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $profile ="";
        return view('tournament/add',['profile' =>$profile]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        echo $id;

        Tournament::destroy($id);


        return $this->index();

        // methoden parameter request apramter
    }
}
