<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Games Shop</title>
</head>
<body>
    <div class="flex w-full h-full">
        @component('components.header')@endcomponent
        <div class="flex w-full h-screen justify-center items-center  bg-gradient-to-b from-[#0D2B45FF] from-25% via-[#203C56FF] via-45% to-[#544E68FF] to-75%" >
            @component('components.form')@endcomponent
        </div>

    </div>
</body>
</html>