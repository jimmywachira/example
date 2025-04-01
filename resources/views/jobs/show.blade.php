<x-layout>
    <x-slot:heading>job</x-slot:heading>

    <div class="card mt-4 border shadow p-2">
        <div class="pt-2"> 

          <div>
            {{-- <img class="full" src="https://flowbite.com/docs/images/blog/image-3.jpg" alt=""> --}}
        </div>
          <h1 class="text-2xl font-bold"> {{ $job['title'] }} </h1>
          <p class="mt-2 text-xl "> Pays {{ $job['salary'] }}$ per yr </p>
        </div>

        <div class="font-bold p-2 text-blue-500">
          {{ $job->employer->name}}
        </div>

          <button class="mt-2 border hover:shadow font-bold py-2 px-4 rounded">
               <a href="/jobs" class="text-blue-700"> back to jobs </a>
          </button>

          <x-button href="/jobs/{{ $job->id }}/edit">edit job</x-button> 
       
        </div>
    </div>
  </x-layout>