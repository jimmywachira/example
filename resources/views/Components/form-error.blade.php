@props(['name'])

@error($name)
    <p class="text-xs text-red-500 p-2 font-semibold mt-1">{{ $message }}</p>
@enderror