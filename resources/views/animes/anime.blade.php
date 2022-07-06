<x-layout>
    <main class=" bg-black">
        <section>
            <div class=" h-auto w-full BgCustomCss pt-12" style="background-image: linear-gradient(to bottom, transparent, #000000), url('/storage/{{ $anime->animeBackground }}');">
                <!--Single anime info-->
                <div class=" mb-12">
                    <div class=" flex flex-col items-center">
                        <img src="{{ asset('/storage/'.$anime->animeCover) }}" alt="Anime cover" class=" w-[220px] rounded">
                        <h1 class=" text-white text-4xl mb-4">{{ $anime->name }}</h1>
                        <p class=" text-white text-center max-w-[600px]">
                            {{ $anime->description }}
                        </p>
                    </div>
                </div>

            </div>

            <!--Eps-->
            <div class=" mx-8 p-4 bg-white rounded">
                @if(count($eps) == 0)
                <p>We are still working on this anime.</p>
                @endif
                @foreach($eps as $key => $ep)
                <!--Single Ep-->
                <div class=" w-full border-b-[1px] border-black rounded p-2 hover:bg-gray-200 transition">
                    <a href="/anime/{{ $anime->id }}/ep/{{ $ep->id }}" class=" w-full block">
                        <span>{{ $ep->ep }}</span>
                        <span> - </span>
                        <span>{{ $ep->name }}</span>
                    </a>
                </div>
                @endforeach
                
            </div>

        </section>
    </main>
</x-layout>