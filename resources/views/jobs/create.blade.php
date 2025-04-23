<x-layout>
  {{-- Update heading for clarity --}}
  <x-slot:heading>Create a New Job</x-slot:heading>

  {{-- Removed the outer div with flex/shadow/margin. Content now sits within layout's styled pane. --}}
  {{-- Kept the max-width constraint for the form itself --}}
  <div class="sm:mx-auto sm:w-full sm:max-w-sm"> 

      {{-- Corrected form structure --}}
      <form method="POST" action="/jobs" class="space-y-6">
          @csrf

          {{-- Title Field --}}
          <x-form-field>
              <x-form-label for="title">Title</x-form-label> {{-- Capitalized --}}
              <div class="mt-1"> {{-- Consistent spacing --}}
                  <x-form-input type="text" name="title" id="title" placeholder="Shift Manager" required /> {{-- Added required, improved placeholder --}}
              </div>
              <x-form-error name="title" />
          </x-form-field>

          {{-- Salary Field --}}
          <x-form-field>
              <x-form-label for="salary">Salary</x-form-label> {{-- Capitalized --}}
              <div class="mt-1"> {{-- Consistent spacing --}}
                  <x-form-input type="text" name="salary" id="salary" placeholder="$50,000 Per Year" required /> {{-- Added required, improved placeholder --}}
              </div>
              <x-form-error name="salary" />
          </x-form-field>

          {{-- Buttons Row --}}
          {{-- Consistent alignment and spacing with other forms --}}
          <div class="mt-6 flex items-center justify-end gap-x-4">
              {{-- Styled Cancel Link --}}
              <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-700 hover:text-black">Cancel</a>
              
              {{-- Save Button (Assuming x-form-button renders a primary blue button) --}}
              <x-form-button>Save</x-form-button>
          </div>
      </form>
  </div>
  {{-- Removed the extra closing divs from the original broken structure --}}
</x-layout>    
