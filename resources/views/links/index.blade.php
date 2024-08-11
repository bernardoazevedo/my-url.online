<x-app-layout>
    <x-slot:title>
        Links
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 dark:text-zinc-200 leading-tight">
            {{ __('Links') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-zinc-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <p class="text-zinc-800 dark:text-zinc-200 inline">Link to your page: </p>
                    <x-nav-link :href="route('links.show', ['username' => Auth::user()->username])">
                        {{ route('links.show', ['username' => Auth::user()->username]) }}
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-zinc-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('links.partials.create-link-form')
                </div>
            </div>
        </div>
    </div>
    
    @if(@isset($userLinks[0]))
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
                <div class="px-4 text-zinc-800 dark:text-zinc-200 text-xl font-medium">
                    Active links
                </div>
                @foreach ($userLinks as $link)
                    <div class="p-4 bg-white dark:bg-zinc-800 text-zinc-800 dark:text-zinc-200 shadow sm:rounded-lg">
                        <div class="flex flex-col space-y-3">
                            <div class="flex flex-row justify-between">
                                <x-nav-link href="{{ 'https://'.$link->url }}" target="_blank">
                                    <p class="text-lg ">{{ $link->text }}</p>
                                </x-nav-link>
                                @if ($link->user->is(auth()->user()))
                                    <a href="{{ route('links.edit', $link) }}">
                                        <x-secondary-button>{{ __('Edit') }}</x-secondary-button>
                                    </a>
                                @endif
                            </div>

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
    @else
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
                <div class="px-4 text-zinc-800 dark:text-zinc-200 text-xl font-medium">
                    You haven't registered any links yet
                </div>
            </div>
        </div>
    @endif
</x-app-layout>