<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#5CE1E6",
                    },
                },
            },
        };
    </script>
    <title>Morit | Encuentra trabajos</title>
</head>
<body class="mb-48">
<style>
    html {
        background-color: #1a202c;
    }

    h1 {
        color: #a0aec0;
    }

    h2 {
        color: #cbd5e0;
    }

    h3 {
        color: #cbd5e0;
    }

    div {
        color: #cbd5e0;
    }

    p {
        color: #cbd5e0;
    }

    a {
        text-decoration: none;
        color: #cbd5e0;
    }
</style>


<nav class="flex justify-between items-center mb-4">
    <a
        href="/"
    >
        <img
            class="w-24 rounded-full"
            src="{{asset('images/logo.png')}}"
            alt=""
            class="logo"
        />
    </a>
    <ul class="flex space-x-6 mr-6 text-lg">
        @auth

        <li>
            <p>Bienvenido<span class="font-bold uppercase text-laravel"> {{auth()->user()->name}}</span></p>
        </li>

        <li>
            <a href="/listings/manage" class="hover:text-laravel">
                <i class="fa-solid fa-gear"></i></a>
        </li>

        <li>
            <form class="inline" method="POST" action="/logout">

                @csrf

                <button type="submit">
                    <i class="fa-solid fa-right-from-bracket text-white hover:text-laravel"></i>
                </button>

            </form>
        </li>
        @else

        <li>
            <a href="/register" class="hover:text-laravel">
                <i class="fa-solid fa-user-plus"></i> Registrarse</a>
        </li>

        <li>
            <a href="/login" class="hover:text-laravel">
                <i class="fa-solid fa-arrow-right-to-bracket"></i> Ingresar</a>
        </li>

        @endauth
    </ul>
</nav>

<main>
    {{$slot}}
</main>


<footer
    style="height: 5rem"
    class="fixed bottom-0 left-0 w-full flex items-center  font-bold bg-laravel text-black h-24 mt-24 opacity-90 md:justify-center"
>
    <p style="color: #1a202c" class="ml-3 |

     w-50 flex-1">Copyright &copy; 2022</p>

    <a
        href="/listings/create"
        class="absolute top-1/3 right-5 bg-black text-white py-2 px-5 rounded p-6"
    >Publicar Trabajo
    </a>
</footer>
<x-flash-message/>
</body>
</html>
