<x-layouts.manageLayout>
    <main class=" px-8" style="background-image: linear-gradient(to bottom, transparent, #000000), url('/images/manga.jpg');">

        <section class=" pt-8">
            <!--Animes list-->
            <div class=" text-center bg-white rounded py-4 px-4">

                <div class=" mb-4 text-center">
                    <!--Animes button-->
                    <div>
                        <a href="/manage/animes/new" class=" py-1 px-1 md:px-3 text-sm md:text-[16px] border border-green-500 text-green-500 font-light rounded transition-all duration-300 hover:bg-brightGreen hover:text-white">
                            New anime
                        </a>
                    </div>
                </div>

                @foreach($animes as $key => $anime)
                    <!--Single anime card-->
                <div class=" border border-black w-full max-w-[200px] pb-2 text-center mx-2 my-2 inline-block bg-gray-200 rounded hover:scale-95 transition-all ">

                    <a href="/anime/{{ $anime->id }}" target="_blank" class=" block">
                        <div>
                            <img src="{{ asset('/storage/'.$anime->animeCover) }}" alt="Anime Cover" class=" w-full h-[150px] object-cover inline-block">
                        </div>

                        <div class=" my-2">
                            <p class=" truncate">{{ $anime->name }}</p>
                        </div>
                        
                        <div>
                            <div>
                                <a href="/manage/animes/eps/{{ $anime->id }}" class=" py-1 px-4 text-white bg-green-400 rounded"><i class="fa-solid fa-circle-plus"></i> Eps</a>
                            </div>
                            
                            <div class=" mt-2">
                                <a href="/manage/animes/edit/{{ $anime->id }}" class="py-1 px-4 text-white bg-blue-400 rounded"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            </div>

                            <div class=" mt-2">
                                <form action="/manage/animes/delete/{{ $anime->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class=" px-4 bg-red-400 text-white rounded " type="submit">Delete</button>
                                </form>
                            </div>
                            
                        </div>
                    </a>
                </div>
                @endforeach

                

                
            </div>
        </section>

    </main>
</x-layouts.manageLayout>