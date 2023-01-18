@extends('dashboard.layouts.main')

@section('content')
      <div class="pt-20 pb-4 px-9">
            <div class="w-full xl:pl-64 lg:pl-52 lg:flex lg:flex-wrap">
                  <div class="w-full p-4">
                        <h1 class="text-xl font-semibold text-center text-hitam md:text-2xl">{{ $blog->title }}</h1>
                        @if ($blog->image)
                        <div class="w-full overflow-hidden">
                              <div class="w-full mx-auto md:w-1/2 ">
                                    <img src="{{ asset('storage/' . $blog->image) }}" class="w-full my-4 rounded-md" alt="{{ $blog->title }}">
                              </div>
                        </div>
                        @else
                        <div class="w-full overflow-hidden">
                              <div class="w-full mx-auto md:w-1/2 ">
                                    <img src="https://source.unsplash.com/900x450/?{{ $blog->category->name }}" class="w-full my-4 rounded-md" alt="{{ $blog->title }}">
                              </div>
                        </div>
                        @endif
                        <div class="flex flex-wrap w-full">
                              {{-- back to blogs --}}
                              <a href="/dashboard/blog">
                                    <button class="py-1 px-2 m-0.5 lg:my-0 rounded-md bg-blue-500">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 16.811c0 .864-.933 1.405-1.683.977l-7.108-4.062a1.125 1.125 0 010-1.953l7.108-4.062A1.125 1.125 0 0121 8.688v8.123zM11.25 16.811c0 .864-.933 1.405-1.683.977l-7.108-4.062a1.125 1.125 0 010-1.953L9.567 7.71a1.125 1.125 0 011.683.977v8.123z" />
                                          </svg>                                        
                                    </button>
                              </a>
                              {{-- edit --}}
                              <a href="/dashboard/blog/{{ $blog->slug }}/edit">
                                    <button class="py-1 px-2 m-0.5 lg:my-0 rounded-md bg-yellow-500">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                          </svg>                                          
                                    </button>
                              </a>
                              {{-- delete --}}
                              <form action="/dashboard/blog/{{ $blog->slug }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="py-1 px-2 m-0.5 lg:my-0 rounded-md bg-red-500">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                          </svg>                                  
                                    </button>
                              </form>
                        </div>
                        <div class="flex items-center">
                              <a href="/blogs?category={{ $blog->category->name }}" class="mr-2 text-sm text-hitam md:text-md">Category : {{ $blog->category->name }}</a>
                              <p class="text-xs text-hitam opacity-70 lg:text-sm">{{ $blog->created_at->diffForHumans() }}</p>
                        </div>
                        <p class="text-sm text-justify text-slate-500 lg:text-md">{!! $blog->body !!}</p>
                  </div>
            </div>
      </div>
@endsection