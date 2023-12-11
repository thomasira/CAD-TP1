@extends('layouts.layout')
@section('title', 'Etudiant')
@section('content')

@include('layouts.nav')
<main>
    <section>
        <h1>{{ $etudiant->nom }}</h1>
        <p>{{ $etudiant->phone }}</p>
        <p>{{ $etudiant->adresse }}</p>
        <p>{{ $etudiant->email }}</p>
        <p>{{ $etudiant->etudiantHasVille->ville }}</p>
    </section>
    <div>
        <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn">Modifier</a>
        <form method="post">
            @method('delete')
            @csrf
            <button class="btn danger">Supprimer</button>
        </form>
    </div>
</main>

@endsection