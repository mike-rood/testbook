<x-layout>
    <div>
        <p>Create new author</p>
        <form action="{{ route('catalog.author.store') }}" method="POST">
            @csrf
            <div>
                <label>First name</label>
                <input type="text" name="first_name" value="{{ old('first_name') }}">
                @error('first_name')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>Second name</label>
                <input type="text" name="second_name" value="{{ old('second_name') }}">
                @error('second_name')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>Third name</label>
                <input type="text" name="third_name" value="{{ old('third_name') }}">
                @error('third_name')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="submit" value="Create!">
            </div>
        </form>
    </div>
</x-layout>