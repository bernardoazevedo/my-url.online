<x-app-layout>
    <h2 class="font-semibold text-2xl text-zinc-800 dark:text-zinc-200 leading-tight mt-8 text-center">
        {{ __('Welcome to php-Links!') }}
    </h2>

    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-zinc-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="font-semibold text-xl text-zinc-800 dark:text-zinc-200">Merge your links into one page</h3>
                    <x-primary-button>{{ __('Register') }}</x-primary-button>
                    <x-secondary-button>{{ __('Login') }}</x-secondary-button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
