<x-layout>
    <x-slot:heading>jobs page</x-slot:heading>
    <h1>jobs page</h1>

    <div class="mt-4">
      <ul>
        @foreach ($jobs as $job )
            <li class=""> 
              <a href="/jobs/{{ $job['id'] }}" class=" hover:text-blue-500">
                {{ $job['title'] }} : pays usd : {{ $job['salary'] }} per yr 
              </a>
            </li>
        @endforeach
      </ul>
  </div>
  </x-layout>