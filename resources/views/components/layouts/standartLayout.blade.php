<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/libs/splide.min.css') }}">
    <title>Anicorp</title>
</head>
<body class=" overflow-x-hidden">

    <!--Header-->
    <header class=" container mx-auto flex items-center justify-between px-2">
        <!--Logo-->
        <div>
            <a href="/"><img src="{{ asset('images/logo.jpg') }}" alt="Logo" class=" w-12 h-12 rounded-full object-cover" ></a>
        </div>

        <!--Desktop NavBar-->
        <div class=" hidden md:block">
            <nav>
                <ul class=" flex">
                    <li class=" md:mr-12 sm:mr-8"><a href="">Home</a></li>
                    <li class=" md:mr-12 sm:mr-8"><a href="">Anime List</a></li>
                    <li class=" md:mr-12 sm:mr-8"><a href="">Genres</a></li>
                </ul>
            </nav>
        </div>

        <!--Mobile NavBar-->
        <div class=" mobileNavBar w-3/4 h-screen block md:hidden absolute top-[46px] right-[-75%] bg-white text-center transition-all duration-500">
            <nav>
                <ul class="">
                    <li class=" md:mr-12 sm:mr-8"><a class="block py-2 border-black border-b-[1px] hover:bg-gray-200 transition-all rounded" href="">Home</a></li>
                    <li class=" md:mr-12 sm:mr-8"><a class="block py-2 border-black border-b-[1px] hover:bg-gray-200 transition-all rounded" href="">Anime List</a></li>
                    <li class=" md:mr-12 sm:mr-8"><a class="block py-2 border-black border-b-[1px] hover:bg-gray-200 transition-all rounded" href="">Genres</a></li>
                </ul>
            </nav>
        </div>

        <!--Search Bar-->
        <div class=" w-auto max-w-[300px] searchForm absolute m-3 right-[-350px] top-[43px] transition-all duration-500 rounded p-2">
            <form action="/" class=" flex">
                <input type="text" placeholder="Search for animes" name="search" class=" w-full h-[40px] outline-none border-0 pl-4 rounded-[20px]">
                <button class=" flex align-center h-[40px] bg-white rounded-[50%] p-3 ml-1"><i class="fa-solid fa-magnifying-glass"></i></button> 
            </form>
        </div>

        <!--Header Items-->
        <div class=" flex items-center">
            <!--Movile menu button-->
            <div class=" closeMenuButton hidden cursor-pointer"><i class="fa-solid fa-close"></i></div>
            <div class=" openMenuButton md:hidden cursor-pointer"><i class="fa-solid fa-bars"></i></div>

            <div class=" closeSearch pl-2 text-[23px] cursor-pointer hidden"><i class="fa-solid fa-close"></i></div>
            <div class=" openSearch pl-2 text-[16px] cursor-pointer"><i class="fa-solid fa-magnifying-glass"></i></div>

            @auth
            @if(Auth::user()->admin)
            <div class=" ml-2" ><a href="/manage" class="py-1 px-1 md:px-3 text-sm md:text-[16px] border border-green-500 text-green-500 font-light rounded transition-all duration-300 hover:bg-brightGreen hover:text-white"">Manage</a></div>
            @endif
            <form action="/logout" method="POST">
                @csrf
                <button class=" ml-2 py-[0.2rem] px-1 md:px-3 text-sm md:text-[16px] border border-brightRed text-brightRed rounded transition-all duration-300 hover:bg-brightRed hover:text-white font-light">LogOut</button>
            </form>
            @else   
            <div class="ml-2"><a href="/login" class=" py-1 px-3 md:px-3 text-sm md:text-[16px] border border-green-500 text-green-500 rounded transition-all duration-300 hover:bg-brightGreen hover:text-white">LogIn</a></div>
            @endauth
            
        </div>
    </header>

    <!--Loading pages using slots-->
    {{ $slot }}

    <!--Footer-->
    <footer class=" h-60 BgCustomCss" style="background-image: linear-gradient(to top, transparent, #000000), url('/images/manga.jpg');">
        <div class=" text-center pt-8">
            <h1 class=" text-white">By: <a href="https://github.com/agon-ny" target="_blank" class=" underline">Agony</a></h1>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b58b5977ce.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/libs/splide.min.js') }}"></script>
    <script src="{{ asset('/js/slides.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>

</body>
</html>