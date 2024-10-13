<x-layout>
    <x-slot:pageName> All Jobs </x-slot:pageName>
    <x-slot:title> Jobs | Job Portal </x-slot:title>

    @if ($jobs)
        <div>
            @foreach ($jobs as $job)
                @php
                    //dd($job->employer);
                @endphp
                <div class="p-4 bg-gray-100 rounded my-4">
                    <strong> {{ $job->title }} </strong> |
                    <a href="/employers/{{ $job->employer->id }}" class="text-blue-500"> {{ $job->employer->org_name }} </a> |
                    <a href="/jobs/{{ $job->id }}" class="text-blue-900"> <strong> See details </strong> </a>
                </div>
            @endforeach
        </div>
    @else
        <div class="p-4 bg-gray-100 rounded my-4 text-blue-600 text-xl">
            <strong> No Job found </strong>
        </div>
    @endif

</x-layout>
