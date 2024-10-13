<x-layout>
    <x-slot:pageName> All Employers </x-slot:pageName> 
    <x-slot:title> Employers | Job Portal </x-slot:title>
    
    @if ($employers)
        <div>
            @foreach ($employers as $employer)
                <div class="p-4 bg-gray-100 rounded m-4">
                    <a href="/employers/{{$employer->id}}" class="text-blue-500"> 
                        <strong> {{$employer->org_name}} </strong> 
                    </a>
                </div>
            @endforeach
        </div>
    @endif
</x-layout>