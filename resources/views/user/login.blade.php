<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Anicorp - LogIn</title>
</head>
<body class=" overflow-hidden">
    <main class=" flex">

        <!--Login form section-->
        <section class="w-[30%] pt-12 px-14">

            <div class=" mb-14 max-w-[70px]">
                <a href="/"><img src="{{ asset('/images/logo.png') }}" alt="Logo" class=" rounded-full w-[70px] h-[70px] object-contain"></a>
            </div>

            <div class=" mb-8">
                <h1 class=" font-bold text-[25px]">Sign In with your AniCorp account</h1>
            </div>

            <div>
                <form action="">
                    <div>
                        <input type="text" name="email" placeholder="Your email" class=" w-full h-[50px] outline-none bg-gray-100 hover:bg-gray-200 focus:border-[2px] focus:border-black rounded pl-2 mb-2">
                    </div>
                    
                    <div>
                        <input type="password" name="password" placeholder="Your password" class=" w-full h-[50px] outline-none bg-gray-100 hover:bg-gray-200 focus:border-[2px] focus:border-black rounded pl-2 mb-2">
                    </div>
                    
                    <div class=" mb-12">
                        <input type="checkbox" name="remember" id="" value="1" class=" w-[17px] h-[17px]">
                        <span>Remember me</span>
                    </div>
                    
                    <div class=" text-center mb-12">
                        <button class=" w-[60px] h-[60px] bg-red-600 hover:bg-red-700 rounded transition"><i class="fa-solid fa-arrow-right text-white text-[25px]"></i></button>
                    </div>
                    
                </form>
            </div>

            <div>
                <h3><a href="/register" class=" text-gray-400 transition hover:text-black hover:border-b-[1px] hover:border-black">CREATE ACCOUNT </a></h3>
                <h3><a href="/cantsignin" class=" text-gray-400 transition hover:text-black hover:border-b-[1px] hover:border-black">CAN'T SIGN IN? </a></h3>
            </div>
        </section>

        <!--Image login page-->
        <section class=" w-[70%]" >
            <div class=" w-full h-screen bg-[url('/images/anime-loginpage.jpg')] bg-cover bg-left">
                <div class=" w-full text-right p-4">
                    <a href="/" class=" transition duration-300 hover:bg-red-600 hover:text-white bg-white text-[20px] rounded font-bold px-4 py-2 shadow"><i class="fa-solid fa-close"></i></a>
                </div>
            </div>
        </section>

    </main>

    <script src="https://kit.fontawesome.com/b58b5977ce.js" crossorigin="anonymous"></script>
</body>
</html>