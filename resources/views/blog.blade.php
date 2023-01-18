@extends('layouts.main')

@section('content')
      <div class="pt-10 pb-4 px-9">
            <div class="w-full lg:flex lg:flex-wrap">
                  <div class="w-full p-4">
                        <h1 data-aos="fade-down" class="dark:text-slate-100 text-xl font-semibold text-center lg:hidden text-hitam md:text-2xl">{{ $blog->title }}</h1>
                        @if ($blog->image)
                              <img data-aos="zoom-in-up" src="{{ asset('storage/' . $blog->image) }}" class="w-full my-4 rounded-md lg:float-left lg:mx-4 lg:w-1/2" alt="{{ $blog->title }}">
                        @else
                              <img data-aos="zoom-in-up" src="https://source.unsplash.com/900x450/?{{ $blog->category->name }}" class="w-full my-4 rounded-md lg:float-left lg:mx-4 lg:w-1/2" alt="{{ $blog->title }}">
                        @endif
                        <h1 data-aos="fade-up" class="dark:text-slate-100 hidden mb-3 text-3xl font-semibold text-center lg:block text-hitam">{{ $blog->title }}</h1>
                        <div class="flex items-center">
                              <a data-aos="fade-up" data-aos-delay="500" href="/blogs?category={{ $blog->category->name }}" class="mr-2 text-sm text-hitam md:text-md dark:text-slate-400">Category : {{ $blog->category->name }}</a>
                              <p data-aos="fade-up" data-aos-delay="1000" class="dark:text-slate-500 text-xs text-hitam opacity-70 lg:text-sm">{{ $blog->created_at->diffForHumans() }}</p>
                        </div>
                        <div class="flex" data-aos="fade-up" data-aos-delay="1500" >
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" class="dark:fill-white w-5 h-5 opacity-50 hover:opacity-100 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                              <p class="cursor-pointer ml-2 text-sm lg:text-md text-slate-500">{{ $blog->count }}</p>
                        </div>
                        <p data-aos="fade-up" data-aos-delay="1500" class=" dark:text-slate-300 text-sm text-justify text-slate-500 lg:text-md">{!! $blog->body !!}</p>
                  </div>
            </div>
      </div>
@endsection