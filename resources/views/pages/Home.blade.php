@extends('layout.app')
@section('home')
    <section class="bg-white dark:text-gray-100">
        <div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-evenly items-center">
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <img src="https://scontent.fdac80-1.fna.fbcdn.net/v/t1.6435-9/190337726_2940118076256394_6838407662249455851_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=7a1959&_nc_ohc=xh7JZ1HAiS8AX8nBlF5&_nc_ht=scontent.fdac80-1.fna&oh=00_AfBuRMzcDVZTkt0l1P2VKzbtB7OxEhiD2u9a2YMdHObrsA&oe=65894D39" alt="" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
            </div>
            <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
                <h1 class="text-5xl font-bold leadi sm:text-6xl text-slate-700">Hi, I'm <br>
                    <span class="text-violet-700">Anik</span> Majumder
                </h1>
                <p class="mt-6 mb-8 text-lg sm:mb-12 text-slate-400">Php web devoloper and graphic designer
                    <br class="hidden md:inline lg:hidden">Who turns your dreams into reality.
                </p>
                <div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                    <a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold rounded dark:bg-violet-700 dark:text-white hover:bg-transparent hover:text-violet-700 border border-violet-700">Download CV</a>
                </div>
            </div>
        </div>
    </section>
@endsection