<html>
  <head>
    <title>NBA players</title>

    <style>
      body {
          font-family: 'Nunito', sans-serif;
      }
  </style>
  </head>
  <body>
    <h2>Players</h2>
    <ul>
      @foreach ($players as $player)
        <li><a href="/players/{{$player->id}}">{{$player->first_name}} {{$player->last_name}}</a></li>
      @endforeach
    </ul>
  </body>
</html>