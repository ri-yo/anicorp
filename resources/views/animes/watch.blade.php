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
<body class=" overflow-hidden">

    <!--Header-->
    <header class=" bg-gray-800 flex items-center justify-between py-1 px-8">
        <!--Logo-->
        <div>
            <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo" class=" w-12 h-12 rounded-full object-cover" ></a>
        </div>

        <!--Header Items-->
        <div class=" flex">
            <div class=" w-full p-4">
                <a href="/anime/{{ $anime->id }}" class=" transition duration-300 hover:bg-red-600 hover:text-white bg-white text-[20px] rounded font-bold px-4 py-2 shadow"><i class="fa-solid fa-close"></i></a>
            </div>
        </div>
    </header>

    <main class=" bg-gray-900 w-full h-screen">

        <!--Anime watching screen-->
        <div class=" w-full h-[520px] bg-red-500">
        <!--Screen inside here-->
        </div>

        <!--bellow buttons-->
        <div class=" w-full h-[70px] px-12 flex justify-between items-center">
            <!--Previous-->
            <div class=" text-center max-w-[115px] rounded  bg-white max-h-[40px]">
                <a href="/anime/{{ $anime->id }}/ep/{{ $previousEp }}" class=" block  py-2 px-4"><i class="fa-solid fa-arrow-left"></i> Previous</a>
            </div>

            <!--Anime info-->
            <div class=" text-center">
                <p class=" text-white font-bold">{{ $anime->name }}</p>
                <p class=" text-white text-[12px]">{{ $currentEp->id }} - {{ $currentEp->name }}</p>
            </div>

            <!--Previous-->
            <div class=" text-center max-w-[115px] max-h-[40px] rounded  bg-white">
                <a href="/anime/{{ $anime->id }}/ep/{{ $nextEp[0]->id }}" class=" block  py-2 px-4"><i class="fa-solid fa-arrow-right"></i> Next Ep</a>
            </div>

        </div>
    </main>

    <!--Footer-->
    <!--
    <footer class=" h-60 BgCustomCss" style="background-image: linear-gradient(to top, transparent, #000000), url('/images/manga.jpg');">
        <div class=" text-center pt-8">
            <h1 class=" text-white">By: <a href="https://github.com/agon-ny" target="_blank" class=" underline">Agony</a></h1>
        </div>
    </footer>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b58b5977ce.js" crossorigin="anonymous"></script>
</body>
</html>