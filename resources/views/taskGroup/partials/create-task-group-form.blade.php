<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Create a new Task Group</h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Here you can separate tasks for each task group.</p>
    </header>

    <form method="POST" action="{{ route('task-group.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            {{-- @if (session('status') === 'task-group-created')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >Saved.</p>
            @endif --}}
        </div>
    </form>
</section>
