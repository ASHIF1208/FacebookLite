<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FRIENDSPHERE</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
            background-position: center;
        }

        .welcome-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
            color: #333;
        }

        .welcome-text {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .btn-login {
            display: inline-block;
            padding: 1rem 2rem;
            margin-top: 1rem;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            color: #fff;
            background-color: #4caf50;
            border-radius: 0.25rem;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div>
            <h1 class="welcome-text">Welcome to FRIENDSPHERE!</h1>
            @auth
                <a href="{{ url('/dashboard') }}" class="btn-login">Go to Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn-login">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-login">Register</a>
                @endif
            @endauth
        </div>
    </div>
</body>
</html>
