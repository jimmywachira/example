<x-layout>
    <x-slot:heading>job create</x-slot:heading>

    <form method="POST" action="/register">
      @csrf

      <div class="space-y-12">
        <div class="pb-2">
          <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 border p-2">
                <x-form-field>
                    <x-form-label for="name" >name</x-form-label>    

                    <div class="mt-1">

                        <x-form-input type="text" name="name" id="name" placeholder="ceo" required>
                        </x-form-input>

                        <x-form-error name="name">
                        </x-form-error> 
                    </div>
                </x-form-field>


                <x-form-field>
                    <x-form-label for="email" >email</x-form-label>    

                    <div class="mt-1">
                    <x-form-input type="email" name="email" id="email" required>
                    </x-form-input>

                    <x-form-error name="email">
                    </x-form-error> 
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password" >password</x-form-label>    

                    <div class="mt-1">
                    <x-form-input type="password" name="password" id="password" required>
                    </x-form-input>

                    <x-form-error name="password">
                    </x-form-error> 
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password_confirm" >confirm-password</x-form-label>    

                    <div class="mt-1">
                    <x-form-input type="password_confirm" name="password_confirm" id="password_confirm" required>
                    </x-form-input>

                    <x-form-error name="password_confirm">
                    </x-form-error> 
                    </div>
                </x-form-field>
          </div>
        </div>
    </div> 
        
      <div class="mt-2 flex items-center justify-end  gap-x-2">
        <a href="/" class="leading-6 font-semibold">Cancel</a>
        <x-form-button>Register</x-form-button>
      </div> 
    </form>
</x-layout>    