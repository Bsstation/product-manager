<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body {
            background-color: #188577;
        }
    </style>
<body>
    @if($mensagem = Session::get('error'))
        {{ $mensagem }}
    @endif

    <div class="container">
        <div class="row valign-wrapper" style="height: 100vh;">
            <div class="col s12 m6 l4 offset-m3 offset-l4 black">
                <form action="{{ route('login.auth') }}" method="post">
                    @csrf
                    <h1 class="h3 mb-3 font-weight-normal white-text">Login</h1>
                    <label for="inputEmail" class="sr-only">Email</label>
                    <input type="email" class="form-control mb-3 white-text" name="email" placeholder="email@email.com" required autofocus>
                    <label for="inputPassword" class="sr-only">Senha</label>
                    <input type="password" name="password" class="form-control white-text" placeholder="****" required>

                    <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
                    <div class="center-align mt-3">© 2014 Copyright Text</div>
                </form>
            </div>
        </div>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
</body>
</html>