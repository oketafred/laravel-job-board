<template>
  <div>
    <div class="container mx-auto px-4 mt-8">
      <form action="#" method="POST">
        <div
          class="flex justify-between items-center flex-wrap md:flex-no-wrap bg-gray-500 mb-8 rounded py-3 px-3"
        >
          <div class="flex-grow flex justify-end flex-col md:flex-row">
            <div
              class="md:px-2 md:self-center font-bold mb-1 md:mb-0 text-gray-200"
            >
              Get an email of all new jobs
            </div>
            <input
              type="text"
              name="email"
              placeholder="Your email address"
              class="px-4 py-2 rounded-sm md:mr-2 flex-grow focus:outline-none focus:shadow-outline mb-2 md:mb-0"
            />
            <button
              type="submit"
              class="px-4 py-2 rounded-sm bg-red-500 text-white hover:bg-red-400 hover:text-white"
            >
              Subscribe
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>