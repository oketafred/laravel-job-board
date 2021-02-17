<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold leading-tight text-gray-900">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}

    <main>
        <div class="mx-auto py-6 sm:px-6 lg:px-8">
          <!-- Replace with your content -->
          <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div>
          </div>
          <!-- /End replace -->
        </div>
    </main>

</x-app-layout>
