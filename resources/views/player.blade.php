<html>
  <head>
    <title>{{$player->first_name}}</title>
    <style>
      body {
          font-family: 'Nunito', sans-serif;
      }
  </style>
  </head>
  <body>
    <a href="/players">{{$player->first_name}} {{$player->last_name}}</a>

    <div>Players name: {{$player->first_name}} {{$player->last_name}}</div>
    <div>Players email: {{$player->email}}</div>
    <div>Playing for: {{$player->team->name}}</div>
    
  </body>
</html>