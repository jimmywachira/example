<x-layout>
    <x-slot:heading>job create</x-slot:heading>

    <form method="POST" action="/jobs" class="">
      @csrf
        <div class="border items-center justify-between m-2 p-2">
            <div class="">
                <label for="title" class="">
                    title
                </label>    

                  <div class="flex items-center rounded-md bg-white">
                    <input type="text glow" name="title" id="title" class=" w-full p-2" placeholder="title">
                  </div>

                  <div class="m-2">@error('title')
                        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                    </div>
                    
            </div>


              <div class="mt-2">
                <label for="salary" class="">salary
                </label>
                  <div class="flex items-center rounded-md bg-white">
                    <input type="text" name="salary" id="salary" class=" p-2 w-full" placeholder="salary per yr">
                  </div>

                  <div class="m-2">
                    @error('salary')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>
                </div>

      
                <div class="flex border shadow leading-5 rounded-mditems-center justify-end">
                <button type="button" class="">Cancel</button>
                <button type="submit" class="relative inline-flex items-center m-2 px-4 py-2 bg-blue-700 text-white-700 border border-blue-300 leading-5 rounded-md">create</button>
                </div>
        </div>
      </form>
</x-layout>    