<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('layouts.css') }}">
    <script src="https://kit.fontawesome.com/7b9d8c4ddc.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
    <body>
        @include('layouts.header')

        <div class="content">
            @yield('content')
        </div>

        @include('layouts.footer')
    </body>
</html>