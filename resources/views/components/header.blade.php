<header>
    <p><a href="{{ route('catalog.index') }}">Home</a></p>    
    <p><a href="{{ route('about') }}">About</a></p>    
    <p><a href="{{ route('catalog.author.index') }}">Authors</a></p>
    <p><a href="{{ route('catalog.book.index') }}">Books</a></p>
    @guest()
    <p><a href="{{ route('register') }}">Register</a></p>
    <p><a href="{{ route('login') }}">Log In</a></p>
    @endguest()
    @auth()
    <p>Hi, {{ auth()->user()->name }}</p>
    @if(auth()->user()->role === 'admin')
    <p><a href="{{ route('admin.index') }}">Admin</a></p>
    @endif
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" value="Logout">
    </form>
    @endauth()
</header>
