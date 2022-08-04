@extends('layouts.app')

@section('title', 'Home')

@section('style')


<style>
    form {
        display: flex;
        justify-content: center;
    }

    span {
        color: #3b0e7c;
    }
</style>


@endsection

@section('content')

<div>
    <h2 style="text-align: center">Que pensez-vous</h2>
    <div style="padding: 5px">

        <form method="POST" action="{{ route('home') }}">
            @csrf
            <div style="width: 50%">
                <div style="display: flex; flex-direction:column; width:100%">
                    <textarea name="contenu" id="" cols="5" rows="2"></textarea>
                </div>
                <div style="width: 100%">
                    <button style="width: 100%; display:flex; justify-content:center; margin:10px 0" type="submit">
                        <strong>Publier</strong>
                    </button>
                </div>
            </div>
        </form>
    </div>


    @foreach ($allPublications as $publication)
    <div class="publication__item">
        <div class="publication__title">
            <span>{{ $publication->user->firstname }} {{ $publication->user->lastname }}</span>
        </div>
        <p class="publication__desc">
            {{ $publication->contenu }}
        </p>
        <a class="publication__addComment" href="{{ route('comment', ['id' => $publication->id]) }}">Ajouter un commentaire</a>
    </div>

    @endforeach




</div>


@endsection