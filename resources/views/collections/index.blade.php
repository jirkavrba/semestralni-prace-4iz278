@extends("layout.app")

@section("content")
    <h1 class="text-4xl font-bold">Flashcard collections</h1>

    <div class="mt-5 mb-10 border-b"></div>

    <div>
        <div class="flex justify-between items-center">
            <h2 class="text-3xl font-bold text-gray-700">Your collections</h2>
            <a href="{{ route("collections.create") }}" class="button">Create a new collection</a>
        </div>
        @forelse($owned as $collection)
            <x-flashcard-collection :collection="$collection"/>
        @empty
            <div class="flex flex-col items-center px-10 py-20 my-5 bg-gray-50 rounded-xl">
                <div class="flex items-center justify-center bg-gray-200 w-32 h-32 rounded-full mb-10">
                    <em class="fas fa-inbox text-6xl text-gray-50"></em>
                </div>
                <p class="font-bold uppercase tracking-widest text-gray-300">There are no collections yet</p>
            </div>
        @endforelse
    </div>

    <div class="mt-5 mb-10 border-b"></div>

    <div>
        <h2 class="text-3xl font-bold text-gray-700">Public collections of other users</h2>
        @forelse($public as $collection)
        @empty
            <div class="flex flex-col items-center px-10 py-20 my-5 bg-gray-50 rounded-xl">
                <div class="flex items-center justify-center bg-gray-200 w-32 h-32 rounded-full mb-10">
                    <em class="fas fa-inbox text-6xl text-gray-50"></em>
                </div>
                <p class="font-bold uppercase tracking-widest text-gray-300">There are no collections yet</p>
            </div>
        @endforelse
    </div>
@endsection
