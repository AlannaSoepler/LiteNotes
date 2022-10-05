<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('notes.store') }}" method="POST">
                    @csrf
                    <x-text-input
                    type="text" 
                    name="title" 
                    feild="title" 
                    placeholder="Title" 
                    class="w-full" 
                    autocomplete="off"
                    :value="@old('title')"
                    ></x-text-input>
                    <x-textarea 
                    name="text" 
                    rows="10" 
                    feild="text" 
                    placeholder="Start typing here..." 
                    class="w-full mt-6"
                    :value="@old('text')"
                    ></x-textarea>
                    <x-primary-button class="mt-6">Save Note</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>