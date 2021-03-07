<template>
  <div>
    <nav class="bg-gray-800">
      <!-- Primary Navigation Menu -->
      <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <!-- Logo -->
            <div class="flex-shrink-0">
              <router-link to="/">
                <img
                  class="h-8 w-8"
                  src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                  alt="Workflow"
                />
              </router-link>
            </div>
          </div>
          <!-- Settings Dropdown -->
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <router-link
                to="/register"
                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-700 hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >Register</router-link
              >
              <router-link
                to="/login"
                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >Login</router-link
              >
            </div>
          </div>
          <!-- Hamburger -->
          <div class="-mr-2 flex items-center sm:hidden">
            <button
              class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
            >
              <svg
                class="h-6 w-6"
                stroke="currentColor"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  class="inline-flex"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"
                />
                <path
                  class="hidden"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>
      <!-- Responsive Navigation Menu -->
      <div class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
          <a
            class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out"
            href="dashboard"
          >
            Dashboard
          </a>
        </div>
        <!-- Responsive Settings Options -->
      </div>
    </nav>
    <div
      style="
        background-color: rgb(248, 250, 252);
        background-image: url('/images/bg.svg');
        background-size: cover;
      "
    >
      <div class="pb-5 border-b">
        <p
          class="text-gray-800 text-5xl font-bold text-center leading-tight mt-4 mb-4 mx-4"
        >
          The ugandan tech job board
        </p>
        <p class="text-xl text-gray-600 text-center mb-6 mx-2">
          Since 2020, the #1 Ugandan Tech job board connecting the best jobs
          with top talent.
        </p>
        <div class="flex justify-center items-center flex-wrap">
          <img src="images/akorion.png" class="w-36 mx-3 mb-2 md:mb-0" />
          <img
            src="images/innovation_village.png"
            class="w-36 mx-3 mb-2 md:mb-0"
          />
          <img src="images/andela.png" class="w-36 mx-3 mb-2 md:mb-0" />
          <img src="images/flt.png" class="w-36 mx-3 mb-2 md:mb-0" />
          <img src="images/fundibots.png" class="w-36 mx-3 mb-2 md:mb-0" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>