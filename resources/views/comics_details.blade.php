@extends('layouts.main')

@section('content')

    <main class="my-detail-bg">
        <div class="jumbotron">

            <div class="button-fill">
              <p>CURRENT SERIES</p>
            </div>

        </div>
        <div class="my-top-bar">
            <img class="thumb" src="{{ $comic['thumb'] }}" alt="">
        </div>
        <div class="my-comics-detail container">
            <h2>
                {{ $comic['title'] }}
            </h2>

            <p>
                {{ $comic['description'] }}
            </p>
        </div>
    </main>

@endsection
