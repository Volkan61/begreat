<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}-->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>







    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    {{Html::style('contenttools/sandbox.css')}}
    {{Html::style('contenttools/build/content-tools.min.css')}}










    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

    {{Html::style('vendor/bootstrap/css/bootstrap.css')}}




    {{Html::script('vendor/jquery.dataTables.min.js')}}
    {{Html::script('vendor/dataTables.bootstrap.min.js') }}

    {{Html::style('vendor/awesome-bootstrap-checkbox.css')}}


    {{Html::style('vendor/uikit.min.css')}}

    {{Html::style('vendor/dataTables.uikit.min.css')}}

    <script type="text/javascript" class="init">

        $(document).ready(function() {
            $('#example').DataTable();


        } );



    </script>



    <script language="javascript">


    function post(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for(var key in params) {
    if(params.hasOwnProperty(key)) {
    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", key);
    hiddenField.setAttribute("value", params[key]);

    form.appendChild(hiddenField);
    }
    }

    document.body.appendChild(form);
    form.submit();
    }
    </script>

    <script language="javascript">



        function DoPost(id){

            get('{{route('index.season') }}', {top5: id});


        }

        function check_as_seen(id){
            $("#episode").val(id);

            $( "#check_button" ).click();

        }


        function submit(){

            document.getElementById("myForm").submit();


        }







    </script>




</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-sign-out"></i>My Profile</a></li>
                                <li><a href="{{ url('/tournaments') }}"><i class="fa fa-btn fa-sign-out"></i>Tournaments</a></li>

                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br>



    <!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}-->


    @yield('content')




    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>


    {{Html::script('contenttools/build/content-tools.js')}}
    {{Html::script('contenttools/sandbox.js')}}


    <script type="text/javascript" class="init">

        $(document).ready(function() {
            // Initialize our editor

            var editor = ContentTools.EditorApp.get();


            editor.addEventListener('saved', function (ev) {
                var name, onStateChange, passive, payload, regions, xhr;

                // Check if this was a passive save
                passive = ev.detail().passive;

                // Check to see if there are any changes to save
                regions = ev.detail().regions;
                if (Object.keys(regions).length == 0) {
                    return;
                }

                // Set the editors state to busy while we save our changes
                this.busy(true);

                // Collect the contents of each region into a FormData instance
                payload = new FormData();
                payload.append('__page__', window.location.pathname);
                for (name in regions) {
                    payload.append(name, regions[content]);
                }

                // Send the update content to the server to be saved
                onStateChange = function(ev) {
                    // Check if the request is finished
                    if (ev.target.readyState == 4) {
                        editor.busy(false);
                        if (ev.target.status == '200') {
                            // Save was successful, notify the user with a flash
                            if (!passive) {
                                new ContentTools.FlashUI('ok');
                            }
                        } else {
                            // Save failed, notify the user with a flash
                            new ContentTools.FlashUI('no');
                        }
                    }
                };

                xhr = new XMLHttpRequest();
                xhr.addEventListener('readystatechange', onStateChange);
                xhr.open('POST', '{{route('description_update') }}/{{$serie_id}}');
                xhr.send(payload);







        } );



    </script>







</body>
</html>
