<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hekto App</title>

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
    <!-- <div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
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
        </div>  -->


    {{-- Purple Bar Section --}}
    <header class="mobile:flex-row mobile:text-center md:w-[100%] md:m-auto lg:flex py-[10px] bg-[#7E33E0] text-[white] items-center justify-center">
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
    {{-- Purple Bar Section --}}

    {{-- Navbar Section --}}
    <nav class="bigger-mobile:w-[100%] bigger-mobile:inline-block py-[10px] lg:mx-auto lg:w-[70%] lg:flex items-center">
        <h1 class="mobile:text-center logo text-[30px]">Hekto</h1>
        <div class="md:w-[100%] text-center m-auto">
            <a href="/" class="pr-[10px]">Home</a>
            <a href="/" class="pr-[10px]">Pages</a>
            <a href="/" class="pr-[10px]">Products</a>
            <a href="/" class="pr-[10px]">Blog</a>
            <a href="/" class="pr-[10px]">Shop</a>
            <a href="/" class="pr-[10px]">Contact</a>
        </div>
        <div class="items-center mobile:flex mobile:justify-center mobile:mt-[15px]">
            <input class="lg:w-[200px] mobile:w-[50%] border border-[#E7E6EF] p-[5px]" type="text" placeholder="Search">
            <span class="bg-[#FB2F86] p-[6px] px-[12px]"><i class="fa-solid fa-magnifying-glass"></i></span>
        </div>
    </nav>
    {{-- Navbar Section --}}

    {{-- Hero Section --}}
    <div class="bigger-mobile:w-[100%]bigger-mobile:inline-block bg-[#F2F1FF] lg:flex lg:h-[500px]">
        <div class="mobile:flex mobile:justify-center">
            <a href="https://imgbb.com/"><img class="bigger-mobile:w-[60%] bigger-mobile:m-auto lg:w-[387px] mobile:w-[250px]" src="https://i.ibb.co/dMd4T60/image-32.png"></a>
        </div>
        <div class="lg:flex mobile:pb-[30px] lg:pb-[0px]">
            <div class="flex flex-col justify-center lg:text-left mobile:text-center mobile:mb-[50px] mobile: px-[30px]">
                <p class="text-[#FB2E86] font-bold lg:text-[18px] mobile:text-[16px] mobile:pb-[10px] bigger-mobile:pb-[10px] lg:pb-[0px]">
                    Best Furniture For Your Castle....</p>
                <h1 class="mobile:text-[22px] bigger-mobile:text-[30px] lg:text-[53px] font-bold mobile:pb-[10px] lg:pb-[0px]">
                    New Furniture Collection Trends in 2020</h1>
                <p class="text-[#A4A7CA] font-bold pb-[35px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Magna in est adipiscing in phasellus non in justo.</p>
                <div>
                    <a href="" class="bg-[#FB2E86] text-[white] text-center px-[40px] py-[15px] font-bold rounded-[4px]">Shop
                        Now</a>
                </div>
            </div>
            <div class="mobile:flex mobile:justify-center lg:m-auto lg:relative lg:right-[20px] 3xl:right-[0px]">
                <a href=" https://ibb.co/jJFNRTv"><img class="mobile:w-[350px] md:w-[400px] xl:w-[450px]" src="https://i.ibb.co/Z2CjmV6/sofa-promotional-header.png" alt="sofa-promotional-header" border="0"></a>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}

    {{-- Featured Products Section --}}
    <div class="pb-[5%]">
        <h1 class="text-[#1A0B5B] text-center text-[40px] font-bold pt-[10%] pb-[5%]">Featured Products</h1>
        <div class="md:flex-row md:flex lg:justify-between mobile:flex-col bigger-mobile:w-[95%] lg:w-[75%] m-auto">
            <div style="box-shadow: -1px -4px 20px 15px #F3F3F3;" class="mobile:mb-[30px] mobile:w-[50%] mobile:m-auto lg:w-[19%] bigger-mobile:w-[40%]">
                <div class="bg-[#F6F7FB] border-[1px] border-[#F6F7FB] pt-[50px] pb-[10px]">
                    <img class="m-auto" src="https://i.ibb.co/5cqddBP/image-1168.png" alt="">
                </div>
                <div class="leading-[45px] text-center">
                    <p class="text-[#FB2E86] font-bold">Cantilever chair</p>
                    <div class="flex justify-center">
                        <span class="bg-[#06E6B7] w-[15px] h-[6px] border-[1px] border-[#06E6B7] rounded-[6px]"></span>
                        <span class="bg-[#F701A8] text-[#F701A8] w-[15px] h-[6px] border-[1px] border-[#F701A8] rounded-[6px] mx-[10px]"></span>
                        <span class="bg-[#00009D] text-[#00009D] w-[15px] h-[6px] border-[1px] border-[#00009D] rounded-[6px]"></span>
                    </div>
                    <span class="text-[#24267E] text-[14px] font-bold">
                        Code &middot; Y523201
                    </span>
                    <p class="text-[#24267E] text-[16px]">$42.00</p>
                </div>
            </div>
            <div style="box-shadow: -1px -4px 20px 15px #F3F3F3;" class=" mobile:mb-[30px] mobile:w-[50%] mobile:m-auto lg:w-[19%] bigger-mobile:w-[40%]">
                <div class="bg-[#F6F7FB] border-[1px] border-[#F6F7FB] pt-[50px] pb-[10px]">
                    <img class="m-auto" src="https://i.ibb.co/gyfYKDV/image-1.png" alt="image-1" border="0">
                </div>
                <div class="leading-[45px] text-center">
                    <p class="text-[#FB2E86] font-bold">Cantilever chair</p>
                    <div class="flex justify-center">
                        <span class="bg-[#06E6B7] w-[15px] h-[6px] border-[1px] border-[#06E6B7] rounded-[6px]"></span>
                        <span class="bg-[#F701A8] text-[#F701A8] w-[15px] h-[6px] border-[1px] border-[#F701A8] rounded-[6px] mx-[10px]"></span>
                        <span class="bg-[#00009D] text-[#00009D] w-[15px] h-[6px] border-[1px] border-[#00009D] rounded-[6px]"></span>
                    </div>
                    <span class="text-[#24267E] text-[14px] font-bold">
                        Code &middot; Y523201
                    </span>
                    <p class="text-[#24267E] text-[16px]">$42.00</p>
                </div>
            </div>
            <div style="box-shadow: -1px -4px 20px 15px #F3F3F3;" class="mobile:mb-[30px] mobile:w-[50%] mobile:m-auto lg:w-[19%] bigger-mobile:w-[40%]">
                <div class="bg-[#F6F7FB] border-[1px] border-[#F6F7FB] pt-[50px] pb-[10px]">
                    <img class="m-auto" src="https://i.ibb.co/8bKLy2F/image-1169.png" alt="image-1169" border="0">
                </div>
                <div class="leading-[45px] text-center">
                    <p class="text-[#FB2E86] font-bold">Cantilever chair</p>
                    <div class="flex justify-center">
                        <span class="bg-[#06E6B7] w-[15px] h-[6px] border-[1px] border-[#06E6B7] rounded-[6px]"></span>
                        <span class="bg-[#F701A8] text-[#F701A8] w-[15px] h-[6px] border-[1px] border-[#F701A8] rounded-[6px] mx-[10px]"></span>
                        <span class="bg-[#00009D] text-[#00009D] w-[15px] h-[6px] border-[1px] border-[#00009D] rounded-[6px]"></span>
                    </div>
                    <span class="text-[#24267E] text-[14px] font-bold">
                        Code &middot; Y523201
                    </span>
                    <p class="text-[#24267E] text-[16px]">$42.00</p>
                </div>
            </div>
            <div style="box-shadow: -1px -4px 20px 15px #F3F3F3;" class="mobile:w-[50%] mobile:m-auto lg:w-[19%] bigger-mobile:w-[40%]">
                <div class="bg-[#F6F7FB] border-[1px] border-[#F6F7FB] pt-[50px] pb-[10px]">
                    <img class="m-auto" src="https://i.ibb.co/cDDpBjw/image-3.png" alt="image-3" border="0">
                </div>
                <div class="leading-[45px] text-center">
                    <p class="text-[#FB2E86] font-bold">Cantilever chair</p>
                    <div class="flex justify-center">
                        <span class="bg-[#06E6B7] w-[15px] h-[6px] border-[1px] border-[#06E6B7] rounded-[6px]"></span>
                        <span class="bg-[#F701A8] text-[#F701A8] w-[15px] h-[6px] border-[1px] border-[#F701A8] rounded-[6px] mx-[10px]"></span>
                        <span class="bg-[#00009D] text-[#00009D] w-[15px] h-[6px] border-[1px] border-[#00009D] rounded-[6px]"></span>
                    </div>
                    <span class="text-[#24267E] text-[14px] font-bold">
                        Code &middot; Y523201
                    </span>
                    <p class="text-[#24267E] text-[16px]">$42.00</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Featured Products Section --}}

    {{-- Latest Products Section --}}
    <div>
        
    </div>
</body>

</html>