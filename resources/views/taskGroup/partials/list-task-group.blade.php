<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">All Task Groups</h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">See all task groups that you created.</p>
    </header>

    <div class="mt-6 space-y-6">
        @foreach ($taskGroups as $taskGroup)
            <div class="flex justify-between p-4 border border-gray-200 dark:border-gray-700 rounded">
                {{ $taskGroup->name }}

                @if ($taskGroup->isCompleted())
                    <span class="text-green-600 dark:text-green-400">Completed</span>
                    @else
                    <span class="text-red-600 dark:text-red-400">Not Completed</span>
                @endif
                
                <a href="{{route('task-group.show', $taskGroup->id)}}">more</a>
            </div>
        @endforeach
    </div>
</section>
