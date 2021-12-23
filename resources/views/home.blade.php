<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gambling</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
  <div class="wrapper" id="app">
    <app></app>
  </div>
  <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
