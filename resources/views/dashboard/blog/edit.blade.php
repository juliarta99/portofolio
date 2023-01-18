@extends('dashboard.layouts.main')

@section('content')
      <div class="pt-20 pb-4 px-9">
            <div class="w-full xl:pl-64 lg:pl-52">
                  <form action="/dashboard/blog/{{ $blog->slug }}" method="post" enctype="multipart/form-data" class="flex flex-col w-full mx-auto lg:w-full md:2/3">
                        @method('put')
                        @csrf
                        <h1 class="mb-5 text-lg font-semibold text-center text-hitam lg:text-2xl md:text-xl">Edit Blog</h1>
                        {{-- title --}}
                        <label class="mb-1 text-sm font-medium text-hitam lg:text-md" for="title">Title</label>
                        <input type="text" name="title" class="@error('title')border-red-500 border-2  @enderror py-2 mb-3 px-4 bg-slate-100 rounded-md" value="{{ old('title', $blog->title) }}" id="title" placeholder="Title" required>
                        @error('title')
                            <div class="mb-3 text-sm text-red-500 lg:text-md">{{ $message }}</div>
                        @enderror
                        {{-- slug --}}
                        <label class="mb-1 text-sm font-medium text-hitam lg:text-md" for="slug">Slug</label>
                        <input type="text" name="slug" class="@error('slug')border-red-500 border-2  @enderror py-2 mb-3 px-4 bg-slate-100 rounded-md" value="{{ old('slug', $blog->slug) }}" id="slug" placeholder="Slug" required>
                        @error('slug')
                            <div class="mb-3 text-sm text-red-500 lg:text-md">{{ $message }}</div>
                        @enderror
                        {{-- category --}}
                        <label class="mb-1 text-sm font-medium text-hitam lg:text-md" for="category">Category</label>
                        <select name="category_id" class="@error('title')border-red-500 border-2  @enderror py-2 mb-3 px-4 bg-slate-100 rounded-md" id="category" required>
                              @foreach ($categories as $category)
                                    @if (old('category_id', $blog->category->id) == $category->id)
                                    <option class="text-sm lg:text-md" value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                    <option class="text-sm lg:text-md" value="{{ $category->id }}">{{ $category->name }}</option>   
                                    @endif
                              @endforeach
                        </select>
                        @error('category_id')
                            <div class="mb-3 text-sm text-red-500 lg:text-md">{{ $message }}</div>
                        @enderror
                        {{-- body --}}
                        <label for="body" class="mb-1 text-sm font-medium text-hitam lg:text-md">Body</label>
                        <input id="body" type="hidden" name="body" value="{{ old('body', $blog->body) }}" required>
                        <trix-editor input="body" id="trix" class="@error('title')border-red-500 border-2  @enderror bg-slate-100 mb-3"></trix-editor>
                        @error('body')
                            <div class="mb-3 text-sm text-red-500 lg:text-md">{{ $message }}</div>
                        @enderror
                        {{-- old Image --}}
                        <input type="hidden" name="oldImage" value="{{ $blog->image }}">
                        {{-- image --}}
                        <label for="image" class="mb-1 text-sm font-medium text-hitam lg:text-md">Cover</label>
                        <input type="file" name="image" class="@error('image')border-red-500 border-2  @enderror py-2 mb-5 px-4 bg-slate-100 rounded-md" id="image">
                        @error('image')
                            <div class="mb-3 text-sm text-red-500 lg:text-md">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="w-1/4 px-2 py-1 text-sm font-medium bg-blue-500 rounded-md lg:p-2 md:text-md text-hitam md:w-1/5 lg:w-1/6">Edit</button>
                  </form>
            </div>
      </div>
      <script>
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');

            title.addEventListener('change', function(){
                  fetch('/dashboard/blog/createSlug?title=' + title.value)
                        .then(response => response.json())
                        .then(data => slug.value = data.slug)
            });
      </script>
@endsection