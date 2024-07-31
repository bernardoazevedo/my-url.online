<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('New link') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Add your new link here.") }}
        </p>
    </header>

    {{-- <form method="post" action="{{ route('link.update') }}" class="mt-6 space-y-6"> --}}
    <form method="post" action=" " class="mt-6 space-y-6">
        <div>
            <x-input-label for="link" :value="__('Link')" />
            <x-text-input id="link" name="link" type="text" class="mt-1 block w-full" required autofocus autocomplete="link" />
            <x-input-error class="mt-2" :messages="$errors->get('link')" />
        </div>
        
        <div>
            <x-input-label for="text" :value="__('Text to be displayed')" />
            <x-text-input id="text" name="text" type="text" class="mt-1 block w-full" required autofocus autocomplete="text" />
            <x-input-error class="mt-2" :messages="$errors->get('link')" />
        </div>

        <x-primary-button>{{ __('Save link') }}</x-primary-button>
    </form>

</section>
