<!DOCTYPE html>
<html>
<head>
    <title>Login - SHOPMART</title>
</head>
<body>

    <h1>Welcome back to SHOPMART</h1>
    <h3>Login to continue shopping</h3>

    {{-- Login form --}}
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Password</label><br>
            <input type="password" name="password" required>
            @error('password')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>

</body>
</html>
