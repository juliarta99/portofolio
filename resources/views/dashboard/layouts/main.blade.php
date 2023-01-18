<!DOCTYPE html>
<html lang="en" class="dashboard">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>{{ $title }}</title>
      @vite("resources/css/app.css")
      <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
      <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>
<body>
      @include('dashboard.layouts.header')
      @include('dashboard.layouts.navbar')
      @yield('content')
      <footer class="pb-10 text-end px-9">
            <p class="text-sm text-hitam">&copy; Juliarta 2023</p>
      </footer>
</body>
<script src="{{ asset('js/script.js') }}"></script>
</html>