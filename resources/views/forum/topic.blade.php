@extends('layouts.front')

@section('content')

<div class="p-6">
    <div class="mt-16 w-full flex flex-row ">
        @include('parts/sidebar-forum')

        <div class="flex flex-col w-3/4 bg-white rounded p-4 m-2">
            <span class="text-xl font-bold"><a href="{{ route('forum') }}" class="red-link">Fórum</a> > <a href="{{ route('topics') }}" class="red-link">Filmes</a> > 'It: Chapter Two' Terrifies With $91M U.S. Debut, $185M Globally</span>
            <div class="flex flex-col w-full p-3 bg-gray-200 rounded my-2">
                <div class="flex flex-row">
                    <img src="img\perfil\avatar\ThePaparranas.jpg" class="rounded-full w-12">
                    <div class="flex flex-col px-2 my-auto">
                        <p><a href="#" class="red-link">ThePaparranas</a></p>
                        <p class="text-xs text-gray-600">17 de Janeiro de 2019</p>
                    </div>
                </div>
                <div class="py-2">
                    <p>
                        I absolutely love movies that do a great job of executing really simplistic or silly plots - usually it only work for comedies.
                    </p>

                    <p>
                    Here are some examples that come to mind for me :
                    </p>

                    <p>
                    Big Lebowski Some porn stars piss on the Dude's rug, and that rug really tied the room together. He tries to get a new rug and go bowling, and a bunch of other random shit happens.
                    </p>

                    <p>
                    Once Upon a Time in Hollywood Alcoholic, narcissistic, redneck actor with anger management issues (who lives next door to Sharon Tate) realizes he's a has been, then has a mental breakdown before he finally agrees to do fuckin Italian movies. Meanwhile his best friend Cliff flirts with a hitchhiker and accidently becomes acquainted with the Manson family.
                    </p>
                </div>
            </div>

            @include('parts/comments')

        </div>
    </div>
</div>

<!----------->

@include('parts/premium')
@include('parts/footer')
@endsection
