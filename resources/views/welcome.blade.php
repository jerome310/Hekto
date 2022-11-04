<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts Awesome -->
        <script src="https://kit.fontawesome.com/e8dd0d4134.js" crossorigin="anonymous"></script>
        
        <!-- Vite Directive -->
        @vite('resources/css/app.css', 'resources/js/app.js')

        <!-- Logo Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
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


        <header class="mobile:flex-row mobile:text-center md:w-[100%] md:m-auto lg:flex py-[10px] bg-[#7E33E0] text-[white] items-center justify-center">
        <!-- Email and phone container -->  
        <div class="mobile:w-[100%] lg:flex lg:w-[45%]">
            <div class="mobile:pb-[5px]">
              <i class="fa-solid fa-envelope pr-1.5"></i>
              <a class="mobile:pr-0 lg:pr-[25px]" href="mailto:hekto@gmail.com">hekto@gmail.com</a>
            </div>
            <div class="mobile:pb-[5px]">
                <i class="mobile:pl-0 fa-solid fa-phone-volume lg:pl-[25px]"></i>
                <span>1-888-555-2379</span>
            </div>
        </div>
        <div class="flex mobile:justify-center">
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
        <nav class="py-[10px] m-auto w-[70%] flex items-center justify-center justify-between">
            <h1 class="logo text-[30px]">Hekto</h1>
            <div class="w-[90%] text-center m-auto">
                <a href="/" class="pr-[10px]">Home</a>
                <a href="/" class="pr-[10px]">Pages</a>
                <a href="/" class="pr-[10px]">Products</a>
                <a href="/" class="pr-[10px]">Blog</a>
                <a href="/" class="pr-[10px]">Shop</a>
                <a href="/" class="pr-[10px]">Contact</a>
            </div>
            <div class="flex items-center">
                <input class="border border-[#E7E6EF] p-[5px]" type="text" placeholder="Search">
                <span class="bg-[#FB2F86] p-[6px] px-[12px]"><i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </nav>
    </body>
</html>
