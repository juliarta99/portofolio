@extends('layouts.main')

@section('content')
      <div class="pb-4 px-9">
            <div class="w-full lg:flex lg:flex-wrap">
                  <div class="w-full p-4">
                        <h1 class="text-xl font-semibold text-center text-hitam dark:text-white md:text-2xl">{{ $project->name }}</h1>
                        <div class="w-full overflow-hidden">
                              <div class="w-full mx-auto md:w-1/2 ">
                                    @if ($project->image)
                                          <img src="{{ asset('storage/' . $project->image) }}" class="w-full my-4 rounded-md" alt="{{ $project->name }}">
                                    @else
                                    
                                    <img src="https://source.unsplash.com/900x450/?{{ $project->name }}" class="w-full my-4 rounded-md" alt="{{ $project->name }}">
                                    @endif
                              </div>
                        </div>
                        <p class="mb-2 text-sm text-justify text-slate-500 lg:text-md dark:text-slate-300">{!! $project->deskripsi !!}</p>
                        <h3 class="mb-1 font-semibold text-md lg:text-lg text-hitam dark:text-slate-100">Bahasa Pemrograman yang digunakan :</h3>
                        <div class="flex items-center">
                              @foreach ($project->pemrogramans()->get() as $pemrograman)
                              <a href="/projects?pemrogramans={{ $pemrograman->name }}" class="px-2 py-1 mr-2 text-sm font-semibold rounded-md text-hitam md:text-md bg-primary ">{{ $pemrograman->name }}</a>
                              @endforeach
                        </div>
                  </div>
            </div>
      </div>
@endsection
      {{-- <script src="https://unpkg.com/flowbite@1.6.1/dist/flowbite.min.js"></script> --}}
      {{-- <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                 <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://source.unsplash.com/900x600/?flower" class="absolute bg-cover block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://source.unsplash.com/900x600/" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 bg-hitam focus:bg-primary rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 bg-hitam focus:bg-primary rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-primary dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white group-focus:text-primary sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-primary dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white group-focus:text-primary sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </span>
            </button>
        </div> --}}