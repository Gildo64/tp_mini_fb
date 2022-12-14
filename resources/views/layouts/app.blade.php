<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <style>
        body,html {
            min-height: 100vh;
            margin: 0;
            font-family: Arial;

        }

        * {
            box-sizing: border-box;
        }


        .tablink {
            background-color: #3b0e7c;
            color: white;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            font-size: 17px;
            width: 25%;
        }

        .navbar {
            margin-top: 1px;
            width: 100%;
            background-color: #3b0e7c;
            overflow: hidden;
        }

        /* Navbar links */
        .navbar a {
            float: left;
            text-align: center;
            padding: 12px;
            color: white;
            text-decoration: none;
            font-size: 17px;
        }

        /* Navbar links on mouse-over */
        .navbar a:hover {
            background-color: #000;
        }

        /* Current/active navbar link */
        .active {
            background-color: #2f0183;
        }
        main{
            display: block;
        }
    </style>
    @yield('style')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="">


        <!-- Page Heading -->
        <header style="margin-bottom: 20px">

            <div class="navbar">
                <a class="active tablink" href="{{ route('home') }}"><i class="fa fa-fw fa-home"></i> Acceuil</a>
                <a class="tablink" href="{{ route('friend_liste') }}"><i class="fa fa-fw fa-users"></i>
                    Amis</a>
                <a class="tablink" href="{{ route('messages', ['id' => auth()->user()->id]) }}"><i
                        class="fa fa-fw fa-envelope"></i> Messages</a>
                <a class="tablink" href="{{ route('profile') }}"><i class="fa fa-fw fa-user"></i> Profil</a>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
