<!DOCTYPE html>
<html lang="en" class="h-full bg-white"> {{-- Keep bg-white on html for fallback/scrollbars --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Learn | {{ $title ?? 'laravel' }}</title> {{-- Added dynamic title possibility --}}

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    {{-- Add custom styles if needed for text-shadow or complex effects --}}
    <style>
        /* Example: Subtle text shadow for potentially better readability on gradient */
        /* .text-shadow { text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4); } */
    </style>
</head>
{{-- 
  Apply a smooth diagonal gradient background to the body.
  - Changed from an angled gradient with sharp stops to a corner-to-corner gradient.
  - 'to_bottom_right' makes it go from top-left to bottom-right.
  - Removed the percentage stops for a smooth transition.
--}}
<body 
    class="h-full antialiased font-semibold bg-[linear-gradient(to_bottom_right,theme(colors.blue.800),theme(colors.white))]" 
    style="font-family:Ubuntu"
>

{{-- The min-h-full div ensures content can push down if needed --}}
<div class="min-h-full flex flex-col"> {{-- Use flex-col to push footer down if added later --}}
    {{-- 
      Navbar:
      - Still transparent background to show gradient.
      - Added a subtle bottom border for visual separation.
      - Link colors should still work reasonably well on the gradient.
    --}}
    <nav class=""> {{-- Subtle border for separation --}}
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="shrink-0">
                {{-- Logo might need adjustment if it clashes with the gradient --}}
                <img class="h-8 w-auto" src="https://laracasts.com/images/logo/logo-triangle.svg" {{-- Slightly larger logo --}}
                alt="Your Company">
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex capitalize items-baseline space-x-4">
                {{-- Using the nav-link component which handles its own styling --}}
                <x-nav-link href="/" :active="request()->is('/')">home</x-nav-link> 
                <x-nav-link href="/jobs" :active="request()->is('/jobs')">jobs</x-nav-link> 
                <x-nav-link href="/about" :active="request()->is('/about')">about</x-nav-link> 
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6 space-x-4"> {{-- Added space-x-4 for consistency --}}
              @guest
                {{-- Using the nav-link component --}}
                <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link> 
                <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link> 
              @endguest

              @auth
              <form method="POST" action="/logout">
                @csrf
                {{-- Slightly softer button style, adjust as needed --}}
                <x-form-button >Logout</x-form-button>
              </form>
               @endauth
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            {{-- Consistent styling with desktop links --}}
            <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-white hover:text-blue-100 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-800" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
  
      <!-- Mobile menu, show/hide based on menu state. -->
      {{-- Added a semi-transparent background to prevent content bleed-through --}}
      <div class="md:hidden bg-blue-800/95 backdrop-blur-sm border-t border-white/20" id="mobile-menu"> {{-- Added background, blur, border --}}
        <div class="space-y-1 px-2 py-3 sm:px-3">
          {{-- Adjusted styling for mobile menu context --}}
          <a href="/" class="block rounded-md px-3 py-2 text-base text-white hover:bg-blue-700/80 {{ request()->is('/') ? 'bg-blue-900/80' : '' }}" aria-current="{{ request()->is('/') ? 'page' : 'false' }}">Home</a>
          <a href="/jobs" class="block rounded-md px-3 py-2 text-base text-white hover:bg-blue-700/80 {{ request()->is('jobs') ? 'bg-blue-900/80' : '' }}">Jobs</a>
          <a href="/about" class="block rounded-md px-3 py-2 text-base text-white hover:bg-blue-700/80 {{ request()->is('about') ? 'bg-blue-900/80' : '' }}">About</a>
        </div>

        {{-- User section in mobile menu --}}
        <div class="border-t border-blue-700/50 pb-3 pt-4"> 
          @auth
            <div class="flex items-center px-5">
              <div class="shrink-0">
                  {{-- Placeholder for user avatar if available --}}
                  <span class="inline-block h-8 w-8 overflow-hidden rounded-full bg-gray-100">
                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                  </span>
              </div>
              <div class="ml-3">
                <div class="text-base font-medium text-white">{{ Auth::user()->name }}</div>
                <div class="text-sm font-medium text-blue-200">{{ Auth::user()->email }}</div>
              </div>
              {{-- Add settings/profile links here if needed --}}
            </div>
            <div class="mt-3 space-y-1 px-2">
                 <form method="POST" action="/logout" class="block">
                    @csrf
                    <button type="submit" class="block w-full text-left rounded-md px-3 py-2 text-base text-white hover:bg-blue-700/80">
                        Log Out
                    </button>
                 </form>
            </div>
          @else
            <div class="space-y-1 px-2">
                <a href="/login" class="block rounded-md px-3 py-2 text-base text-white hover:bg-blue-700/80 {{ request()->is('login') ? 'bg-blue-900/80' : '' }}">Log In</a>
                <a href="/register" class="block rounded-md px-3 py-2 text-base text-white hover:bg-blue-700/80 {{ request()->is('register') ? 'bg-blue-900/80' : '' }}">Register</a>
            </div>
          @endauth
        </div>
      </div>
    </nav>
  
    {{-- 
      Header:
      - Still transparent background.
      - Added padding for spacing.
      - Button styling consistent with theme.
    --}}
    {{-- c:\xampp\htdocs\code\example\resources\views\components\layout.blade.php --}}
<!DOCTYPE html>
{{-- ... head ... --}}
<body 
    class="h-full antialiased font-semibold bg-[linear-gradient(to_bottom_right,theme(colors.blue.800),theme(colors.white))]" 
    style="font-family:Ubuntu"
>
<div class="min-h-full flex flex-col"> 
    
    {{-- Navbar remains the same --}}
    <nav class=""> 
      {{-- ... nav content ... --}}
    </nav>
  
    {{-- 
      MODIFIED Header:
      - Adjusted padding slightly (py-4).
      - Added a subtle semi-transparent background and backdrop blur to match the main content container style.
      - Added a bottom border for clearer separation.
    --}}
    <header class="p-8"> 
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex justify-between items-center">
         {{-- Display heading if provided --}}
         @isset($heading)
            {{-- Slightly adjusted heading size and shadow for balance --}}
            <h1 class="text-3xl font-semibold capitalize tracking-tight text-white drop-shadow-md"> 
                {{ $heading }} 
            </h1>
         @endisset

        {{-- Button Section --}}
        
      </div>
    </header>

    {{-- Main content remains the same --}}
    <main class="flex-grow"> 
      {{-- ... main content ... --}}
    </main>

   {{-- Optional Footer remains the same --}}
   {{-- <footer ...> --}}

  </div> {{-- End min-h-full --}}
</body>
</html>


    <main class="flex-grow"> {{-- flex-grow makes main take up remaining space --}}
      {{-- 
        Main Content Area:
        - Container div with semi-transparent background still provides readability.
        - The smooth gradient will show subtly behind it.
      --}}
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
         <div class="bg-white/90 backdrop-blur-sm rounded-lg shadow-xl px-4 py-6 sm:p-8"> {{-- Content container --}}
            {{ $slot }}
         </div>
      </div>
    </main>

   {{-- Optional Footer Example --}}
   {{-- 
   <footer class="mt-auto py-4 border-t border-white/20"> 
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center text-sm text-white/70">
            &copy; {{ date('Y') }} Your Company Name. All rights reserved.
        </div>
   </footer> 
   --}}

  </div> {{-- End min-h-full --}}
  
</body>
</html>
