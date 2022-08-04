@extends('layouts.app')

@section('title', 'Profile')

@section('style')

<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: 15px auto;
        text-align: center;
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
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;

    }

    form {
        width: 100%;
        margin-right: 2px;
        margin-bottom: 5px;

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


@foreach ($users as $user)
@if ($user->name && $user->email)
<div class="card">
    <img src="https://cdn-icons-png.flaticon.com/128/1077/1077114.png" alt="User" style="width:auto; max-height:100px">
    <h1>{{ $user->pseudo }}</h1>
    <h5> E-mail:{{ $user->email }}</h5>
    <div style="display: flex">
        <form action="#" method="POST">
            @csrf
            <button type="submit" style="background-color: rgb(4, 243, 4)">Message</button>
        </form>
        <form action="{{ route('friend_add', ['id' => $user->id]) }}" method="GET">
            <button type="submit" style="background-color: green">Ajouter</button>
        </form>
    </div>
</div>

@endif


@endforeach


@endsection