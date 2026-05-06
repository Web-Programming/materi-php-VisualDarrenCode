<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @section('navbar')
    <b> ini  navbar utama</b>
    @show

    @section('banner')
    @show
    @yield('content')
</body>
</html>