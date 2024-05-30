<x-layout>
    <form action="{{ route('catalog.author.update', $author->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div>
            <label>First name</label>
            <input type="text" name="first_name" value="{{ $author->first_name }}">
            @error('first_name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>Second name</label>
            <input type="text" name="second_name" value="{{ $author->second_name }}">
            @error('second_name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>Third name</label>
            <input type="text" name="third_name" value="{{ $author->third_name }}">
            @error('third_name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Update!">
        </div>
    </form>
</x-layout>