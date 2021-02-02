<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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