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
    <header class=" container mx-auto bg-white flex items-center justify-between py-1 px-2">
        <!--Logo-->
        <div>
            <a href=""><img src="{{ asset('images/logo.png') }}" alt="Logo" class=" w-12 h-12 rounded-full object-cover" ></a>
        </div>

        <!--Desktop NavBar-->
        <div class=" hidden md:block">
            <nav>
                <ul class=" flex">
                    <li class=" md:mr-12 sm:mr-8"><a href="/controlpanel/home">Home</a></li>
                    <li class=" md:mr-12 sm:mr-8"><a href="/controlpanel/animes">Animes</a></li>
                </ul>
            </nav>
        </div>

        <!--Mobile NavBar-->
        <div class=" mobileNavBar w-3/4 h-screen block md:hidden absolute top-[55px] right-[-75%] bg-white text-center transition-all duration-500">
            <nav>
                <ul class="">
                    <li class=" md:mr-12 sm:mr-8"><a class="block py-2 border-black border-b-[1px] hover:bg-gray-200 transition-all rounded" href="">Home</a></li>
                    <li class=" md:mr-12 sm:mr-8"><a class="block py-2 border-black border-b-[1px] hover:bg-gray-200 transition-all rounded" href="">Anime List</a></li>
                    <li class=" md:mr-12 sm:mr-8"><a class="block py-2 border-black border-b-[1px] hover:bg-gray-200 transition-all rounded" href="">Genres</a></li>
                </ul>
            </nav>
        </div>

        <!--Search Bar-->
        <div class=" searchForm absolute right-[-350px] top-[65px] transition-all duration-500 bg-white rounded p-2">
            <form action="/">
                <input type="text" placeholder="Search for animes" name="search" class=" outline-none border-[1px] border-black rounded pl-2">
                <button class=" px-2 rounded bg-gray-300 outline-none ">Search</button>
            </form>
        </div>

        <!--Header Items-->
        <div class=" flex">
            <!--Movile menu button-->
            <div class=" closeMenuButton hidden cursor-pointer"><i class="fa-solid fa-close"></i></div>
            <div class=" openMenuButton md:hidden cursor-pointer"><i class="fa-solid fa-bars"></i></div>

            <div class=" closeSearch pl-2 cursor-pointer hidden"><i class="fa-solid fa-close"></i></div>
            <div class=" openSearch pl-2 cursor-pointer"><i class="fa-solid fa-magnifying-glass"></i></div>

            <div>
                <form action="/controlpanel/logout" method="POST">
                    @csrf
                    @method('post')
                    <button class=" text-white px-2 py-2 ml-2 bg-red-400 rounded">LogOut</button>
                </form>
            </div>
        </div>
    </header>

    <main class=" lass=" h-60 BgCustomCss" style="background-image: linear-gradient(to bottom, transparent, #000000), url('/images/manga.jpg');"">

        <!--Animes options-->
        <section>
            <div class=" p-4">
                <!--Animes button-->
                <div class=" w-full max-w-[120px] text-center bg-green-400 rounded">
                    <a href="/controlpanel/animes/new" class=" block py-[15px] text-white text-[17px]">
                        New anime
                    </a>
                </div>
            </div>
        </section>

        <section>
            <!--Animes list-->
            <div class=" bg-white rounded mx-4 p-4 transition">
                <!--Single anime from list-->
                <div class=" w-full hover:bg-gray-200 mb-2 flex justify-between">
                    <a href="" class=" block">
                        <div>
                            <img src="{{ asset('images/naruto-capa.jpg') }}" alt="Anime Cover" class=" w-[60px] h-[60px] object-cover rounded-xl inline-block">
                            <span>Naruto Shippuden</span>
                            <span> / </span>
                            <span>Dubbed/Subtitled</span>
                        </div>
                        
                        <div class=" flex items-center">
                            <a href="/controlpanel/animes/anime/edit" class=" mr-2 px-4 text-white bg-blue-400 rounded"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <form action="">
                                <button class=" mr-2 px-4 bg-red-400 text-white rounded ">Delete</button>
                            </form>
                        </div>
                    </a>
                </div>

                

                
            </div>
        </section>

    </main>

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