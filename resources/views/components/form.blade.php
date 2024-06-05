<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar jogo</title>
    <style>
        /* Estilos adicionais podem ser adicionados aqui */
        .upload-icon {
            cursor: pointer;
        }

        .preview-image {
            display: none;
            max-width: 200px;
            max-height: 200px;
        }
    </style>
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
            <div class="flex gap-5 py-4 justify-center items-center">
                <!-- Ícone para adicionar imagem -->
                <div id="upload-icon" class="upload-icon">
                    <input class="hidden" type="file" name="imagem" id="imagem">
                    <x-gmdi-add-photo-alternate-r class="flex w-20 h-20  text-[#FFECD6FF] "/>
                </div>
                <!-- Pré-visualização da imagem -->
                <img id="preview-image" class="preview-image" src="#" alt="Imagem">
            </div>
            <div class="flex justify-center w-full">
                <button
                    class="flex font-bold text-2xl bg-[#FFD4A3FF] text-[#0D2B45FF] justify-center rounded-full w-40 py-2">Criar
                    Jogo</button>
            </div>
        </div>
    </form>
    <script>
        const uploadIcon = document.getElementById('upload-icon');
        const inputImagem = document.getElementById('imagem');
        const previewImage = document.getElementById('preview-image');

        // Adicionar evento de clique ao ícone de upload
        uploadIcon.addEventListener('click', () => {
            inputImagem.click();
        });

        // Adicionar evento de mudança ao input de imagem
        inputImagem.addEventListener('change', () => {
            const file = inputImagem.files[0];

            if (file) {
                // Criar URL do objeto Blob da imagem
                const url = URL.createObjectURL(file);
                // Exibir a imagem na pré-visualização
                previewImage.src = url;
                // Mostrar a pré-visualização e ocultar o ícone de upload
                previewImage.style.display = 'block';
                uploadIcon.style.display = 'none';
            }
        });
    </script>
</body>

</html>
