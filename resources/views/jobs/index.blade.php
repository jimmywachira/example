<x-layout>
    <x-slot:heading>jobs page</x-slot:heading>

    <main class="container-fluid rounded shadow mx-auto">

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">

        @foreach ($jobs as $job )
          <a href="/jobs/{{ $job['id'] }}" class="border shadow p-4 hover:text-blue-500">
            
            {{-- <div class="object-cover  opacity-100 blur-sm">
              <img class="full" src="https://assets.laracasts.com/images/wallpapers/Lara-Matrix.jpeg" alt="">
            </div> --}}
            
            <div class="font-bold m-1 text-xl">{{ $job['title'] }}</div>
            <div class="text-lg m-1">Pays {{ number_format($job['salary']) }} usd | yr </div>
            <div class="font-bold m-1 text-blue-500">{{ $job->employer->name }}</div>
          </a>
        @endforeach
      </div>
    </main> 
</x-layout> 