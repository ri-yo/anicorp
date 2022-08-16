<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/logo.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Anicorp - New Ep</title>
</head>
<body class=" overflow-hidden">
    <main class=" lg:flex text-center lg:text-left">

        <!--Login form section-->
        <section class=" inline-block lg:w-[30%] lg:pt-2 lg:px-14 w-full h-screen lg:bg-none bg-[url('/images/anime-newanimepage.jpg')] bg-cover bg-left px-2">

            <div class=" inline-block mt-8 w-full max-w-[350px] bg-white rounded p-8 lg:p-0 lg:mt-0 ">
    
                <div class=" mb-2 lg:mb-4">
                    <h1 class=" font-bold text-[25px]">New ep</h1>
                </div>
    
                <div>
                    <form action="/manage/animes/eps/{{ $anime->id }}/new/store" method="POST">
                        @csrf
                        <div>
                            @error('name')
                                <p class=" text-xs text-red-500">{{ $message }}</p>
                            @enderror
                            <input type="text" name="name" placeholder="Ep Name" class=" w-full h-[50px] outline-none bg-gray-100 hover:bg-gray-200 focus:border-[2px] focus:border-black rounded pl-2 mb-2">
                        </div>

                        <div>
                            @error('ep')
                                <p class=" text-xs text-red-500">{{ $message }}</p>
                            @enderror
                            <input type="number" name="ep" placeholder="Ep Number" class=" w-full h-[50px] outline-none bg-gray-100 hover:bg-gray-200 focus:border-[2px] focus:border-black rounded pl-2 mb-2">
                        </div>

                        <div>
                            @error('watch')
                                <p class=" text-xs text-red-500">{{ $message }}</p>
                            @enderror
                            <textarea name="watch" placeholder="Iframe link" class=" w-full h-[50px] outline-none bg-gray-100 hover:bg-gray-200 focus:border-[2px] focus:border-black rounded pl-2 mb-2 resize-none" ></textarea>
                        </div>
                        
                        <div class=" mb-4 lg:mb-12">
                            @error('confirmation')
                                <p class=" text-xs text-red-500">{{ $message }}</p>
                            @enderror
                            <input type="checkbox" name="confirmation" value="1" class=" w-[17px] h-[17px]">
                            <span>I'm sure this Ep is currently up and running!</span>
                        </div>
                        
                        <div class=" text-center lg:mb-12 mb-8">
                            <button class=" w-[60px] h-[60px] bg-red-600 hover:bg-red-700 rounded transition"><i class="fa-solid fa-arrow-right text-white text-[25px]"></i></button>
                        </div>
                        
                    </form>
                </div>
    
                <div>
                    <h3><a href="/register" class=" text-gray-400 transition hover:text-black hover:border-b-[1px] hover:border-black">ABOUT </a></h3>
                    <h3><a href="/cantsignin" class=" text-gray-400 transition hover:text-black hover:border-b-[1px] hover:border-black">CAN'T ADD A NEW ANIME? </a></h3>
                </div>
            </div>

        </section>

        <!--Image login page-->
        <section class=" hidden lg:w-[70%] lg:block" >
            <div class=" w-full h-screen bg-[url('/images/anime-newanimepage.jpg')] bg-cover bg-left">
                <div class=" w-full text-right p-4">
                    <a href="/manage/animes/eps/{{ $anime->id }}" class=" transition duration-300 hover:bg-red-600 hover:text-white bg-white text-[20px] rounded font-bold px-4 py-2 shadow"><i class="fa-solid fa-close"></i></a>
                </div>
            </div>
        </section>

    </main>

    <script src="https://kit.fontawesome.com/b58b5977ce.js" crossorigin="anonymous"></script>
</body>
</html>