@extends("layout.master")

@section("app")
    <header>
        <section>
            <img src="https://www.gravatar.com/avatar/{{ md5(auth()->user()->email) }}?s=32">
            <h2>{{ auth()->user()->name }}</h2>
            <h3>{{ auth()->user()->email }}</h3>

            <a href="{{ route("logout") }}">Logout</a>
        </section>
    </header>
@endsection
