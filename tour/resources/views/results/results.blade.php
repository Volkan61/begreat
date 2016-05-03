@extends('tournament.layout.info',['tournament' => $tournament])
@section('content2')

<html>

<head>


    {{ Html::script('vendor/jquery-bracket/dist/ga.js') }}
    {{ Html::script('vendor/jquery-bracket/dist/jquery-1.js') }}
    {{Html::style('vendor/jquery-bracket/dist/jquery.css')}}
    {{ Html::script('vendor/jquery-bracket/dist/jquery.js') }}
</head>



<body>







    <div class="container">

        {{ var_dump($results[0])   }} <br>


        {{ $results[0]["user1_result"][0]   }}


        <div id="minimal">
            <h3>Minimal</h3>
            <script type="text/javascript">
                var minimalData = {
                    teams : [
                        [  "asd", "Team 2"], /* first matchup */
                        ["Team 3", "Team 4"]  /* second matchup */
                    ],
                    results : [
                        [[1,2], [3,4]],       /* first round */
                        [[4,6], [2,1]]        /* second round */
                    ]
                }

                $(function() {
                    $('#minimal').bracket({
                        init: minimalData /* data to initialize the bracket with */ })
                })
            </script>
        </div>



    </div>
    </div>
    </div>
    </div>
    </div>





</body>
</html>

@endsection
