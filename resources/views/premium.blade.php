@extends('layouts.front')

@section('content')
<div class="w-full self-center">
    <img src="img\premium\premium.png" class="cover w-full object-cover">
</div>

<div class="p-6">
    <div class="w-full flex flex-row">
        <div class="flex flex-col w-full bg-white rounded p-4 m-2">
            <div class="flex flex-row bg-gray-200 rounded p-4">
                <div class="p-4 w-1/4">
                    <img src="\img\premium\no-ads.png" class="rounded">
                </div>
                <div class="p-4 w-3/4 self-center">
                    <p class="font-bold text-xl">Zero Publicidade!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>

            <div class="flex flex-row bg-gray-200 rounded p-4 my-4">
                <div class="p-4 w-3/4 self-center">
                    <p class="font-bold text-xl">Personaliza os Temas com 5 Cores!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="p-4 w-1/4 rounded">
                    <img src="\img\premium\themes.png" class="rounded">
                </div>
            </div>

            <div class="flex flex-row bg-gray-200 rounded p-4">
                <div class="p-4 w-1/4">
                    <img src="\img\premium\forum.png" class="rounded">
                </div>
                <div class="p-4 w-3/4 self-center">
                    <p class="font-bold text-xl">Acesso à seção 'Premium' no Fórum!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------->

@include('parts/premium')
@include('parts/footer')
@endsection
