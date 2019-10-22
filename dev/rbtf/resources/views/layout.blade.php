<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/tweets.css" rel="stylesheet" type="text/css">
    <title>@yield('title')</title>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/fed">Fed Cup</a></li>
        <li><a href="/davis">Davis Cup</a></li>
    </ul>

    @yield('content')

    <footer>
        <ul>
            <li>links</li>
            <li>links</li>
            <li>links</li>
            <li>links</li>
        </ul>
    </footer>
</body>
</html>