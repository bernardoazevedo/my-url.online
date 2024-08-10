<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-zinc-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('links.partials.update-link-form')
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-zinc-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <div>
                        <h2 class="text-lg font-medium text-zinc-900 dark:text-zinc-100">
                            {{ __('Delete link') }}
                        </h2>
                
                        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400">
                            {{ __("Click this button to DELETE your link.") }}
                        </p>
                    </div>
                    <form method="POST" action="{{ route('links.destroy', $link) }}" class="mt-6">
                        @csrf
                        @method('delete')
                        <x-danger-button>{{ __('Delete') }}</x-danger-button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>