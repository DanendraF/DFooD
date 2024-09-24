<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="{{ asset('src/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('/assets/css/Logstyle.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="banner">
        <!-- Login Form -->
        <div class="login-register-container">
            <div class="form-container">
                <h2>Login</h2>

                <!-- Flash Messages -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>

                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password" required>

                    <button type="submit">Login</button>
                    <p class="register-link">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
