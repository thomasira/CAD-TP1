<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Thomas Aucoin-Lo">
    <meta name="description" content="projet scolaire de forum étudiant implémentant l'architecture laravel et la création de base de données dynamique.">
    <script src="{{ asset('assets/js/main.js') }}" type="module"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <title>Forum | @yield('title')</title>
</head>
<body>
    @if(session('success'))
    {{ session('success') }}
    <dialog>
        <button autofocus>Close</button>
        <p>This modal dialog has a groovy backdrop!</p>
    </dialog>
    @endif
    @yield('content')
</body>
</html>