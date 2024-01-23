<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class="container">

        <div class="col-lg-4 center border rounded px-3 py-5 mx-auto mt-5 bg-white">
            <h1 class="text-center mb-4">Login</h1>

            <!-- Alert login error -->
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <!-- Login form -->
            <form action="/" method="post">
                @csrf
                <!-- Email input -->
                <div class="">
                    <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" autofocus required>
                </div>
                @error('email')
                <p class="text-danger mb-3">
                    {{ $message }}
                </p>
                @enderror

                <!-- Password input -->
                <div class="mt-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>

                <div class="mt-4 d-grid">
                    <button name="submit" type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>