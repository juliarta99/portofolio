@extends('layouts.main')

@section('content')    
    {{-- home --}}
    <div class="pt-5 pb-16 px-9" id="top">
        <div class="flex flex-wrap">
            <div class="self-center w-full mb-10 lg:w-1/2">
                <h1 class="text-2xl font-bold text-hitam md:text-3xl lg:text-4xl xl:text-5xl dark:text-white">Hello <span class="text-primary">I'm</span> Juliarta</h1>
                <h2 class="text-lg font-semibold text-slate-600 lg:text-xl xl:text-3xl dark:text-slate-300">Web Developer</h2>
                <p class="mb-5 text-sm lg:text-md text-slate-500 dark:text-slate-400">"Kita tidak akan pernah tau hasilnya sebelum kita mencoba"</p>
                <a href="/cv" class="px-3 py-2 text-white duration-300 rounded-md text-md bg-primary dark:hover:bg-black hover:bg-white hover:text-primary hover:border-primary hover:border-2 dark:hover:text-slate-300">Download CV</a>
            </div>
            <div class="relative self-end w-full px-4 mb-10 overflow-hidden lg:w-1/2 group">
                <img src="{{ asset('img/juliarta.png') }}" alt="Juliarta" class="max-w-full mx-auto md:w-3/5 lg:w-full">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="absolute max-w-full md:translate-x-28 md:translate-y-8 lg:translate-x-0 md:group-hover:translate-x-20 md:group-hover:translate-y-4  lg:translate-y-0 md:w-3/5 lg:w-full -z-[9] top-0 group-hover:-translate-x-5 group-hover:-translate-y-5 lg:group-hover:-translate-x-5 lg:group-hover:-translate-y-5 ease-in-out duration-500">
                    <path fill="#f87171" d="M23.5,-41.8C33.8,-34.7,47.8,-35.2,58.9,-29.5C70,-23.8,78.2,-11.9,81.2,1.7C84.2,15.4,82.1,30.8,71.6,37.5C61.1,44.3,42.3,42.4,28.9,49.9C15.6,57.3,7.8,74,-2.6,78.6C-13.1,83.2,-26.2,75.6,-35.1,65.6C-44,55.6,-48.7,43.3,-52.7,31.9C-56.7,20.6,-59.8,10.3,-62,-1.2C-64.1,-12.7,-65.1,-25.5,-60.5,-35.6C-55.8,-45.8,-45.5,-53.4,-34.5,-60C-23.5,-66.6,-11.7,-72.2,-2.6,-67.7C6.6,-63.3,13.2,-48.8,23.5,-41.8Z" transform="translate(100 100)" />
                </svg>
            </div>
        </div>
    </div>
    {{-- about --}}   
    <div class="py-10 px-9 bg-slate-100 dark:bg-hitam">
        <div class="flex flex-wrap">
            <div class="w-full mb-10 lg:w-1/2">
                <h1 data-aos="fade-down" class="text-3xl font-bold text-hitam lg:text-4xl dark:text-white">About</h1>
                <p data-aos="fade-up" class="text-sm text-justify text-slate-500 lg:text-md dark:text-slate-300">Halo 👋 Saya Juliarta. Saya adalah siswa di salah satu Sekolah Kejuruan di Bali, yaitu SMK NEGERI 1 DENPASAR. Saya mengambil jurusan Rekayasa Perangkat Lunak(RPL). Saya mengambil jurasan ini awalnya karena memiliki minat di bidang IT dan pada akhirnya saya memilih jurusan RPL, setelah saya mengenal lebih jauh tentang IT dan RPL saya mulai memiliki minat lebih di bidang Web Developer. Saat ini saya baru mempelajari HTML, CSS, Javascript, PHP, Tailwind, Laravel dan mungkin masih banyak yang harus saya pelajari.</p>
            </div>
            <div class="w-full lg:w-1/2 lg:px-9">
                <h3 data-aos="fade-down" class="text-xl font-semibold text-hitam lg:text-2xl dark:text-white">Hubungi Saya</h3>
                <p data-aos="fade-up" class="text-sm text-slate-500 lg:text-md dark:text-slate-300">Klik icon social media yang ingin anda hubungi</p>
                <div class="flex flex-wrap py-2">
                    <a href="https://github.com/juliarta99" data-aos="zoom-in-up">
                        <svg role="img" viewBox="0 0 24 24" class="w-6 h-6 mr-3 dark:fill-white opacity-60" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                    <a href="https://wa.me/+6289605880609?text=Halo%20Juli%0ASaya%20membutuhkan%20service%20anda" data-aos="zoom-in-up">
                        <svg role="img" viewBox="0 0 24 24" class="w-6 h-6 mr-3 dark:fill-white opacity-60" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/n.juliarta" data-aos="zoom-in-up">
                        <svg role="img" viewBox="0 0 24 24" class="w-6 h-6 mr-3 dark:fill-white opacity-60" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/si-ngurah-putu-juliarta-5a6359262" data-aos="zoom-in-up">
                        <svg role="img" viewBox="0 0 24 24" class="w-6 h-6 mr-3 dark:fill-white opacity-60" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- project --}}
    <div class="py-10 px-9">
        <div class="w-full">
            <h1 data-aos="fade-down" class="text-2xl font-bold text-hitam lg:text-3xl xl:text-4xl dark:text-white">Project</h1>
            <p data-aos="fade-up" class="text-sm text-slate-500 lg:text-md dark:text-slate-300">Project Terbaru</p>
        </div>
        <div class="flex flex-wrap">
            @foreach ($projects as $project)
                <div class="w-full p-4 duration-500 md:w-1/2 lg:w-1/3 gruop hover:scale-95">
                    <title>{{ $project->name }}</title>
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
                                <div data-aos="fade-up" data-aos-delay="500" class="px-2 py-1 text-xs font-semibold rounded-md bg-primary text-hitam md:text-md">{{ $pemrograman->name }}</div>
                            @endforeach
                        </div>
                        <div data-aos="fade-up" data-aos-delay="1000" class="flex flex-wrap justify-center w-full">
                            <<a href="{{ $project->github }}" class="mr-2 opacity-60 hover:opacity-100">
                                <svg role="img" viewBox="0 0 24 24" class="w-6 h-6 dark:fill-white" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>                                                                  
                            </a>
                            @if ($project->link != null)    
                                <a href="{{ $project->link }}" class="opacity-60 hover:opacity-100">
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
        <div class="w-full px-4 mt-4 md:text-center">
            <a href="/projects" data-aos="fade-up" class="px-3 py-2 text-sm text-white duration-500 rounded-md bg-primary group hover:bg-white hover:border-2 hover:border-primary hover:text-primary md:text-md dark:hover:text-slate-300 dark:hover:bg-black">Selengkapnya</a>
        </div>
    </div>
    {{-- blogs --}}
    <div class="pt-10 pb-16 px-9">
            <div class="w-full mb-4 lg:text-center lg:mb-6">
                <h1 data-aos="fade-down" class="text-2xl font-bold text-hitam lg:text-3xl xl:text-4xl dark:text-white">Blog</h1>
                <p data-aos="fade-up" class="text-sm text-slate-500 md:text-md dark:text-slate-300">Blog Terbaru</p>
            </div>
            {{-- last blog --}}
            @if ($blogs->count())    
                <div class="flex flex-col w-full mb-4 md:px-5 lg:px-10 xl:px-20 lg:text-center">
                    <div class="relative w-full lg:text-start">
                        <a data-aos="fade-left" data-aos-delay="500" href="/blogs?category={{ $blogs[0]->category->slug }}" class="absolute px-2 py-1 z-[9] text-sm text-white bg-opacity-90 bg-hitam dark:text-hitam dark:bg-slate-200 md:text-md"> {{ $blogs[0]->category->name }}</a>
                        @if ($blogs[0]->image)
                            <img data-aos="zoom-in-up" src="{{ asset('storage/' . $blogs[0]->image ) }}" class="w-full" alt="{{ $blogs[0]->title }}">
                        @else
                            <img data-aos="zoom-in-up" src="https://source.unsplash.com/900x250/?{{ $blogs[0]->category->name }}" class="hidden w-full md:block" alt="{{ $blogs[0]->title }}">
                            <img data-aos="zoom-in-up" src="https://source.unsplash.com/900x400/?{{ $blogs[0]->category->name }}" class="w-full md:hidden" alt="{{ $blogs[0]->title }}">
                        @endif
                    </div>
                    <a data-aos-delay="500" data-aos="fade-up" href="/blog/{{ $blogs[0]->slug }}" class="text-lg font-semibold text-hitam lg:text-xl dark:text-slate-100">{{ $blogs[0]->title }}</a>
                    <p data-aos-delay="1000" data-aos="fade-up" class="text-xs  dark:text-slate-400 text-hitam opacity-70 lg:text-sm">{{ $blogs[0]->created_at->diffForHumans() }}</p>
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
                                <a data-aos="fade-left" href="/blogs?category={{ $blog->category->slug }}" class="absolute px-2 py-1 text-sm text-white z-[9] bg-opacity-90 dark:text-hitam dark:bg-slate-200 bg-hitam md:text-md"> {{ $blog->category->name }}</a>
                                @if ($blog->image)
                                    <img data-aos="zoom-in-up" src="{{ asset('storage/' . $blog->image ) }}" class="w-full" alt="{{ $blog->title }}">
                                @else
                                    <img data-aos="zoom-in-up" src="https://source.unsplash.com/900x400/?{{ $blog->category->name }}" class="w-full" alt="{{ $blog->title }}">
                                @endif
                            </div>
                            <a data-aos-delay="500" data-aos="fade-up" href="/blog/{{ $blog->slug }}" class="text-lg font-semibold text-hitam lg:text-xl dark:text-slate-100">{{ $blog->title }}</a>
                            <p data-aos-delay="1000" data-aos="fade-up" class="text-xs  dark:text-slate-400 text-hitam opacity-70 lg:text-sm">{{ $blog->created_at->diffForHumans() }}</p>
                            <p data-aos-delay="1500" data-aos="fade-up" class="text-sm  dark:text-slate-300 text-slate-500 md:text-md">{{ $blog->excerpt }}</p>
                            <a data-aos-delay="2000" data-aos="fade-up" href="/blog/{{ $blog->slug }}" class="text-sm text-primary md:text-md">Read more</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="w-full md:text-center">
                <a data-aos="fade-up" href="/blogs" class="px-3 py-2 text-sm text-white duration-300 rounded-md bg-primary group hover:bg-white hover:border-2 hover:border-primary hover:text-primary md:text-md dark:hover:text-slate-300 dark:hover:bg-black">Selengkapnya</a>
            </div>
        </div>
    </div>
    {{-- kembali ke atas --}}
    <a href="#top">
        <div class="fixed hidden w-10 h-10 rounded-full shadow-md animate-bounce bottom-8 right-8 bg-primary" id="to-top">
            <span class="block w-4 h-4 mx-auto rotate-45 translate-y-4 border-t-2 border-l-2 dark:border-hitam border-l-white border-t-white"></span>
        </div>
    </a>
@endsection