





@extends('layouts.app')

@section('content')


<head>
    <style type="text/css">




        #left {
            width: 8%;
            height: 100%;
            position: fixed;
        }
        #right {
            width: 80%;
            height: auto;
            position: absolute;
            right: 0;
            top:30%;

        }

        #middle {
            width: 80%;
            height: auto;
            position: fixed;
            right: 0;

        }


    </style>


  </head>


    <div id="left">
        <ul class="nav nav-pills nav-stacked">
            <li role=presentation><a href={{$tournament->id}}/bracket>Bracket</a></li>
            <li role=presentation>                        {{link_to_route('registraion.add','Anmeldung',$tournament->id)}}
            </li>
            <li role=presentation>{{link_to_route('results.index','Aufstellung',$tournament->id)}}</li>
            <li role=presentation><a href=#>{{link_to_route('registrations','Teilnehmer',$tournament->id)}}</a></li>
            <li role=presentation><a href=#>Log</a></li>

        </ul>
    </div>


<div id="middle" class="panel panel-default">
    <div class="panel-body">



        <table style="width:80%">
            <tr>
                <td>Tournament name: {{ $tournament->name }}</td>
                <td>Spiel: {{ $tournament->game }}</td>
                <td>Teilnehmer: {{ $tournament->participants }}</td>
            </tr>
            <tr>
                <td>Beschreibung: {{ $tournament->description }}</td>
                <td>Turnier gestartet? {{ $tournament->started }}</td>
                <td>Runde: {{ $tournament->round }}</td>
            </tr>
        </table>












</div>

</div>

    <div id="right">

        @yield('content2')


    </div>


@endsection



