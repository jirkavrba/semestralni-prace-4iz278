@extends("layout.app")

@section("content")
    <h1 class="title">Hello there!</h1>

    <div class="my-5 border-b border-gray-800"></div>

    <div>
        <h2 class="font-bold text-gray-500 uppercase tracking-wider text-sm mb-3">Quick links</h2>
        <div>
            <a href="{{ route("collections.index") }}" class="button text-xl mr-2">View all collections</a>
            <a href="{{ route("collections.create") }}" class="button text-xl">Create a new collection</a>
        </div>
    </div>

    <div class="my-5 border-b border-gray-800"></div>
@endsection
