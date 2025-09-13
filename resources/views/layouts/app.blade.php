<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="relative bg-white text-white min-h-screen overflow-x-hidden">

  {{-- Background beams full-page --}}
  <div class="absolute inset-0 min-h-full w-full">
    <x-background-beams />
  </div>

  {{-- Konten --}}
  <main class="relative z-10">
    @yield('content')
  </main>

</body>
</html>
