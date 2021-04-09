@extends("layout.app")

@section("content")
    <h1 class="text-5xl font-bold text-gray-800">Hello there!</h1>

    <div class="my-5 border-b"></div>

    <div>
        <h2 class="font-bold text-gray-400 uppercase tracking-wider text-sm mb-3">Quick links</h2>
        <div>
            <a href="{{ route("collections.index") }}" class="button text-xl mr-2">View all collections</a>
            <a href="{{ route("collections.create") }}" class="button text-xl">Create a new collection</a>
        </div>
    </div>

    <div class="my-5 border-b"></div>
@endsection
