<x-layout>
    @include('partials._search')

    <a href="/" class="inline-block text-white ml-4 mb-4 hover:text-laravel text-xl"
    ><i class="fa-solid fa-arrow-left"></i> Regresar
    </a>
    <div class="mx-4">
        <x-card class="p-10 ">
            <div
                class="flex flex-col items-center justify-center text-center"
            >
                <img
                    class="w-48 mr-6 mb-6"
                    src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('/images/no-image.png')}}"
                    alt=""
                />

                <h3 class="text-2xl mb-2">
                    {{$listing->title}}
                </h3>
                <div class="text-xl font-bold mb-4">{{$listing->company}}</div>

                <x-listing-tags :tagsCsv="$listing->tags"/>

                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i>
                    {{$listing->location}}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Descripción del Trabajo
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{$listing->description}}
                        </p>

                        <a
                            href="mailto:{{$listing->email}}"
                            class="
                            block
                            bg-laravel
                            text-white
                            border-b-4
                            border-blue-700
                            bg-blue-500
                            hover:bg-laravel
                            focus:ring-4
                            focus:outline-none
                            focus:ring-blue-300
                            rounded-lg
                            px-4
                            py-2
                            dark:bg-blue-500
                            dark:hover:bg-laravel
                            dark:hover:text-black
                            dark:focus:ring-blue-800
                            "
                        >
                            <i
                                class="fa-solid fa-envelope">
                            </i>
                            Contacta al Empleador
                        </a>

                        <a
                            href="{{$listing->website}}"
                            target="_blank"
                            class="
                            block
                            text-white
                            border-b-4
                            border-gray-500
                            bg-zinc-900
                            focus:ring-4
                            focus:outline-none
                            focus:ring-blue-300
                            rounded-lg
                            px-4
                            py-2
                            hover:bg-zinc-500
                            hover:text-white
                            hover:border-zinc-900
                            "
                        ><i class="fa-solid fa-globe"></i>
                            Visita su pagina
                        </a>
                    </div>
                </div>
            </div>
        </x-card>

        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/listings/{{$listing->id}}/edit">
                <i class="fa-solid fa-pencil"></i>
            </a>

            <form method="POST" action="/listings/{{$listing->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i>Borrar</button>
            </form>
        </x-card>

    </div>

</x-layout>

