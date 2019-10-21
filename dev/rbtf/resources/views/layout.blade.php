<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/welcome.css" rel="stylesheet" type="text/css">
    <title>@yield('title')</title>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/abou  t">About</a></li>
        <li><a href="/team">Team</a></li>
    </ul>

    @yield('content')
</body>
</html>