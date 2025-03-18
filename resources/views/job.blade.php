<x-layout>
    <x-slot:heading>job</x-slot:heading>

    <div class="mt-4">
        <div class=""> 

          <h1 class="font-bold text-lg-center"> {{ $job['title'] }} </h1>

          <p> this job pays  {{ $job['salary'] }} per year </p>
        </div>

        <div class="mt-4">
          <a href="/jobs" class="text-blue-700"> &larr; back to jobs </a>
        </div>
    </div>
  </x-layout>