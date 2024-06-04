<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>
{{-- bg-[url('/fundoInicial.jpg')] --}}

<body>
    <div>
        @component('components.header')
        @endcomponent
    </div>
    <div
        class="flex w-full h-screen">
        <div
            class="flex flex-col w-full items-center justify-center border-b-2 bg-gradient-to-br from-[#0D2B45FF] from-25% via-[#203C56FF] via-45% to-[#544E68FF] to-95% border-[#0D2B45FF] shadow-2xl shadow-[#0D2B45FF] rounded-b-3xl">
            <h1 class="flex underline text-2xl font-semibold text-[#FFECD6FF] mt-12">Jogos á Venda</h1>
            <div class="flex w-full mt-12 py-10 justify-evenly">
                <div class="">
                    <div class="">
                        @foreach ($games as $game)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="{{ asset($game->imagem) }}" class="card-img-top"
                                        alt="{{ $game->nome }}">
                                    <div
                                        class="flex flex-col bg-gradient-to-tl from-[#544E68FF] from-15% to-[#8D697AFF]">
                                        <h5 class="card-title">{{ $game->nome }}</h5>
                                        <p class="card-text">{{ $game->descricao }}</p>
                                        <p class="card-text">Gênero: {{ $game->genero }}</p>
                                        <p class="card-text">Preço: R$ {{ number_format($game->preco, 2, ',', '.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
