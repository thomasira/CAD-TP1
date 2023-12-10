@extends('layouts.layout')
@section('title', 'Accueil')
@section('content')

@include('layouts.nav')
<main>
    <section>
        <h1>Les étudiants</h1>
        <table>
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Adresse</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($etudiants as $etudiant)
                <tr>
                    <th>{{ $etudiant->id }}</th>
                    <td><a href="{{ route('etudiant.show', $etudiant->id) }}">{{ $etudiant->nom }}</a></td>
                    <td>{{ $etudiant->phone }}</td>
                    <td>{{ $etudiant->adresse }}</td>
                    <td>{{ $etudiant->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $etudiants }}
    </section>
</main>

@endsection