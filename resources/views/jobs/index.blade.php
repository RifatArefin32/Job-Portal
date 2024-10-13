<x-layout>
    <x-slot:pageName> All Jobs </x-slot:pageName> 
    <x-slot:title> Jobs | Job Portal </x-slot:title>
    
    @if ($jobs)
        <div>
            @foreach ($jobs as $job)
            @php
                //dd($job->employer);
            @endphp
                <div class="p-4 bg-gray-100 rounded shadow-xl m-4">
                    <strong> {{ $job->title }} </strong> | 
                    <a href="#" class="text-blue-500"> {{$job->employer->org_name}} </a>  | 
                    <a href="#" class="text-blue-500"> see details </a>
                        
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</x-layout>