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
    <body class="antialiased font-sans bg-gray-100">
        <div class="  backdrop-blur-md h-24 w-full border-b-2 border-black fixed top-0">
                    <header class="flex h-full items-center justify-between px-6 ">
                        <div class="flex lg:justify-center lg:col-start-2">
                        <img src="/images/logo.png" class="w-20 h-20 rounded-full" alt="logo">
                        </div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>
                   
            </div>
            <div>
                  <livewire:banner/>
                  <livewire:feature/>
                  <livewire:team_work/>
                  <livewire:aboutus/>
                  <livewire:me/>
                  
                  <livewire:fqs/>
                  <livewire:footer/>
            </div>
    </body>
</html>
