@extends('layouts.layout')
@section('title', 'Etudiant')
@section('content')

@include('layouts.nav')
<main class="etudiant-file">
    <section>
        <header>
            <h1>{{ $etudiant->nom }}</h1>
            <p>ID{{ $etudiant->id }} | Étudiant</p>
        </header>
        <div>
            <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn">Modifier</a>
            <form method="post">
                @method('delete')
                @csrf
                <button class="btn danger">Supprimer</button>
            </form>
        </div>
    </section>
    <section>
        <table>
            <tr>
                <th>Email</th>
                <td>{{ $etudiant->email }}</td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td>{{ $etudiant->phone }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ $etudiant->adresse }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ $etudiant->etudiantHasVille->ville }}</td>
            </tr>
        </table>
    </section>
</main>

@endsection