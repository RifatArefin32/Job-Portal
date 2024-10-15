<x-layout>
    <x-slot:title> Home | Job Portal </x-slot:title>
    <x-header></x-header>
    {{-- <x-page-name>Home Page</x-page-name> --}}
    <x-page-content>
        <div class="bg-white min-h-900">
            <div class="relative isolate px-6 pt-14 lg:px-8">
                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-20">
                    <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                        <div class="relative shadow rounded-full px-5 py-1 text-sm leading-6 
                        text-gray-900 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                            Are you an <strong>employer</strong> ? 
                            <a href="#" class="font-semibold text-blue-900">
                                <span class="absolute inset-0" aria-hidden="true"></span> 
                                <strong>post a job</strong> 
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <h1 class="py-4 text-balance text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                            Seeking for a job?
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            Discover Your Dream Job from Leading Employers.
                            Connect with Top Companies and Take the Next Step in Your Career!
                        </p>
                        <div class="my-10 flex items-center justify-center gap-x-6">
                            <a href="#"
                                class="rounded-md bg-gray-900 px-3.5 py-2.5 text-sm font-semibold 
                                text-white shadow-sm hover:bg-blue-900 focus-visible:outline focus-visible:outline-2 
                                focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Get started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-page-content>
    <x-footer></x-footer>
</x-layout>
