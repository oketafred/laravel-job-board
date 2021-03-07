<template>
  <div>
    <main class="container mx-auto px-4 mt-8">
      <div class="mx-auto">
        <h2 class="px-3 mb-4 text-xl font-bold">Latest Jobs</h2>
        <div class="bg-white" v-for="job in jobs" :key="job.index">
          <a
            href="#"
            class="job-link border-b border-gray-300 py-2 px-3 w-full flex flex-wrap justify-between hover:bg-gray-200"
          >
            <div class="flex flex-no-wrap w-full md:w-3/4 flex-col md:flex-row">
              <div class="flex md:w-1/2">
                <img
                  width="100"
                  height="100"
                  src="images/flt.png"
                  class="rounded mr-4 self-start"
                />
                <div class="job-wrap">
                  <div class="details">
                    <div
                      class="description text-lg font-bold"
                      style="color: rgb(45, 55, 72)"
                    >
                      {{ job.title }}
                    </div>
                    <h4 class="text-sm" style="color: rgb(45, 55, 72)">
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
                <div
                  class="border text-gray-700 border-gray-400 px-2 py-0 mr-1 rounded self-center whitespace-no-wrap my-1"
                  style="color: rgb(45, 55, 72)"
                >
                  Laravel
                </div>
                <div
                  class="border text-gray-700 border-gray-400 px-2 py-0 mr-1 rounded self-center whitespace-no-wrap my-1"
                  style="color: rgb(45, 55, 72)"
                >
                  Backend
                </div>
                <div
                  class="border text-gray-700 border-gray-400 px-2 py-0 mr-1 rounded self-center whitespace-no-wrap my-1"
                  style="color: rgb(45, 55, 72)"
                >
                  Fullstack
                </div>
                <div
                  class="border text-gray-700 border-gray-400 px-2 py-0 mr-1 rounded self-center whitespace-no-wrap my-1"
                  style="color: rgb(45, 55, 72)"
                >
                  Full Time
                </div>
                <div
                  class="border text-gray-700 border-gray-400 px-2 py-0 mr-1 rounded self-center whitespace-no-wrap my-1"
                  style="color: rgb(45, 55, 72)"
                >
                  Vue JS
                </div>
              </div>
            </div>
            <div class="flex justify-end">
              <div class="flex items-center mr-4">
                <img src="/img/thumbtack.svg" style="height: 20px" />
              </div>
              <div
                class="flex items-center mr-4"
                style="color: rgb(45, 55, 72)"
              >
                1d
              </div>
              <div class="hidden md:flex items-center">
                <div
                  class="apply-button invisible mr-3 px-4 py-2 rounded-sm bg-red-500 text-white hover:bg-white hover:text-accent whitespace-no-wrap"
                >
                  Apply
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
export default {
  name: "JobListings",
  data() {
    return {
      jobs: [
        {
          title: "Software Engineer",
          location: "Kampala",
        },
        {
          title: "Senior Software Engineer",
          location: "Entebbe",
        },
        {
          title: "Backend Engineer",
          location: "Jinja",
        },
      ],
    };
  },
};
</script>

<style>
</style>