<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task Groups') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Create a new Task Group</h2>
                    <form method="POST" action="">
                        @csrf
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required/>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="flex justify-end mt-4">
                            <x-primary-button>{{ __('Create') }}</x-primary-button>
                        </div>
                    </form>
                </div>

                @foreach ($taskGroups as $taskGroup)
                    <div class="p-6 mb-2 bg-white border-b border-gray-200 mt-2">
                        <a href="{{ route('task-group.show', $taskGroup->id) }}">{{ $taskGroup->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>