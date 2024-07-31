<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('New link') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Add your new link here.") }}
        </p>
    </header>

    <form method="POST" action="{{ route('links.store') }}" class="mt-6 space-y-6">
        @csrf
        <div>
            <x-input-label for="url" :value="__('Link')" />
            <x-text-input id="url" name="url" type="text" class="mt-1 block w-full" :value="old('url')" required autofocus autocomplete="url" />
            <x-input-error class="mt-2" :messages="$errors->get('url')" />
        </div>
        
        <div>
            <x-input-label for="text" :value="__('Text to be displayed')" />
            <x-text-input id="text" name="text" type="text" class="mt-1 block w-full" :value="old('text')" required autofocus autocomplete="text" />
            <x-input-error class="mt-2" :messages="$errors->get('text')" />
        </div>

        <x-primary-button>{{ __('Save link') }}</x-primary-button>
    </form>
</section>
