<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="css/simple-sidebar.css" rel="stylesheet">
    <script type="text/javascript"
            src="https://public.tableau.com/javascripts/api/tableau-2.min.js"></script>


    <script src="{{ asset('js/tableau.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</head>

<body onload="initViz();">


<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
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
                <a class="navbar-brand" href="{{ url('/test') }}">
                    STATS19 Visual
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}"><font color="white">Login</font></a></li>
                        <li><a href="{{ route('register') }}"><font color="white">Register</font></a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <font color="white">   {{ Auth::user()->name }} </font> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <font color="black">Logout</font>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <font color="#f5f5f5">2015 UK CYCLIST DATA</font>
            </li>
            <li>
                <a href="{{ url('/test') }}"><font color="white">Light and Weather Condition</font></a>
            </li>
            <li>
                <a href="{{ url('/2015Dashboard') }}"><font color="white">Time of the Casualty</font></a>
            </li>
            <br>
            <br>
            <li class="sidebar-brand">
                <font color="white">2015 SCOT CYCLIST DATA</font>
                </a>
            </li>
            <li>
                <a href="{{ url('/scotland') }}"><font color="white">Light and Weather Condition</font></a>
            </li>
            <li>
                <a href="{{ url('/Scottish015ByTime') }}"><font color="white">Time of the Casualty</font></a>
            </li>
            <br>
            <br>
            <li class="sidebar-brand">
                <font color="white">2005-2014 CYCLIST DATA</font>
            </li>
            <li>
                <a href="{{ url('/fullScottishCyclist') }}"><font color="white">Scotland</font></a>
            </li>
            <li>
                <a href="{{ url('/fullUkCyclist') }}"><font color="white">Whole UK</font></a>
            </li>
            <br>
            <br>
            <li class="sidebar-brand">
                <font color="white">GENERAL DATA</font>
                </a>
            </li>
            </li>
            <li>
                <a href="{{ url('/general1') }}"><font color="white">UK 2015 By time</font></a>
            </li>
            <li>
                <a href="{{ url('/general2') }}"><font color="white">UK 2015 By Light and Speed</font></a>
            </li>
            <li>
                <a href="{{ url('/general3') }}"><font color="white">Scotland By Vehicle</font></a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <a href="#menu-toggle" class="btn btn-danger" id="menu-toggle">Explore more!</a>
                    <br>
                    <!-- Tableu API -->
                    <div class='tableauPlaceholder' id='viz1493581587514' style='position: relative'><noscript><a href='#'><img alt='Dashboard 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;05&#47;05-14ScotlandCyclistImproved&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a></noscript>
                        <object class='tableauViz'  style='display:none;'>
                            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                            <param name='site_root' value='' />
                            <param name='name' value='05-14ScotlandCyclistImproved&#47;Dashboard1' />
                            <param name='tabs' value='no' /><param name='toolbar' value='yes' />
                            <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;05&#47;05-14ScotlandCyclistImproved&#47;Dashboard1&#47;1.png' />
                            <param name='animate_transition' value='yes' />
                            <param name='display_static_image' value='yes' />
                            <param name='display_spinner' value='yes' />
                            <param name='display_overlay' value='yes' />
                            <param name='display_count' value='yes' />
                            </object>
                            </div>
                            <script type='text/javascript'>
                                var divElement = document.getElementById('viz1493581587514');
                                var vizElement = divElement.getElementsByTagName('object')[0];
                                if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';}
                                else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';}
                                else { vizElement.style.width='1004px';vizElement.style.height='869px';}
                                var scriptElement = document.createElement('script');
                                scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                                vizElement.parentNode.insertBefore(scriptElement, vizElement);
                                </script>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!--  JSS, jQuery -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</div>
</body>
</html>