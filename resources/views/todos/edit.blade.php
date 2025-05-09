<x-layout>
    <form action="{{ route('todos.update', ['todo' => $todo->id]) }}" method="POST"
        class="flex flex-col items-center mt-10">
        @csrf
        @method('PUT')
        <input type="text" name="title" id="title" placeholder="Enter TODO title"
            class="border-2 border-gray-300 rounded-md p-2" value="{{ $todo->title }}">
        <input type="text" name="description" id="description" placeholder="Enter TODO description"
            class="border-2 border-gray-300 rounded-md p-2 mt-4" value="{{ $todo->description }}">
        <div>
            <input type="checkbox" name="completed" id="completed" value="1" class="mt-4" {{ $todo->completed ? 'checked' : '' }}>
            <label for="completed" class="ml-2">Completed</label>
        </div>
        <button type="submit" class="bg-blue-500 text-white rounded-md p-2 mt-4">Update TODO</button>
    </form>
</x-layout>
