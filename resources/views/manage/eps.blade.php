<x-layouts.manageLayout>
    <main class=" pt-8" style="background-image: linear-gradient(to bottom, transparent, #000000), url('/images/manga.jpg');">

        <section>
            <!--Animes list-->
            <div class=" text-center bg-white rounded mx-4 p-4 transition">

                <div class=" mb-4 text-center">
                    <!--Animes button-->
                    <div>
                        <a href="/manage/animes/eps/{{ $anime->id }}/new" class=" py-1 px-1 md:px-3 text-sm md:text-[16px] border border-green-500 text-green-500 font-light rounded transition-all duration-300 hover:bg-brightGreen hover:text-white">
                            New Ep
                        </a>
                    </div>
                </div>

                @if(count($eps) != 0)
                @foreach($eps as $key => $ep)
                <!--Single anime from list-->
                <div class=" p-2 w-full hover:bg-gray-200 mb-2 flex justify-between rounded border-b-[1px] border-black">
                    <a href="" target="_blank" class=" block">
                        <div class=" inline-block">
                            <span class=" text-[14px] md:text-[16px]">{{ $ep->ep }}</span>
                            <span class=" text-[14px] md:text-[16px]"> - </span>
                            <span class=" text-[14px] md:text-[16px]">{{ $ep->name }}</span>
                        </div>
                        
                        <div class="flex items-center">

                            <a href="/manage/animes/eps/{{ $anime->id }}/{{ $ep->id }}/edit" class=" px-1 mr-1 md:mr-2 md:px-4 text-[14px] md:text-[16px] text-white bg-blue-400 rounded"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            
                            <form action="/manage/animes/eps/{{ $anime->id }}/{{ $ep->id }}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class=" px-1 md:mr-2 md:px-4 bg-red-400 text-white rounded text-[14px] md:text-[16px]" type="submit">Delete</button>
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