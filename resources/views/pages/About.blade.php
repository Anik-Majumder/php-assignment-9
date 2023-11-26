@extends('layout.app')
@section('about')
<section>
    <div class="mx-auto max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:h-screen lg:grid-cols-2">
        <div class="relative z-10 lg:py-16">
          <div class="relative h-64 sm:h-80 lg:h-full">
            <img
              alt="Man"
              src="https://scontent.fdac80-1.fna.fbcdn.net/v/t39.30808-6/329113184_843461263418577_2953525646781900149_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=9r1qBI732MEAX-WMr46&_nc_ht=scontent.fdac80-1.fna&oh=00_AfDwqESr3YvWP6ia9tNKHGS34xQ_pRI7-DSD9ZmGTVcujg&oe=65672F5F"
              class="absolute inset-0 h-full w-full object-cover"
            />
          </div>
        </div>
  
      <div class="relative flex items-center bg-gray-100">
          <span
            class="hidden lg:absolute lg:inset-y-0 lg:-start-16 lg:block lg:w-16 lg:bg-gray-100"
          ></span>
  
          <div class="p-8 sm:p-16 lg:p-24">
            <h2 class="text-2xl font-bold sm:text-3xl">
                I'm a skilled PHP Laravel programmer with expertise in developing robust web applications.
            </h2>
  
            <p class="mt-4 text-gray-600">
                I am a proficient PHP Laravel developer, adept at crafting dynamic and scalable web solutions. I am a c.s.e student who is very passonable of designing and coding website. My expertise lies in delivering high-quality code and seamless user experiences, ensuring client satisfaction.
            </p>
  
            <a
              href="https://www.facebook.com/profile.php?id=100007746913816" target="blank"
              class="mt-8 inline-block rounded border border-indigo-600 bg-violet-700 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
            >
              Get in Touch
            </a>
          </div>
        </div>
      </div>
    </div>
</section>

{{-- work experience section --}}

<!-- component -->
<div class="flex items-center justify-center mb-20 bg-white">
  <section
    class="w-full p-6 rounded-lg max-w-2xl shadow-lg shadow-gray-300 bg-white"
  >
    <header class="flex items-center">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="mr-2 shrink-0 w-6 h-6 text-gray-500"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        stroke-width="2"
        stroke="currentColor"
        fill="none"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M4 19l16 0"></path>
        <path d="M4 15l4 -6l4 2l4 -5l4 4"></path>
      </svg>
      <h3 class="font-medium text-lg">Education & Work experience</h3>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="ml-2 shrink-0 w-6 h-6 text-gray-500"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        stroke-width="2"
        stroke="currentColor"
        fill="none"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
        <path d="M12 9h.01"></path>
        <path d="M11 12h1v4h1"></path>
      </svg>
    </header>
    <section class="py-4 grid grid-cols-2 gap-x-6">
      <div class="flex items-center py-3">
        <span
          class="w-8 h-8 shrink-0 mr-4 rounded-full bg-blue-50 flex items-center justify-center"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5 text-blue-500"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M13 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
            <path d="M7 21l3 -4"></path>
            <path d="M16 21l-2 -4l-3 -3l1 -6"></path>
            <path d="M6 12l2 -3l4 -1l3 3l3 1"></path>
          </svg>
        </span>
        <div class="space-y-3 flex-1">
          <div class="flex items-center">
            <h4
              class="font-medium text-sm mr-auto text-gray-700 flex items-center"
            >
              Work Experience
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="ml-2 shrink-0 w-5 h-5 text-gray-500"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                <path d="M12 9h.01"></path>
                <path d="M11 12h1v4h1"></path>
              </svg>
            </h4>
            <span class="px-2 py-1 rounded-lg bg-red-50 text-red-500 text-xs">
              8.2 / 10
            </span>
          </div>
          <div class="overflow-hidden bg-blue-50 h-1.5 rounded-full w-full">
            <span
              class="h-full bg-blue-500 w-full block rounded-full"
              style="width: 62%"
            ></span>
          </div>
        </div>
      </div>
      <div class="flex items-center py-3">
        <span
          class="w-8 h-8 shrink-0 mr-4 rounded-full bg-blue-50 flex items-center justify-center"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5 text-blue-500"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M13 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
            <path d="M7 21l3 -4"></path>
            <path d="M16 21l-2 -4l-3 -3l1 -6"></path>
            <path d="M6 12l2 -3l4 -1l3 3l3 1"></path>
          </svg>
        </span>
        <div class="space-y-3 flex-1">
          <div class="flex items-center">
            <h4
              class="font-medium text-sm mr-auto text-gray-700 flex items-center"
            >
              Job Experience
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="ml-2 shrink-0 w-5 h-5 text-gray-500"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                <path d="M12 9h.01"></path>
                <path d="M11 12h1v4h1"></path>
              </svg>
            </h4>
            <span class="px-2 py-1 rounded-lg bg-red-50 text-red-500 text-xs">
              8.5 / 10
            </span>
          </div>
          <div class="overflow-hidden bg-blue-50 h-1.5 rounded-full w-full">
            <span
              class="h-full bg-blue-500 w-full block rounded-full"
              style="width: 68%"
            ></span>
          </div>
        </div>
      </div>
      <div class="flex items-center py-3 border-t border-gray-100">
        <span
          class="w-8 h-8 shrink-0 mr-4 rounded-full bg-blue-50 flex items-center justify-center"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5 text-blue-500"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M3 21h18"></path>
            <path d="M19 21v-4"></path>
            <path
              d="M19 17a2 2 0 0 0 2 -2v-2a2 2 0 1 0 -4 0v2a2 2 0 0 0 2 2z"
            ></path>
            <path d="M14 21v-14a3 3 0 0 0 -3 -3h-4a3 3 0 0 0 -3 3v14"></path>
            <path d="M9 17v4"></path>
            <path d="M8 13h2"></path>
            <path d="M8 9h2"></path>
          </svg>
        </span>
        <div class="space-y-3 flex-1">
          <div class="flex items-center">
            <h4
              class="font-medium text-sm mr-auto text-gray-700 flex items-center"
            >
              School Grade
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="ml-2 shrink-0 w-5 h-5 text-gray-500"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                <path d="M12 9h.01"></path>
                <path d="M11 12h1v4h1"></path>
              </svg>
            </h4>
            <span
              class="px-2 py-1 rounded-lg bg-green-50 text-green-700 text-xs"
            >
              4.50 / 5.00
            </span>
          </div>
          <div class="overflow-hidden bg-blue-50 h-1.5 rounded-full w-full">
            <span
              class="h-full bg-blue-500 w-full block rounded-full"
              style="width: 73%"
            ></span>
          </div>
        </div>
      </div>
      <div class="flex items-center py-3 border-t border-gray-100">
        <span
          class="w-8 h-8 shrink-0 mr-4 rounded-full bg-blue-50 flex items-center justify-center"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5 text-blue-500"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path
              d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z"
            ></path>
            <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
          </svg>
        </span>
        <div class="space-y-3 flex-1">
          <div class="flex items-center">
            <h4
              class="font-medium text-sm mr-auto text-gray-700 flex items-center"
            >
              College Grade
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="ml-2 shrink-0 w-5 h-5 text-gray-500"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                <path d="M12 9h.01"></path>
                <path d="M11 12h1v4h1"></path>
              </svg>
            </h4>
            <span class="px-2 py-1 rounded-lg bg-red-50 text-red-500 text-xs">
              4.50 / 5.00
            </span>
          </div>
          <div class="overflow-hidden bg-blue-50 h-1.5 rounded-full w-full">
            <span
              class="h-full bg-blue-500 w-full block rounded-full"
              style="width: 64%"
            ></span>
          </div>
        </div>
      </div>
      <div class="flex items-center py-3 border-t border-gray-100">
        <span
          class="w-8 h-8 shrink-0 mr-4 rounded-full bg-blue-50 flex items-center justify-center"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h5- w-5 text-blue-500"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 13l-2 -2"></path>
            <path d="M12 12l2 -2"></path>
            <path d="M12 21v-13"></path>
            <path
              d="M9.824 16a3 3 0 0 1 -2.743 -3.69a3 3 0 0 1 .304 -4.833a3 3 0 0 1 4.615 -3.707a3 3 0 0 1 4.614 3.707a3 3 0 0 1 .305 4.833a3 3 0 0 1 -2.919 3.695h-4z"
            ></path>
          </svg>
        </span>
        <div class="space-y-3 flex-1">
          <div class="flex items-center">
            <h4
              class="font-medium text-sm mr-auto text-gray-700 flex items-center"
            >
              Univercity Grade
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="ml-2 shrink-0 w-5 h-5 text-gray-500"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                <path d="M12 9h.01"></path>
                <path d="M11 12h1v4h1"></path>
              </svg>
            </h4>
            <span
              class="px-2 py-1 rounded-lg bg-green-50 text-green-700 text-xs"
            >
              3.5 / 4
            </span>
          </div>
          <div class="overflow-hidden bg-blue-50 h-1.5 rounded-full w-full">
            <span
              class="h-full bg-blue-500 w-full block rounded-full"
              style="width: 80%"
            ></span>
          </div>
        </div>
      </div>
      <div class="flex items-center py-3 border-t border-gray-100">
        <span
          class="w-8 h-8 shrink-0 mr-4 rounded-full bg-blue-50 flex items-center justify-center"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5 text-blue-500"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M6 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
            <path d="M18 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
            <path
              d="M4 17h-2v-11a1 1 0 0 1 1 -1h14a5 7 0 0 1 5 7v5h-2m-4 0h-8"
            ></path>
            <path d="M16 5l1.5 7l4.5 0"></path>
            <path d="M2 10l15 0"></path>
            <path d="M7 5l0 5"></path>
            <path d="M12 5l0 5"></path>
          </svg>
        </span>
        <div class="space-y-3 flex-1">
          <div class="flex items-center">
            <h4
              class="font-medium text-sm mr-auto text-gray-700 flex items-center"
            >
              Successfull Job
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="ml-2 shrink-0 w-5 h-5 text-gray-500"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                <path d="M12 9h.01"></path>
                <path d="M11 12h1v4h1"></path>
              </svg>
            </h4>
            <span
              class="px-2 py-1 rounded-lg bg-green-50 text-green-700 text-xs"
            >
              862 / 900
            </span>
          </div>
          <div class="overflow-hidden bg-blue-50 h-1.5 rounded-full w-full">
            <span
              class="h-full bg-blue-500 w-full block rounded-full"
              style="width: 87%"
            ></span>
          </div>
        </div>
      </div>
    </section>
    <footer class="border-t border-gray-100 pt-4">
      <p class="text-sm text-gray-500 text-center">
        <span class="font-bold">Anik</span> Majumder
      </p>
    </footer>
  </section>
</div>
@endsection
