@extends("layout.app")

@section("content")
    <h1 class="text-4xl font-bold">Create a new collection</h1>

    <div class="mt-5 mb-10 border-b"></div>

    <div>
        <div class="flex justify-between items-center">
            <h2 class="text-3xl font-bold text-gray-700">Your collections</h2>
            <a href="{{ route("collections.create") }}" class="button">Create a new collection</a>
        </div>
    </div>
@endsection
