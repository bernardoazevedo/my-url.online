<x-app-layout>
    <h2 class="font-semibold text-2xl text-zinc-800 dark:text-zinc-200 leading-tight mt-16 text-center">
        {{ __('Welcome to php-Links!') }}
    </h2>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-zinc-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="font-semibold text-xl text-zinc-800 dark:text-zinc-200">
                        Menage your links in one page
                    </h3>
                    @auth
                        <div class="mt-4">
                            <a href="{{ route('links.index') }}">
                                <x-primary-button>{{ __('My links') }}</x-primary-button>
                            </a>
                            <a href="{{ route('links.show', ['username' => Auth::user()->username]) }}">
                                <x-secondary-button>{{ __('My page') }}</x-secondary-button>
                            </a>
                        </div>
                    @else
                        <div class="mt-4">
                            <a href="{{ route('register') }}">
                                <x-primary-button>{{ __('Register') }}</x-primary-button>
                            </a>
                            <a href="{{ route('login') }}">
                                <x-secondary-button>{{ __('Login') }}</x-secondary-button>
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
