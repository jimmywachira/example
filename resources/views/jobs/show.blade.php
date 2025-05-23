{{-- c:\xampp\htdocs\code\example\resources\views\jobs\show.blade.php --}}
<x-layout>
    {{-- Keep heading simple or use job title --}}
    <x-slot:heading>Job Details</x-slot:heading>
  
    {{-- Main content container --}}
    <div class="space-y-8">
        {{-- Job Details Header --}}
  
        {{-- Section 1: Header with Logo, Title, Employer, and Key Info --}}
        {{-- Re-introduced flex layout and the logo --}}
        <section class="flex flex-col sm:flex-row items-start gap-6 pb-3 ">
            {{-- Employer Logo/Avatar --}}
            <div class="shrink-0">
                <img src="{{ $job->employer->logo ? asset('storage/' . $job->employer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($job->employer->name) . '&background=random&color=fff&size=128' }}" 
                     alt="{{ $job->employer->name }} Logo" 
                     class="size-20 rounded-full object-cover border border-gray-300 shadow-md"> {{-- size-20, rounded-full --}}
            </div>

            {{-- Job Title, Employer, and Quick Stats --}}
            <div class="flex-grow text-semibold">
                {{-- Employer Name --}}
                <div class="text-sm font-semibold text-black tracking-tight mb-2">
                    {{ $job->employer->name }}
                </div>
                {{-- Job Title (Adjusted size back) --}}
                <h1 class="text-3xl font-bold text-black tracking-tight mb-3"> {{-- Changed back to 3xl --}}
                    {{ $job->title }} 
                </h1>
                {{-- Quick Stats (Salary, Location, Type - With icons) --}}
                <div class="flex flex-wrap items-center gap-x-6 gap-y-2 text-sm text-gray-700"> {{-- Increased gap-x --}}
                    {{-- Salary --}}
                    <div class="flex items-center gap-x-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 text-gray-500">
                          <path d="M10.75 10.818L8.03 8.1l5.22-5.22a.75.75 0 0 1 1.06 1.06L9.092 9.182l2.717 2.717a.75.75 0 1 1-1.06 1.061ZM3.75 13.25a.75.75 0 1 1 1.5 0 .75.75 0 0 1-1.5 0ZM6.5 10.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM9.25 13.5a.75.75 0 1 1 1.5 0 .75.75 0 0 1-1.5 0ZM12 10.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM4.163 5.877a.75.75 0 0 1 1.06-1.06l5.22 5.22L15.663 4.8a.75.75 0 1 1 1.06 1.061l-5.22 5.22 5.22 5.22a.75.75 0 1 1-1.06 1.06l-5.22-5.22-5.22 5.22a.75.75 0 0 1-1.061-1.06l5.22-5.22-5.22-5.22Z" /> 
                        </svg>
                        <span class="font-semibold text-gray-800">{{ number_format($job->salary) }} USD</span> / year
                    </div>
                    {{-- Location (Example - Add if you have $job->location) --}}
                    {{-- @if($job->location) ... @endif --}}
                    {{-- Job Type (Example - Add if you have $job->type) --}}
                    {{-- @if($job->type) ... @endif --}}
                    {{-- Date Posted --}}
                    <div class="flex items-center gap-x-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 text-gray-500">
                          <path fill-rule="evenodd" d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z" clip-rule="evenodd" />
                        </svg>
                        <span>Posted {{ $job->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            </div>
        </section>
  
        {{-- Section 2: Job Description (Dummy text remains) --}}
        <section class="py-6 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">About the Role</h2> 
            
            {{-- DUMMY DESCRIPTION TEXT --}}
            <div class="prose prose-sm sm:prose-base max-w-none text-gray-700 space-y-4">
                <p>
                    Are you a highly motivated and creative individual looking for an opportunity to make a real impact? 
                    We're seeking a talented <strong>{{ $job->title }}</strong> to join our growing team at <strong>{{ $job->employer->name }}</strong>. 
                    This is your chance to work on challenging projects, collaborate with industry experts, and contribute to our company's success story.
                </p>
                <p>
                    In this dynamic role, you'll be responsible for designing, developing, and implementing cutting-edge solutions. You'll work closely with product managers, designers, and other engineers to bring ideas to life. We value innovation, teamwork, and a passion for excellence. If you thrive in a fast-paced environment and enjoy tackling complex problems, this could be the perfect fit for you.
                </p>
                <p>
                    We offer a competitive salary estimated around <strong>{{ number_format($job->salary) }} USD per year</strong>, comprehensive benefits, and fantastic opportunities for professional development. Our company culture is supportive, inclusive, and focused on helping our employees achieve their full potential. Don't miss out on this exciting opportunity to advance your career with a forward-thinking organization!
                </p>
                {{-- 
                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-2">Key Responsibilities:</h3>
                <ul class="list-disc list-outside ml-5 space-y-1">
                    <li>Responsibility one goes here.</li>
                    <li>Another key task or duty.</li>
                    <li>Collaborate effectively with team members.</li>
                    <li>Drive project milestones and deliverables.</li>
                </ul> 
                --}}
            </div>
        </section>
  
        {{-- Section 3: Actions (Apply, Back, Edit) --}}
        <section class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            {{-- Apply Now Button (Most Prominent) --}}
            <x-button href="#" class="w-full sm:w-auto px-8 py-3 text-lg transition duration-150 ease-in-out hover:scale-105">Apply Now!</x-button> 
  
            {{-- Secondary Actions (Back & Edit) --}}
            <div class="flex items-center gap-x-4">
                  {{-- Edit Job Button (Conditional) --}}
                @can('edit', $job)
                 <x-button href="/jobs/{{ $job->id }}/edit" class="text-sm rounded font-semibold leading-6 border border-black px-6 py-2 text-black-600 hover:text-black transition duration-150">edit </x-button> 
                @endcan     

                {{-- "Go back" Link --}}
                <a href="/jobs" class="text-sm rounded font-semibold leading-6 border border-black px-6 py-2 text-black-600 hover:text-black transition duration-150">
                     jobs 
                </a>
            </div>
        </section>
    </div>
</x-layout>
