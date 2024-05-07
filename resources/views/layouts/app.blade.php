<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .nav{
            width: 100%;
            margin: 0;
            padding: 0;
        }
        .nav li{
            list-style-type: none;
            border-bottom: 1px solid rgb(46, 46, 46);
            width: 100%;
        }
        .nav li a{
            text-decoration: none;
            color:rgb(57, 56, 56);
            font-size: 16px;
            font-weight: bold;
            margin: 2px 10px 0px 20px;
            display:block;
            padding: 2px 10px 0px 10px;
            text-align: center;
        }
        .nav li a:hover{
            color:rgb(5, 5, 5);
        }

        .logout{
            text-decoration: none;
            display:block;
            margin-top:10px;
            padding: 1px 0px
        }
        .logout:hover{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="row">
            @auth
            <div class="col-2">
                <div class="row">
                    <div class="col-12 bg-black" style="height: 51px">
                        <h3 class="text-center text-light mt-2">
                            Qtecdev Careers
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="padding:0px; background: rgb(243, 243, 243); height:535px">
                        <ul class="nav">
                            <li><a href="{{ route('home') }}">Dashboard</a></li>
                            <li><a href="{{ route('create') }}">Create Note</a></li>
                            <li><a href="{{ route('note_list') }}">Note List</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endauth

            <div class="col-10">
                @auth
                <div class="row">
                    <div class="col-10 bg-dark">
                        <form action="">
                            <input type="text" name="search" placeholder="Search" style="width: 100%; height:50px; outline:none; border:none; background:rgb(40, 39, 39)">
                        </form>
                    </div>
                    <div class="col-2 bg-black">
                        <a class="logout" href="{{ route('logout') }}">
                            <p class="text-light text-center">Sign Out</p>
                        </a>
                    </div>
                </div>
                @endauth

                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>

        {{-- <main class="py-4">
            @yield('content')
        </main> --}}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
