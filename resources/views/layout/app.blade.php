@extends("layout.master")

@section("app")
    <header class="flex justify-between py-5 px-10 items-center shadow-lg">
        <a class="text-4xl font-bold text-gray-800" href="{{ route("homepage") }}">Flashcards</a>

        <section class="flex flex-row items-center">
            <div class="flex flex-row items-center mr-10">
                <img src="https://www.gravatar.com/avatar/{{ md5(auth()->user()->email) }}?s=64" alt="Gravatar"
                     class="w-10 h-10 rounded-full shadow">

                <div class="flex flex-col ml-5">
                    <h2 class="text-lg font-bold">{{ auth()->user()->name }}</h2>
                    <h3 class="text-gray-400 uppercase text-xs tracking-wider font-bold">{{ auth()->user()->email }}</h3>
                </div>
            </div>

            <a href="{{ route("logout") }}" class="button">Logout</a>
        </section>
    </header>

    <main class="flex flex-col container mx-auto mt-10 p-5">
        @yield("content")
    </main>
@endsection
