<x-layout>
    <div>
        Author Index
    </div>    
    @if(!($authors->items()))
    <p>No author has been created yet. <a href='{{ route('catalog.author.create') }}'>Create one</a></p>
    @else
    <ul>
        @foreach($authors as $author)
        <li>
            <div>
                {{ trim($author->first_name . ' ' . $author->second_name . ' ' . $author->third_name) }}
            </div>
            @auth()
            @if(auth()->user()->role === 'admin')
            <div>
                <a href='{{ route('catalog.author.edit', $author->id) }}'>Edit</a>
            </div>
            <div>
                <form action="{{ route('catalog.author.destroy', $author->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="DESTROY!">
                </form>
            </div>
            @endif
            @endauth()
        </li>
        @endforeach
    </ul>    
    @endif
</x-layout>