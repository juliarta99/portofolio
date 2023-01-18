@extends('layouts.main')

@section('content')    
    <div class="pt-5 pb-16 px-9">
            <div class="w-full lg:text-center lg:mb-6">
                @if (request('category'))
                    <h1 data-aos="fade-up" class="text-2xl font-bold text-hitam lg:text-3xl xl:text-4xl dark:text-white">Blog Category {{ $blogs[0]->category->name }}</h1>
                @else
                    <h1 data-aos="fade-up" class="text-2xl font-bold text-hitam lg:text-3xl xl:text-4xl dark:text-slate-100">Blog</h1>
                @endif
                <p data-aos="fade-up" class="text-sm text-slate-500 md:text-md mt-1 dark:text-slate-300">Blog Terbaru</p>
            </div>
            <div class="w-full mb-4">
                <form action="/blogs" data-aos="fade-up" class="flex lg:justify-center">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <input type="text" name="search" placeholder="Search...." value="{{ request('search') }}" class="w-2/3 px-3 py-1 border-2 outline-none shadow-sm rounded-l-md dark:bg-slate-600 dark:border-gray-500 dark:text-white">
                    <button type="submit" class="px-2 py-1 bg-primary text-hitam rounded-r-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                          </svg>
                          
                    </button>
                </form>
            </div>
            {{-- last blog --}}
            @if ($blogs->count())    
            <div class="flex flex-col w-full mb-4 md:px-5 lg:px-10 xl:px-20 lg:text-center">
                <div class="relative w-full lg:text-start">
                    <a data-aos="fade-left" data-aos-delay="500" href="/blogs?category={{ $blogs[0]->category->slug }}" class="absolute px-2 py-1 z-[999] text-sm text-white bg-opacity-90 bg-hitam dark:text-hitam dark:bg-slate-200 md:text-md"> {{ $blogs[0]->category->name }}</a>
                    @if ($blogs[0]->image)
                        <img data-aos="zoom-in-up" src="{{ asset('storage/' . $blogs[0]->image ) }}" class="w-full" alt="{{ $blogs[0]->title }}">
                    @else
                        <img data-aos="zoom-in-up" src="https://source.unsplash.com/900x250/?{{ $blogs[0]->category->name }}" class="w-full hidden md:block" alt="{{ $blogs[0]->title }}">
                        <img data-aos="zoom-in-up" src="https://source.unsplash.com/900x400/?{{ $blogs[0]->category->name }}" class="w-full md:hidden" alt="{{ $blogs[0]->title }}">
                    @endif
                </div>
                <a data-aos-delay="500" data-aos="fade-up" href="/blog/{{ $blogs[0]->slug }}" class="text-lg font-semibold text-hitam lg:text-xl dark:text-slate-100">{{ $blogs[0]->title }}</a>
                <p data-aos-delay="1000" data-aos="fade-up" class=" dark:text-slate-400 text-xs text-hitam opacity-70 lg:text-sm">{{ $blogs[0]->created_at->diffForHumans() }}</p>
                <p data-aos-delay="1500" data-aos="fade-up" class="text-sm dark:text-slate-300 text-slate-500 md:text-md">{{ $blogs[0]->excerpt }}</p>
                <a data-aos-delay="2000" data-aos="fade-up" href="/blog/{{ $blogs[0]->slug }}" class="text-sm text-primary md:text-md">Read more</a>
            </div>
        @endif
        {{-- more blog --}}
        <div class="flex flex-wrap w-full">
            @foreach ($blogs->skip(1) as $blog)    
                <div class="w-full md:w-1/2 md:p-6 lg:w-1/3">
                    <div class="w-full py-4">
                        <div class="relative w-full">
                            <a data-aos="fade-left" href="/blogs?category={{ $blog->category->slug }}" class="absolute px-2 py-1 text-sm text-white z-[999] bg-opacity-90 dark:text-hitam dark:bg-slate-200 bg-hitam md:text-md"> {{ $blog->category->name }}</a>
                            @if ($blog->image)
                                <img data-aos="zoom-in-up" src="{{ asset('storage/' . $blog->image ) }}" class="w-full" alt="{{ $blog->title }}">
                            @else
                                <img data-aos="zoom-in-up" src="https://source.unsplash.com/900x400/?{{ $blog->category->name }}" class="w-full" alt="{{ $blog->title }}">
                            @endif
                        </div>
                        <a data-aos-delay="500" data-aos="fade-up" href="/blog/{{ $blog->slug }}" class="text-lg font-semibold text-hitam lg:text-xl dark:text-slate-100">{{ $blog->title }}</a>
                        <p data-aos-delay="1000" data-aos="fade-up" class=" dark:text-slate-400 text-xs text-hitam opacity-70 lg:text-sm">{{ $blog->created_at->diffForHumans() }}</p>
                        <p data-aos-delay="1500" data-aos="fade-up" class=" dark:text-slate-300 text-sm text-slate-500 md:text-md">{{ $blog->excerpt }}</p>
                        <a data-aos-delay="2000" data-aos="fade-up" href="/blog/{{ $blog->slug }}" class="text-sm text-primary md:text-md">Read more</a>
                    </div>
                </div>
            @endforeach
        </div>

            {{ $blogs->links('vendor.pagination.tailwind') }}
        
        </div>
    </div>
@endsection