<x-layouts.manageLayout>
    <main class=" lass=" h-60 BgCustomCss" style="background-image: linear-gradient(to bottom, transparent, #000000), url('/images/manga.jpg');"">

        <!--Animes options-->
        <section>
            <div class=" p-4">
                <!--Animes button-->
                <div class=" w-full max-w-[120px] text-center bg-green-400 rounded">
                    <a href="/manage/animes/eps/{{ $anime->id }}/new" class=" block py-[15px] text-white text-[17px]">
                        New Ep
                    </a>
                </div>
            </div>
        </section>

        <section>
            <!--Animes list-->
            <div class=" bg-white rounded mx-4 p-4 transition">
                @if(count($eps) != 0)
                @foreach($eps as $key => $ep)
                <!--Single anime from list-->
                <div class=" w-full hover:bg-gray-200 mb-2 flex justify-between">
                    <a href="" target="_blank" class=" block">
                        <div>
                            <span>{{ $ep->ep }}</span>
                            <span> - </span>
                            <span>{{ $ep->name }}</span>
                            <span> / </span>
                            <span>Dubbed/Subtitled</span>
                        </div>
                        
                        <div class=" flex items-center">
                            <a href="/manage/animes/eps/{{ $anime->id }}/{{ $ep->id }}/edit" class=" mr-2 px-4 text-white bg-blue-400 rounded"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <form action="/manage/animes/eps/{{ $anime->id }}/{{ $ep->id }}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class=" mr-2 px-4 bg-red-400 text-white rounded " type="submit">Delete</button>
                            </form>
                        </div>
                    </a>
                </div>
                @endforeach
                @else
                <p>No eps yet! Feel free to be the first one adding it!</p>
                @endif

                
            </div>
        </section>

    </main>
</x-layouts.manageLayout>