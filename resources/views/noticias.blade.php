@extends('layouts.front')

@section('content')

<div class="p-6">
    <div class="mt-16 w-full flex flex-row ">
        @include('parts/sidebar-news')

        <div class="flex flex-col w-3/4 bg-white rounded p-4 m-2">
            <span class="text-xl font-bold">Notícias > Todas</span>
            <div class="flex flex-col w-full p-3 bg-gray-200 rounded my-2">
                <div class="w-full h-64">
                    <a href="{{ route('noticia') }}"><img src="\img\video\cover\avengers.jpg" class="rounded h-64  object-cover w-full"></a>
                </div>
                <div class="">
                    <p class=""><span class="w-full text-2xl font-bold inline-block"><a href="{{ route('noticia') }}" class="red-link">Joker – Filme do vilão ganha prémio de “Melhor Filme” no Festival de Veneza</a></span></p>

                    <p>
                        Durante a cerimónia de encerramento da 76ª edição do Festival de cinema de Veneza, em Itália, o filme Joker foi premiado com o Leão de Ouro, o maior prémio entregue pelo renomeado festival. (via Youtube) O agradecimento foi feito pelo realizador e argumentista Todd Phillips (The Hangover), que estava presente no evento ao lado do ator Joaquin Phoenix (Her): “Quero agradecer à Warner Bros. e DC por saírem da sua zona de conforto e tomarem este risco ousado em mim e neste filme (…) Também quero dedicar este Leão de Ouro ao elenco…
                    </p>

                    <div class=" flex flex-row w-full bg-red-1000 rounded mt-2">
                        <a href="{{ route('noticia') }}" class="text-white w-full self-center m-auto py-2 px-4 text-center">LER NOTÍCIA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------->

@include('parts/premium')
@include('parts/footer')
@endsection
