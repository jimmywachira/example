<x-layout>
    <x-slot:heading>log in</x-slot:heading>

<div class="flex min-h-full flex-col justify-center px-3 py-6 lg:px-8 shadow rounded">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=blue&shade=600" alt="Your Company">
    <h2 class="mt-5 text-center text-2xl/9 font-bold tracking-tight text-black-900">log In </h2>
  </div>

  <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="/login" method="POST">
      @csrf
      <div>
        <label class="block block font-bold text-black-900" for="email">Email address</label>
        <div class="mt-2">
          <input type="email" name="email" class="block w-full border rounded-md bg-white px-3 py-1.5 text-base text-black-900 placeholder:text-gray-400 sm" id="email" autocomplete="email"  :value="old('email')">
          <x-form-error name="email">
          </x-form-error>
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label class="block block font-bold text-black-900" for="password">Password</label>
          {{-- <div class="text-sm">
            <a href="#" class=" text-gray-600 hover:text-blue-500">Forgot password?</a>
          </div> --}}
        </div>
        <div class="mt-2">
          <input class="block border w-full rounded-md bg-white px-3 py-1.5 text-base text-black-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-black-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-400 sm" type="password" name="password" id="password" autocomplete="current-password">
          <x-form-error name="password">
          </x-form-error>
        </div>
      </div>

      <div>
        <x-form-button>login</x-form-button>
      </div>
    </form>

    <p class="mt-5 text-center text-black-500 font-semibold">
      Not registered?
      <a href="/register" class=" text-blue-600 hover:text-blue-500">register</a>
    </p>
  </div>
</div>
</x-layout>    