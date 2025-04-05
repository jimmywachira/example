@props(['active' => false ])

 <!-- Current: "bg-blue-900 text-white", Default: " hover:bg-blue-700 hover:text-white" -->
 
<a class="{{ $active ? 'bg-blue-900 text-white ' : ' text-black hover:bg-blue-700 hover:text-white' }} rounded-md px-3 py-2" aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}  
    > {{ $slot }} 
</a>