@extends('layouts.app')

@section('title', 'Profile')

@section('style')

    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
        }

        .profile_container {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #3b0e7c ;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            margin-top: 5px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover,
        a:hover {
            opacity: 0.7;
        }

    </style>
@endsection

@section('content')
    <div class="profile_container">
        <div class="card">
            <img src="https://cdn-icons-png.flaticon.com/128/1077/1077114.png" alt="User"
                style="width:auto; max-height:100px">
            <h1>{{ $user->pseudo }} {{ $user->pseudo }}</h1>
            <h5> E-mail:{{ $user->email }}</h5>            
            <div>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection



