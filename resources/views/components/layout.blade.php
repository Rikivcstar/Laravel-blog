<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }}</title>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

  @vite('resources/css/app.css')
</head>
<body class="h-full bg-[#002731]">
<div class="min-h-full">

  <x-navbar/>
  {{-- <x-header :title="$title"/> --}}
 <main class="bg-[#002731]">
    <div class="mx-auto max-w-full  sm:px-6 lg:px-8">
 {{$slot}}
    </div>
 </main>
</div>


<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>