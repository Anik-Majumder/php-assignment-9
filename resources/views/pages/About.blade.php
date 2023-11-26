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
              href="#"
              class="mt-8 inline-block rounded border border-indigo-600 bg-violet-700 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
            >
              Get in Touch
            </a>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
