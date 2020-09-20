<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'laraBBS') - Laravel 进阶教程</title>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div class="{{ route_class() }}-page">
  @include('layouts._header')
  <div class="container">
    @include('shared._messages')
    @yield('content')
  </div>
  @include('layouts._footer')
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>