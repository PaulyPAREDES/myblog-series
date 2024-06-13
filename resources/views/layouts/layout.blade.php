
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiase">
        <header class=" grid gap-4 ">
          
            <div class="flex items-center justify-between bg-zinc-900 min-w-full max-w-max dark:bg-gray-800 h-24 min-h-10">
 
                    <a href="{{ route('home') }}">
                    <img class="max-h-24 min-h-10 mx-2 " src="/storage/plataforma/logo.png">
                    </a>
                 

                <div class>@yield('menu')</div>
                
                @if (Route::has('login'))
                
                    @auth
                       
                       <button><a href="{{ url('/dashboard') }}" class="font-semibold m-4 text-white hover:text-yellow-300 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-300">Dashboard</a></button> 
                     
                    @else
                      <div>
                        <button class="border-solid border-2 border-white rounded text-white w-24 mx-2 h-8 hover:bg-slate-100 hover:text-black "> <a href="{{ route('login') }}" >Log in</a></button>
                        @if (Route::has('register'))
                  
                        <button class="border-solid border-2 border-white rounded text-white w-24 mx-2 h-8 hover:bg-slate-100 hover:text-black "> <a href="{{ route('register') }}" >Register</a></button>
                    </div>
                        @endif
                    @endauth
  
            @endif
            </div>
      
        </header>
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
       
        @yield('content')
       
        </div>

    </body>
    <footer >
        <div class="flex items-center justify-around text-white bg-zinc-900 min-w-full max-w-max dark:bg-gray-800 h-24 min-h-10">
            <h1>by Paredes Paulina</h1>
            <p> Blog personal Materia Web Avanzada</p>
            <h2> Fai UNCO </h2>
            <h3> 2024 </h3>
        </div>
    </footer>
</html>