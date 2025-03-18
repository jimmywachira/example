<x-layout>
    <x-slot:heading>job</x-slot:heading>

    <div class="mt-4">
        <div class=""> 
          <h1 class="text-2xl font-bold"> {{ $job['title'] }} </h1>
          <p class="text-gray-500"> {{ $job->salary }} per yr </p>
        </div>
        <div class="mt-4">
          <a href="/jobs" class="text-blue-700"> &larr; back to jobs </a>
        </div>
    </div>
  </x-layout>