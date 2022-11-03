<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Fonts Awesome -->
        <script src="https://kit.fontawesome.com/e8dd0d4134.js" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}


        <header style="width: 30px;" class="flex">
        <!-- Email and phone container -->  
        <div>
            <div>
              <i class="fa-solid fa-envelope"></i>
              <a href="mailto:hekto@gmail.com">hekto@gmail.com</a>
            </div>
            <div>

            </div>
        </div>
        <div>
            <span>English</span>
            <p>USD</p>
            <div>
                <span>Login</span>
                <i class="fa-solid fa-person"></i>
            </div>
            <div>
                <span>Wishlist</span>
                <i class="fa-solid fa-heart"></i>
            </div>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
        </header>
    </body>
</html>
