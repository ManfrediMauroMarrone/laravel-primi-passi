<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prima app in laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>
  <body>
    <a href="{{ route('eta') }}">Vai alla pagina age</a>
    <h1>Mi chiamo {{ $nome }}</h1>
  </body>
</html>
