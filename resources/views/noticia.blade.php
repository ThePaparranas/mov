@extends('layouts.front')

@section('content')

<div class="p-6">
    <div class="mt-16 w-full flex flex-row ">
        @include('parts/sidebar-news')

        <div class="flex flex-col w-3/4 bg-white rounded p-4 m-2">
            <span class="text-xl font-bold"><a href="{{ route('noticias') }}" class="red-link">Notícias</a> > Joker – Filme do vilão ganha prémio de “Melhor Filme” no Festival de Veneza</span>
            <div class="flex flex-col w-full p-3 bg-gray-200 rounded my-2">
                <div class="w-full h-64">
                    <a href="{{ route('noticia') }}"><img src="\img\video\cover\avengers.jpg" class="rounded h-64  object-cover w-full"></a>
                </div>
                <div class="">
                    <p class=""><span class="w-full text-2xl font-bold inline-block"><a href="{{ route('noticia') }}" class="red-link">Joker – Filme do vilão ganha prémio de “Melhor Filme” no Festival de Veneza</a></span></p>

                    <p>
                        Durante a cerimónia de encerramento da 76ª edição do Festival de cinema de Veneza, em Itália, o filme Joker foi premiado com o Leão de Ouro, o maior prémio entregue pelo renomeado festival. (via Youtube)

                        O agradecimento foi feito pelo realizador e argumentista Todd Phillips (The Hangover), que estava presente no evento ao lado do ator Joaquin Phoenix (Her):

                        “Quero agradecer à Warner Bros. e DC por saírem da sua zona de conforto e tomarem este risco ousado em mim e neste filme (…) Também quero dedicar este Leão de Ouro ao elenco e equipa técnica, especialmente à Blair Rich (executiva da Warner Bros.), que acreditou neste filme desde o primeiro argumento, ao Bradley Cooper, que me apoio por detrás das cenas e por ser uma grande inspiração (…), e finalmente, não existiria este filme sem Joaquin Phoenix, a feroz e mais corajosa pessoa à qual digo obrigado por me deixar usar os seus grandes talentos.”, disse o cineasta.

                        Com a estreia da longa-metragem no festival, também começaram a chegar as primeiras reações, que mostraram ser extremamente positivas. O filme de origem do icónico vilão da DC está a ser descrito como “uma obra-prima com Joaquin Phoenix a elevar uma delirante e desequilibrada performance como o personagem-título. Um absoluto triunfo que foi recebido com aplausos de pé.” (via DiscussingFilm)

                        Virado para o crime e terror (orientado para o público adulto), o filme solo será situado nos anos 80 em Gotham City e terá alguns elementos baseados no graphic novel The Killing Joke, retratando e apresentando o personagem como um comediante falhado. A premissa do filme é descrita como “um estudo psicológico a um doente mental que se torna no príncipe do crime.”

                        A produção não será situada dentro do DCEU (Universo Estendido da DC, onde se situam filmes como Batman V Superman, Wonder Woman, etc), e terá um orçamento estimado em US$ 55 milhões, valor significativamente menor em relação às demais produções de super-heróis.

                        O ator Bradley Copper (A Star is Born) serve de produtor ao lado do realizador Todd Phillips (The Hangover), com este a ter escrito o guião ao lado de Scott Silver (8 Mile).

                        Atores como Robert de Niro (Taxi Driver), Zazie Beetz (Deadpool 2), Bill Camp (Red Sparrow), Frances Conroy (American Horror Story), Douglas Hodge (Penny Dreadful) e Dante Pereira-Olson (Happy!), formam o restante elenco.

                        Joker é uma ideia que faz parte do selo Elseworlds (ou DC Black), um tipo de publicações da DC Comics sobre realidades hipotéticas, na qual “os personagens são retirados dos seus cenários habituais e colocados em locais e épocas diferentes. Locais e épocas que existiram ou que poderiam ter existido… ou que não podem, não poderiam nem deveriam existir.” (Via Wikipedia)

                        Esta versão não tem qualquer ligação com a do ator Jared Leto, introduzida em Suicide Squad (2016). Embora não existam planos para uma nova aparição, Leto continua ligado ao DCEU, e deverá, eventualmente, voltar a interpretar o famoso príncipe do crime (possivelmente em Birds of Prey).

                        O filme protagonizado por Phoenix chega aos cinemas a 3 de Outubro.
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
