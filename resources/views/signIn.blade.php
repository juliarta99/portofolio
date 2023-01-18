<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Login</title>
      @vite('resources/css/app.css')
</head>
<body>
      <div class="flex flex-col items-center justify-center w-full" id="login-back">
            @if (session()->has('loginError')) 
                  <div class="w-1/2 p-8 mb-2 rounded-md md:w-1/3 lg:w-1/4 bg-primary text-hitam">
                        {{ session('loginError') }}
                  </div>
            @endif
            <div class="w-full px-4 py-8 mx-auto md:w-1/2 lg:w-1/3 xl:w-1/4 md:px-8 bg-primary md:rounded-md md:shadow-md">
                  <form action="/cekmalubro" method="post" class="mx-auto">
                        @csrf
                        <h1 class="text-xl font-bold text-center uppercase text-hitam lg:text-2xl xl:text-3xl">Login</h1>
                        <label for="email" class="text-sm font-semibold lg:text-md text-hitam peer">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" class="w-full px-4 py-2 mb-1 rounded-md peer">
                        <p class="hidden text-sm text-white peer-invalid:block text-start"> Please provide a valid email address.</p>
                        @error('email')
                        <div class="mb-3 text-white">{{ $message }}</div>
                        @enderror
                        
                        <label for="password" class="text-sm font-semibold lg:text-md text-hitam">Password</label>
                        <input type="password" name="password" id="password" placeholder="password" class="w-full px-4 py-2 mb-1 rounded-md">
                        @error('password')
                        <div class="mb-3 text-white">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="px-4 py-2 mt-3 font-semibold text-white rounded-md bg-hitam">Login</button>
                  </form>
            </div>
      </div>
</body>
</html>