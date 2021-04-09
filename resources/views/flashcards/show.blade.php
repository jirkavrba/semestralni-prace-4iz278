@extends("layout.app")

@section("content")
    <div class="flex flex-row justify-between items-center">
        <div>
            <h1 class="title">{{ $flashcard->title }}</h1>
            <div class="flex flex-row text-sm mt-1 font-bold text-gray-400 uppercase tracking-wider items-center">
                <a href="{{ route("collections.show", $collection) }}" class="font-bold hover:text-blue-500">
                    {{ $collection->title }}
                </a>

                <span class="mx-5">
                    &mdash;
                </span>

                <div class="flex flex-row items-center">
                    <img src="https://gravatar.com/avatar/{{ md5($collection->user->email) }}.png?s=20" alt="Avatar"
                         class="rounded-full shadow mr-2">
                    <p class="py-2 text-sm font-bold text-gray-600">{{ $collection->user->name }}</p>
                </div>

                <span class="mx-5">
                    &mdash;
                </span>

                <p class="font-bold text-sm tracking-wide text-gray-400">
                    {{ $flashcard->created_at }}
                </p>
            </div>
        </div>

        @can("update", $collection)
            <div class="flex flex-row">
                <a href="{{ route("collections.flashcards.edit", [$collection, $flashcard]) }}"
                   class="button mr-2">Edit</a>
                <form action="{{ route("collections.flashcards.destroy", [$collection, $flashcard]) }}" method="post">
                    @csrf
                    @method("delete")
                    <button class="button button--danger"
                            onclick="return confirm('Are you sure? This operation will delete all questions as well.')">
                        Delete
                    </button>
                </form>
            </div>
        @endcan
    </div>

    @unless (empty($flashcard->description))
        <div class="mt-5 text-2xl text-gray-700">
            <p>{{ $flashcard->description }}</p>
        </div>
    @endif

    <div class="mt-5">
        <a href="{{ route("collections.flashcards.questions.create", [$collection, $flashcard]) }}" class="button">
            Add a new question
        </a>
    </div>

    <div class="my-5 border-t"></div>

    @foreach($flashcard->questions as $questions)
        {{ $question }}
    @endforeach
@endsection
