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
        @include('partials._hero')
        @include('partials._search')

        <div
            class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
        >

            @unless(count($listings) == 0)

                @foreach($listings as $listing)

                    {{-- Se crea la instancia del componente y se le asigna el parametro a recibir --}}
                    <x-listing-card :listing="$listing"/>

                @endforeach

                @else
                    <p>No listings Found</p>
            @endunless

        </div>

        <div class="mt-6 p-4">
            {{$listings->links()}}
        </div>

    </x-layout>

