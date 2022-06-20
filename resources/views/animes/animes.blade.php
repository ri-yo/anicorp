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
                    <li class=" md:mr-12 sm:mr-8"><a href="">Home</a></li>
                    <li class=" md:mr-12 sm:mr-8"><a href="">Anime List</a></li>
                    <li class=" md:mr-12 sm:mr-8"><a href="">Genres</a></li>
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
        </div>
    </header>


    <!--Main website content-->
    <main class=" bg-black " >
        <!--Main anime screen-->
        <section>
            <!--Main anime background-image-->
            <div class=" h-auto w-full BgCustomCss" style="background-image: linear-gradient(to bottom, transparent, #000000), url('/images/naruto-background.jpg');">
                <!--Main anime info-->
                <div class="pt-14 pb-12 md:pl-24 flex flex-col md:flex-row">  
                    <!--Anime image and buttons-->
                    <div class=" w-full md:max-w-[220px] flex flex-col content-center items-center md:block">
                        <!--Image-->    
                        <img src="{{ asset('images/naruto-capa.jpg') }}" alt="Naruto" class=" w-[220px] h-[320px] rounded-xl shadow">


                        <!--Buttons-->
                        <div class=" w-full max-w-[220px] bg-white text-center rounded"><a href="" class=" block py-2 px-7"><i class="fa-solid fa-play"></i> Play</a></div>
                    </div>  

                    <!--Anime information-->
                    <div class=" w-full md:mt-16 md:ml-8 flex flex-col items-center text-center mt-4 md:block md:text-left">
                        <div>
                            <h1 class=" text-white text-5xl">Naruto Shippuden</h1>
                        </div>

                        <div class=" w-5/6">
                            <p class=" text-white mt-4">
                                Naruto é um jovem órfão habitante da Vila da Folha que sonha se tornar o quinto Hokage, o maior guerreiro e governante da vila. Ao se graduar como ninja, descobre que tem um demônio raposa selado dentro de si.
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </section>

        <!--Most watched animes section-->
        <section class=" splide mostWatchedSlider" >
            <div class=" splide__track">
                <h1 class=" text-white text-2xl border-b-[1px] mb-4">Most Watched</h1>

                <!--Anime cards-->
                <div class=" flex splide__list">
                    <!--Single anime card-->
                    <div class=" splide__slide">
                        <img src="{{ asset('images/naruto-capa.jpg') }}" alt="Anime Cover" class=" max-w-[180px] w-full rounded-xl">
                        <h1 class=" text-white text-lg font-bold">Naruto Shippuden</h1>
                        <p class=" text-white text-sm">Subbed/Subtitled</p>
                        <!--Buttons-->
                        <div class=" mt-2">
                            <div class=" max-w-[180px] w-full text-center bg-white rounded"><a href="" class=" block py-1 px-5"><i class="fa-solid fa-play"></i> Play</a></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!--Last releases animes section-->
        <section class=" splide lastReleasesSlider mt-8" >
            <div class=" splide__track">
                <h1 class=" text-white text-2xl border-b-[1px] mb-4">Last releases</h1>

                <!--Anime cards-->
                <div class=" flex splide__list">
                    <!--Single anime card-->
                    <div class=" splide__slide">
                        <img src="{{ asset('images/naruto-capa.jpg') }}" alt="Anime Cover" class=" max-w-[180px] w-full rounded-xl">
                        <h1 class=" text-white text-lg font-bold">Naruto Shippuden</h1>
                        <p class=" text-white text-sm">Subbed/Subtitled</p>
                        <!--Buttons-->
                        <div class=" mt-2">
                            <div class=" max-w-[180px] w-full text-center bg-white rounded"><a href="" class=" block py-1 px-5"><i class="fa-solid fa-play"></i> Play</a></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!--Footer-->
        <footer class=" h-60 mt-12 BgCustomCss" style="background-image: linear-gradient(to top, transparent, #000000), url('/images/manga.jpg');">
            <div class=" text-center pt-8">
                <h1 class=" text-white">By: <a href="https://github.com/agon-ny" target="_blank" class=" underline">Agony</a></h1>
            </div>
        </footer>

    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b58b5977ce.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/libs/splide.min.js') }}"></script>
    <script src="{{ asset('/js/slides.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>