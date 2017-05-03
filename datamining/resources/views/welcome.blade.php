<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>STATS19 Visual</title>
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Styles -->
        <style>
            html, body {
                bbackground: #4776e6;
                background: -webkit-linear-gradient(to right, #4776e6, #8e54e9);
                background: linear-gradient(to right, #4776e6, #8e54e9);
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                font-family: 'raleway semibold', sans-serif;
                position: absolute;
                left: 10px;
                top:18px;

            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .video-wrapper {
                perspective: 1000px;
                float:right
                
            }
            video {
                transform: rotateY(-30deg);
            }
        </style>
    </head>
    <body>
    <!--
     <div style='position:absolute;z-index:0;left:0;top:0;width:100%;height:100%'>
        <img src='/uploads/other version - Copy.jpg' style='width:100%;height:100%' alt='[]' />
    </div> -->
       <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links" >
                    @if (Auth::check())
                        <a href="{{ url('/forums') }}"><font color="white">Forum</font></a>
                        <a href="{{ url('/home') }}"><font color="white">Home</font></a>
                    @else
                        <a href="{{ url('/forums') }}"><font color="white">Forum</font></a>
                        <a href="{{ url('/login') }}"><font color="white">Login</font></a>
                        <a href="{{ url('/register') }}"><font color="white">Register</font></a>
                    @endif
                </div>
            @endif
          <!-- <div class="top-left links" >
               <a href="{{ url('/home') }}"><font color="white">PAGE</font></a>
           </div> -->
                <div class="content">
                <div class="title m-b-md">
                    <font color="white">STATS19 Data Visualization</font>
                   <div class="video-wrapper">
                        <video autoplay loop width="500" >
                            <source src="/uploads/rgu.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
                <div class="links">
                    <a href="{{ url('/test') }}"><font color="white">DATA MINING</font></a>
                    <a href="{{ url('/test') }}"><font color="white">DATA VISUALIZATION</font></a>
                    <a href="{{ url('/test') }}"><font color="white">STATS19</font></a>
                </div>
                <br>
                <br>
                <br>
                <a href="{{ url('/test') }}" class="btn btn-lg btn-danger">Explore IT! <span class="glyphicon glyphicon-signal"></span></a>
            </div>
        </div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 right-border">
                <div class="footer-about">
                    <h2 class="footer-title">About This Project</h2>
                    <p>This Website was created by Paulius Girtavicius, it represents STATS19 dataset visualization and is a project to obtain RGU degree</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="col-md-6 col-sm-6">
                    <div class="contact-info">
                        <h2 class="footer-title">Contact Info</h2>
                        <div class="single">
                            <i class="fa fa-map-marker"></i>
                            <p>RGU ID Number - 1208257
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 left-border">
                    <div class="navigation">
                        <h2 class="footer-title">Navigation</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/test') }}" title="">Home</a></li>
                            <li><a href="{{ url('/forums') }}" title="">Forum</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="visible-sm visible-xs">
                    <p>Developed By : Paulius Girtavicius</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
