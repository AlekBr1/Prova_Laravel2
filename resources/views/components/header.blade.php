<div class="w-full  justify-evenly items-center flex bg-gradient-to-b from-[#0D2B45FF] via-[#203C56FF] to-[#544E68FF] h-24 top-0 left-0 absolute" >
        <img src="{{ asset('assets/images/GameIcono.png') }}" alt="logo" class="flex h-20 w-20">
        <a href="{{ route('site.home')}}"><x-fas-home  class="flex w-16 h-16 text-[#FFECD6FF] hover:text-[#FFD4A3FF] cursor-pointer hover:scale-125"/></a>
        <a href="{{ route('site.shopping')}}"><x-fas-shop  class="flex w-16 h-16 text-[#FFECD6FF] hover:text-[#FFD4A3FF] cursor-pointer hover:scale-125"/></a>
        <a href="{{ route('site.addgame')}}"><x-fas-plus class="flex w-16 h-16 text-[#FFECD6FF] hover:text-[#FFD4A3FF] cursor-pointer hover:scale-125" /></a>
        <x-fas-phone class="flex w-16 h-16 text-[#FFECD6FF] hover:text-[#FFD4A3FF] cursor-pointer hover:scale-125"/>
    </div>