<html>
  <head>
    <title>NBA</title>

    <style>
      body {
          font-family: 'Nunito', sans-serif;
      }
  </style>
  </head>
  <body>
    <h2>Teams</h2>
    <ul>
      @foreach ($teams as $team)
        <li><a href="/teams/{{$team->id}}">{{$team->name}}</a></li>
      @endforeach
    </ul>
  </body>
</html>