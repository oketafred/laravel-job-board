<x-app-layout>
  <x-slot name="header">
      <h1 class="text-3xl font-bold leading-tight text-gray-900">
        {{ __('Listings') }}
      </h1>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <h2>Create a Listing</h2> 
      <form action="{{ route('listings.store') }}" method="POST">
        @csrf
        <div class="mt-4">
          <x-label for="title" :value="__('Job Title')" />
          <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required />
        </div>
        <div class="mt-4">
          <x-label for="location" :value="__('Location')" />
          <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required />
        </div>
        <div class="mt-4">
          <x-label for="salary" :value="__('Salary Range')" />
          <x-input id="salary" class="block mt-1 w-full" type="text" name="salary" :value="old('salary')" required />
        </div>
        <div class="mt-4">
          <x-label for="description" :value="__('Job Description')" />
          <x-textarea id="description" class="block mt-1 w-full" name="description" :value="old('description')" required />
        </div>


        <div class="mt-4">
          <x-label for="apply_link" :value="__('Application Link')" />
          <x-input id="apply_link" class="block mt-1 w-full" type="text" name="apply_link" :value="old('apply_link')" required />
        </div>

        <div class="mt-4">
          <label for="is_active" :value="__('Active?')" class="inline-flex items-center mt-3">
            <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" name="is_active" value="1">
            <span class="ml-2 text-gray-700">Active ?</span>
          </label>
        </div>

        <x-button class="mt-4">Save Listing</x-button>
      </form>
    </div>
  </div>
</x-app-layout>
