<header class="px-9 fixed w-full top-0 bg-slate-600 shadow-sm z-[10]">
      <div class="relative flex flex-wrap items-center justify-between py-3">
            <a href="" class="text-xl font-semibold text-white md:text-2xl xl:text-3xl">Dashboard</a>
            <div class="flex items-center justify-center">
                  <p class="mr-2 text-white">{{ Auth::user()->name }}</p>
                  <a href="/logoutneh">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-4 lg:mr-0 stroke-white">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>                      
                  </a>
                  <div class="w-6 h-auto cursor-pointer humberger lg:hidden">
                        <span class="w-4 h-0.5 bg-white block transition-all duration-300 mb-1 origin-top-left"></span>
                        <span class="w-5 h-0.5 bg-white block transition-all duration-300 mb-1"></span>
                        <span class="w-6 h-0.5 bg-white block transition-all duration-300 origin-bottom-left"></span>
                  </div>
            </div>
      </div>
</header>