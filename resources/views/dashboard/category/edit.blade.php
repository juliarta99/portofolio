@extends('dashboard.layouts.main')

@section('content')
      <div class="pt-20 pb-4 px-9">
            <div class="w-full xl:pl-64 lg:pl-52">
                  <form action="/dashboard/category/{{ $category->slug }}" method="post" enctype="multipart/form-data" class="flex flex-col w-full mx-auto lg:w-full md:2/3">
                        @method('put')
                        @csrf
                        <h1 class="mb-5 text-lg font-semibold text-center text-hitam lg:text-2xl md:text-xl">Edit category</h1>
                        {{-- title --}}
                        <label class="mb-1 text-sm font-medium text-hitam lg:text-md" for="name">Name</label>
                        <input type="text" name="name" class="@error('name')border-red-500 border-2  @enderror py-2 mb-3 px-4 bg-slate-100 rounded-md" value="{{ old('name', $category->name) }}" id="name" placeholder="name" required>
                        @error('name')
                            <div class="mb-3 text-sm text-red-500 lg:text-md">{{ $message }}</div>
                        @enderror
                        {{-- slug --}}
                        <label class="mb-1 text-sm font-medium text-hitam lg:text-md" for="slug">Slug</label>
                        <input type="text" name="slug" class="@error('slug')border-red-500 border-2  @enderror py-2 mb-3 px-4 bg-slate-100 rounded-md" value="{{ old('slug', $category->slug) }}" id="slug" placeholder="Slug" required>
                        @error('slug')
                            <div class="mb-3 text-sm text-red-500 lg:text-md">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="w-1/4 px-2 py-1 text-sm font-medium bg-blue-500 rounded-md lg:p-2 md:text-md text-hitam md:w-1/5 lg:w-1/6">Edit</button>
                  </form>
            </div>
      </div>
      <script>
            const name = document.querySelector('#name');
            const slug = document.querySelector('#slug');

            name.addEventListener('change', function(){
                  fetch('/dashboard/category/createSlug?name=' + name.value)
                        .then(response => response.json())
                        .then(data => slug.value = data.slug)
            });
      </script>
@endsection