<header>
    <div class="d-flex flex-row justify-content-start">
        <div class="p-2"><a href="{{ route('catalog.index') }}">Home</a></div>    
        <div class="p-2"><a href="{{ route('about') }}">About</a></div>    
        <div class="p-2"><a href="{{ route('catalog.author.index') }}">Authors</a></div>
        <div class="p-2"><a href="{{ route('catalog.book.index') }}">Books</a></div>
        @guest()
        <div class="d-flex flex-row justify-content-end flex-grow-1">
            <div class="p-2"><a href="{{ route('register') }}">Register</a></div>
            <div class="p-2"><a href="{{ route('login') }}">Log In</a></div>
        </div>
        @endguest()
        @auth()
        <div class="d-flex flex-row justify-content-end flex-grow-1">
            <div class="p-2">Hi, {{ auth()->user()->name }}</div>
            @if(auth()->user()->role === 'admin')
            <div class="p-2"><a href="{{ route('admin.index') }}">Admin</a></div>
            @endif
            <div class="p-2">
                <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" value="Logout">
                </form>
            </div>
        </div>
        @endauth()
    </div>
</header>
