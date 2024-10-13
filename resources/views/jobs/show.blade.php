<x-layout>
    <x-slot:pageName> Job Details </x-slot:pageName>
    <x-slot:title> Job Details | Job Portal </x-slot:title>
    
    <div class="p-4 bg-gray-100 rounded shadow-l m-4">
        <div class="text-blue-800 text-sm"> Job Title </div>
        <div class="text-l"> {{ $job->title }} </div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l m-4">
        <div class="text-blue-800 text-sm"> Organization Name </div>
        <div class="text-l"> {{ $job->employer->org_name }} </div>
        <div class="text-sm text-blue-600 py-2"> <a href="#">See details</a></div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l m-4">
        <div class="text-blue-800 text-sm"> Job Description </div>
        <div class="text-l"> {{ $job->description }} </div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l m-4">
        <div class="text-blue-800 text-sm"> Job Responsibilities </div>
        <div class="text-l"> {{ $job->responsibilities }} </div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l m-4">
        <div class="text-blue-800 text-sm"> Job Requirements </div>
        <div class="text-l"> {{ $job->requirements }} </div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l m-4">
        <div class="text-blue-800 text-sm"> Salary Range </div>
        <div class="text-l"> {{ $job->min_salary }} - {{ $job->max_salary }} {{ $job->currency }} </div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l m-4">
        <div class="text-blue-800 text-sm"> Benefits </div>
        <div class="text-l"> {{ $job->benefits }} </div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l m-4">
        <div class="text-blue-800 text-sm"> Job Type </div>
        <div class="text-l"> {{ $job->job_type }} </div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l m-4">
        <div class="text-blue-800 text-sm"> Location </div>
        <div class="text-l"> {{ $job->location }} </div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l m-4">
        <div class="text-blue-800 text-sm"> Application Deadline </div>
        <div class="text-l"> {{ $job->deadline }} </div>
    </div>

</x-layout>
