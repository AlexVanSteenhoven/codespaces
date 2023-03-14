<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codespaces</title>

    @vitereactrefresh
    @vite('resources/js/index.tsx')
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app" class="h-screen bg-neutral-100"></div>
</body>
</html>
