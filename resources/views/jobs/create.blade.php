<x-layout>
    <x-slot:heading>job create</x-slot:heading>

<div class="flex min-h-full flex-col justify-center px-3 py-6 lg:px-8 shadow rounded">
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form method="POST" action="/jobs" class="space-y-6">
      @csrf
        <div>
             <x-form-field>
                  <x-form-label for="title" >title
                  </x-form-label>    

                  <div class="mt-2">
                    <x-form-input type="text" name="title" id="title" placeholder="ceo" >
                    </x-form-input>

                    <x-form-error name="title">
                    </x-form-error> 
                  
             </x-form-field>
            </div>
          </div>

          <div>
              <x-form-field>
                <x-form-label for="salary" >salary
                </x-form-label>    

                <div class="mt-1">
                  <x-form-input type="text" name="salary" id="salary" placeholder="40,000 usd" >
                  </x-form-input>

                  <x-form-error name="salary">
                  </x-form-error> 
                
            </x-form-field>
          </div>
        </div>
      </div>
        
      <div class="mt-2 flex items-center justify-end gap-x-2">
        <a href="/" class="leading-6 font-semibold">Cancel</a>
        <x-form-button>Save</x-form-button>
       
    </form>
    </div>
  </div>
</x-layout>    