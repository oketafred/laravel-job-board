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
        <div class="min-h-screen">
          @include('layouts.navigation')
            <div style="background-color: rgb(248, 250, 252); background-image: url(&quot;/images/bg.svg&quot;); background-size: cover;">
                <div class="pb-5 border-b">
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

            <div class="container mx-auto px-4 mt-8">
              <form action="/email/subscribe" method="POST">
                <div class="flex justify-between items-center flex-wrap md:flex-no-wrap bg-gray-500 mb-8 rounded py-3 px-3">
                  <div class="flex-grow flex justify-end flex-col md:flex-row">
                    <div class="md:px-2 md:self-center font-bold mb-1 md:mb-0 text-gray-200">Get an email of all new jobs</div> 
                    <input type="text" name="email" placeholder="Your email address" class="px-4 py-2 rounded-sm md:mr-2 flex-grow focus:outline-none focus:shadow-outline mb-2 md:mb-0"> 
                    <button type="submit" class="px-4 py-2 rounded-sm bg-red-500 text-white hover:bg-red-400 hover:text-white">Subscribe</button>
                  </div>
                </div>
              </form>
            </div>

            <main class="container mx-auto px-4 mt-8">
                <div class="mx-auto">
                  <h2 class="px-3 mb-4 text-xl font-bold">Latest Jobs</h2>
                  @for ($i = 0; $i < 20; $i++)
                    <div class="bg-white">
                      <a href="#" class="job-link border-b border-gray-300 py-2 px-3 w-full flex flex-wrap justify-between hover:bg-gray-200">
                        <div class="flex flex-no-wrap w-full md:w-3/4 flex-col md:flex-row">
                          <div class="flex md:w-1/2">
                          <img width="100" height="100" src="images/flt.png" class="rounded mr-4 self-start">
                          <div class="job-wrap">
                            <div class="details">
                              <div class="description text-lg font-bold" style="color: rgb(45, 55, 72);">Full Stack Engineer</div>
                              <h4 class="text-sm" style="color: rgb(45, 55, 72);">
                                      Enjin
                                  </h4>
                            </div>
                            <div class="text-xs text-gray-600">
                              <i class="fa fa-globe muted"></i>
                                                      Remote
                              
                            </div>
                          </div>
                        </div>
                            <div class="flex flex-wrap py-2">
                              <div class="border text-gray-700 border-gray-400 px-2 py-0 mr-1 rounded self-center whitespace-no-wrap my-1" style="color: rgb(45, 55, 72);">Laravel</div>
                              <div class="border text-gray-700 border-gray-400 px-2 py-0 mr-1 rounded self-center whitespace-no-wrap my-1" style="color: rgb(45, 55, 72);">Backend</div>
                              <div class="border text-gray-700 border-gray-400 px-2 py-0 mr-1 rounded self-center whitespace-no-wrap my-1" style="color: rgb(45, 55, 72);">Fullstack</div>
                              <div class="border text-gray-700 border-gray-400 px-2 py-0 mr-1 rounded self-center whitespace-no-wrap my-1" style="color: rgb(45, 55, 72);">Full Time</div>
                              <div class="border text-gray-700 border-gray-400 px-2 py-0 mr-1 rounded self-center whitespace-no-wrap my-1" style="color: rgb(45, 55, 72);">Vue JS</div>
                            </div>
                          </div>
                          <div class="flex justify-end">
                            <div class="flex items-center mr-4">
                          <img src="/img/thumbtack.svg" style="height: 20px;">
                          </div>
                          <div class="flex items-center mr-4" style="color: rgb(45, 55, 72);">
                                          1d
                                  </div>
                          <div class="hidden md:flex items-center">
                            <div class="apply-button invisible mr-3 px-4 py-2 rounded-sm bg-red-500 text-white hover:bg-white hover:text-accent whitespace-no-wrap">Apply</div>
                          </div>
                        </div>
                      </a>
                    </div>
                  @endfor
                </div>
            </main>
        </div>
    </body>
</html>
