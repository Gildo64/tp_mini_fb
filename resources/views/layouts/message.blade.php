@extends('layouts.app')

@section('title', 'Messages')


@section('style')

    <style>
        .container {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Darker chat container */
        .darker {
            border-color: #ccc;
            background-color: #ddd;
        }

        /* Clear floats */
        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Style images */
        .container img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

        /* Style the right image */
        .container img.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
        }

        /* Style time text */
        .time-right {
            float: right;
            color: #aaa;
        }

        /* Style time text */
        .time-left {
            float: left;
            color: #999;
        }

    </style>

@endsection



@section('content')

    <a href="{{ route('forum') }}">Forum de discussion privée</a>

    @foreach ($allMessages as $message)
        <div class="container">
            <img src="https://cdn-icons-png.flaticon.com/128/1077/1077114.png" alt="User"
                style="width:auto; max-height:50px">
            <p>{{ $message->contenu }}</p>
            <span class="time-right">{{ date_format($message->created_at, 'd-m-Y H:i:s') }}</span>
            <a class="publication__addComment" href="{{ route('details', ['id' => $message->id]) }}">Repondre</a>
        </div>
    @endforeach

@endsection
