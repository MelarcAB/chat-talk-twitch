<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatTalk</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @auth
        <x-navbar></x-navbar>
    @endauth
    <div class="@auth container @endauth mx-auto">
        @yield('content')
    </div>
</body>

</html>
