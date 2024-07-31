<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Links') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('links.partials.create-link-form')
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @foreach ($links as $link)
                <div class="p-4 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 shadow sm:rounded-lg">
                    <div class="flex flex-col space-y-3">
                            <x-nav-link href="{{ 'https://'.$link->url }}">
                                <p class="text-lg ">{{ $link->text }}</p>
                            </x-nav-link>

                            <div>
                                <div class="flex items-center">
                                    <p class="">Link:</p>
                                    <p class="ml-2 text-lg">{{ $link->url }}</p>
                                </div>
                                <div class="flex items-center">
                                    <p class="">Text:</p>
                                    <p class="ml-2 text-lg">{{ $link->text }}</p>
                                </div>
                            </div>

                            <small class="text-sm ">Added at: {{ $link->created_at->format('j M Y, g:i a') }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>