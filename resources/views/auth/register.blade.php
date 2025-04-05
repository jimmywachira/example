<x-layout>
  <x-slot:heading>job create</x-slot:heading>

<div class="flex min-h-full flex-col justify-center px-3 py-6 lg:px-8 shadow rounded m-2">
<div class="sm:mx-auto sm:w-full sm:max-w-sm">
  <form method="POST" action="/register" class="space-y-6">
    @csrf

      <x-form-field>
          <x-form-label for="name" >name</x-form-label>
          
              <x-form-input type="text" name="name" id="name" placeholder="  name" required>
              </x-form-input>

              <x-form-error name="name">
              </x-form-error> 
          
      </x-form-field>

      <x-form-field>
          <x-form-label for="email" >email</x-form-label>    

          
          <x-form-input type="email" name="email" id="email"
          placeholder="  email"  required>
          </x-form-input>

          <x-form-error name="email">
          </x-form-error> 
          
      </x-form-field>

      <x-form-field>
          <x-form-label for="password" >password</x-form-label>    

          
          <x-form-input type="password" name="password" id="password" 
          placeholder="password" required>
          </x-form-input>

          <x-form-error name="password">
          </x-form-error> 
          
      </x-form-field>

      <x-form-field>
          <x-form-label for="password_confirmation" >confirm-password</x-form-label>    

          
          <x-form-input type="password" name="password_confirmation" id="password_confirmation"
          placeholder="repeat password"  required>
          </x-form-input>

          <x-form-error name="password_confirmation">
          </x-form-error> 
          
      </x-form-field>
    <div class="mt-2 flex items-center justify-end  gap-x-2">
      <a href="/" class="leading-6 px-3 py-1.5 rounded border hover:shadow">Cancel</a>
      <x-form-button>Register</x-form-button>
    </div> 
  </form>
</div>
</div>
</x-layout>
