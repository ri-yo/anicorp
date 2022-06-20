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
        <section class=" w-1/5">
            <div>
                <form action="">
                    <input type="text" name="email" placeholder="Your email">
                    <input type="password" name="password" placeholder="Your password">
                    <button>Log In</button>
                </form>
            </div>
        </section>

        <!--Image login page-->
        <section class=" w-4/5" >
            <div class=" w-full h-screen bg-[url('/images/anime-loginpage.jpg')] bg-cover bg-center">

            </div>
        </section>

    </main>
</body>
</html>