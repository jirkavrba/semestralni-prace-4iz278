@extends("layout.app")

@section("content")
    <h1 class="title">Create a new flashcard</h1>
    <h2 class="uppercase font-bold ml-1 mt-3 text-sm tracking-wide text-gray-400">{{ $collection->title }}</h2>

    <div class="my-10 border-t"></div>

    <form action="{{ route("collections.flashcards.store", $collection) }}" method="post" class="form w-1/2">
        @csrf
        <div class="mb-5 flex flex-col">
            <label for="title">Title</label>
            <input id="title" type="text" name="title" class="input" value="{{ old("title") }}">
        </div>

        <div class="mb-5 flex flex-col">
            <label for="description">Description <span class="label__meta">(optional)</span></label>
            <textarea type="text" id="description" name="description" class="input">{{ old("description") }}</textarea>
        </div>

        <div>
            <button class="button">Create</button>
        </div>
    </form>
@endsection
