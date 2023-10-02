<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/pages/auth.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>

<body>
    <div id="auth">
        <div class="auth-container">
            <div class="auth-logo">
                <img src="/images/logo/aisin-logo.png" alt="" width="125px">
            </div>

            @error('email')
                <small>{{ $message }}</small>
            @enderror

            <form method="post" action="{{ route('login-proses') }}" class="auth-form">
                @csrf
                <div class="form-group">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
