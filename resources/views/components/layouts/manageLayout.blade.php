<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/logo.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/libs/splide.min.css') }}">
    <title>Anicorp - Manage</title>
</head>
<body class=" overflow-x-hidden">

    <!--Header-->
    <header class=" container mx-auto bg-white flex items-center justify-between px-2">
        <!--Logo-->
        <div>
            <a href="/"><img src="{{ asset('images/logo.jpg') }}" alt="Logo" class=" w-12 h-12 rounded-full object-cover" ></a>
        </div>

        <!--Desktop NavBar-->
        <div class=" hidden md:block">
            <nav>
                <ul class=" flex">
                    <li class=" md:mr-12 sm:mr-8"><a href="/manage">Home</a></li>
                    <li class=" md:mr-12 sm:mr-8"><a href="/manage/animes">Animes</a></li>
                </ul>
            </nav>
        </div>

        <!--Mobile NavBar-->
        <div class=" mobileNavBar w-3/4 h-screen block md:hidden absolute top-[46px] right-[-75%] bg-white text-center transition-all duration-500">
            <nav>
                <ul class="">
                    <li class=" md:mr-12 sm:mr-8"><a class="block py-2 border-black border-b-[1px] hover:bg-gray-200 transition-all rounded" href="/manage">Home</a></li>
                    <li class=" md:mr-12 sm:mr-8"><a class="block py-2 border-black border-b-[1px] hover:bg-gray-200 transition-all rounded" href="/manage/animes">Animes</a></li>
                </ul>
            </nav>
        </div>

        <!--Search Bar-->
        <div class=" w-auto max-w-[300px] searchForm absolute m-3 right-[-350px] top-[43px] transition-all duration-500 rounded p-2">
            <form action="/" class=" flex">
                <input type="text" placeholder="Search for animes" name="search" class=" w-full h-[40px] outline-none border-0 pl-4 rounded-[20px]">
                <button class=" flex align-center h-[40px] bg-white rounded-[50%] p-3 ml-1 transition-all duration-300 hover:opacity-70"><i class="fa-solid fa-magnifying-glass"></i></button> 
            </form>
        </div>

        <!--Header Items-->
        <div class=" flex items-center">
            <!--Movile menu button-->
            <div class=" closeMenuButton hidden cursor-pointer"><i class="fa-solid fa-close"></i></div>
            <div class=" openMenuButton md:hidden cursor-pointer"><i class="fa-solid fa-bars"></i></div>

            <div class=" closeSearch pl-2 text-[23px] cursor-pointer hidden"><i class="fa-solid fa-close"></i></div>
            <div class=" openSearch pl-2 text-[16px] cursor-pointer"><i class="fa-solid fa-magnifying-glass"></i></div>

            <div>
                <form action="/logout" method="POST">
                    @csrf
                    @method('post')
                    <button class=" ml-2 py-[0.2rem] px-1 md:px-3 text-sm md:text-[16px] border border-brightRed text-brightRed rounded transition-all duration-300 hover:bg-brightRed hover:text-white font-light">LogOut</button>
                </form>
            </div>
        </div>
    </header>

    <!--Slot variable-->
    {{ $slot }}
    <!--Slot variable-->

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