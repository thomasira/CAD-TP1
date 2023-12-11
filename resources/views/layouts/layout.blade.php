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
    <div class="cover"></div>
    @if(session('success'))
    <dialog open>
        <div>
            <p>{{ session('success') }}</p>
            <form method="dialog">
                <button class="btn exit danger">x</button>
            </form>
        </div>
    </dialog>
    @endif
    @yield('content')
</body>
</html>