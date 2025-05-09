<x-layout>
    <form action="{{ route('todos.store') }}" method="POST" class="flex flex-col items-center mt-10">
        @csrf
        <input type="text" name="title" id="title" placeholder="Enter TODO title" class="border-2 border-gray-300 rounded-md p-2">
        <input type="text" name="description" id="description" placeholder="Enter TODO description" class="border-2 border-gray-300 rounded-md p-2 mt-4">
        <button type="submit" class="bg-blue-500 text-white rounded-md p-2 mt-4">Create TODO</button>
    </form>
</x-layout>
