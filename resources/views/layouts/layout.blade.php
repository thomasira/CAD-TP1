<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Thomas Aucoin-Lo">
    <meta name="description" content="projet scolaire de forum étudiant implémentant l'architecture laravel et la création de base de données dynamique.">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <script src="{{ asset('assets/js/main.js') }}" type="module"></script>
    <title>Forum | @yield('title')</title>
</head>
<body>
    <div>
        <div>
            <header>
                <h1>{{ config('app.name') }}</h1>
            </header>
        </div>
        @if(session('success'))
            <div class="alert" role="alert" data-js-alert>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>