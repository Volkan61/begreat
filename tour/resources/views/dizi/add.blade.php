





@extends('tournament.layout.info',['tournament' => $tournament])

@section('content2')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Anmeldung</div>
                    <div class="panel-body">

                        {{ Form::open(['route' => ['registration.add2', $tournament_id],'class' =>'form-horizontal','role'=>'form']) }}

                            {!! csrf_field() !!}





















                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Anmelden
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection



