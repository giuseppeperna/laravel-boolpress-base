<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
</head>
<body>
    <header>
        @include('commons.header')
    </header>
    <main>
        @section('main')
        Main Content
        @show
    </main>
    <footer>
        @include('commons.footer')
    </footer>
    
</body>
</html>