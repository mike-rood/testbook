<x-layout>
    <div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label>Login:
                <input type="text" name="login">
            </label>
            <label>Password:
                <input type="password" name="password">
            </label>
            <input type="submit" value="Log In!">
        </form>
    </div>
    @if($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
</x-layout>