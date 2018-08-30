<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PhotoHUB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <style>
            html, body {
                /* background-color: #fff; */
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

body {
    margin:0;
    padding:0;
    background:#fff;
}
h1 {
    position:absolute;
    top:50%;
    left:50%;
    z-index:-1;
    font-size:70px;
    transform:translate(-50%,-50%);
    color:#111;
}
.loader {
    position:absolute;
    top:50%;
    transform:translateY(-50%);
    width:100%;
    height:10px;
    text-align:center;
}
.loader span {
    width:30px;
    height:30px;
    background:#fff;
    display:inline-block;
    border-radius:50%;
    animation:animate 2s linear infinite;
    opacity:0;
}
.loader span:nth-child(1) {
    animation-delay:0.8s;
    background:#00c2ff;
}
.loader span:nth-child(2) {
    animation-delay:0.4s;
    background:#ffe837;
}
.loader span:nth-child(3) {
    animation-delay:0.2s;
    background:#ff1b78;
}

@keyframes animate {
    0% {
        transform: translateX(-200px);
        opacity:0;
    }
    25% {
        transform: translateX(-100px);
        opacity:1;
    }
    50% {
        transform: translateX(0);
        opacity:1;
    }
    75% {
        transform: translateX(0);
        opacity:1;
    }
    100% {
        transform: translateX(100px);
        opacity:0;
    }
    90% {
        transform: translateX(100px);
        opacity:0;
    }
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/index') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

    <div class="loader">
    <span></span>
    <span></span>
    <span></span>
    </div>
    <h1>PhotoHUB</h1>


@if (Route::has('login'))
               
                    @auth
                    <div class="links" style=" margin-top:150px;"><a href="index" ><h2>Visit Here</h2></a></div>   
                    @else
                    <div class="links" style=" margin-top:150px;"><a href="index" ><h2>Visit as Guest</h2></a></div>
                    @endauth
                
@endif
    
    
    
    

    </body>
</html>
