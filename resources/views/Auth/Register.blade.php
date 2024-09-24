<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="{{ asset('src/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('/assets/css/Regstyle.css') }}">
</head>
<body>
    <div class="banner">
        <div class="login-register-container">
            <div class="form-container">
                <h2>Register</h2>

                <!-- Flash Messages -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('registerUser') }}" method="POST">
                    @csrf
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Username" required pattern="[a-zA-Z0-9]+">
                    @error('username')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Active email" required>
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password must be at least 8 characters" required>
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                    @error('password_confirmation')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <button type="submit">Register</button>
                </form>
                <div class="register-link">
                    <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
