@extends('dashboard.layouts.main')

@section('content')
      <div class="pt-20 pb-4 px-9">
            <div class="w-full xl:pl-64 lg:pl-52 lg:flex lg:flex-wrap">
                  <div class="w-full p-4">
                        <h1 class="text-xl font-semibold text-center text-hitam md:text-2xl">{{ $project->name }}</h1>
                        <div class="w-full overflow-hidden">
                              <div class="w-full mx-auto md:w-1/2 ">
                                    @if ($project->image)
                                          <img src="{{ asset('storage/' . $project->image) }}" class="w-full my-4 rounded-md" alt="{{ $project->name }}">
                                    @else
                                          <img src="https://source.unsplash.com/900x450/?{{ $project->name }}" class="w-full my-4 rounded-md" alt="{{ $project->name }}">
                                    @endif
                              </div>
                        </div>
                        <p class="mb-3 text-sm text-justify text-slate-500 lg:text-md">{!! $project->deskripsi !!}</p>
                        <h3 class="mb-1 font-semibold text-md lg:text-lg text-hitam">Bahasa Pemrograman yang digunakan :</h3>
                        <div class="flex items-center">
                              @foreach ($project->pemrogramans()->get() as $pemrograman)
                                    <a href="/project?pemrograman={{ $pemrograman->name }}" class="px-2 py-1 mr-2 text-sm font-semibold rounded-md text-hitam md:text-md bg-primary ">{{ $pemrograman->name }}</a>
                              @endforeach
                        </div>
                  </div>
            </div>
      </div>
@endsection