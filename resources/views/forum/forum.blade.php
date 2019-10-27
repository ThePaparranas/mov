@extends('layouts.front')

@section('content')

<div class="p-6">
    <div class="mt-16 w-full flex flex-row ">
        @include('parts/sidebar-forum')

        <div class="flex flex-col w-3/4 bg-white rounded p-4 m-2">
            <span class="text-xl font-bold">Fórum</span>
            <div class="flex flex-row w-full p-3 bg-gray-200 rounded my-2">
                <span class="flex flex-row font-bold text-xl">
                    <a href="{{ route('topics') }}">
                        <i class="material-icons align-middle bg-white rounded p-4 self-center">local_movies</i>
                    </a>
                    <a href="{{ route('topics') }}" class="flex flex-row">
                        <div class="flex flex-col self-center px-4">
                            <span class="font-bold">Filmes</span>
                            <span class="text-xs text-gray-600">Discussão sobre Filmes, lançamentos e novidades</span>
                        </div>
                    </a>
                </span>
            </div>

            <div class="flex flex-row w-full p-3 bg-gray-200 rounded my-2">
                <span class="flex flex-row font-bold text-xl">
                    <a href="{{ route('topics') }}">
                        <i class="material-icons align-middle bg-white rounded p-4 self-center">local_movies</i>
                    </a>
                    <a href="{{ route('topics') }}" class="flex flex-row">
                        <div class="flex flex-col self-center px-4">
                            <span class="font-bold">Séries</span>
                            <span class="text-xs text-gray-600">Discussão sobre Séries, lançamentos e novidades</span>
                        </div>
                    </a>
                </span>
            </div>

            <div class="flex flex-row w-full p-3 bg-gray-200 rounded my-2">
                <span class="flex flex-row font-bold text-xl">
                    <a href="{{ route('topics') }}">
                        <i class="material-icons align-middle bg-white rounded p-4 self-center">local_movies</i>
                    </a>
                    <a href="{{ route('topics') }}" class="flex flex-row">
                        <div class="flex flex-col self-center px-4">
                            <span class="font-bold">Animes</span>
                            <span class="text-xs text-gray-600">Discussão sobre Animes, lançamentos e novidades</span>
                        </div>
                    </a>
                </span>
            </div>

            <div class="flex flex-row w-full p-3 bg-gray-200 rounded my-2">
                <span class="flex flex-row font-bold text-xl">
                    <a href="{{ route('topics') }}">
                        <i class="material-icons align-middle bg-white rounded p-4 self-center">library_books</i>
                    </a>
                    <a href="{{ route('topics') }}" class="flex flex-row">
                        <div class="flex flex-col self-center px-4">
                            <span class="font-bold">Notícias</span>
                            <span class="text-xs text-gray-600">Discussão sobre Notícias, lançamentos e novidades</span>
                        </div>
                    </a>
                </span>
            </div>

            <div class="flex flex-row w-full p-3 bg-gray-200 rounded my-2">
                <span class="flex flex-row font-bold text-xl">
                    <a href="{{ route('topics') }}">
                        <i class="material-icons align-middle bg-white rounded p-4 self-center">inbox</i>
                    </a>
                    <a href="{{ route('topics') }}" class="flex flex-row">
                        <div class="flex flex-col self-center px-4">
                            <span class="font-bold">Sugestões</span>
                            <span class="text-xs text-gray-600">Sugestões para melhorias do site</span>
                        </div>
                    </a>
                </span>
            </div>

            <div class="flex flex-row w-full p-3 bg-gray-200 rounded my-2">
                <span class="flex flex-row font-bold text-xl">
                    <a href="{{ route('topics') }}">
                        <i class="material-icons align-middle bg-white rounded p-4 self-center">all_inclusive</i>
                    </a>
                    <a href="{{ route('topics') }}" class="flex flex-row">
                        <div class="flex flex-col self-center px-4">
                            <span class="font-bold">Off-Topic</span>
                            <span class="text-xs text-gray-600">Espaço para falar acerca de qualquer tema</span>
                        </div>
                    </a>
                </span>
            </div>

            <div class="forum-premium flex flex-row w-full p-3 bg-gray-200 rounded my-2">
                <span class="flex flex-row font-bold text-xl">
                    <a href="{{ route('topics') }}">
                        <i class="material-icons align-middle bg-white rounded p-4 self-center">star_border</i>
                    </a>
                    <a href="{{ route('topics') }}" class="flex flex-row text-black hover:text-black">
                        <div class="flex flex-col self-center px-4">
                            <span class="font-bold">Premium</span>
                            <span class="text-xs text-black">Sala exclusica para os bacanos que botam Premium</span>
                        </div>
                    </a>
                </span>
            </div>
        </div>
    </div>
</div>

<!----------->

@include('parts/premium')
@include('parts/footer')
@endsection
