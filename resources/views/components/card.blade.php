
{{-- Contenedor de stylo en forma de carta --}}

{{-- Esto nos permite añadir mas clases y conservar las ya escritas --}}
<div {{$attributes->merge(['class' => 'bg-gray-80 border border-gray-200 rounded p-6'])}}>

    {{-- Esto nos permite insertar codigo adentro de la clase padre --}}
    {{$slot}}

</div>
