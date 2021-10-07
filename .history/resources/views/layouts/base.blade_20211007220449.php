{{-- @foreach ($todos as $todo)
    {{$todo->body}}
@endforeach --}}

<!doctype html>
<html lang="ja">
  <head>
    <title>@yield('title')</title>
  <!-- 必要なメタタグ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- 自前CSS -->
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="../../../css/style.css">

  </head>
  <body>

    @include('layouts.header')
    @yield('contents')
    @include('layouts.footer')

  <!-- オプションのJavaScript -->
  <!-- 最初にjQuery、次にPopper.js、次にBootstrap JS -->
    
  </body>
</html>
