<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tournament;
use App\Result;
use App\User;


class ResultsController extends Controller
{



    public function index()
    {




        return view('results.index');
    }



//$flight = App\Flight::find(1);

//$flight->name = 'New Flight Name';

//$flight->save();



    public function start($id)
    {


        $tournament = Tournament::find($id);


        $participants = $tournament->participants;



        if($tournament->started==false) {


           // $registrations =$tournament->registrations()->get();

          //  echo $registrations[0]->user()->get();
// Von der Registrierung zum User


            $registrations =$tournament->registrations()->get();


            for ($i = 0; $i < $participants/2; $i=$i+2) {

                $player1 = $registrations[$i]->user()->get();
                $player2 = $registrations[$i+1]->user()->get();

                $post =new Result();
                $post->user1()->associate($player1[0]);
                $post->user2()->associate($player2[0]);
                $post->tournament()->associate($tournament);
                $post->save();



            }








          //  echo $registrations[0];
         //   $result = new Result();

         //   $result->user1()->save($registrations[0]);
          //  $result->user2()->save($registrations[1]);





           // $result->save();

        //    $tournament->results()->save($result);

           // $result->tournaments()->save($tournament->get());
       //     $tournament->save();


            $tournament->started=1;
            $tournament->save();
        }

        else


        {

            $tournament_already_started_message = "Tournament already started";

        }




      //  echo count($registrations);

        return view('results.index',array("tournament_already_started_message"=>$tournament_already_started_message,"started" => $tournament->started ));


    }




    public function next_round()
    {

        return view('results.index');
    }



}
