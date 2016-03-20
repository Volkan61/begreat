@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Anmeldungen</div>
                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>E-Mail</th>


                            </tr>
                            </thead>



                            @foreach ($users as $registered_user)

                                <tr>
                                    <td>{{$registered_user->user->name}}</td>
                                    <td>{{$registered_user->user->email}}</td>




                                </tr>
                            @endforeach

                            <tbody>





                            </tbody>
                        </table>


                        {{link_to_route('tournament.new','Neues Turnier')}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
