<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Ingresar
            </h2>
            <p class="mb-4">Inicia sesion</p>
        </header>

        <form method="POST" action="/users/authenticate">
            @csrf

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"
                >Correo</label
                >
                <input
                    type="email"
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
                    for="password"
                    class="inline-block text-lg mb-2"
                >
                    Contraseña
                </label>
                <input
                    type="password"
                    class="border border-gray-200 rounded p-2 w-full text-black"
                    name="password"
                    value="{{old('password')}}"
                />

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <button
                    type="submit"
                    class="mt-10 bg-blue-500 hover:bg-laravel hover:text-black text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"
                >
                    Ingresar
                </button>
            </div>

            <div class="mt-8">
                <p>
                    ¿No tienes una cuenta?
                    <a href="/register" class="text-laravel"
                    >Registrarse</a
                    >
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
