<!DOCTYPE html>
<html lang="en" class="cv">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>{{ $title }}</title>
      @vite('resources/css/app.css')
</head>
<body class="bg-primaryCV">
      <div class="w-full p-4 lg:px-20 lg:py-8 bg-primaryCV">
            <div class="relative w-full bg-white rounded-md">
                  {{-- btn downlaod pdf --}}
                  <a href="file/CV_Si-Ngurah-Putu-Juliarta.pdf">
                        <button class="absolute items-center px-3 py-2 rounded-md bg-secondaryCV top-2 right-2">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                              </svg>                            
                        </button>
                  </a>
                  {{-- button back --}}
                  <a href="/">
                        <button class="absolute items-center px-3 py-2 rounded-md bg-secondaryCV top-2 left-2">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M9.53 2.47a.75.75 0 010 1.06L4.81 8.25H15a6.75 6.75 0 010 13.5h-3a.75.75 0 010-1.5h3a5.25 5.25 0 100-10.5H4.81l4.72 4.72a.75.75 0 11-1.06 1.06l-6-6a.75.75 0 010-1.06l6-6a.75.75 0 011.06 0z" clip-rule="evenodd" />
                              </svg>                                                            
                        </button>
                  </a>
                  <div class="items-center justify-center w-full px-4 pt-8 lg:flex">
                        <div class="w-2/3 mx-auto md:w-1/3 lg:w-3/5 lg:pl-10">
                              <img src="img/back-juliarta.jpg" class="border-8 border-white border-solid rounded-full outline outline-8 outline-secondaryCV" alt="{{ $name }}">
                        </div>
                        <div class="w-full px-4 mt-10 text-center lg:mt-0 lg:px-10 lg:pl-28 xl:pl-40">
                              <h1 class="text-2xl font-bold uppercase text-primaryCV">{{ $name }}</h1>
                              <h5 class="mb-3 text-sm uppercase text-secondaryCV">{{ $work }}</h5>
                              <p class="text-sm text-justify text-hitam">{{ $about }}</p>
                        </div>
                  </div>
                  <div class="lg:flex">
                        <div class="w-full px-4 py-8 lg:w-1/2 lg:px-9">
                              <div class="w-full px-4 mt-10">
                                    <h1 class="w-full px-5 text-lg font-bold uppercase text-primaryCV bg-slate-50">Informasi Pribadi</h1>
                                    <ul class="w-full px-5 mt-3">
                                          <li class="flex mt-1 text-sm text-hitam ">Lahir : {{ $lahir }}</li>
                                          <li class="flex mt-1 text-sm text-hitam ">Agama : {{ $agama }}</li>
                                          <li class="flex mt-1 text-sm text-hitam ">Alamat : {{ $alamat }}</li>
                                          <li class="flex mt-1 text-sm text-hitam ">Asal Sekolah : {{ $sekolah }}</li>
                                    </ul>
                              </div>
                              <div class="w-full px-4 mt-10">
                                    <h1 class="w-full px-5 text-lg font-bold uppercase text-primaryCV bg-slate-50">Kontak</h1>
                                    <ul class="w-full px-5 mt-3">
                                          <li class="flex mt-1 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#44717f" class="w-6 h-6 p-1 rounded-full bg-slate-50">
                                                      <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                                                    </svg>
                                                    
                                                <a href="" class="text-sm text-hitam ">{{ $handphone }}</a>
                                          </li>
                                          <li class="flex mt-1 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#44717f" class="w-6 h-6 p-1 rounded-full bg-slate-50">
                                                      <path d="M19.5 22.5a3 3 0 003-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 01-.712 1.321l-5.683-3.06a1.5 1.5 0 00-1.422 0l-5.683 3.06a.75.75 0 01-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 003 3h15z" />
                                                      <path d="M1.5 9.589v-.745a3 3 0 011.578-2.641l7.5-4.039a3 3 0 012.844 0l7.5 4.039A3 3 0 0122.5 8.844v.745l-8.426 4.926-.652-.35a3 3 0 00-2.844 0l-.652.35L1.5 9.59z" />
                                                    </svg>
                                                    
                                                <a href="" class="text-sm text-hitam ">{{ $email }}</a>
                                          </li>
                                          <li class="flex mt-1 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#44717f" class="w-6 h-6 p-1 rounded-full bg-slate-50">
                                                      <path d="M21.721 12.752a9.711 9.711 0 00-.945-5.003 12.754 12.754 0 01-4.339 2.708 18.991 18.991 0 01-.214 4.772 17.165 17.165 0 005.498-2.477zM14.634 15.55a17.324 17.324 0 00.332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 00.332 4.647 17.385 17.385 0 005.268 0zM9.772 17.119a18.963 18.963 0 004.456 0A17.182 17.182 0 0112 21.724a17.18 17.18 0 01-2.228-4.605zM7.777 15.23a18.87 18.87 0 01-.214-4.774 12.753 12.753 0 01-4.34-2.708 9.711 9.711 0 00-.944 5.004 17.165 17.165 0 005.498 2.477zM21.356 14.752a9.765 9.765 0 01-7.478 6.817 18.64 18.64 0 001.988-4.718 18.627 18.627 0 005.49-2.098zM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 001.988 4.718 9.765 9.765 0 01-7.478-6.816zM13.878 2.43a9.755 9.755 0 016.116 3.986 11.267 11.267 0 01-3.746 2.504 18.63 18.63 0 00-2.37-6.49zM12 2.276a17.152 17.152 0 012.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0112 2.276zM10.122 2.43a18.629 18.629 0 00-2.37 6.49 11.266 11.266 0 01-3.746-2.504 9.754 9.754 0 016.116-3.985z" />
                                                    </svg>
                                                    
                                                <a href="" class="text-sm text-hitam ">{{ $website }}</a>
                                          </li>
                                    </ul>
                              </div>
                              <div class="w-full px-4 mt-10">
                                    <h1 class="w-full px-5 text-lg font-bold uppercase text-primaryCV bg-slate-50">Pendidikan</h1>
                                    <div class="px-4">
                                          <div class="relative w-full mt-2 border-l-2 border-hitam">
                                                <ul class="px-4">
                                                      @foreach ($pendidikans as $pendidikan)
                                                      <li class="pendidikan">
                                                            <div class="w-full mt-3">
                                                              <p class="text-sm text-secondaryCV">{{ $pendidikan['tahun'] }}</p>
                                                              <h4 class="font-bold uppercase text-md">{{ $pendidikan['sekolah'] }}</h4>
                                                              <h6 class="text-sm text-primaryCV">{{ $pendidikan['jurusan'] }}</h6>
                                                            </div>
                                                      </li>
                                                      @endforeach
                                                </ul>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="w-full px-4 pt-0 pb-8 lg:py-8 lg:w-1/2 lg:px-9">
                              <div class="w-full px-4 mt-10">
                                    <h1 class="w-full px-5 text-lg font-bold uppercase bg-primaryCV text-slate-50">Hard Skills</h1>
                                    <div class="flex flex-wrap mt-2">
                                          @foreach ($skills as $skill)    
                                                <div class="flex w-1/2 px-5 my-2">
                                                      <img src="{{ $skill['image'] }}" class="w-5 h-5" alt="{{ $skill['name'] }}">
                                                      <h1 class="ml-1 text-sm font-semibold uppercase">{{ $skill['name'] }}</h1>
                                                </div>
                                          @endforeach
                                    </div>
                              </div>
                              <div class="w-full px-4 mt-10">
                                    <h1 class="w-full px-5 text-lg font-bold uppercase bg-primaryCV text-slate-50">Soft Skills</h1>
                                    <div class="flex flex-col mt-2">
                                          @foreach ($softskills as $sskill)    
                                                <div class="px-10 mt-1">
                                                      <ul class="list-disc">
                                                            <li class="ml-1 text-sm font-semibold uppercase">{{ $sskill['name'] }}</li>
                                                      </ul>
                                                </div>
                                          @endforeach
                                    </div>
                              </div>
                              <div class="w-full px-5 pt-6 text-end">
                                    <h6 class="text-sm text-primaryCV">Build with Tailwind Css</h6>
                                    <p class="text-sm text-hitam"> &copy; Juliarta 2023 </p>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</body>
</html>