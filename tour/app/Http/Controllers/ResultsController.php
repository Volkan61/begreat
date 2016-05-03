<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tournament;
use App\Result;
use App\User;

include(app_path().'/libraries/simple_html_dom.php');



function contains($substring, $string) {
    $pos = strpos($string, $substring);

    if($pos === false) {
        // string needle NOT found in haystack
        return false;
    }
    else {
        // string needle found in haystack
        return true;
    }

}



class ResultsController extends Controller
{



    public function index($id)
    {


        echo $id;

        $results  = Result::where("tournament_id",$id)->get();




        $a="";
        $results_json=array();
        $i=0;
        foreach ($results as $result) {



         //   $game["user1"] = $result->user1()->get();
          //  $game["user2"] = $result->user2()->get();
            $game["user1_result"] = array($result->user1()->get()[0]->name,$result->result_user1);
            $game["user2_result"] = array($result->user2()->get()[0]->name,$result->result_user2);



         //   echo $result->user1()->get()[0]->name;

            $results_json[$i]=$game;

            $i++;
        }


        $tournament = Tournament::find($id);
        $data = array(
            'name'  => "test",
            'age' => "sdfds"
        );



        return view('results.results',array('tournament'=>$tournament,'results'=> $results_json));
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

            for ($i = 0; $i <= $participants/2; $i=$i+2) {
echo "test".$i;
                $player1 = $registrations[$i]->user()->get();
                $player2 = $registrations[$i+1]->user()->get();

                $post =new Result();
                $post->user1()->associate($player1[0]);
                $post->user2()->associate($player2[0]);
                $post->tournament()->associate($tournament);
                $post->round=0;
                $post->save();
            }
            $tournament->started=1;
            $tournament->round=0;

            //     $tournament->round++;

            $tournament->save();
        }
        else
        {
            $tournament_already_started_message = "Tournament already started";
        }
      //  echo count($registrations);
        return view('results.index',array("tournament_already_started_message"=>$tournament_already_started_message,"started" => $tournament->started ,'tournament' => $tournament));
    }




    public function next_round($id)
    {

        return view('results.index');
    }



    public function crawler()
    {
        $test = contains("test","test");

        $html = file_get_html('https://bs.to/andere-serien');
        foreach($html->find('a') as $e) {
            if(contains("serie/",$e->href)) {
             //   echo "https://bs.to/".$e->href."<br>";

                echo "//***************** EXTRACTING SERIE ".$e->href."<br>";
                $this->crawler2("https://bs.to/".$e->href);}
        }





        return view('results.Crawler');
    }



    // Links to Series
    public function crawler2($link)
    {
        $html = file_get_html($link)->find('div[id=sp_left] table tr');
        $i = 0;
        foreach($html as $e) {
              //  echo $e."<br>";
            echo "Folge ".$i."<br>";
            $this->crawler3($e);
            $i++;
        }
        return view('results.Crawler');
    }




    public function crawler3($series_link_list)
    {

        $html = str_get_html($series_link_list)->find('td[class=nowrap]');

        foreach($html as $e) {

            $this->crawler4($e);

        }

    }



    public function crawler4($series_link_list)
    {
                                                    //[title=Vivo]
        $html = str_get_html($series_link_list)->find('a');

        foreach($html as $e) {
            echo $e->href."<br>";
            $this->crawler5("https://bs.to/".$e->href);
        }

    }



    public function crawler5($series_link_list)
    {

        $html = file_get_html($series_link_list)->find('div[id=video_actions] a[target=_blank]');

        foreach($html as $e) {
            echo $e->href."<br>";
        }

    }


}
