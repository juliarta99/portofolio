@extends('dashboard.layouts.main')

@section('content')
      <div class="pt-20 pb-4 px-9">
            <div class="w-full xl:pl-64 lg:pl-52">
                  <a href="/dashboard/pemrograman/create" class="flex justify-center w-1/2 px-3 py-2 mb-3 font-semibold bg-blue-500 rounded-md lg:w-1/4 text-hitam">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="ml-2">Bahasa Baru</h3>
                  </a>
                  @if (session()->has('succes'))
                  <div class="flex w-1/4 p-4 mb-5 bg-green-400 rounded-md">
                        <p>{{ session('succes') }}</p>
                        <button>
                              <a href="/dashboard/pemrograman/deleteSession">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>                                  
                              </a>
                        </button>
                  </div>
                  @endif
                  <table class="w-full text-center rounded-md shadow-md" id="table-dashboard">
                        <tr class="p-2 even:bg-slate-200 bg-slate-100 text-md xl:text-lg">
                              <th class="p-2">No</th>
                              <th>Name</th>
                              <th>Action</th>
                        </tr>
                        @foreach ($pemrogramans as $pemrograman)
                        <tr class="text-sm even:bg-slate-200 bg-slate-100 xl:text-md">
                              <td class="p-4">{{ $pemrograman->id }}</td>
                              <td class="p-4">{{ $pemrograman->name }}</td>
                              <td class="flex flex-wrap items-center justify-center p-4">
                                    <a href="/dashboard/pemrograman/{{ $pemrograman->slug }}/edit">
                                          <button class="py-1 px-2 m-0.5 lg:my-0 rounded-md bg-yellow-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                </svg>                                          
                                          </button>
                                    </a>
                                    <form action="/dashboard/pemrograman/{{ $pemrograman->slug }}" method="post">
                                          @method('delete')
                                          @csrf
                                          <button class="py-1 px-2 m-0.5 lg:my-0 rounded-md bg-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>                                  
                                          </button>
                                    </form>                                                 
                              </td>
                        </tr>
                        @endforeach
                  </table>
            </div>
      </div>
@endsection