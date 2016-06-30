@extends('layouts.template')

@section('content')




    <div class="container">
        <div class="row">






                        <!DOCTYPE html>
                        <!-- saved from url=(0028)https://bs.to/serie/Scrubs/1 -->
                        <html lang="de"><head>
                            <style>
                                #sp_left{width:650px;float:left;padding:3px}#sp_right{width:200px;float:right}
                                #root{background-color:#fff;z-index:10}
                                #root{font-size:16px;font-family:'Droid Sans',Helvetica,Arial,sans-serif;width:900px;margin:10px auto;border:none;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;}
                            </style>
                        </head>

                        <body>
                        <div id="root">
                            <section class="serie">
                                <div id="sp_left">

                                    <div style="width:40em;">
                                        <div data-editable data-name="article">
                                            <h2>

                                                {{$season_title["name"]}}

                                            </h2>

                                      <p>                                                {{$serie_description[0]['description']}}

                                      </p>
                                                                                    <span style="word-wrap: break-word;">

                                            </div>
                                        </span>






                                    </div>


                                    {{ Form::model($model,['route' => ['index.season',7],'class' =>'form-horizontal','role'=>'form','id'=>'form_']) }}
                                    {!! csrf_field() !!}
                                            <!--                       <form action="/www/public/bs/find_episodes_proxy" method="post"> -->
                                    <?php
                                    $serie_=array();

                                    foreach ($series as $serie) {

                                        $serie_[$serie->id]=$serie->name;

                                    }



                                    ?>
                                    {{--  {{Form::select('menus[]', $serie_, $serie_model, array(
                                    'name' =>'top5',
                                    'onchange' => 'document.getElementById("form_").submit();'
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


                                    {{Form::select('menus[]', $season_, $season_model, array(
                                    'name' =>'seasons',
                                                            'onchange' => 'document.getElementById("form_").submit();'

                                    ))}}





                                            <!--      <select name="seasons" onchange="populateList();">


                            @foreach ($seasons->get() as $season)

                                            <tr>
                                                <option value="{{$season->id}}">{{$season->season_number}}</option>
                                </tr>

                            @endforeach

                                            </select>
                                            @endif


                            <!--        <input type="submit" value="Send">

-->







                                    <nav>
                                        <ul class="pagination">





                                            @foreach ($seasons->get() as $season)


                                                <li <?php if($season_nr==$season->season_number) echo 'class="active"' ?>><a href="{{$season->season_number}}">{{$season->season_number}}</a></li>

                                            @endforeach








                                        </ul>
                                    </nav>





                                    <table class="table table-striped table-condensed table-hover" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                                        <thead>


                                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 137px;"> </th><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" aria-sort="ascending" style="width: 215px;">#</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Name</th></tr>
                                        </thead>

                                        <tbody>









                                        <?php $i=1;?>


                                        @foreach ($episodes->get() as $episode)


                                            <tr
                                               height=1 role="row" class="<?php if(($i % 2) == 1) echo "odd"; else echo "even"; ?>"<?php if(in_array($episode->id,$seen_episodes)) echo 'style="background-color:#30DA06;"'?>>



                                                <td>


                                                    <button id="button1" type="button" class="btn-lg" hidden="hidden" data-toggle="modal" data-target="#myModal">Open Modal</button>


                                                    <div style="display:inline;" class="checkbox checkbox-success">




                                                        <span style="cursor:pointer;" onClick="check_as_seen({{$episode->id}})" class="<?php if(!in_array($episode->id,$seen_episodes)) echo 'glyphicon glyphicon-eye-open'; else echo 'glyphicon glyphicon-eye-close';?>" aria-hidden="true"></span>


                                              <!--          <input onClick="check_as_seen({{$episode->id}})" id="checkbox{{$i}}" class="styled" type="checkbox" value="<?php echo csrf_token(); ?>">
                                                        <label for="checkbox{{$i}}">
                                                        </label>
                                                        -->


                                                    </div>
                                                </td>
                                                <td style="cursor: pointer;" onclick="document.getElementById('button1').click()"  class="">{{$i}}</td>
                                                <td  style="width: 60%;cursor: pointer;"  onclick="document.getElementById('button1').click()"  class="sorting_1">{{$episode->name}}</td>





                                                <!-- Modal -->
                                                <div id="myModal" class="modal fade" role="dialog">
                                                    <div class="modal-dialog modal-lg">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Modal Header</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Some text in the modal.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>






                                            </tr>




                                        <?php $i++?>
                                        @endforeach
                                    </table>
                                    {!! Form::close() !!}




                                </div>
                                <div id="sp_right">
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <div id="seriesdata">
                                        <h3>Daten        </h3>
                                        <p>&nbsp;</p>
                                        <p>daten</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                    </div>
                                </div></section>
                            <br style="clear: both;">

                        </div>



                        {{ Form:: open(array('route' => array('index.check_as_seen'),'class' =>'form-horizontal','role'=>'form','hidden'=>'hidden')) }}
                        {!! csrf_field() !!}


                        <input id="episode"  name="episode">
                        <input id="season"  name="season">



                        <button id="check_button" name="check_button" type="submit">
                         Erstellen
                        </button>

                        </form>


                        </body></html>














    </div>









@endsection
