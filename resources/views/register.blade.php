<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(240, 238, 230);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .register-container {
            background: #af9c5e;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            width: 520px;
        }

        h2 {
            text-align: center;
            color: #352b06;
            margin-bottom: 25px;
        }

        label {
            color: #352b06;
            font-weight: bold;
        }

        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }

        .form-row .form-group {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            border: 1px solid #352b06;
            border-radius: 6px;
        }

        .show-password {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #352b06;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #352b06;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 5px;
        }

        button:hover {
            background: #2a2205;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
            color: #352b06;
            font-weight: bold;
        }

        .login-link a {
            color: #352b06;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            color: #ffffff;
        }

        .error {
            background-color: #ffcccc;
            color: #352b06;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        @media (max-width: 520px) {
            .register-container {
                width: 90%;
            }
            .form-row {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <form action="{{ route('register.process') }}" method="POST">
        @csrf
        <div class="register-container">
            <h2>Register Pelanggan</h2>

            @if ($errors->any())
                <div class="error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-row">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input type="text" name="no_hp" placeholder="No HP" required>
                </div>
            </div>

            <!-- Show password -->
            <div class="show-password">
                <input type="checkbox" id="togglePassword" onclick="togglePasswordVisibility()" />
                <label for="togglePassword">Show Password</label>
            </div>

            <button type="submit">Register</button>

            <div class="login-link">
                Sudah punya akun? <a href="{{ url('/login') }}">Login</a>
            </div>
        </div>
    </form>

    <script>
        function togglePasswordVisibility() {
            const pass = document.querySelectorAll('input[type="password"]');
            pass.forEach(p => p.type = p.type === 'password' ? 'text' : 'password');
        }
    </script>
</body>
</html>
