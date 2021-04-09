@extends("layout.master")

@section("app")
    <div class="flex flex-col flex-grow justify-center items-center pb-20">
        <h1 class="text-6xl font-bold text-gray-800">Flashcards</h1>

        <div class="w-full h-0 border-b border-gray-100 mt-5 mb-10"></div>

        <a href="{{ route("login") }}" class="py-5 px-10 bg-gradient-to-br from-blue-400 to-green-500 rounded-xl shadow flex flex-row items-center
        hover:from-blue-500 hover:to-green-600 hover:shadow-xl transition">
            <em class="fas fa-key mr-5 text-3xl text-white"></em>
            <span class="text-sm font-bold text-white uppercase tracking-wide">
                Login with VŠE Azure account
            </span>
        </a>
    </div>
@endsection
