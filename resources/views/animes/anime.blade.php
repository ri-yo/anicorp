<x-layout>
    <main class=" bg-black">
        <section>
            <div class=" h-auto w-full BgCustomCss pt-12" style="background-image: linear-gradient(to bottom, transparent, #000000), url('/images/naruto-background.jpg');">
                <!--Single anime info-->
                <div class=" mb-12">
                    <div class=" flex flex-col items-center">
                        <img src="{{ asset('/images/naruto-capa.jpg') }}" alt="Anime cover" class=" w-[220px] rounded">
                        <h1 class=" text-white text-4xl mb-4">Naruto Shippuden</h1>
                        <p class=" text-white text-center max-w-[600px]">
                            Naruto é um jovem órfão habitante da Vila da Folha que sonha se tornar o quinto Hokage, o maior guerreiro e governante da vila. Ao se graduar como ninja, descobre que tem um demônio raposa selado dentro de si. 
                        </p>
                    </div>
                </div>

            </div>

            <!--Eps-->
            <div class=" mx-8 p-4 bg-white rounded">
                <!--Single Ep-->
                <div class=" w-full border-b-[1px] border-black rounded p-2 hover:bg-gray-200 transition">
                    <a href="" class=" w-full block">
                        <span>01</span>
                        <span> - </span>
                        <span>The nine tails is released!</span>
                    </a>
                </div>

                <!--Single Ep-->
                <div class=" w-full border-b-[1px] border-black rounded p-2 hover:bg-gray-200 transition">
                    <a href="" class=" w-full block">
                        <span>02</span>
                        <span> - </span>
                        <span>The nine tails is released!</span>
                    </a>
                </div>

                <!--Single Ep-->
                <div class=" w-full border-b-[1px] border-black rounded p-2 hover:bg-gray-200 transition">
                    <a href="" class=" w-full block">
                        <span>03</span>
                        <span> - </span>
                        <span>The nine tails is released!</span>
                    </a>
                </div>

                <!--Single Ep-->
                <div class=" w-full border-b-[1px] border-black rounded p-2 hover:bg-gray-200 transition">
                    <a href="" class=" w-full block">
                        <span>04</span>
                        <span> - </span>
                        <span>The nine tails is released!</span>
                    </a>
                </div>
            </div>

        </section>
    </main>
</x-layout>