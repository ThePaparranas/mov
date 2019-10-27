@extends('layouts.front')

@section('content')

<div class="p-6">
    <div class="mt-16 w-full flex flex-row ">
        @include('parts/sidebar-forum')

        <div class="flex flex-col w-3/4 bg-white rounded p-4 m-2">
            <span class="text-xl font-bold"><a href="{{ route('forum') }}" class="red-link">Fórum</a> > Filmes</span>
            <div class="flex flex-row w-full p-3 bg-gray-200 rounded my-2">
                <div class="w-1/12">
                    <img src="\img\perfil\avatar\ThePaparranas.jpg" class="rounded-full">
                </div>
                <div class="flex flex-col px-2 self-center">
                    <span class="font-bold text-lg"><a href="{{ route('topic') }}">'It: Chapter Two' Terrifies With $91M U.S. Debut, $185M Globally</a></span>
                    <p><a href="{{ route('perfil') }}" class="red-link">ThePaparranas</a> - <span class="text-xs text-gray-500">17 de Janeiro de 2020</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------->

@include('parts/premium')
@include('parts/footer')
@endsection
