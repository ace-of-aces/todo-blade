<x-layout>
    <ul class="list-disc list-inside mt-10 max-w-sm mx-auto">
        @foreach ($todos as $todo)
            <li class="text-xl font-semibold">
                <a href="{{ route('todos.show', [$todo->id]) }}" class="{{ $todo->completed ? 'line-through' : '' }}">
                    {{ $todo->title }}
                </a>
                <form action="{{ route('todos.update', $todo->id) }}" method="POST" class="inline">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="title" value="{{ $todo->title }}">
                    <input type="hidden" name="description" value="{{ $todo->description }}">
                    <input type="hidden" name="completed" value="0">
                    <input type="checkbox" name="completed" value="1" class="ml-2" id="completed"
                        {{ $todo->completed ? 'checked' : '' }} onchange="this.form.submit()">
                </form>
            </li>
        @endforeach
    </ul>
    <div class="w-full flex justify-center mt-10">
        <a href="{{ route('todos.create') }}">
            ⊕ Create New TODO
        </a>
    </div>
</x-layout>
