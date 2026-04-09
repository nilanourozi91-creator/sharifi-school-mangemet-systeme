<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css','resources/js/app.js'])
        @vite('resources/js/index.js')
        
    </head>
    <body class="antialiased font-sans">
        <div class=" bg-sky-900 from-slate-500 to-slate-200 h-20 w-full  text-black">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" />
            <div class=" relative h-20 flex justify-between items-center">
                <div class=" relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="flex items-center justify-between px-6 py-4">
                        <div class="flex lg:justify-center lg:col-start-2">
                        <img src="/images/logo.png" class="w-16 h-16 rounded-full" alt="logo">
                        </div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>
                    </div>
                </div>
            </div>
            <div>
                  <livewire:banner/>
            </div>
    </body>
</html>
