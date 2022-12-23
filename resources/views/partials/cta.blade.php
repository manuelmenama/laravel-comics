<div class="cta-bar">
    <div class="container col">

      <ul>
        @foreach (config('db.cta_icon') as $item)

        <li>
          <img src="{{ Vite::asset($item['image']) }}" alt="{{ $item['text'] }}">
          <a href="#">{{ $item['text'] }}</a>
        </li>
        @endforeach

      </ul>
    </div>



  </div>
