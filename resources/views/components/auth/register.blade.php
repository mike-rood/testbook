<x-layout>
    <div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label>Name:
                <input type="text" name="name">
            </label>
            <label>Login:
                <input type="text" name="login">
            </label>
            <label>Email:
                <input type="email" name="email">
            </label>
            <label>Password:
                <input type="password" name="password">
            </label>
            <label>Confirm password:
                <input type="password" name="password_confirmation">
            </label>
            <input type="submit" value="Register">
        </form>
        @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif
    </div>
</x-layout>