<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog - @yield('title')</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <a class="navbar-brand" href="{{ route('home') }}">Architecture Innovante
        </a>
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="{{ route('home') }}">Accueil</a>
            <a class="nav-item nav-link" href="{{ route('articles.list') }}">Articles</a>
            <a class="nav-item nav-link" href="{{ route('contact') }}">Contact</a>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>