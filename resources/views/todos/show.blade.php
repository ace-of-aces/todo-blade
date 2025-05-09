<x-layout>
    <div>
        <h1 class="text-3xl font-bold text-center mt-10">{{ $todo->title }}</h1>
        <p class="text-lg text-center mt-4">{{ $todo->description }}</p>
        <p class="text-lg text-center mt-4">
            {{ $todo->completed ? 'Completed ✅' : 'Not Completed ❌' }}
        </p>
        <div class="flex justify-center mt-10">
            <form action="{{ route('todos.destroy', [$todo->id]) }}" method="POST" class="mr-4">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white rounded-md p-2">Delete TODO</button>
            </form>
            <a href="{{ route('todos.edit', [$todo->id]) }}" class="bg-yellow-500 text-white rounded-md p-2">Edit TODO</a>
            <a href="{{ route('todos.index') }}" class="bg-blue-500 text-white rounded-md p-2 ml-4">Back to TODOs</a>
    </div>
</x-layout>
