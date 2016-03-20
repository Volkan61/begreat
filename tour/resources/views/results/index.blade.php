@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tournaments</div>
                    <div class="panel-body">


                        @if (isset($started))
                        @if ($started === 1)
                            {{$tournament_already_started_message}}
                        @else
                            Tournament not started

                        @endif
                        @endif






//javascript sendet http request



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
