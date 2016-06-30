@extends('layouts.template')

@section('content')




    <div>
        <div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Series</div>
                    <div class="panel-body">



                        <table id="example" class="uk-table uk-table-hover uk-table-striped" style="width: 100%;">
                            <thead>
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" aria-sort="ascending" style="width: 215px;">#</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Name</th></tr>
                            </thead>

                            <tbody>



                            <?php $i=0;?>


                            @foreach ($series as $serie)


                                <a href="{{route('index.season')}}/{{$serie->id}}    ">

                                    <div>
                              <tr onclick="window.document.location='{{route('index.season')}}/{{$serie->id}}/1';" role="row" class="<?php if(($i % 2) == 1) echo "odd"; else echo "even"; ?>">
                                  <!--                       <td class="">


                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox{{$i}}" class="styled" type="checkbox">
                                                <label for="checkbox{{$i}}">
                                                </label>
                                            </div>


                                    </td>-->
                                    <td style="width: 30%;cursor: pointer;" onClick="DoPost({{$serie->id}})" class="">{{$serie->id}}</td>
                                    <td style="width: 70%; cursor: pointer;" class="sorting_1">{{$serie->name}}</td>
                                </tr>
                                    </div>
</a>


                                <?php $i++?>
                            @endforeach
                        </table>




                        {{ Form::model($model,['route' => ['index.page'],'class' =>'form-horizontal','role'=>'form']) }}

                        {!! csrf_field() !!}
 <!--                       <form action="/www/public/bs/find_episodes_proxy" method="post"> -->







                        <?php
                        $serie_=array();

                        foreach ($series as $serie) {

                            $serie_[$serie->id]=$serie->name;

                        }



                        ?>




                   {{--     {{Form::select('menus[]', $serie_, $serie_model, array(
                        'name' =>'top5',
                        ))}} --}}





                        </select>




<br>

                        @if ($show_seasons === true)
                                <!--                       <form action="/www/public/bs/find_episodes_proxy" method="post"> -->



                        <?php
                        $season_=array();

                        foreach ($seasons->get() as $season) {

                            $season_[$season->id]=$season->season_number;

                        }



                        ?>


                        {{Form::select('menus[]', $season_, $model, array(
                        'name' =>'seasons'
                        ))}}





                  <!--      <select name="seasons" onchange="populateList();">


                            @foreach ($seasons->get() as $season)

                                <tr>
                                    <option value="{{$season->id}}">{{$season->season_number}}</option>
                                </tr>

                            @endforeach

                        </select>
                        @endif
                                -->


                        <br>

                        @if ($show_episodes === true)
                                <!--                       <form action="/www/public/bs/find_episodes_proxy" method="post"> -->



                        <?php
                        $episodes_=array();

                        foreach ($episodes->get() as $episode) {

                            $episodes_[$episode->id]=$episode->name;

                        }



                        ?>


                        {{Form::select('menus[]', $episodes_, $model, array(
                        'name' =>'episodes'
                        ))}}





                        @endif








                        <br>





                     <!--   <input type="submit" value="Send"> -->

                        {!! Form::close() !!}











                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection


