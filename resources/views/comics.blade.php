@extends('layouts.main')

@section('content')
    <main>
        <div class="jumbotron">

            <div class="button-fill">
              <p>CURRENT SERIES</p>
            </div>

          </div>

          <div class="container cont">

            <ul>

                @foreach ($comics as $comic)

                    <li>
                        <a href="#">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <p>
                                {{ $comic['title'] }}
                            </p>
                        </a>
                    </li>

                @endforeach


            </ul>

            <a
              class="button-fill a-btn"
              href="#">SHOW MORE</a>

          </div>
    </main>
@endsection


@section('title')

    Comics

@endsection
