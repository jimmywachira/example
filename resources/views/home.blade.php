{{-- c:\xampp\htdocs\code\example\resources\views\home.blade.php --}}
<x-layout>
  {{-- Keep the heading simple for the layout component --}}
  <x-slot:heading>Home Page</x-slot:heading>

  {{-- Hero Section - Big, Bold, Action-Oriented --}}
  <section class="text-center py-16 md:py-24 bg-gradient-to-br from-sky-50 via-white to-sky-100 rounded-b-lg shadow-inner"> {{-- Subtle gradient background --}}
    <div class="max-w-4xl mx-auto px-4">
      {{-- Catchy Headline --}}
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-sky-800 leading-tight mb-4 drop-shadow-sm">
        Find Your <span class="text-sky-600">Dream Job</span> Today!
      </h1>
      {{-- Engaging Sub-headline --}}
      <p class="text-lg sm:text-xl text-gray-700 mb-8 max-w-2xl mx-auto">
        Stop searching, start finding. We connect talented professionals like you with exciting opportunities from top companies. Your next career move is just a click away.
      </p>
      {{-- Primary Call to Action --}}
      <div>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
          <x-button href="/jobs" class="px-8 py-3 text-lg font-semibold bg-sky-500 hover:text-white">Find a Job</x-button>
          {{-- Link this to your job creation page or employer section --}}
          <x-button href="/jobs/create" class="text-lg bg-sky-500 hover:text-white px-6 py-2">Post a Job</x-button>
      </div>
        {{-- <x-button href="/jobs" class="px-8 py-3 text-lg font-semibold">Search Jobs Now</x-button> Use the main button component --}}
      </div>
    </div>
  </section>

  {{-- How It Works Section - Simple Steps --}}
  <section class="py-16 md:py-20">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Getting Started is Easy</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 text-center">
        {{-- Step 1 --}}
        <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100 hover:shadow-lg transition-shadow duration-300">
          {{-- Placeholder for an icon (e.g., Search icon) --}}
          <div class="text-sky-600 mb-4">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 mx-auto">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
             </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">1. Search & Discover</h3>
          <p class="text-gray-600">Use our powerful filters to find jobs that match your skills, location, and preferences.</p>
        </div>
        {{-- Step 2 --}}
        <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100 hover:shadow-lg transition-shadow duration-300">
          {{-- Placeholder for an icon (e.g., Apply icon) --}}
           <div class="text-sky-600 mb-4">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 mx-auto">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
             </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">2. Apply with Ease</h3>
          <p class="text-gray-600">Submit your application directly through our platform or via the company's site.</p>
        </div>
        {{-- Step 3 --}}
        <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100 hover:shadow-lg transition-shadow duration-300">
          {{-- Placeholder for an icon (e.g., Success/Hired icon) --}}
           <div class="text-sky-600 mb-4">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 mx-auto">
               <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.812a6.024 6.024 0 0 1 2.57-5.841Z" />
             </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">3. Get Hired!</h3>
          <p class="text-gray-600">Land your next role and take a giant leap forward in your career journey.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- Featured Section / Why Choose Us? --}}
  <section class="bg-sky-50 py-16 md:py-20">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Why Job Seekers Love it here</h2> {{-- Replace Placeholder --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Feature 1 --}}
            <div class="text-center">
                {{-- Icon Placeholder --}}
                <div class="bg-sky-600 text-white rounded-full size-12 flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-1">Quality Listings</h3>
                <p class="text-gray-600 text-sm">Access curated jobs from verified companies.</p>
            </div>
            {{-- Feature 2 --}}
            <div class="text-center">
                 {{-- Icon Placeholder --}}
                <div class="bg-sky-600 text-white rounded-full size-12 flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-1">Smart Filters</h3>
                <p class="text-gray-600 text-sm">Easily narrow down your search to find the perfect match.</p>
            </div>
            {{-- Feature 3 --}}
            <div class="text-center">
                 {{-- Icon Placeholder --}}
                <div class="bg-sky-600 text-white rounded-full size-12 flex items-center justify-center mx-auto mb-4 shadow-lg">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.868-1.418a2.25 2.25 0 0 1 1.183 1.981V18m-6.478-3.488v-1.817m-4.773 0a2.25 2.25 0 0 1 1.183-1.981l6.478-3.488a2.25 2.25 0 0 1 2.366 0l6.478 3.488a2.25 2.25 0 0 1 1.183 1.981v1.817m-4.773-1.418a2.25 2.25 0 0 0-1.183-1.981l-6.478-3.488a2.25 2.25 0 0 0-2.366 0l-6.478 3.488a2.25 2.25 0 0 0-1.183 1.981v1.817" />
                   </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-1">Direct Applications</h3>
                <p class="text-gray-600 text-sm">Apply quickly and track your application status (soon!).</p>
            </div>
             {{-- Feature 4 --}}
            <div class="text-center">
                 {{-- Icon Placeholder --}}
                <div class="bg-sky-600 text-white rounded-full size-12 flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-1">Save Time</h3>
                <p class="text-gray-600 text-sm">Spend less time searching, more time preparing for interviews.</p>
            </div>
        </div>
    </div>
  </section>

  {{-- Testimonial Snippet (Example) --}}
  <section class="py-16 md:py-20">
      <div class="max-w-3xl mx-auto px-4 text-center">
          <img class="h-16 w-auto mx-auto mb-4" src="https://assets.laracasts.com/images/mascot/larylab.svg" alt="Lary Mascot"> {{-- Keep mascot if desired --}}
          <blockquote class="text-xl italic text-gray-700 mb-4">
              "I was tired of scrolling through endless irrelevant listings. [jobs placement] helped me find a job I actually love in just a few weeks!" {{-- Replace Placeholder --}}
          </blockquote>
          <p class="font-semibold text-gray-800">- Happy Job Seeker</p>
      </div>
  </section>

  {{-- Final Call to Action - For Employers Too --}}
  <section class="bg-sky-700 text-white py-12 md:py-16 rounded-t-lg">
      <div class="max-w-4xl mx-auto px-4 text-center">
          <h2 class="text-3xl font-bold mb-4">Ready to Take the Next Step?</h2>
          <p class="text-sky-100 mb-8">Whether you're looking for your next role or searching for the perfect candidate, we're here to help.</p>
          
      </div>
  </section>

</x-layout>
