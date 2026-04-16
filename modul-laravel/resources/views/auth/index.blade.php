<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NguawiStore | {{ $page }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            @if (session()->has('loginError'))
                <div class="alert alert-danger">
                    <i class="fa-solid fa-triangle-exclamation"></i> {{ session('loginError') }}
                </div>
            @endif

            <main class="form-signin">
                <div class="header">
                    <h1>Login to <b>NguawiStore</b></h1>
                    <p>Silahkan masuk ke akun Anda</p>
                </div>

                <form action="{{ route('login') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <div class="input-group">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                        </div>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" required>
                        </div>
                    </div>

                    <button class="btn-login" type="submit">
                        Login Sekarang <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    </button>
                </form>
            </main>
        </div>
    </div>
</body>

</html>
