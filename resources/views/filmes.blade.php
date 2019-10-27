@extends('layouts.front')

@section('content')

<div class="p-6">
    <div class="mt-16 w-full flex flex-row ">
        @include('parts/sidebar-pagin')

        <div class="flex flex-col w-3/4 bg-white rounded p-4 m-2">
            <span class="text-xl font-bold">Filmes > Todos</span>
            <div class="flex flex-row w-full p-2 bg-gray-200 rounded my-2">
                <div class="w-2/12">
                    <a href="{{ route('filme') }}"><img src="\img\video\poster\shutterisland.jpg" class="rounded"></a>
                </div>
                <div class="w-8/12 px-2">
                    <p class=""><span class="w-full text-2xl font-bold inline-block"><a href="{{ route('filme') }}" class="red-link">Avengers: Endgame</a></span></p>

                    <p class=""><span class="w-full inline-block"><a href="#" class="red-link">Aventura</a>, <a href="/filme" class="red-link">Ação</a>, <a href="/filme" class="red-link">Fantasia</a></span></p>

                    <p class=""><span class="font-bold">Realizadores:</span> Anthony Russo, Joe Russo</p>

                    <p class=""><span class="font-bold">Elenco:</span> Robert Downey Jr. Chris Evans Mark Ruffalo</p>

                    <p class=""><span class="font-bold">Sinopse:</span> Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.</p>
                </div>

                <div class="flex flex-col w-2/12 p-2 self-center r-0 align-end">
                    <div class="flex flex-row self-end bg-gray-200 rounded px-4 py-2 mb-2 w-full">
                        <i class="material-icons self-end">favorite_border</i> <span class="ml-2 self-center"></span>
                    </div>
                    <div class="flex flex-row self-end bg-gray-200 rounded px-4 py-2 mb-2 w-full">
                        <i class="material-icons self-end">record_voice_over</i> <span class="ml-2 self-center"></span>
                    </div>
                    <div class="flex flex-row self-end bg-gray-200 rounded px-4 py-2 mb-2 w-full">
                        <i class="material-icons self-end">done_outline</i> <span class="ml-2 self-center"></span>
                    </div>
                    <div class="flex flex-row self-end bg-gray-200 rounded px-4 py-2 mb-2 w-full">
                        <i class="material-icons self-end">notifications_none</i> <span class="ml-2 self-center"></span>
                    </div>
                </div>
            </div>

            <div class="flex flex-row w-full p-2 bg-gray-200 rounded my-2">
                <div class="w-2/12">
                    <a href="{{ route('filme') }}"><img src="\img\video\poster\shutterisland.jpg" class="rounded"></a>
                </div>
                <div class="w-4/6 px-2">
                    <p class=""><span class="w-full text-2xl font-bold inline-block"><a href="{{ route('filme') }}" class="red-link">Avengers: Endgame</a></span></p>

                    <p class=""><span class="w-full inline-block"><a href="#" class="red-link">Aventura</a>, <a href="/filme" class="red-link">Ação</a>, <a href="/filme" class="red-link">Fantasia</a></span></p>

                    <p class=""><span class="font-bold">Realizadores:</span> Anthony Russo, Joe Russo</p>

                    <p class=""><span class="font-bold">Elenco:</span> Robert Downey Jr. Chris Evans Mark Ruffalo</p>

                    <p class=""><span class="font-bold">Sinopse:</span> Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.</p>
                </div>
            </div>

            <div class="flex flex-row w-full p-2 bg-gray-200 rounded my-2">
                <div class="w-2/12">
                    <a href="{{ route('filme') }}"><img src="\img\video\poster\shutterisland.jpg" class="rounded"></a>
                </div>
                <div class="w-4/6 px-2">
                    <p class=""><span class="w-full text-2xl font-bold inline-block"><a href="{{ route('filme') }}" class="red-link">Avengers: Endgame</a></span></p>

                    <p class=""><span class="w-full inline-block"><a href="#" class="red-link">Aventura</a>, <a href="/filme" class="red-link">Ação</a>, <a href="/filme" class="red-link">Fantasia</a></span></p>

                    <p class=""><span class="font-bold">Realizadores:</span> Anthony Russo, Joe Russo</p>

                    <p class=""><span class="font-bold">Elenco:</span> Robert Downey Jr. Chris Evans Mark Ruffalo</p>

                    <p class=""><span class="font-bold">Sinopse:</span> Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.</p>
                </div>
            </div>

            <div class="flex flex-row w-full p-2 bg-gray-200 rounded my-2">
                <div class="w-2/12">
                    <a href="{{ route('filme') }}"><img src="\img\video\poster\shutterisland.jpg" class="rounded"></a>
                </div>
                <div class="w-4/6 px-2">
                    <p class=""><span class="w-full text-2xl font-bold inline-block"><a href="{{ route('filme') }}" class="red-link">Avengers: Endgame</a></span></p>

                    <p class=""><span class="w-full inline-block"><a href="#" class="red-link">Aventura</a>, <a href="/filme" class="red-link">Ação</a>, <a href="/filme" class="red-link">Fantasia</a></span></p>

                    <p class=""><span class="font-bold">Realizadores:</span> Anthony Russo, Joe Russo</p>

                    <p class=""><span class="font-bold">Elenco:</span> Robert Downey Jr. Chris Evans Mark Ruffalo</p>

                    <p class=""><span class="font-bold">Sinopse:</span> Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.</p>
                </div>
            </div>

            <div class="flex flex-row w-full p-2 bg-gray-200 rounded my-2">
                <div class="w-2/12">
                    <a href="{{ route('filme') }}"><img src="\img\video\poster\shutterisland.jpg" class="rounded"></a>
                </div>
                <div class="w-4/6 px-2">
                    <p class=""><span class="w-full text-2xl font-bold inline-block"><a href="{{ route('filme') }}" class="red-link">Avengers: Endgame</a></span></p>

                    <p class=""><span class="w-full inline-block"><a href="#" class="red-link">Aventura</a>, <a href="/filme" class="red-link">Ação</a>, <a href="/filme" class="red-link">Fantasia</a></span></p>

                    <p class=""><span class="font-bold">Realizadores:</span> Anthony Russo, Joe Russo</p>

                    <p class=""><span class="font-bold">Elenco:</span> Robert Downey Jr. Chris Evans Mark Ruffalo</p>

                    <p class=""><span class="font-bold">Sinopse:</span> Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.</p>
                </div>
            </div>

            <div class="flex flex-row w-full p-2 bg-gray-200 rounded my-2">
                <div class="w-2/12">
                    <a href="{{ route('filme') }}"><img src="\img\video\poster\shutterisland.jpg" class="rounded"></a>
                </div>
                <div class="w-4/6 px-2">
                    <p class=""><span class="w-full text-2xl font-bold inline-block"><a href="{{ route('filme') }}" class="red-link">Avengers: Endgame</a></span></p>

                    <p class=""><span class="w-full inline-block"><a href="#" class="red-link">Aventura</a>, <a href="/filme" class="red-link">Ação</a>, <a href="/filme" class="red-link">Fantasia</a></span></p>

                    <p class=""><span class="font-bold">Realizadores:</span> Anthony Russo, Joe Russo</p>

                    <p class=""><span class="font-bold">Elenco:</span> Robert Downey Jr. Chris Evans Mark Ruffalo</p>

                    <p class=""><span class="font-bold">Sinopse:</span> Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------->

@include('parts/premium')
@include('parts/footer')
@endsection
