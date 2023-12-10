@extends('layouts.layout')
@section('title', 'Modifier')
@section('content')

@include('layouts.nav')
<main>
    <section>
        <h1>{{ $etudiant->nom }}</h1>
        <p>{{ $etudiant->phone }}</p>
        <p>{{ $etudiant->adresse }}</p>
        <p>{{ $etudiant->email }}</p>
        <p>{{ $etudiant->ville_id }}</p>
    </section>
    <div>
        <a href="{{ route('etudiant.edit', $etudiant->id) }}">Modifier</a>
        <a href="">Supprimer</a>
    </div>
</main>

@endsection