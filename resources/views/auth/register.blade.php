<x-layout>
  {{-- Update heading to reflect the page purpose --}}
  <x-slot:heading>Register an Account</x-slot:heading>

  {{-- Removed the outer div with flex/shadow/margin. The form now sits directly within the layout's styled content pane. --}}
  {{-- Kept the max-width constraint for the form itself --}}
  <div class="sm:mx-auto sm:w-full sm:max-w-sm"> 

      <form method="POST" action="/register" class="space-y-6">
          @csrf

          {{-- Name Field --}}
          <x-form-field>
              <x-form-label for="name">Name</x-form-label> {{-- Capitalized Label --}}
              <div class="mt-1"> {{-- Added mt-1 consistent with edit form --}}
                  <x-form-input type="text" name="name" id="name" placeholder="Your Name" required /> {{-- Removed extra space in placeholder --}}
              </div>
              <x-form-error name="name" />
          </x-form-field>

          {{-- Email Field --}}
          <x-form-field>
              <x-form-label for="email">Email</x-form-label> {{-- Capitalized Label --}}
              <div class="mt-1">
                  <x-form-input type="email" name="email" id="email" placeholder="your.email@example.com" required /> {{-- Improved placeholder --}}
              </div>
              <x-form-error name="email" />
          </x-form-field>

          {{-- Password Field --}}
          <x-form-field>
              <x-form-label for="password">Password</x-form-label> {{-- Capitalized Label --}}
              <div class="mt-1">
                  <x-form-input type="password" name="password" id="password" placeholder="Password" required />
              </div>
              <x-form-error name="password" />
          </x-form-field>

          {{-- Confirm Password Field --}}
          <x-form-field>
              <x-form-label for="password_confirmation">Confirm Password</x-form-label> {{-- Improved Label --}}
              <div class="mt-1">
                  <x-form-input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat Password" required />
              </div>
              <x-form-error name="password_confirmation" />
          </x-form-field>

          {{-- Buttons Row --}}
          {{-- Adjusted spacing and alignment consistent with edit form --}}
          <div class="mt-6 flex items-center justify-end gap-x-4"> 
              {{-- Styled Cancel Link --}}
              <a href="/" class="text-sm font-semibold leading-6 text-gray-700 hover:text-black">Cancel</a>
              
              {{-- Register Button (Assuming x-form-button renders a primary blue button) --}}
              <x-form-button>Register</x-form-button>
          </div> 
      </form>
  </div>
  {{-- Removed the closing div for the outer container --}}
</x-layout>
