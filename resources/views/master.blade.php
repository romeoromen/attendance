<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="/font/css/open-iconic-bootstrap.css" >
</head>

<body>

<nav class="navbar navbar-dark bg-dark sticky-top mb-5">
    <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}"><span class="oi oi-basket"></span> 出席管理</a>
    <a class="btn btn-success" href="{{ route('attend') }}">出席登録</a>
    </div>
</nav>
<search></search>

<main id="app" class="container">
    @yield('content')
</main>

<script src="{{ mix('js/app.js') }}"></script>
</body>

</html>


