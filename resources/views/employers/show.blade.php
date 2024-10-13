<x-layout>
    <x-slot:pageName> {{ $employer->org_name }} </x-slot:pageName>
    <x-slot:title> Employers | Job Portal </x-slot:title>

    <div class="p-4 bg-gray-100 rounded shadow-l my-4">
        <div class="text-blue-800 text-sm"> Organization Name </div>
        <div class="text-l"> {{ $employer->org_name }} </div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l my-4">
        <div class="text-blue-800 text-sm"> Organization Description </div>
        <div class="text-l"> {{ $employer->org_details }} </div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l my-4">
        <div class="text-blue-800 text-sm"> Organization Size </div>
        <div class="text-l"> {{ $employer->org_size }} </div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l my-4">
        <div class="text-blue-800 text-sm"> Address-1 </div>
        <div class="text-l"> {{ $employer->org_address1 }} </div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l my-4">
        <div class="text-blue-800 text-sm"> Address-2 </div>
        <div class="text-l"> {{ $employer->org_address2 }} </div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l my-4">
        <div class="text-blue-800 text-sm"> Address-3 </div>
        <div class="text-l"> {{ $employer->org_address3 }} </div>
    </div>

    <div class="p-4 bg-gray-100 rounded shadow-l my-4">
        <div class="text-blue-800 text-sm"> Organization Website </div>
        <div class="text-l text-blue-500" >
            <a href="{{ $employer->org_url}} "> {{ $employer->org_url }} </a>
        </div>
    </div>


</x-layout>
