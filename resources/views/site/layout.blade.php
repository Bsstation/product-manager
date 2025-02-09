@if (Auth::guest())
    <script type="text/javascript">
        window.location = "{{ route('site.login') }}";
    </script>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{'css/style.css'}}">
<body>
    <header>
        <nav>
            <div class="nav-wrapper container">
            <a href="{{ route('site.home') }}" class="brand-logo">PRODUCT MANAGER </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ route('site.movements') }}">Movimentações</a></li>
                <li><a href="{{ route('site.products') }}">Produtos</a></li>
                <li><a href="{{ route('site.companies') }}">Empresas</a></li>
                <li><a href="{{ route('site.reports') }}">Relatórios</a></li>
                <li><a href="{{ route('login.logout') }}">Logout</a></li>
            </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="{{ route('site.movements') }}">Movimentações</a></li>
            <li><a href="{{ route('site.products') }}">Produtos</a></li>
            <li><a href="{{ route('site.companies') }}">Empresas</a></li>
            <li><a href="{{ route('site.reports') }}">Relatórios</a></li>
            <li><a href="{{ route('login.logout') }}">Logout</a></li>
        </ul>
    </header>

    <main class="valign-wrapper">
        @yield('content')
    </main>

    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
            © 2025 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
</body>
</html>