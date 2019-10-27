<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel=”stylesheet” href="/css/main.cs" >
</head>

<body>

<nav>
    <a href="/">Welcome</a><br>
    <a href="/about">About</a><br>
    <a href="/contacts">Contacts</a><br>
    <a href="/licanse">Licensia</a><br>
</nav>

@yield('content')
    
</body>
</html>