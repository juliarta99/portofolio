@extends('dashboard.layouts.main')

@section('content')
      <div class="pt-20 pb-4 px-9">
            <div class="w-full xl:pl-64 lg:pl-52">
                  <form action="/dashboard/project/pemrograman" method="post" enctype="multipart/form-data" class="flex flex-col w-full mx-auto lg:w-full md:2/3">
                        @csrf
                        <h1 class="mb-5 text-lg font-semibold text-center text-hitam lg:text-2xl md:text-xl">Create Bahasa Pemrograman</h1>
                        {{-- project --}}
                        <input type="hidden" name="project" value="{{ $project->id }}">

                        <h3 class="text-hitam text-md lg:text-lg xl:text-xl font-bold mb-2">Bahasa Pemrograman</h3>
                        <div class="flex flex-wrap">
                              @foreach ($pemrogramans as $pemrograman) 
                              <div class="w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5">
                                    <label class="mb-1 text-sm font-medium text-hitam lg:text-md" for="pemrograman">{{ $pemrograman->name }}</label>
                                    <input type="checkbox" name="pemrograman[]" class="mb-3 bg-slate-100 rounded-md" value="{{ $pemrograman->id }}" id="pemrograman" placeholder="pemrograman">
                              </div> 
                              @endforeach
                        </div>
                        {{-- button --}}
                        <button type="submit" class="w-1/4 px-2 py-1 text-sm font-medium bg-blue-500 rounded-md lg:p-2 md:text-md text-hitam md:w-1/5 lg:w-1/6">Create</button>
                  </form>
            </div>
      </div>
@endsection