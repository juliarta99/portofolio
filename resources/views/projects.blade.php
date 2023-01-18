@extends('layouts.main')

@section('content')
    <div class="pt-10 pb-16 px-9">
        <div class="w-full">
            <h1 data-aos="fade-down" class="text-2xl font-bold text-hitam lg:text-3xl xl:text-4xl dark:text-white">Project</h1>
            <p data-aos="fade-up" class="text-sm text-slate-500 lg:text-md dark:text-slate-300">Project Terbaru</p>
        </div>
        <div class="flex flex-wrap">
            @foreach ($projects as $project)
                <div class="w-full p-4 duration-500 md:w-1/2 lg:w-1/3 gruop hover:scale-95">
                    <div class="pb-5 overflow-hidden rounded-md shadow-md bg-slate-100 dark:bg-hitam">
                        @if ($project->image)
                            <img data-aos="zoom-in-up" src="{{ asset('storage/' . $project->image) }}" class="w-full mb-1 duration-500 rounded-t-md hover:scale-110 hover:mb-3" alt="{{ $project->name }}">
                        @else
                            <img data-aos="zoom-in-up" src="{{ asset('img/jays.png') }}" class="w-full mb-1 duration-500 rounded-t-md hover:scale-110 hover:mb-3" alt="{{ $project->name }}">
                        @endif
                        <h1 data-aos="fade-up" class="mb-2 text-xl font-semibold text-center text-hitam dark:text-slate-300">
                            <a href="/project/{{ $project->slug }}">{{ $project->name }}</a>
                        </h1>
                        <div class="flex flex-wrap justify-center gap-1 mb-4 w-ful">
                        @foreach ($project->pemrogramans as $pemrograman)
                        <a href="/projects?pemrogramans={{ $pemrograman->slug }}">
                            <div data-aos="fade-up" class="px-2 py-1 text-xs font-semibold rounded-md bg-primary text-hitam md:text-md">{{ $pemrograman->name }}</div>
                        </a>    
                        @endforeach
                        </div>
                        <div class="flex flex-wrap justify-center w-full" data-aos="fade-up" data-aos-delay="500">
                            <a href="{{ $project->github }}" class="mr-2 opacity-60 hover:opacity-100">
                                <svg role="img" viewBox="0 0 24 24" class="w-6 h-6 dark:fill-white" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>                                                                  
                            </a>
                            @if ($project->link != null)    
                                <a href="{{ $project->link }}" target="_blank" class="opacity-60 hover:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" class="w-6 h-6 dark:fill-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>                                                                   
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        {{ $projects->links('vendor.pagination.tailwind') }}

    </div>
@endsection