<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('notes.create') }} " class="btn-link btn-lg mb-2">+ New Note</a>

            @forelse ($notes as $note)

                <a href="{{ route('notes.show', $note->id) }}">
                    <div class="my-6 p-6 bg-white hover:bg-slate-300 duration-500 ease-in-out border-b border-gray-200 shadow-sm sm:rounded-lg">
                        <h2 class="font-bold text-2xl">

                            {{ $note->title }}
                        </h2>
                        <p class="mt-2">

                            {{ Str::limit($note->text, 200) }}
                        </p>
                        <span class="block mt-4 text-sm opacity-70">

                            {{ $note->updated_at->diffForHumans() }}
                        </span>
                    </div>
                </a>

            @empty
            <p>You have no notes yet.</p>

            @endforelse

            {{ $notes->links() }}
        </div>
    </div>
</x-app-layout>