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





    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

    {{Html::style('vendor/bootstrap/css/bootstrap.css')}}

    {{Html::style('vendor/dataTables.bootstrap.min.css')}}

    {{Html::style('vendor/bootstrap-checkbox.css')}}



    {{Html::script('vendor/bootstrap-checkbox.js') }}

    {{Html::script('vendor/jquery.dataTables.min.js')}}
    {{Html::script('vendor/dataTables.bootstrap.min.js') }}

    {{Html::style('vendor/awesome-bootstrap-checkbox.css')}}




    {{Html::style('vendor/uikit.min.css')}}
    {{Html::style('vendor/dataTables.uikit.min.css')}}





    <script src="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


    <script src="https://cdn.datatables.net/1.10.12/css/dataTables.material.min.css" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


    <script type="text/javascript" class="init">


        $(document).ready(function() {
            $('#example').DataTable();


        } );

    </script>


    <style>

        #sp_left{width:650px;float:left;padding:3px}#sp_right{width:200px;float:right}
        #root{background-color:#fff;z-index:10}
        #root{font-size:16px;font-family:'Droid Sans',Helvetica,Arial,sans-serif;width:900px;margin:10px auto;border:none;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;}

    </style>



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


        function check_as_seen(id) {



             post('{{route('index.check_as_seen')}}', {episode: id});
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



</body>
</html>
