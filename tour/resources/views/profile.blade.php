@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                        {{$profile->first_name}} <br>
                        {{$profile->last_name}} <br>
                        {{$profile->adress}} <br>
                        {{$profile->gender}} <br>



                        {{link_to_route('profile.update','Edit Profil')}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
