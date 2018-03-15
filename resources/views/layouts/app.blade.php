<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HoninWorx</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lemon|Lobster+Two:400i|Old+Standard+TT:400i" rel="stylesheet">
        @yield('head')
        <link rel="stylesheet" href="/css/theme.css" />
    </head>
    <body>
      @include("elements/slam")
      <article class='content'>
        @yield("content")

      </article>
      <footer class='htiled'>
        <p class='tile'>
          Built using Laravel
        </p>
        <p class='tile'>
          All artowrk showcased on this website is owned by me. You are not allowed to claim any of it as your own.
        </p>
      </footer>
    </body>
</html>
