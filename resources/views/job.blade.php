<x-layout>
    <x-slot:heading>job</x-slot:heading>

    <div class="card mt-4 border shadow p-2">
        <div class="pt-2"> 
          <h1 class="text-2xl font-bold"> {{ $job['title'] }} </h1>
          <p class="mt-2 text-xl "> Pays {{ $job['salary'] }}$ per yr </p>
        </div>
        <div class="mt-4 btn">

          <button>
               <a href="/jobs" class="text-blue-700"> back to jobs </a>
          </button>
       
        </div>
    </div>
  </x-layout>