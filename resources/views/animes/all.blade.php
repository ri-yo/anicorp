<x-layouts.standartLayout>
    <main class=" bg-black">
        <!--Checking if there are animes to show-->
        @if(count($animes) <= 0 )
        <section>
            <div class=" container mx-auto pt-8">
                <h1 class=" text-white text-2xl border-b-[1px]">Sorry, no animes yet</h1>
            </div>

            <div class=" container mx-auto pt-8">
                <div class=" text-white">
                    <p>To create a new admin account run: <span class=" font-bold">php artisan migrate --seed</span> on your terminal</p>
                    <p>Then login with these credentials:</p>
                    <p class=" ml-8">Email: <span class=" font-bold">admin@gmail.com</span></p>
                    <p class=" ml-8">Password: <span class=" font-bold">password</span></p>
                </div>
            </div>

        </section>

        @else

        <!--Only show this section if there is no search being made-->
        @if(request('search') == null)
            <!--Main anime screen-->
        <section>
            <!--Main anime background-image-->
            <div class=" px-2 h-auto w-full BgCustomCss" style="background-image: linear-gradient(to bottom, transparent, #000000), url('/storage/{{ $highlightedAnime->animeBackground }}');">
                <!--Main anime info-->
                <div class="pt-14 pb-12 md:pl-24 flex flex-col md:flex-row">  
                    <!--Anime image and buttons-->
                    <div class=" w-full md:max-w-[220px] flex flex-col content-center items-center md:block">
                        <!--Image-->    
                        <img src="{{ asset('/storage/'.$highlightedAnime->animeCover) }}" alt="Naruto" class=" w-[220px] h-[320px] rounded-xl shadow">


                        <!--Buttons-->
                        <div class=" w-full max-w-[220px] bg-white text-center rounded mt-2 transition-all duration-100 hover:opacity-80"><a href="/anime/{{ $highlightedAnime->id }}" class=" block py-2 px-7"><i class="fa-solid fa-play"></i> Play</a></div>
                    </div>  

                    <!--Anime information-->
                    <div class=" w-full md:mt-16 md:ml-8 flex flex-col items-center text-center mt-4 md:block md:text-left">
                        <div class=" max-w-[900px]">
                            <h1 class=" text-white text-5xl">{{ $highlightedAnime->name }}</h1>
                        </div>

                        <div class=" max-w-[700px]">
                            <p class=" text-white mt-4">
                                {{ $highlightedAnime->description }}
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
                    @foreach($animes as $key => $anime)
                    <!--Single anime card-->
                    <div class=" splide__slide max-w-[180px] truncate ... ">
                        <img src="{{ asset('/storage/'.$anime->animeCover) }}" alt="Anime Cover" class=" h-[260px] max-w-[180px] w-full rounded-xl">
                        <h1 class=" text-white text-lg font-bold">{{ $anime->name }}</h1>
                        <p class=" text-white text-sm">Subbed/Subtitled</p>
                        <!--Buttons-->
                        <div class=" mt-2">
                            <div class=" max-w-[180px] w-full text-center bg-white rounded transition-all duration-100 hover:opacity-80"><a href="/anime/{{ $anime->id }}" class=" block py-1 px-5"><i class="fa-solid fa-play"></i> Play</a></div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>

        <!--Last releases animes section-->
        <section class=" splide lastReleasesSlider mt-8" >
            <div class=" splide__track">
                <h1 class=" text-white text-2xl border-b-[1px] mb-4">Last releases</h1>

                <!--Anime cards-->
                <div class=" flex splide__list">
                    @foreach($latestAnimes as $key => $latestAnime)
                    <!--Single anime card-->
                    <div class=" splide__slide max-w-[180px] truncate ...">
                        <img src="{{ asset('/storage/'.$latestAnime->animeCover) }}" alt="Anime Cover" class=" h-[260px] max-w-[180px] w-full rounded-xl">
                        <h1 class=" text-white text-lg font-bold">{{ $latestAnime->name }}</h1>
                        <p class=" text-white text-sm">Subbed/Subtitled</p>
                        <!--Buttons-->
                        <div class=" mt-2">
                            <div class=" max-w-[180px] w-full text-center bg-white rounded transition-all duration-100 hover:opacity-80"><a href="/anime/{{ $latestAnime->id }}" class=" block py-1 px-5"><i class="fa-solid fa-play"></i> Play</a></div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </section>
        @endif

        @if(request('search') !== null)
        <section>
            <div class=" container mx-auto pt-8 px-2">
                <h1 class=" text-white text-2xl border-b-[1px]">Results for {{ request('search') }}</h1>

                <!--Anime cards-->
                <div class=" text-center">
                    
                    @foreach($filteredAnimes as $key => $filteredAnime)
                    <!--Single anime card-->
                    <div class=" mr-4 mt-2 inline-block max-w-[180px] text-left truncate ... ">
                        <img src="{{ asset('/storage/'.$filteredAnime->animeCover) }}" alt="Anime Cover" class=" h-[260px] max-w-[180px] w-full rounded-xl">

                        <h1 class=" text-white text-lg font-bold">{{ $filteredAnime->name }}</h1>

                        <p class=" text-white text-sm">Subbed/Subtitled</p>

                        <!--Buttons-->
                        <div class=" mt-2">
                            <div class=" max-w-[180px] w-full text-center bg-white rounded transition-all duration-100 hover:opacity-80"><a href="/anime/{{ $filteredAnime->id }}" class=" block py-1 px-5"><i class="fa-solid fa-play"></i> Play</a></div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>

        @endif

        @endif
    </main>
</x-layouts.standartLayout>