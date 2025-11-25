<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background-color: rgb(240, 238, 230);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .login-container {
            background: #af9c5e;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 320px;
        }

        h2 {
            text-align: center;
            color: #352b06;
            margin-bottom: 20px;
            font-weight: bold;
        }

        label {
            color: #352b06;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px 0;
            border: 1px solid #352b06;
            border-radius: 6px;
        }

        .show-password {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #352b06;
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #352b06;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #2a2205;
        }

        .register-link {
            text-align: center;
            margin-top: 15px;
            color: #352b06;
            font-weight: bold;
        }

        .register-link a {
            color: #352b06;
            text-decoration: none;
            font-weight: bold;
        }

        .register-link a:hover {
            color: white;
        }
    </style>
</head>

<body>
    <form action="{{ route('login.process') }}" method="POST">
        @csrf

        <div class="login-container">

            <h2>Login</h2>
            @if ($errors->any())
                <div class="alert alert-danger p-2">
                    {{ $errors->first() }}
                </div>
            @endif

            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter username" required />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required />

            <div class="show-password">
                <input type="checkbox" id="togglePassword" onclick="togglePasswordVisibility()" />
                <label for="togglePassword">Show Password</label>
            </div>

            <button type="submit">Log In</button>

            <div class="register-link">
                Belum punya akun?
                <a href="{{ route('register') }}">Register</a>
            </div>

        </div>
    </form>

    <script>
        function togglePasswordVisibility() {
            const pass = document.getElementById("password");
            pass.type = pass.type === "password" ? "text" : "password";
        }
    </script>

</body>
</html>
