<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('site.addgame')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col justify-center w-full ">
            <div class="flex gap-5 py-12 justify-between items-center">
                <label class="flex font-semibold text-2xl underline text-[#FFECD6FF]" for="nome">Nome :</label>
                <input class="flex bg-transparent h-12 border-2 border-[#FFD4A3FF] px-5 text-[#FFECD6FF] rounded-3xl w-80" type="text"
                    name="nome">
            </div>
            <div class="flex gap-5 py-12 justify-between items-center">
                <label class="flex font-semibold text-2xl underline text-[#FFECD6FF]" for="preco">Preço :</label>
                <input class="flex bg-transparent h-12 border-2 border-[#FFD4A3FF] px-5 text-[#FFECD6FF] rounded-3xl w-80" type="text"
                    name="preco">
            </div>
            <div class="flex gap-5 py-12 justify-between items-center">
                <label class="flex font-semibold text-2xl underline text-[#FFECD6FF]" for="descricao">Descrição
                    :</label>
                <input class="flex bg-transparent h-12 border-2 border-[#FFD4A3FF] px-5 text-[#FFECD6FF] rounded-3xl w-80" type="text"
                    name="descricao">
            </div>
            <div class="flex gap-5 py-12 justify-between items-center">
                <label class="flex font-semibold text-2xl underline text-[#FFECD6FF]" for="genero">Gênero :</label>
                <input class="flex bg-transparent h-12 border-2 border-[#FFD4A3FF] px-5 text-[#FFECD6FF] rounded-3xl w-80" type="text"
                    name="genero">
            </div>
            <div class="flex gap-5 py-12 justify-between items-center"">
                <label class="flex font-semibold text-2xl underline text-[#FFECD6FF]" for="imagem">Imagem :</label>
                <input class="flex bg-transparent h-12 border-2 border-[#FFD4A3FF] px-5 text-[#FFECD6FF] rounded-3xl w-80" type="file" name="imagem" id="imagem">
            </div>
            <div class="flex justify-center w-full">
                <button
                    class="flex font-bold text-2xl bg-[#FFD4A3FF] text-[#0D2B45FF] justify-center rounded-full w-40 py-2">Criar
                    Jogo</button>
            </div>
        </div>
    </form>
</body>

</html>
