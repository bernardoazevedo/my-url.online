<section>
    <header>
        <h2 class="text-lg font-medium text-zinc-900 dark:text-zinc-100">
            {{ __('Edit link') }}
        </h2>

        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400">
            {{ __("Update your link here.") }}
        </p>
    </header>

    <form method="POST" action="{{ route('links.update', $link) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div>
            <x-input-label for="url" :value="__('Link')" />
            <x-text-input id="url" name="url" type="text" class="mt-1 block w-full" :value="old('url', $link->url)" required autofocus autocomplete="url" />
            <x-input-error class="mt-2" :messages="$errors->get('url')" />
        </div>
        
        <div>
            <x-input-label for="text" :value="__('Text to be displayed')" />
            <x-text-input id="text" name="text" type="text" class="mt-1 block w-full" :value="old('text', $link->text)" required autofocus autocomplete="text" />
            <x-input-error class="mt-2" :messages="$errors->get('text')" />
        </div>

        <div class="space-x-2">
            <x-primary-button>{{ __('Update') }}</x-primary-button>
            <a href="{{ route('links.index') }}"><x-secondary-button>{{ __('Cancel') }}</x-secondary-button></a>
        </div>
    </form>
</section>
