<x-layout>
    <x-slot:pageName> Job Details </x-slot:pageName> 
    <x-slot:title> Job Details | Job Portal </x-slot:title>
    
    <div class="p-4 bg-gray-100 rounded shadow-l m-4 hover:bg-gray-500">
            {{ $job->title }}
    </div>
</x-layout>