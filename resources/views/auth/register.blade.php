<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | SHOPMART</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #121212;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #1e1e1e;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.7);
            text-align: center;
            width: 350px;
            animation: fadeIn 2s ease-in-out;
        }
        .container h1 {
            margin-bottom: 10px;
            font-size: 28px;
            color: #00d4ff;
        }
        .container p {
            margin-bottom: 20px;
            color: #ccc;
            animation: fadeInSub 3s ease-in-out;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background: #2c2c2c;
            color: #fff;
        }
        input[type="submit"] {
            width: 95%;
            padding: 10px;
            background: #00d4ff;
            border: none;
            border-radius: 5px;
            color: #121212;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        input[type="submit"]:hover {
            background: #00aacc;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInSub {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .footer {
            margin-top: 15px;
            font-size: 14px;
        }
        a {
            color: #00d4ff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to SHOPMART</h1>
        <p>Your one-stop online shopping destination.</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <input type="submit" value="Register">
        </form>

        <div class="footer">
            Already have an account? <a href="{{ route('login') }}">Login here</a>
        </div>
    </div>
</body>
</html>
