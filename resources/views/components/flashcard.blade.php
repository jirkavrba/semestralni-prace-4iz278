<div class="mb-5 pr-5 w-1/3">
    <a href="{{ route("collections.flashcards.show", [$collection, $flashcard]) }}"
       class="pb-4 pt-8 px-10 h-48 w-full rounded-xl flex flex-col justify-between transition transform shadow-md translate-y-0 hover:-translate-y-2 hover:shadow-xl bg-gradient-to-br from-gray-100 to-gray-200 hover:from-gra-100 hover:to-blue-100">
        <div class="text-3xl font-bold text-gray-700 flex flex-row items-center">
            <h1>{{ $flashcard->title }}</h1>
        </div>
        <div class="border-t border-gray-300 flex flex-row items-center justify-between pt-2 mt-5">
            <p class="font-bold text-sm tracking-wide text-gray-400">
                {{ $flashcard->created_at }}
            </p>
        </div>
    </a>
</div>
