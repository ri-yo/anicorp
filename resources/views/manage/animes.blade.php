<x-layouts.manageLayout>
    <main class=" lass=" h-60 BgCustomCss" style="background-image: linear-gradient(to bottom, transparent, #000000), url('/images/manga.jpg');"">

        <!--Animes options-->
        <section>
            <div class=" p-4">
                <!--Animes button-->
                <div class=" w-full max-w-[120px] text-center bg-green-400 rounded">
                    <a href="/manage/animes/new" class=" block py-[15px] text-white text-[17px]">
                        New anime
                    </a>
                </div>
            </div>
        </section>

        <section>
            <!--Animes list-->
            <div class=" bg-white rounded mx-4 p-4 transition">
                @foreach($animes as $key => $anime)
                    <!--Single anime from list-->
                <div class=" w-full hover:bg-gray-200 mb-2 flex justify-between">
                    <a href="/anime/{{ $anime->id }}" target="_blank" class=" block">
                        <div>
                            <img src="{{ asset('/storage/'.$anime->animeCover) }}" alt="Anime Cover" class=" w-[60px] h-[60px] object-cover rounded-xl inline-block">
                            <span>{{ $anime->name }}</span>
                            <span> / </span>
                            <span>Dubbed/Subtitled</span>
                        </div>
                        
                        <div class=" flex items-center">
                            <a href="/manage/animes/eps/{{ $anime->id }}" class=" mr-2 px-4 text-white bg-green-400 rounded"><i class="fa-solid fa-circle-plus"></i> Eps</a>
                            <a href="/manage/animes/edit/{{ $anime->id }}" class=" mr-2 px-4 text-white bg-blue-400 rounded"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <form action="/manage/animes/delete/{{ $anime->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class=" mr-2 px-4 bg-red-400 text-white rounded " type="submit">Delete</button>
                            </form>
                        </div>
                    </a>
                </div>
                @endforeach

                

                
            </div>
        </section>

    </main>
</x-layouts.manageLayout>