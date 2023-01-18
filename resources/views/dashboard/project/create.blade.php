@extends('dashboard.layouts.main')

@section('content')
      <div class="pt-20 pb-4 px-9">
            <div class="w-full xl:pl-64 lg:pl-52">
                  <form action="/dashboard/project" method="post" enctype="multipart/form-data" class="flex flex-col w-full mx-auto lg:w-full md:2/3">
                        @csrf
                        <h1 class="mb-5 text-lg font-semibold text-center text-hitam lg:text-2xl md:text-xl">Create New Project</h1>
                        {{-- name --}}
                        <label class="mb-1 text-sm font-medium text-hitam lg:text-md" for="name">Name</label>
                        <input type="text" name="name" class="@error('name')border-red-500 border-2  @enderror py-2 mb-3 px-4 bg-slate-100 rounded-md" value="{{ old('name') }}" id="name" placeholder="name" required>
                        @error('name')
                            <div class="mb-3 text-sm text-red-500 lg:text-md">{{ $message }}</div>
                        @enderror
                        {{-- slug --}}
                        <label class="mb-1 text-sm font-medium text-hitam lg:text-md" for="slug">Slug</label>
                        <input type="text" name="slug" class="@error('slug')border-red-500 border-2  @enderror py-2 mb-3 px-4 bg-slate-100 rounded-md" value="{{ old('slug') }}" id="slug" placeholder="Slug" required>
                        @error('slug')
                        <div class="mb-3 text-sm text-red-500 lg:text-md">{{ $message }}</div>
                        @enderror
                        {{-- link --}}
                        <label class="mb-1 text-sm font-medium text-hitam lg:text-md" for="link">link</label>
                        <input type="text" name="link" class="@error('link')border-red-500 border-2  @enderror py-2 mb-3 px-4 bg-slate-100 rounded-md" value="{{ old('link') }}" id="link" placeholder="link">
                        @error('link')
                            <div class="mb-3 text-sm text-red-500 lg:text-md">{{ $message }}</div>
                        @enderror
                        {{-- github --}}
                        <label class="mb-1 text-sm font-medium text-hitam lg:text-md" for="github">github</label>
                        <input type="text" name="github" class="@error('github')border-red-500 border-2  @enderror py-2 mb-3 px-4 bg-slate-100 rounded-md" value="{{ old('github') }}" id="github" placeholder="github" required>
                        @error('github')
                            <div class="mb-3 text-sm text-red-500 lg:text-md">{{ $message }}</div>
                        @enderror
                        {{-- deskripsi --}}
                        <label for="deskripsi" class="mb-1 text-sm font-medium text-hitam lg:text-md">Deskripsi</label>
                        <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}" required>
                        <trix-editor input="deskripsi" id="trix" class="@error('title')border-red-500 border-2  @enderror bg-slate-100 mb-3"></trix-editor>
                        @error('deskripsi')
                            <div class="mb-3 text-sm text-red-500 lg:text-md">{{ $message }}</div>
                        @enderror
                        {{-- image --}}
                        <label for="image" class="mb-1 text-sm font-medium text-hitam lg:text-md">Image</label>
                        <input type="file" name="image" class="@error('image')border-red-500 border-2  @enderror py-2 mb-5 px-4 bg-slate-100 rounded-md" value="{{ old('image') }}" id="image">
                        @error('image')
                            <div class="mb-3 text-sm text-red-500 lg:text-md">{{ $message }}</div>
                        @enderror
                        {{-- button --}}
                        <button type="submit" class="w-1/4 px-2 py-1 text-sm font-medium bg-blue-500 rounded-md lg:p-2 md:text-md text-hitam md:w-1/5 lg:w-1/6">Create</button>
                  </form>
            </div>
      </div>
      <script>
            const name = document.querySelector('#name');
            const slug = document.querySelector('#slug');

            name.addEventListener('change', function(){
                  fetch('/dashboard/project/createSlug?name=' + name.value)
                        .then(response => response.json())
                        .then(data => slug.value = data.slug)
            });
      </script>
@endsection