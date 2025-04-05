@props(['name'])
<div>
    @error($name)
        <p class="text-sm text-red-500 p-2 font-semibold text-lowercase mt-1">{{ $message }}</p>
    @enderror
</div>