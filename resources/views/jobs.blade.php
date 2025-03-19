<x-layout>
    <x-slot:heading>jobs page</x-slot:heading>
    <h1>jobs page</h1>

    <div class="mt-4 border shadow p-2">
      <ul>
        @foreach ($jobs as $job )
            <li class="p-2"> 
              <a href="/jobs/{{ $job['id'] }}" class=" hover:text-blue-500">
                {{ $job['title'] }} : pays {{ $job['salary'] }}$ per yr 
              </a>
            </li>
        @endforeach
      </ul>
  </div>
  </x-layout>