<div class="inline-flex w-1/3 pr-4">
    <a href="{{ route("collections.show", $collection->id) }}"
       class="my-5 pb-4 pt-8 px-10 w-full rounded-lg flex flex-col transition transform shadow-md
       translate-y-0 hover:-translate-y-3 hover:shadow-xl
        bg-gradient-to-br from-gray-100 to-gray-200 hover:from-gray-100 hover:to-gray-300">
        <h1 class="text-3xl font-bold text-gray-700">{{ $collection->title }}</h1>
        <div class="border-t border-gray-300 flex flex-row items-center pt-2 mt-5">
            <img src="https://gravatar.com/avatar/{{ md5($collection->user->email) }}.png?s=20" alt="Avatar"
                 class="rounded-full shadow mr-2">
                <p class="py-2 text-sm font-bold text-gray-600">{{ $collection->user->name }}</p>
        </div>
    </a>
</div>
