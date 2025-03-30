<x-layout>
    <x-slot:heading>edit job : {{ $job->title }}</x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}" class="">
      @csrf
      @method('patch') 
        <div class="border items-center justify-between m-2 p-2">
            <div class="">
                <label for="title" class="">
                    title
                </label>    

                  <div class="flex items-center rounded-md bg-white">
                    <input type="text glow" name="title" id="title" class=" w-full p-2" placeholder="title" required
                    value="{{ $job->title }}">
                  </div>

                  <div class="mt-2">@error('title')
                        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                    </div>
                    
            </div>

              <div class="mt-2">
                <label for="salary" class="">salary
                </label>
                  <div class="flex items-center rounded-md bg-white">
                    <input type="text" name="salary" id="salary" class=" p-2 w-full" placeholder="salary per yr" required value="{{ $job->salary }}">
                  </div>

                  <div class="mt-2">
                    @error('salary')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>

                </div>
                <div class="mt-4 flex items-center justify-between gap-x-6">
                  <div>
                      <button form="delete-form" class="text-red-500 font-bold border border-red-500 py-2 px-3 rounded  hover:shadow">delete</button>
                  </div>

                  <div class="flex items-center gap-x-6">
                    <a href="/jobs/{{ $job->id }}" class="mt-2 border hover:shadow font-bold py-2 px-4 m-2 rounded">Cancel</a>
                    <div>
                    <button type="submit" class="mt-2 border bg-blue-700 hover:shadow font-bold py-2 px-3 m-2 rounded">update
                    </button>
                  </div>
                  </div>
                </div>
        </div>
      </form>

      <form method="POST" action="/jobs/{{ $job->id }}" class="hidden" id="delete-form">
        @csrf
        @method('delete')
        <div class="mt-2">
            <button type="submit" class="text-red-500 font-bold">delete</button>
        </div>
      </form>
</x-layout>    