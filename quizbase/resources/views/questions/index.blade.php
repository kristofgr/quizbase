<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Questions List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                @foreach ($questions as $question)
                    <p>{{$question->id}} | {{$question->question}} ? 
                        <a href="{{ route('questions.show', ['question' => $question->id]) }}">show</a>
                        <a href="{{ route('questions.edit', ['question' => $question->id]) }}">edit</a>
                    </p>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
