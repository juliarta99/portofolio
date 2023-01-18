@extends('layouts.main')

@section('content')
{{-- contact --}}    
<div class="pt-10 pb-16 px-9">
      <div class="flex flex-wrap">
            <div class="w-full">
                  <h1 class="mb-5 text-2xl font-bold text-hitam lg:text-3xl xl:text-4xl lg:text-center dark:text-slate-100">Contact</h1>
                  {{-- <p class="mb-5 text-sm md:text-md text-slate-500 lg:text-center dark:text-slate-300"></p> --}}
                  @if (session()->has('succes'))
                        <div class="flex w-1/4 p-4 mx-auto mb-5 bg-green-400 rounded-md">
                              <p class="w-full mr-1 md:w-2/3 lg:w-1/3">{{ session('succes') }}</p>
                              <button>
                                    <a href="/contact/deleteSession">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>                                  
                                    </a>
                              </button>
                        </div>
                   @endif
                  <form action="/contact" method="post" class="w-full p-6 mx-auto duration-300 rounded-lg bg-primary lg:w-1/2 hover:bg-white hover:border-2 hover:border-primary dark:hover:bg-black group">
                        @csrf
                        <input type="text" name="name" id="name" class="w-full dark:group-hover:bg-black @error('name') outline outline-white outline-2 @enderror p-2 border-2 mb-1 rounded-md border-primary" placeholder="Nama" value="{{ old('name') }}">
                        @error('name')
                              <div class="text-sm text-hitam-500 group-hover:text-primary lg:text-md">{{ $message }}</div>
                        @enderror
                        <input type="email" name="email" id="email" class="@error('email') outline outline-white outline-2 @enderror dark:group-hover:bg-black w-full p-2 mt-4 border-2 rounded-md peer border-primary invalid:outline-primary" value="{{ old('email') }}" placeholder="Email">
                        @error('email')
                              <div class="text-sm text-hitam-500 group-hover:text-primary lg:text-md">{{ $message }}</div>
                        @enderror
                        <p class="invisible mb-4 text-sm peer-invalid:visible text-primary text-start"> Please provide a valid email address.</p>
                        <textarea name="pesan" class="@error('pesan') outline outline-white outline-2 @enderror dark:group-hover:bg-black w-full p-2 border-2 rounded-md border-primary" id="pesan" cols="30" rows="10" placeholder="Pesan" value="{{ old('pesan') }}">{{ old('pesan') }}</textarea>
                        @error('pesan')
                              <div class="text-sm text-hitam-500 group-hover:text-primary lg:text-md">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="px-6 py-2 mt-2 bg-white border-2 rounded-md outline-primary border-primary dark:group-hover:text-gray-400 dark:group-hover:bg-black text-hitam">Kirim</button>
                  </form>
            </div>
      </div>
</div>    
@endsection