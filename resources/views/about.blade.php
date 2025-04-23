{{-- c:\xampp\htdocs\code\example\resources\views\about.blade.php --}}
<x-layout>
  {{-- The heading is passed to the layout component --}}
  <x-slot:heading>About Us</x-slot:heading>

  {{-- 
    The content below is placed inside the layout's main content area:
    <div class="bg-white/90 backdrop-blur-sm rounded-lg shadow-xl px-4 py-6 sm:p-8"> 
    ...
    </div>
    Styling should complement this container.
  --}}

  {{-- Main Content Section --}}
  <div class="mx-auto max-w-4xl lg:mx-auto"> {{-- Constrain width for readability --}}

    {{-- Introduction / Mission --}}
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold tracking-tight text-blue-800 sm:text-4xl">Empowering Your Career Journey</h2>
      <p class="mt-6 text-lg leading-8 text-gray-700"> {{-- Slightly lighter gray for contrast --}}
        Navigating the job market can be overwhelming. Finding the *right* opportunity – one that matches your skills, aligns with your values, and fuels your passion – often feels like searching for a needle in a haystack. That's why we created Place | Me : a dedicated job board designed to connect talented individuals with innovative companies.
      </p>
      <p class="mt-4 text-lg leading-8 text-gray-700">
        We're dedicated to simplifying the job search process, building a bridge between talented individuals seeking meaningful work and innovative companies looking for the perfect fit.
      </p>
    </div>

    {{-- What We Do / How It Works --}}
    <div class="mb-16 text-left"> {{-- Left-align for easier reading of longer text --}}
        <h3 class="text-2xl font-semibold leading-7 text-blue-700 mb-4">Bridging the Gap Between Talent and Opportunity</h3>
        <p class="text-base leading-7 text-black mb-4">
            Traditional job boards can be cluttered and impersonal. We strive to provide a more focused and effective experience by offering:
        </p>
        <ul class="list-disc list-inside space-y-2 text-base leading-7 text-black ml-4 mb-6">
            <li>A curated selection of quality job listings from diverse industries and leading companies.</li>
            <li>Intuitive search and filtering tools to help you quickly find relevant positions.</li>
            <li>A streamlined application process (where possible) to save you time.</li>
            <li>Resources and insights (coming soon!) to support your career development.</li>
            <li>A platform for employers to efficiently connect with qualified candidates.</li>
        </ul>
        <p class="text-base leading-7 text-black">
            Whether you're a recent graduate taking your first step, an experienced professional seeking advancement, or a company aiming to build a stellar team, our mission is to facilitate successful connections that drive careers forward.
        </p>
    </div>

    {{-- "Work With Us" Section (Now about joining the platform's team) --}}
    <div class="text-center mb-16">
        <h2 class="text-4xl font-bold tracking-tight text-blue-800 sm:text-5xl">Join Our Team</h2>
        <p class="mt-6 text-lg leading-8 text-black">
            Passionate about shaping the future of work and connecting people with meaningful careers? We're always looking for talented individuals who share our vision. Explore opportunities to grow with us.
        </p>
        {{-- Links Section (Remains relevant for internal hiring) --}}
        <div class="mt-10">
          {{-- Using flex for centering and spacing --}}
          <div class="flex flex-wrap justify-center gap-x-8 gap-y-4 text-base font-semibold leading-7 text-blue-600">
            <a href="#" class="hover:text-blue-800 transition duration-150 ease-in-out">Open roles <span aria-hidden="true">&rarr;</span></a>
            <a href="#" class="hover:text-blue-800 transition duration-150 ease-in-out">Internship program <span aria-hidden="true">&rarr;</span></a>
            <a href="#" class="hover:text-blue-800 transition duration-150 ease-in-out">Our values <span aria-hidden="true">&rarr;</span></a>
            <a href="#" class="hover:text-blue-800 transition duration-150 ease-in-out">Meet our leadership <span aria-hidden="true">&rarr;</span></a>
          </div>
        </div>
    </div>


    {{-- Stats Section (Updated labels to reflect job board activity) --}}
    {{-- Added a border top for visual separation --}}
    <div class=" p-4">
        <dl class="grid grid-cols-1 gap-y-10 gap-x-8 sm:grid-cols-2 lg:grid-cols-4 text-center"> {{-- Centered text in stats --}}
          <div class="flex flex-col-reverse gap-y-1">
            {{-- Dark text for numbers, lighter gray for labels --}}
            <dt class="text-base leading-7 text-gray-500">Active Job Listings</dt>
            <dd class="text-3xl font-semibold tracking-tight text-black">500+</dd> {{-- Example Stat --}}
          </div>
          <div class="flex flex-col-reverse gap-y-1">
            <dt class="text-base leading-7 text-gray-500">Companies Hiring</dt>
            <dd class="text-3xl font-semibold tracking-tight text-black">120+</dd> {{-- Example Stat --}}
          </div>
          <div class="flex flex-col-reverse gap-y-1">
            <dt class="text-base leading-7 text-gray-500">Registered Seekers</dt>
            <dd class="text-3xl font-semibold tracking-tight text-black">5000+</dd> {{-- Example Stat --}}
          </div>
          <div class="flex flex-col-reverse gap-y-1">
            <dt class="text-base leading-7 text-gray-500">Successful Placements</dt>
            <dd class="text-3xl font-semibold tracking-tight text-black">Tracked Monthly</dd> {{-- Example Stat (or use a number) --}}
          </div>
        </dl>
    </div>

  </div> {{-- End max-w-4xl --}}

</x-layout>
{{-- End of the about.blade.php file --}}
{{-- This file now describes a job board platform, focusing on connecting job seekers and employers. --}}
{{-- It maintains the original structure and styling, fitting into the overall site design. --}}
{{-- Remember to replace "[Your Platform Name Here - Replace This!]" and update the example stats. --}}
