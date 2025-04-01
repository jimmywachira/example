<x-layout>
    <x-slot:heading>job create</x-slot:heading>

    <form method="POST" action="/jobs" class="">
      @csrf
      <div class="space-y-12">
        <div class="pb-2">
          <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 border mt-2 p-2">

             <x-form-field>
                  <x-form-label for="title" >title
                  </x-form-label>    

                  <div class="mt-1">

                    <x-form-input type="text" name="title" id="title" placeholder="ceo" >
                    </x-form-input>

                    <x-form-error name="title">
                    </x-form-error> 
                  </div>
             </x-form-field>


              <x-form-field>
                <x-form-label for="salary" >salary
                </x-form-label>    

                <div class="mt-1">
                  <x-form-input type="text" name="salary" id="salary" placeholder="40,000 usd" >
                  </x-form-input>

                  <x-form-error name="salary">
                  </x-form-error> 
                </div>
            </x-form-field>
          </div>
        </div>
      </div> 
        
      <div class="mt-2 flex items-center justify-end  gap-x-2">
        <a href="/" class="leading-6 font-semibold">Cancel</a>
        <x-form-button>Save</x-form-button>
      </div> 
    </form>
</x-layout>    