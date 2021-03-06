<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HGU</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            @guest
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            @endguest
            @auth
            <li>
                <a href="{{ route('dashboard') }}" class="p-3">Početna</a>
            </li>
            <li>
                <a href="{{ route('clan.index') }}" class="p-3">Član</a>
            </li>
            @endauth
        </ul>

        <ul class="flex items-center">
            @auth
            <li>
                <a href="" class="p-3">{{auth()->user()->ime}} {{auth()->user()->prezime}}</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                    @csrf
                    <button type="submit">Odjavi se</button>
                </form>
            </li>
            @endauth
            @guest
            <li>
                <a href="{{ route('login') }}" class="p-3">Prijavi se</a>
            </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body> 
</html>   