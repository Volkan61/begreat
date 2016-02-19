@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">





                    {{ Form:: model($profile, array('route' => array('profile.update', $profile->id))) }}


                    {{ Form::text('user_id') }} <br>
                    {{ Form::text('first_name') }} <br>
                    {{ Form::text('last_name') }} <br>
                    {{ Form::text('address') }} <br>
                    {{ Form::text('gender') }} <br>
                    {{ Form::text('bio') }} <br>



                    {{ Form::submit('Click Me!')}}
                    {{ Form::close()}}





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
