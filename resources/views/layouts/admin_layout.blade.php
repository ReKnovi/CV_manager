
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8fafc;
        }
        header {
            background-color: #2d3748;
            color: #ffffff;
            padding: 1rem;
            text-align: center;
        }
        main {
            padding: 1rem;
        }
    </style>
</head>
<body>
    <main>
        @yield('content')
    </main>
</body>
</html>
