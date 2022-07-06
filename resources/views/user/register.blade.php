<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Anicorp - Register</title>
</head>
<body class=" overflow-hidden">
    <main class=" lg:flex text-center lg:text-left">

        <!--Login form section-->
        <section class=" inline-block lg:w-[30%] lg:pt-12 lg:px-14 w-full h-screen lg:bg-none bg-[url('/images/anime-registerpage.jpg')] bg-cover bg-left px-2">

            <div class=" inline-block mt-12 w-full max-w-[350px] bg-white rounded p-8 lg:p-0 lg:mt-0 ">
    
                <div class=" mb-2 lg:mb-8">
                    <h1 class=" font-bold text-[25px]">Register to get an AniCorp account</h1>
                </div>
    
                <div>
                    <form action="/register/authenticate" method="POST">
                        @csrf
                        <div>
                            @error('name')
                            <p class=" text-red-600">{{ $message }}</p>
                            @enderror
                            <input type="text" name="name" placeholder="Your name" class=" w-full h-[50px] outline-none bg-gray-100 hover:bg-gray-200 focus:border-[2px] focus:border-black rounded pl-2 mb-2">
                        </div>

                        <div>
                            @error('email')
                            <p class=" text-red-600">{{ $message }}</p>
                            @enderror
                            <input type="text" name="email" placeholder="Your email" class=" w-full h-[50px] outline-none bg-gray-100 hover:bg-gray-200 focus:border-[2px] focus:border-black rounded pl-2 mb-2">
                        </div>
                        
                        <div>
                            @error('password')
                            <p class=" text-red-600">{{ $message }}</p>
                            @enderror
                            <input type="password" name="password" placeholder="Your password" class=" w-full h-[50px] outline-none bg-gray-100 hover:bg-gray-200 focus:border-[2px] focus:border-black rounded pl-2 mb-2">
                        </div>

                        <div>
                            <input type="password" name="password_confirmation" placeholder="Confirm your password" class=" w-full h-[50px] outline-none bg-gray-100 hover:bg-gray-200 focus:border-[2px] focus:border-black rounded pl-2 mb-2">
                        </div>
                        
                        <div class=" mb-4 lg:mb-12">
                            <input type="checkbox" name="remember" id="" value="1" class=" w-[17px] h-[17px]">
                            <span>I'm aware this website's content is not from the original creators!</span>
                        </div>
                        
                        <div class=" text-center lg:mb-12 mb-8">
                            <button class=" w-[60px] h-[60px] bg-red-600 hover:bg-red-700 rounded transition"><i class="fa-solid fa-arrow-right text-white text-[25px]"></i></button>
                        </div>
                        
                    </form>
                </div>
    
                <div>
                    <h3><a href="/login" class=" text-gray-400 transition hover:text-black hover:border-b-[1px] hover:border-black">ALREADY HAVE AN ACCOUNT </a></h3>
                    <h3><a href="/cantsignin" class=" text-gray-400 transition hover:text-black hover:border-b-[1px] hover:border-black">CAN'T REGISTER? </a></h3>
                </div>
            </div>

        </section>

        <!--Image login page-->
        <section class=" hidden lg:w-[70%] lg:block" >
            <div class=" w-full h-screen bg-[url('/images/anime-registerpage.jpg')] bg-cover bg-center">
                <div class=" w-full text-right p-4">
                    <a href="/" class=" transition duration-300 hover:bg-red-600 hover:text-white bg-white text-[20px] rounded font-bold px-4 py-2 shadow"><i class="fa-solid fa-close"></i></a>
                </div>
            </div>
        </section>

    </main>

    <script src="https://kit.fontawesome.com/b58b5977ce.js" crossorigin="anonymous"></script>
</body>
</html>