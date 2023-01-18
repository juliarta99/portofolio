<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.1/dist/flowbite.min.css" /> --}}
    @vite('resources/css/app.css')
</head>
<body class="dark:bg-black">
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
</body>
<script src="{{ asset('js/script.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration:1000,
    });
</script>
</html>