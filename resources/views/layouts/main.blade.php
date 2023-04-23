<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') | Codespaces</title>

        @yield('metadata')
        @vite('resources/css/app.css')

        <script>
            if (
                localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    </head>
    <body class="bg-indigo-100 dark:bg-gray-900">
        @include('partials.navbar')
        @include('partials.alerts')

        @include('components.sidebar')
        <main class="p-4 sm:ml-64 flex flex-wrap items-center justify-between mx-auto">
            @yield('content')
        </main>

        @vite('resources/js/app.js')
    </body>
</html>
