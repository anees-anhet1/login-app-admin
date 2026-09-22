<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

    <h1>Create Account</h1>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="/register">

        @csrf

        <div>
            <label>Name:</label>
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
            >
        </div>

        <br>

        <div>
            <label>Email:</label>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
            >
        </div>

        <br>

        <div>
            <label>Password:</label>
            <input
                type="password"
                name="password"
                required
            >
        </div>

        <br>

        <div>
            <label>Confirm Password:</label>
            <input
                type="password"
                name="password_confirmation"
                required
            >
        </div>

        <br>

        <button type="submit">Register</button>

    </form>

    <p>
        Already have an account?
        <a href="/login">Login</a>
    </p>

</body>
</html>