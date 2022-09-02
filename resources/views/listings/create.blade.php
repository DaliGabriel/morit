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

<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Crear una oportunidad
            </h2>
            <p class="mb-4">Publica una oportunidad para encontrar al elegido!!</p>
        </header>

        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label
                    for="company"
                    class="inline-block text-lg mb-2"
                >Nombre de la empresa</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full text-black"
                    name="company"
                    placeholder="Ejemplo: Evilcorp"
                    value="{{old('company')}}"
                />

                @error('company')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2 "
                >Puesto de trabajo</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full text-black"
                    name="title"
                    placeholder="Ejemplo: Luchador de tiempo completo"
                    value="{{old('title')}}"
                />
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="location"
                    class="inline-block text-lg mb-2"
                >Ubicacion</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full text-black"
                    name="location"
                    placeholder="Ejemplo: Chorumuco"
                    value="{{old('location')}}"
                />
                @error('location')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"
                >Correo electronico de contacto</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full text-black"
                    name="email"
                    value="{{old('email')}}"
                />
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="website"
                    class="inline-block text-lg mb-2"
                >
                    Pagina web
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full text-black"
                    name="website"
                    placeholder="Ejemplo: https://pornhub.com"
                    value="{{old('website')}}"
                />
                @error('website')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Hashtags
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full text-black"
                    name="tags"
                    placeholder="Ejemplo: Caliente, 30 años de experiencia, sueldo negrero,etc"
                    value="{{old('tags')}}"
                />
                @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Imagen de la empresa
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="logo"
                />
            @error('logo')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            </div>

            <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg mb-2"
                >
                    Descripcion del trabajo
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full text-black"
                    name="description"
                    rows="10"
                    placeholder="Ejemplo: Requerimientos, salario, sin descansos, etc."
                >{{old('description')}}</textarea>
                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">

                <button
                    class="mt-10 bg-blue-500 hover:bg-laravel hover:text-black text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"
                >
                    Crea una oportunidad!!
                </button>

                <a href="/" class="mt-10 bg-gray-500 hover:bg-gray-500 hover:text-gray-300 text-white font-bold py-2 px-4 border-b-4 border-gray-700 hover:border-gray-300 rounded"> Regresar </a>
            </div>
        </form>
    </x-card>
</x-layout>
