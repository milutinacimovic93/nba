<html>
  <head>
    <title>{{$team->name}}</title>
    <style>
      body {
          font-family: 'Nunito', sans-serif;
      }
  </style>
  </head>
  <body>
    <a href="/teams">{{$team->name}}</a>

    <div>Team name: {{$team->name}}</div>
    <div>Team email: {{$team->email}}</div>
    <div>Team adress: {{$team->adress}}</div>
    <div>Team city: {{$team->city}}</div>
    <div>Players :
    <div>
        @forelse($team->players as $player)
            <div>
            <div><a a href="/players">{{$player->first_name}} {{$player->last_name}}</div>
            </div>
        @empty
            <span>This team has no players</span>
        @endforelse
</div>
  </body>
</html>