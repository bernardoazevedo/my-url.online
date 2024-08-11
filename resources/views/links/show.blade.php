<x-app-layout>
    <x-slot:title>
        {{ $username.' links' }}
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 dark:text-zinc-200 leading-tight">
            {{ $username }} links
        </h2>
    </x-slot>

    @if(@isset($userLinks[0]))
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                @foreach ($userLinks as $link)
                    <div class="p-4 bg-white dark:bg-zinc-800 text-zinc-800 dark:text-zinc-200 shadow sm:rounded-lg">
                        <div class="flex flex-col space-y-3">
                            <x-show-link href="{{ 'https://'.$link->url }}" target="_blank">
                                <p class="text-lg ">{{ $link->text }}</p>
                            </x-show-link>        
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
                <div class="px-4 text-zinc-800 dark:text-zinc-200 text-xl font-medium">
                    {{ $username }} haven't registered any links yet
                </div>
            </div>
        </div>
    @endif
</x-app-layout>