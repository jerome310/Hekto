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
        
        <!-- Vite Directive -->
        @vite('resources/css/app.css', 'resources/js/app.js')
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}


        <header class="flex py-[10px] bg-[#7E33E0] text-[white] items-center justify-center">
        <!-- Email and phone container -->  
        <div class="mobile:flex w-[45%]">
            <div>
              <i class="fa-solid fa-envelope pr-1.5"></i>
              <a class="pr-[25px]" href="mailto:hekto@gmail.com">hekto@gmail.com</a>
            </div>
            <div>
                <i class="fa-solid fa-phone-volume pl-[25px]"></i>
                <span>1-888-555-2379</span>
            </div>
        </div>
        <div class="flex">
            <span class="pr-[15px]">English</span>
            <span class="pr-[15px]">USD</span>
            <div class="pr-[15px] items-center">
                <span>Login</span>
                <i class="fa-solid fa-person"></i>
            </div>
            <div class="flex items-center pr-[15px]">
                <span class="pr-[5px]">Wishlist</span>
                <i class="fa-solid fa-heart"></i>
            </div>
           <div class="flex items-center pl-[10px]">
            <i class="fa-solid fa-cart-shopping"></i>
           </div>
        </div>
        </header>
    </body>
</html>
