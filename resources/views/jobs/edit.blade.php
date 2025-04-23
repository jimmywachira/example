{{-- c:\xampp\htdocs\code\example\resources\views\jobs\edit.blade.php --}}
<x-layout>
    {{-- More descriptive heading including the job title --}}
    <x-slot:heading>Edit Job: {{ $job->title }}</x-slot:heading>
  
    {{-- Wider container for the form and header --}}
    <div class="max-w-2xl mx-auto space-y-8"> 
  
        {{-- Section 1: Visual Header with Logo and Job Info --}}
        {{-- Provides context about the job being edited --}}
        <section class="flex items-center gap-x-4 pb-6 border-b border-gray-200">
            {{-- Employer Logo/Avatar --}}
            <div class="shrink-0">
                <img src="{{ $job->employer->logo ? asset('storage/' . $job->employer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($job->employer->name) . '&background=random&color=fff&size=128' }}" 
                     alt="{{ $job->employer->name }} Logo" 
                     class="size-16 rounded-full object-cover border border-gray-300 shadow-md"> {{-- Changed rounded-xl to rounded-full --}}
            </div>
  
            {{-- Job Title and Employer Name --}}
            <div class="flex-grow">
                <div class="text-sm font-semibold text-gray-500 mb-1">
                    {{ $job->employer->name }}
                </div>
                {{-- Display the title clearly --}}
                <h2 class="text-2xl font-semibold text-black tracking-tight"> 
                    {{ $job->title }} 
                </h2>
            </div>
        </section>
  
        {{-- Section 2: The Edit Form --}}
        <section>
            <form method="POST" action="/jobs/{{ $job->id }}" class="space-y-6">
                @csrf
                @method('patch') 
  
                {{-- Title Field --}}
                <div>
                    {{-- Styled Label --}}
                    <label for="title" class="block text-sm font-semibold leading-6 text-gray-800 mb-1">
                        Job Title
                    </label>    
                    {{-- Styled Input --}}
                    <div class="mt-1"> 
                        <input 
                            type="text" 
                            name="title" 
                            id="title" 
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm py-2 px-3 placeholder:text-gray-400" 
                            placeholder="e.g., Senior Laravel Developer" 
                            required
                            value="{{ old('title', $job->title) }}"> {{-- Use old() for sticky form --}}
                    </div>
                    {{-- Error Message --}}
                    @error('title')
                        <p class="mt-1 text-xs text-red-500 font-semibold">{{ $message }}</p>
                    @enderror
                </div>
  
                {{-- Salary Field --}}
                <div>
                    {{-- Styled Label --}}
                    <label for="salary" class="block text-sm font-semibold leading-6 text-gray-800 mb-1">
                        Annual Salary (USD)
                    </label>
                    {{-- Styled Input --}}
                    <div class="mt-1">
                        <input 
                            type="text" 
                            name="salary" 
                            id="salary" 
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm py-2 px-3 placeholder:text-gray-400" 
                            placeholder="e.g., 90000" 
                            required 
                            value="{{ old('salary', $job->salary) }}"> {{-- Use old() for sticky form --}}
                    </div>
                    {{-- Error Message --}}
                    @error('salary')
                        <p class="mt-1 text-xs text-red-500 font-semibold">{{ $message }}</p>
                    @enderror
                </div>
  
                {{-- Description Textarea - UPDATED DUMMY TEXT --}}
                <div>
                    <label for="description" class="block text-sm font-semibold leading-6 text-gray-800 mb-1">
                        Job Description
                    </label>
                    <div class="mt-1">
                        <textarea 
                            name="description" 
                            id="description" 
                            rows="6" {{-- Adjusted rows back slightly for single paragraph --}}
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm py-2 px-3 placeholder:text-gray-400" 
                            placeholder="Describe the role, responsibilities, and requirements..."
                            required>{{-- Use old() helper with existing description or new single-paragraph dummy text --}}
{{ old('description', $job->description ?? "Join our forward-thinking company! We're looking for a motivated and skilled individual to contribute to exciting projects, collaborate with a talented team, and drive innovation in our industry. Ideal candidates possess strong problem-solving abilities, excellent communication skills, thrive in a fast-paced environment, and are eager to make a significant impact. If you're ready for a challenging and rewarding opportunity where you can grow your career, we encourage you to apply today!") }}</textarea>
                    </div>
                    @error('description')
                        <p class="mt-1 text-xs text-red-500 font-semibold">{{ $message }}</p>
                    @enderror
                </div> 
  
  
                {{-- Buttons Row --}}
                <div class="mt-8 flex items-center justify-between gap-x-6 border-t border-gray-200 pt-6">
                    {{-- Delete Button (triggers hidden form) --}}
                    <div>
                        <button 
                            form="delete-form" 
                            type="submit" 
                            class="rounded-md bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 transition duration-150"
                        >
                            Delete Job
                        </button>
                    </div>
  
                    {{-- Cancel and Update Buttons --}}
                    <div class="flex items-center gap-x-4">
                        <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-600 hover:text-black transition duration-150">Cancel</a>
                        {{-- Use the styled form-button component if preferred, or keep inline styles --}}
                        <button 
                            type="submit" 
                            class="rounded-md bg-blue-600 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition duration-150"
                        >
                            Update Job
                        </button>
                    </div>
                </div>
            </form>
        </section>
  
        {{-- Hidden Delete Form - No styling needed --}}
        <form method="POST" action="/jobs/{{ $job->id }}" class="hidden" id="delete-form">
            @csrf
            @method('delete')
        </form>
    </div>
</x-layout>    
