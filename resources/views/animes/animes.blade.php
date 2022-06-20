<x-layout>
    <main class=" bg-black">
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
    </main>
</x-layout>