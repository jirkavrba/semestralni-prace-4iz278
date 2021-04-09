<div class="inline-block w-1/3 pr-4">
    <a href="{{ route("collections.show", $collection->id) }}"
       class="mt-5 pb-4 pt-8 px-10 w-full rounded-lg flex flex-col transition transform shadow-md translate-y-0 hover:-translate-y-2 hover:shadow-xl bg-gradient-to-br from-gray-100 to-gray-200 hover:from-gra-100 hover:to-blue-100">
        <div class="text-3xl font-bold text-gray-700 flex flex-row items-center">
            <h1>{{ $collection->title }}</h1>
        </div>
        <span class="text-sm mt-1 font-bold text-gray-400 uppercase tracking-wider">
            @if ($collection->is_public)
                <span class="fas fa-users"></span>
                <span class="ml-1">public collection</span>
            @else
                <span class="fas fa-lock"></span>
                <span class="ml-1">private collection</span>
            @endif
            </span>
        <p class="mt-2 text-gray-500 tracking-wide">
            This collection contains
            <strong class="text-gray-800">{{ $collection->flashcards->count() }}</strong>
            flashcards
        </p>
        <div class="border-t border-gray-300 flex flex-row items-center justify-between pt-2 mt-5">
            <div class="flex flex-row items-center">
                <img src="https://gravatar.com/avatar/{{ md5($collection->user->email) }}.png?s=20" alt="Avatar"
                     class="rounded-full shadow mr-2">
                <p class="py-2 text-sm font-bold text-gray-600">{{ $collection->user->name }}</p>
            </div>
            <p class="font-bold text-sm tracking-wide text-gray-400">
                {{ $collection->created_at }}
            </p>
        </div>
    </a>
</div>
