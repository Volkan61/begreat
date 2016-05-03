





@extends('tournament.layout.info')

@section('content2')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Neues Turnier</div>
                    <div class="panel-body">
                        {{ Form:: open(array('route' => array('tournament.new'),'class' =>'form-horizontal','role'=>'form')) }}
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Beschreibung</label>

                                <div class="col-md-6">
                                    <input class="form-control" name="description">

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('game') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Spiel</label>

                                <div class="col-md-6">
                                    <input class="form-control" name="game">

                                    @if ($errors->has('game'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('game') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>















                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i>Erstellen
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



