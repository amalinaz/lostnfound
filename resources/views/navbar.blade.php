<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>

        .navbar
        {
            display: flex;
            background-color: #174576;
            gap: 3rem;
            height: 100px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            align-items: center;
        }


        .navbar .auth-section
        {
            margin-left: auto;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .navbar a
        {
            color: white;
            margin-top: 10px;
            font-family: poppins;
            text-decoration: none;
        }

        .navbar h2
        {
            margin-left: 20px;
            margin-top: 20px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: white;
        }

        .content
        {
            margin-top: 120px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <h2>Lost and Found</h2>
        <a href="/home">Home</a>
        <a href="/newpost">Add new post</a>

        <div class="auth-section">
            @guest
            <a href="/login" style="margin-right: 70px;">Login</a>
            @endguest

            @auth
            <div style="color: white; display: flex; align-items: center; margin-right: 20px; font-family:poppins">
                Hi, {{ Auth::user()->name }}
                <form action="/logout" method="POST" style="display: inline; margin-left: 10px;">
                    @csrf
                    <button type="submit" style="background-color: #f5e1ac; color: #174576; padding: 5px 10px; font-size: 15px; font-weight: bold; border-radius: 5px; cursor: pointer;">
                        Logout
                    </button>
                </form>
            </div>
            @endauth
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
