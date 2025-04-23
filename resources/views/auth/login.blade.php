<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    {{-- Removed the outer div with flex/shadow/margin. Content now sits within layout's styled pane. --}}
    {{-- Kept the max-width constraint for the form area --}}
    <div class="sm:mx-auto sm:w-full sm:max-w-sm"> 
        
        {{-- Logo and Sub-heading Section --}}
        <div class="text-center"> {{-- Center align items in this block --}}
            <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=blue&shade=600" alt="Your Company">
            {{-- Styled sub-heading consistent with theme --}}
            <h2 class="mt-6 text-2xl font-semibold leading-9 tracking-tight text-gray-800">
                Sign in to your account
            </h2>
        </div>

        {{-- Form Section --}}
        <div class="mt-8"> {{-- Increased top margin --}}
            <form class="space-y-6" action="/login" method="POST">
                @csrf

                {{-- Email Field --}}
                <x-form-field>
                    <x-form-label for="email">Email</x-form-label> {{-- Capitalized --}}
                    <div class="mt-1"> {{-- Consistent spacing --}}
                        <x-form-input name="email" id="email" type="email" :value="old('email')" placeholder="your.email@example.com" required />
                    </div>
                    <x-form-error name="email" />
                </x-form-field>

                {{-- Password Field --}}
                <x-form-field>
                    <x-form-label for="password">Password</x-form-label> {{-- Capitalized --}}
                    <div class="mt-1"> {{-- Consistent spacing --}}
                        <x-form-input name="password" id="password" type="password" placeholder="Password" required />
                    </div>
                    <x-form-error name="password" />
                </x-form-field>

                {{-- Remember Me Checkbox --}}
                <div class="flex items-center">
                    <input 
                        id="remember" 
                        name="remember" 
                        type="checkbox" 
                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                    >
                    <label for="remember" class="ml-2 block text-sm text-gray-700">
                        Remember me
                    </label>
                </div>

                {{-- Buttons Row --}}
                {{-- Consistent alignment and spacing with other forms --}}
                <div class="mt-6 flex items-center justify-end gap-x-4">
                    {{-- Styled Cancel Link --}}
                    <a href="/" class="text-sm font-semibold leading-6 text-gray-700 hover:text-black">Cancel</a>
                    
                    {{-- Log In Button (Assuming x-form-button renders a primary blue button) --}}
                    <x-form-button>Log In</x-form-button>
                </div>
            </form>
        </div>
    </div>
    {{-- Removed the closing div for the outer container --}}
</x-layout>
