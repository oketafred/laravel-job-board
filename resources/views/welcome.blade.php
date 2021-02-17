<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <div class="min-h-screen bg-gray-100">
            <div style="background-color: rgb(248, 250, 252); background-image: url(&quot;/images/bg.svg&quot;); background-size: cover;">
                <div class="flex justify-center pt-16 md:pt-3">
                    <a href="https://larajobs.com" style="height: 40px;">
                        <img src="/images/logo.svg" style="height: 40px;">
                    </a>
                </div> <div class="pb-5 border-b">
                    <p class="text-gray-800 text-5xl font-bold text-center leading-tight mt-4 mb-4 mx-4">The ugandan tech job board</p> 
                    <p class="text-xl text-gray-600 text-center mb-6 mx-2">Since 2020, the #1 Ugandan Tech job board connecting the best jobs with top talent.</p> 
                    <div class="flex justify-center items-center flex-wrap">
                        <img src="{{ asset('images/akorion.png') }}" class=" w-36 mx-3 mb-2 md:mb-0"> 
                        <img src="{{ asset('images/innovation_village.png') }}" class=" w-36 mx-3 mb-2 md:mb-0"> 
                        <img src="{{ asset('images/andela.png') }}" class=" w-36 mx-3 mb-2 md:mb-0"> 
                        <img src="{{ asset('images/flt.png') }}" class=" w-36 mx-3 mb-2 md:mb-0"> 
                        <img src="{{ asset('images/fundibots.png') }}" class=" w-36 mx-3 mb-2 md:mb-0"> 
                    </div>
                </div>
            </div>

            {{-- @include('layouts.navigation') --}}

            <main>
                <div class="mx-auto py-6 sm:px-6 lg:px-8">
                  <!-- Replace with your content -->
                  <div class="px-4 py-6 sm:px-0">
                    <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div>
                  </div>
                  <div class="px-4 py-6 sm:px-0">
                    <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div>
                  </div>
                  <div class="px-4 py-6 sm:px-0">
                    <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div>
                  </div>
                  <div class="px-4 py-6 sm:px-0">
                    <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div>
                  </div>
                  <div class="px-4 py-6 sm:px-0">
                    <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div>
                  </div>
                  <!-- /End replace -->
                </div>
            </main>
        </div>
    </body>
</html>
