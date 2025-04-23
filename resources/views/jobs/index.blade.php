{{-- c:\xampp\htdocs\code\example\resources\views\jobs\index.blade.php --}}
<x-layout>
    {{-- Use a more descriptive heading --}}
    <x-slot:heading>Find Your Next Opportunity!</x-slot:heading> 

    <div class="flex justify-end mb-4 ml-auto"> 
            {{-- 
              MODIFIED Button Usage:
              - Added specific classes for size, shadow, and transition.
              - Included an SVG icon inside the button's slot.
              - Assumes x-button component uses inline-flex internally or we add it here.
            --}}
            <x-button 
                href="/jobs/create" 
                class="inline-flex items-center gap-x-1.5 px-4 py-2 shadow-md hover:bg-blue-500 transition duration-150" 
                {{-- Added inline-flex, gap, padding, shadow, hover --}}
            >
                {{-- Heroicon: plus-circle (solid, 20x20) --}}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 -ml-1"> {{-- Icon size, negative margin to pull closer --}}
                  <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-11.25a.75.75 0 0 0-1.5 0v2.5h-2.5a.75.75 0 0 0 0 1.5h2.5v2.5a.75.75 0 0 0 1.5 0v-2.5h2.5a.75.75 0 0 0 0-1.5h-2.5v-2.5Z" clip-rule="evenodd" />
                </svg>
               Post a Job
            </x-button>
        </div>

    {{-- Optional: Add a small engaging intro text --}}
    <div class="mb-8 text-center text-gray-600 text-xl">
        <p>Browse through exciting roles offered by leading companies. Your dream job might be just a click away!</p>
    </div>

    {{-- Search Bar Section - ENHANCED --}}
    <section class="mb-12 max-w-2xl mx-auto"> {{-- Increased max-width and bottom margin --}}
        <form action="/jobs" method="GET" class="flex items-center gap-x-2">
            {{-- Search Input --}}
            <label for="search" class="sr-only">Search Jobs</label> 
            <div class="relative flex-grow">
                {{-- Search Icon inside the input field --}}
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4"> {{-- Increased padding --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6 text-gray-400"> {{-- Increased icon size --}}
                      <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input 
                    type="text" 
                    name="search" 
                    id="search" 
                    {{-- Updated input classes --}}
                    class="block w-full rounded-lg border-0 py-3 pl-12 pr-4 text-gray-900 text-base {{-- Increased size/padding --}}
                           ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 
                           focus:ring-2 focus:ring-inset focus:ring-blue-600 {{-- Enhanced focus ring --}}
                           shadow-sm" 
                    placeholder="Search jobs..." {{-- Shortened placeholder --}}
                    value="{{ request('search') }}" 
                >
            </div>
            
            {{-- Search Button --}}
            {{-- Using the form-button component with overrides for size and rounding --}}
            <x-form-button 
                type="submit" 
                class="px-5 py-3 rounded-full" {{-- Increased padding, matched rounding --}}
            >
                Search
            </x-form-button>
        </form>
    </section>

    {{-- Properly styled session status message --}}
    @if(session('status'))
        <div class="mb-6 rounded-md border border-green-200 bg-green-100 p-4 text-sm text-green-800 shadow-sm">
            {{ session('status') }}
        </div>
    @endif
  
    {{-- Container for job listings --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3"> 
  
        @forelse ($jobs as $job )
            {{-- Job Card (remains the same) --}}
            <a href="/jobs/{{ $job['id'] }}" 
               class="group block rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition duration-200 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                
                <div class="flex items-start gap-x-4"> 
                    {{-- Employer Logo/Avatar Section --}}
                    <div class="semibold flex-shrink-0">
                        {{-- Use a default avatar if no logo is provided --}}
                        {{-- Added a fallback for the logo using a placeholder image --}}
                        {{-- Updated logo size and border --}}
                        <img src="{{ $job->employer->logo ? asset('storage/' . $job->employer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($job->employer->name) . '&background=random&color=fff&size=128' }}" 
                             alt="{{ $job->employer->name }} Logo" 
                             class="size-12 rounded-full object-cover border border-gray-300 shadow-sm"> 
                    </div>

                    {{-- Text Content Section --}}
                    <div class="flex-grow">
                        <div class="text-sm text-gray-600">
                            {{ $job->employer->name }}
                        </div>
                        <div class="mt-1 font-bold text-xl text-black capitalize ext-blue-700 transition-colors duration-150">
                            {{ $job->title }}
                        </div>
                        <div class="mt-2 text-sm text-gray-700">
                            Salary: <span class="font-semibold text-gray-800">{{ number_format($job->salary) }} USD</span> | year
                        </div>
                    </div>

                    {{-- Optional: Subtle Arrow on Hover --}}
                    <div class="ml-auto shrink-0 self-center opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5 text-blue-500">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>
            </a>
        @empty
            {{-- Message when no jobs are found (remains the same) --}}
            <div class="col-span-full rounded-lg border border-dashed border-gray-300 bg-gray-50 p-8 text-center text-gray-500">
                @if(request('search'))
                    <p class="font-medium">No jobs found matching your search term "{{ request('search') }}".</p>
                    <p class="mt-2 text-sm">Try different keywords or broaden your search.</p>
                    <div class="mt-4">
                        <a href="/jobs" class="text-sm font-semibold text-blue-600 hover:text-blue-800">Clear Search</a>
                    </div>
                @else
                    <p class="font-medium">No jobs found matching your criteria (yet!).</p>
                    <p class="mt-2 text-sm">Check back soon or post a new opportunity.</p>
                    <div class="mt-4">
                        <x-button href="/jobs/create">Post a Job</x-button>
                    </div>
                @endif
            </div>
        @endforelse
          
    </div>
  
    {{-- Pagination Links (remains the same) --}}
    <div class="mt-10"> 
        {{-- {{ $jobs->appends(request()->query())->links() }}  --}}
    </div>
  
</x-layout>
