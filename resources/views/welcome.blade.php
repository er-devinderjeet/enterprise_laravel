<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to Dashboard</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding: 0;
            }

            .full-height {
                height: auto;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            <!--- css -->
       
 @import url("https://fonts.googleapis.com/css?family=Arima+Madurai:300");
*, *::before, *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.container_bird {
    z-index: 1;
    position: relative;
    overflow: hidden;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    min-height: 35rem;
    
    background-blend-mode: soft-light;
    background-size: cover;
    background-position: center center;
    padding: 2rem;
}
.bird {
    background-image: url(http://www.iamramraj.com/demo/Flying_birds_CSS_animation_examples/bird-cells.svg);
    background-size: auto 100%;
    width: 88px;
    height: 125px;
    will-change: background-position;
    -webkit-animation-name: fly-cycle;
    animation-name: fly-cycle;
    -webkit-animation-timing-function: steps(10);
    animation-timing-function: steps(10);
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
}
.bird--one {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-delay: -0.5s;
    animation-delay: -0.5s;
}
.bird--two {
    -webkit-animation-duration: 0.9s;
    animation-duration: 0.9s;
    -webkit-animation-delay: -0.75s;
    animation-delay: -0.75s;
}
.bird--three {
    -webkit-animation-duration: 1.25s;
    animation-duration: 1.25s;
    -webkit-animation-delay: -0.25s;
    animation-delay: -0.25s;
}
.bird--four {
    -webkit-animation-duration: 1.1s;
    animation-duration: 1.1s;
    -webkit-animation-delay: -0.5s;
    animation-delay: -0.5s;
}
.bird-container {
    position: absolute;
    top: 20%;
    left: -7.5vw;
    -webkit-transform: scale(0);
    transform: scale(0);
    will-change: transform;
    -webkit-animation-name: fly-right-one;
    animation-name: fly-right-one;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
}
.bird-container--one {
    -webkit-animation-duration: 15s;
    animation-duration: 15s;
    -webkit-animation-delay: 0;
    animation-delay: 0;
}
.bird-container--two {
    -webkit-animation-duration: 16s;
    animation-duration: 16s;
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
}
.bird-container--three {
    -webkit-animation-duration: 14.6s;
    animation-duration: 14.6s;
    -webkit-animation-delay: 9.5s;
    animation-delay: 9.5s;
}
.bird-container--four {
    -webkit-animation-duration: 16s;
    animation-duration: 16s;
    -webkit-animation-delay: 10.25s;
    animation-delay: 10.25s;
}
 @-webkit-keyframes fly-cycle {
 100% {
 background-position: -900px 0;
}
}
 @keyframes fly-cycle {
 100% {
 background-position: -900px 0;
}
}
@-webkit-keyframes fly-right-one {
 0% {
 left: -10%;
 -webkit-transform: scale(0.3);
 transform: scale(0.3);
}
 10% {
 left: 10%;
 -webkit-transform: translateY(2vh) scale(0.4);
 transform: translateY(2vh) scale(0.4);
}
 20% {
 left: 30%;
 -webkit-transform: translateY(0vh) scale(0.5);
 transform: translateY(0vh) scale(0.5);
}
 30% {
 left: 50%;
 -webkit-transform: translateY(4vh) scale(0.6);
 transform: translateY(4vh) scale(0.6);
}
 40% {
 left: 70%;
 -webkit-transform: translateY(2vh) scale(0.6);
 transform: translateY(2vh) scale(0.6);
}
 50% {
 left: 90%;
 -webkit-transform: translateY(0vh) scale(0.6);
 transform: translateY(0vh) scale(0.6);
}
 60% {
 left: 110%;
 -webkit-transform: translateY(0vh) scale(0.6);
 transform: translateY(0vh) scale(0.6);
}
 100% {
 left: 110%;
 opacity: 1;
 -webkit-transform: translateY(0vh) scale(0.6);
 transform: translateY(0vh) scale(0.6);
}
}
@keyframes fly-right-one {
 0% {
 left: -10%;
 -webkit-transform: scale(0.3);
 transform: scale(0.3);
}
 10% {
 left: 10%;
 -webkit-transform: translateY(2vh) scale(0.4);
 transform: translateY(2vh) scale(0.4);
}
 20% {
 left: 30%;
 -webkit-transform: translateY(0vh) scale(0.5);
 transform: translateY(0vh) scale(0.5);
}
 30% {
 left: 50%;
 -webkit-transform: translateY(4vh) scale(0.6);
 transform: translateY(4vh) scale(0.6);
}
 40% {
 left: 70%;
 -webkit-transform: translateY(2vh) scale(0.6);
 transform: translateY(2vh) scale(0.6);
}
 50% {
 left: 90%;
 -webkit-transform: translateY(0vh) scale(0.6);
 transform: translateY(0vh) scale(0.6);
}
 60% {
 left: 110%;
 -webkit-transform: translateY(0vh) scale(0.6);
 transform: translateY(0vh) scale(0.6);
}
 100% {
 left: 110%;
 opacity: 1;
 -webkit-transform: translateY(0vh) scale(0.6);
 transform: translateY(0vh) scale(0.6);
}
}
@-webkit-keyframes fly-right-two {
 0% {
 left: -10%;
 opacity: 1;
 -webkit-transform: translateY(-2vh) scale(0.5);
 transform: translateY(-2vh) scale(0.5);
}
 10% {
 left: 10%;
 -webkit-transform: translateY(0vh) scale(0.4);
 transform: translateY(0vh) scale(0.4);
}
 20% {
 left: 30%;
 -webkit-transform: translateY(-4vh) scale(0.6);
 transform: translateY(-4vh) scale(0.6);
}
 30% {
 left: 50%;
 -webkit-transform: translateY(1vh) scale(0.45);
 transform: translateY(1vh) scale(0.45);
}
 40% {
 left: 70%;
 -webkit-transform: translateY(-2.5vh) scale(0.5);
 transform: translateY(-2.5vh) scale(0.5);
}
 50% {
 left: 90%;
 -webkit-transform: translateY(0vh) scale(0.45);
 transform: translateY(0vh) scale(0.45);
}
 51% {
 left: 110%;
 -webkit-transform: translateY(0vh) scale(0.45);
 transform: translateY(0vh) scale(0.45);
}
 100% {
 left: 110%;
 -webkit-transform: translateY(0vh) scale(0.45);
 transform: translateY(0vh) scale(0.45);
}
}
@keyframes fly-right-two {
 0% {
 left: -10%;
 opacity: 1;
 -webkit-transform: translateY(-2vh) scale(0.5);
 transform: translateY(-2vh) scale(0.5);
}
 10% {
 left: 10%;
 -webkit-transform: translateY(0vh) scale(0.4);
 transform: translateY(0vh) scale(0.4);
}
 20% {
 left: 30%;
 -webkit-transform: translateY(-4vh) scale(0.6);
 transform: translateY(-4vh) scale(0.6);
}
 30% {
 left: 50%;
 -webkit-transform: translateY(1vh) scale(0.45);
 transform: translateY(1vh) scale(0.45);
}
 40% {
 left: 70%;
 -webkit-transform: translateY(-2.5vh) scale(0.5);
 transform: translateY(-2.5vh) scale(0.5);
}
 50% {
 left: 90%;
 -webkit-transform: translateY(0vh) scale(0.45);
 transform: translateY(0vh) scale(0.45);
}
 51% {
 left: 110%;
 -webkit-transform: translateY(0vh) scale(0.45);
 transform: translateY(0vh) scale(0.45);
}
 100% {
 left: 110%;
 -webkit-transform: translateY(0vh) scale(0.45);
 transform: translateY(0vh) scale(0.45);
}
}
</style>
        </style>
    </head>
    <body>
        <div>
            <div class="container_bird">
                    <div class="content ">
               
                
                <div class="title m-b-md">
                    Dashboard
                </div>

                <div class="links">
                    <p> Version 2.0.0</p>
                    <a href="http://localhost/enterprise/public/login">Login</a><br>
                    
                </div>
            <!---
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            -->
            </div>
                    <div class="bird-container bird-container--one">
                      <div class="bird bird--one"></div>
                    </div>
                    <div class="bird-container bird-container--two">
                      <div class="bird bird--two"></div>
                    </div>
                    <div class="bird-container bird-container--three">
                      <div class="bird bird--three"></div>
                    </div>
                    <div class="bird-container bird-container--four">
                      <div class="bird bird--four"></div>
                    </div>
                
                </div>
        </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        </div>
    </body>
</html>
