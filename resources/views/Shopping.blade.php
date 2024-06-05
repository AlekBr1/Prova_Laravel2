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
    <div class="flex w-full min-h-screen h-full">
        <div class="flex flex-col w-full mt-24 items-center pt-8 justify-start border-b-2 bg-gradient-to-br from-[#0D2B45FF] from-25% via-[#203C56FF] via-45% to-[#544E68FF] to-95% border-[#0D2B45FF] shadow-2xl shadow-[#0D2B45FF]">
            <h1 class="flex underline text-2xl font-semibold text-[#FFECD6FF] mt-12">Jogos á Venda</h1>
            <div class="flex w-full mt-12 py-10 justify-evenly">
                <div class="">
                    <div class="grid grid-cols-5 justify-around gap-5">
                        @foreach ($games as $game)
                            <div class="col-md-4 mb-4 w-72">
                                <div class="card w-72">
                                    <!-- Adicione um evento de clique para abrir o modal -->
                                    <img onclick="openModal('{{ $game->nome }}', '{{ $game->descricao }}', '{{ $game->genero }}', '{{ number_format($game->preco, 2, ',', '.') }}')"
                                        src="{{ asset($game->imagem) }}" class="card-img-top w-72 h-96 cursor-pointer"
                                        alt="{{ $game->nome }}">
                                    <div id="modal-{{ $game->nome }}" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center ">
                                        <div class="bg-gradient-to-tl from-[#544E68FF] from-15% to-[#8D697AFF] text-[#FFD4A3FF] rounded-lg p-8 max-w-lg">
                                            <h2 class="flex pb-5 w-full justify-center text-2xl font-extrabold mb-4 uppercase">{{ $game->nome }}</h2>
                                            <p class="text-lg pb-5 mb-2 text-justify"><span class="font-semibold text-white">Descrição:</span> {{ $game->descricao }}</p>
                                            <p class="text-lg pb-5 mb-2 text-justify"><span class="font-semibold text-white">Gênero:</span> {{ $game->genero }}</p>
                                            <p class="text-lg pb-5 mb-2 text-justify"><span class="font-semibold text-white">Preço:</span> R${{ number_format($game->preco, 2, ',', '.') }}</p>
                                            <button onclick="closeModal('{{ $game->nome }}')" class="bg-gray-400 hover:bg-gray-400 hover:scale-105 text-white font-bold py-2 px-4 rounded">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script>
        // Função para abrir o modal
        function openModal(nome, descricao, genero, preco) {
            const modal = document.getElementById('modal-' + nome);
            modal.classList.remove('hidden');
        }

        // Função para fechar o modal
        function closeModal(nome) {
            const modal = document.getElementById('modal-' + nome);
            modal.classList.add('hidden');
        }
    </script>
</body>

</html>
