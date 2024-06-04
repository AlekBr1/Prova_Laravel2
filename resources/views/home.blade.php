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
        class="flex flex-col w-full items-center justify-center h-full mt-24 bg-gradient-to-tl from-[#544E68FF] from-15% to-[#8D697AFF] to-55%">
        <div class="flex flex-col w-full items-center justify-center border-b-2 bg-gradient-to-br from-[#0D2B45FF] from-25% via-[#203C56FF] via-45% to-[#544E68FF] to-95% border-[#0D2B45FF] shadow-2xl shadow-[#0D2B45FF] rounded-b-3xl">
            <h1 class="flex underline text-2xl font-semibold text-[#FFECD6FF] mt-12">Jogos Mais Vendidos</h1>
            <div class="flex w-full mt-12 py-10 justify-evenly">
                <div
                    class="flex w-[200px] h-[400px] items-center justify-center cursor-pointer hover:scale-105 shadow-lg shadow-[#FFECD6FF]">
                    <img src="{{ asset('assets/images/DeadCells.jpg') }}" alt="" class="flex w-[100%] h-[100%]">

                </div>
                <div
                    class="flex w-[200px] h-[400px] bg-deadcells items-center justify-center cursor-pointer hover:scale-105 shadow-lg shadow-[#FFECD6FF]">
                    <img src="{{ asset('assets/images/HollowKnight.jpg') }}" alt=""
                        class="flex w-[100%] h-[100%]">

                </div>
                <div
                    class="flex w-[200px] h-[400px] bg-deadcells items-center justify-center cursor-pointer hover:scale-105 shadow-lg shadow-[#FFECD6FF]">
                    <img src="{{ asset('assets/images/Celeste.png') }}" alt="" class="flex w-[100%] h-[100%]">
                </div>
            </div>
        </div>
        <h1 class="flex underline text-2xl font-semibold text-[#FFECD6FF] mt-12">Jogos em Promoção</h1>
        <div class="grid grid-cols-6 w-full mt-12 px-20">
            <div class="w-[100px] h-[200px] m-10">
                <img src="{{ asset('assets/images/TheBindingOfIsaac.jpg') }}" alt=""
                    class="flex w-[100%] h-[100%] cursor-pointer hover:scale-105 border-[3px] rounded-2xl border-[#0D2B45FF] ">
            </div>
            <div class="w-[100px] h-[200px] m-10">
                <img src="{{ asset('assets/images/Momodora.jpg') }}" alt=""
                    class="flex w-[100%] h-[100%] cursor-pointer hover:scale-105 border-[3px] rounded-2xl border-[#0D2B45FF] ">
            </div>
            <div class="w-[100px] h-[200px] m-10">
                <img src="{{ asset('assets/images/undertale.jpg') }}" alt=""
                    class="flex w-[100%] h-[100%] cursor-pointer hover:scale-105 border-[3px] rounded-2xl border-[#0D2B45FF] ">
            </div>
            <div class="w-[100px] h-[200px] m-10">
                <img src="{{ asset('assets/images/StardewValley.jpg') }}" alt=""
                    class="flex w-[100%] h-[100%] cursor-pointer hover:scale-105 border-[3px] rounded-2xl border-[#0D2B45FF] ">
            </div>
            <div class="w-[100px] h-[200px] m-10">
                <img src="{{ asset('assets/images/CupHead.jpg') }}" alt=""
                    class="flex w-[100%] h-[100%] cursor-pointer hover:scale-105 border-[3px] rounded-2xl border-[#0D2B45FF] ">
            </div>
            <div class="w-[100px] h-[200px] m-10">
                <img src="{{ asset('assets/images/DininhoAdventures.jpg') }}" alt=""
                    class="flex w-[100%] h-[100%] cursor-pointer hover:scale-105 border-[3px] rounded-2xl border-[#0D2B45FF] ">
            </div>
            <div class="w-[100px] h-[200px] m-10">
                <img src="{{ asset('assets/images/ChickenJumper.jpg') }}" alt=""
                    class="flex w-[100%] h-[100%] cursor-pointer hover:scale-105 border-[3px] rounded-2xl border-[#0D2B45FF] ">
            </div>
            <div class="w-[100px] h-[200px] m-10">
                <img src="{{ asset('assets/images/Hades.jpg') }}" alt=""
                    class="flex w-[100%] h-[100%] cursor-pointer hover:scale-105 border-[3px] rounded-2xl border-[#0D2B45FF] ">
            </div>
            <div class="w-[100px] h-[200px] m-10">
                <img src="{{ asset('assets/images/Journey.jpg') }}" alt=""
                    class="flex w-[100%] h-[100%] cursor-pointer hover:scale-105 border-[3px] rounded-2xl border-[#0D2B45FF] ">
            </div>
            <div class="w-[100px] h-[200px] m-10">
                <img src="{{ asset('assets/images/ShovelKnight.jpg') }}" alt=""
                    class="flex w-[100%] h-[100%] cursor-pointer hover:scale-105 border-[3px] rounded-2xl border-[#0D2B45FF] ">
            </div>
            <div class="w-[100px] h-[200px] m-10">
                <img src="{{ asset('assets/images/OverCooked.jpg') }}" alt=""
                    class="flex w-[100%] h-[100%] cursor-pointer hover:scale-105 border-[3px] rounded-2xl border-[#0D2B45FF] ">
            </div>
            <div class="w-[100px] h-[200px] m-10">
                <img src="{{ asset('assets/images/LittleNightmares.jpg') }}" alt=""
                    class="flex w-[100%] h-[100%] cursor-pointer hover:scale-105 border-[3px] rounded-2xl border-[#0D2B45FF] ">
            </div>
        </div>
    </div>

</body>

</html>
