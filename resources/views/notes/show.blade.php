<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


        <x-alert-success>
            {{ session('success') }}
        </x-alert-success>

            <div class="flex">
                <p class="opacity-70"><strong>Created:</strong> {{ $note->created_at->diffForHumans() }}</p>
                <p class="opacity-70 ml-8"><strong>Updated:</strong> {{ $note->updated_at->diffForHumans() }}</p>
            </div>
            <a href="{{ route('notes.edit', $note) }}" class="btn-link ml-auto">Edit Note</a>
            <form action="{{ route('notes.destroy', $note) }}" method="post">
            @method('delete')
            @csrf
            <x-primary-button type="submit" onclick="return confirm('Are you sure you want to delete this note?')">Move to Trash</x-primary-button>
            </form>
            <div class="my-6 p-6 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                <h1 class="font-bold text-xl">
                    {{ $note->title }}
                </h1>
                <p class="mt-6 whitespace-pre-wrap">{{ $note->text }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
