<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>learn laravel</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">

</head>
<body class="h-full font-semibold" style="font-family:Ubuntu">

<div class="min-h-full">
    <nav class="bg-blue-800 text-transform text-capitalize">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="shrink-0">
                <img class="h-7 w-8" src="https://laracasts.com/images/logo/logo-triangle.svg"
                alt="Your Company">
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex capitalize  items-baseline space-x-4">
               
                <x-nav-link href="/" :active="request()->is('/')">home</x-nav-link>

                <x-nav-link href="/jobs" :active="request()->is('/jobs')">jobs</x-nav-link>

                <x-nav-link href="/about" :active="request()->is('/about')">about</x-nav-link>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              @guest
                <x-nav-link href="/login" :active="request()->is('login')">logIn</x-nav-link>
                <x-nav-link href="/register" :active="request()->is('register')">reg</x-nav-link>
              @endguest

              @auth
              <form method="POST" action="/logout">
                @csrf
                <x-form-button class="bg-blue-900 text-white hover:bg-blue-700">logout</x-form-button>
              </form>
            @endauth
             
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-blue-800 p-2 text-black-400 hover:bg-blue-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!-- Menu open: "hidden", Menu closed: "block" -->
              <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!-- Menu open: "block", Menu closed: "hidden" -->
              <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
  
      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
          <!-- Current: "bg-blue-900 text-white", Default: " hover:bg-blue-700 hover:text-white" -->
          <a href="/" class="block rounded-md bg-blue-900 px-3 py-2 text-base  text-white" aria-current="page">home</a>
          <a href="/jobs" class="block rounded-md px-3 py-2 text-base   hover:bg-blue-700 hover:text-white">jobs</a>
          <a href="/about" class="block rounded-md px-3 py-2 text-base   hover:bg-blue-700 hover:text-white">about</a>
        </div>

        <div class="border border-gray-700 p-3">
          <div class="flex items-center px-5">
            <div class="shrink-0">
                <img class="h-8 w-8 rounded-full" src="https://laracasts.com/images/lary-ai-face.svg" alt="">
            </div>
            <div class="ml-3">
              <div class="text-base/5  text-white">jimmy </div>
              <div class="  text-black-400">jimmy@gmail.com</div>
            </div>
          </div>
 
        </div>
      </div>
    </nav>
  
    <header class="bg-white">
      <div class="mx-auto max-w-7xl px-2 py-4 sm:px-6 lg:px-8 sm:flex  sm:justify-between">
        <h1 class="text-3xl font-bold text-center tracking-tight text-black-900"> {{ $heading }} </h1>

        <div class="m-1 p-2">
<x-button href="/jobs/create">create job</x-button>
        </div>

      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
      </div>
    </main>
  </div>
  
</body>
</html>