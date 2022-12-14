<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edita la oportunidad
            </h2>
            <p class="mb-4">Editar publicacion con el titulo: {{$listing->title}}</p>
        </header>

        <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                    value="{{$listing->company}}"
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
                    value="{{$listing->title}}"
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
                    value="{{$listing->location}}"
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
                    value="{{$listing->email}}"
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
                    value="{{$listing->website}}"
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
                    placeholder="Ejemplo: Caliente, 30 a??os de experiencia, sueldo negrero,etc"
                    value="{{$listing->tags}}"
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

                <img
                    class="w-48 mr-6 mb-6"
                    src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('/images/no-image.png')}}"
                    alt=""
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
                >{{$listing->description}}</textarea>
                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">

                <button
                    class="mt-10 bg-blue-500 hover:bg-laravel hover:text-black text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"
                >
                    Edita una oportunidad!!
                </button>

                <a href="/" class="mt-10 bg-gray-500 hover:bg-gray-500 hover:text-gray-300 text-white font-bold py-2 px-4 border-b-4 border-gray-700 hover:border-gray-300 rounded"> Regresar </a>
            </div>
        </form>
    </x-card>
</x-layout>
