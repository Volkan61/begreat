@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tournaments</div>
                    <div class="panel-body">


                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Beschreibung</th>
                                <th>Spiel</th>
                                <th>Options</th>

                            </tr>
                            </thead>

                            <tbody>



                            @foreach ($tournaments as $tournament)

                                <tr>
                                    <td>{{$tournament->name}}</td>
                                    <td>{{$tournament->description}}</td>
                                    <td>{{$tournament->game}}</td>

                                    <td>{{ Form::open(['method' => 'DELETE', 'route' => ['tournament.destroy', $tournament->id]]) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}

                                        {{ Form::open(['method' => 'post', 'route' => ['registrations', $tournament->id]]) }}
                                        {{ Form::submit('Show Registrations', ['class' => 'btn']) }}
                                        {{ Form::close() }}



                                        {{ Form::open(['method' => 'post', 'route' => ['registraion.add', $tournament->id]]) }}
                                        {{ Form::submit('Anmeldung', ['class' => 'btn btn-success']) }}
                                        {{ Form::close() }}


                                        {{ Form::open(['method' => 'post', 'route' => ['results.index', $tournament->id]]) }}
                                        {{ Form::submit('Aufstellung', ['class' => 'btn btn-success']) }}
                                        {{ Form::close() }}

                                    </td>


                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                        {{link_to_route('tournament.new','Neues Turnier')}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
