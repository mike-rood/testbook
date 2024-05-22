<header>
    <p><a href="{{ route('catalog.index') }}">Main Page</a></p>
    @guest()
    <p><a href="{{ route('register') }}">Register</a></p>
    <p><a href="{{ route('login') }}">Log In</a></p>
    @endguest()
    @auth()
    <p>Hi, {{ auth()->user()->name }}</p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" value="Logout">
    </form>
    @endauth()
</header>
